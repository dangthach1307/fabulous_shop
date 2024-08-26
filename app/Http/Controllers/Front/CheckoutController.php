<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\Order\OrderServiceInterface;
use App\Services\Orderdetail\OrderdetailServiceInterface;
use App\Utilities\Constant;
use App\Utilities\vnpay;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    //
    private $orderService;
    private $orderdetailService;
    public function __construct(OrderServiceInterface $orderService, OrderdetailServiceInterface $orderdetailService)
    {
        $this->orderService = $orderService;
        $this->orderdetailService = $orderdetailService;
    }
    public function index()
    {
        $carts = Cart::content();
        $total = Cart::total();
        $subtotal = Cart::subTotal();
        return view("front.shop.checkout.index", compact("carts", "total", "subtotal"));
    }

    public function addOrder(Request $request)
    {
        //adding order
        $data= $request->all();
        $data['status']=Constant::order_status_ReceivieOrder;
        $order = $this->orderService->create($data);

        //adding order detail
        $carts = Cart::content();
        foreach ($carts as $cart) {
            $data = [
                'order_id' => $order->id,
                'product_id' => $cart->id,
                'qty' => $cart->qty,
                'amount' => $cart->price,
                'total' => $cart->qty * $cart->price,

            ];
            $this->orderdetailService->create($data);
        }

        if ($request->payment_type == "direct") {
            //send email:
            $total = Cart::total();
            $subtotal = Cart::subTotal();
            $this->sendEmail($order, $total, $subtotal);

            //Clear shopping cart
            Cart::destroy();

            //return message
            return redirect('checkout/result')->with("notification", "Success! you will pay on delivery. Please check your email!");
        }

        if ($request->payment_type == "paypal") {
            // get url checkout
            $data_url = vnpay::vnpay_create_payment([
                'vnp_TxnRef' => $order->id, //order id
                'vnp_OrderInfo' => 'Thanh toan don hang ' . $order->id,
                'vnp_Amount' => Cart::total(0, '', '') * 23000, //total price usd to vnd
            ]);
            // redirect to url
            return redirect()->to($data_url);
        }
    }
    public function vnPayCheck(Request $request)
    {
        //get data from URL (through VNPay -> $vnp_ReturnUrl);
        $vnp_ResponseCode = $request->get('vnp_ResponseCode'); //response code
        $vnp_TnRef = $request->get('vnp_TxnRef'); //order id
        $vnp_Amount = $request->get('vnp_Amount'); //total pay price
        //Check data, if payment success or not
        if ($vnp_ResponseCode != null) {
            //Payment success
            if ($vnp_ResponseCode == '00') {
                $this->orderService->update([
                    'status' => Constant::order_status_Paid,
                ], $vnp_TnRef);
                //send email
                $order = $this->orderService->find($vnp_TnRef);
                $total = Cart::total();
                $subtotal = Cart::subTotal();
                $this->sendEmail($order, $total, $subtotal);

                //clear shopping cart
                Cart::destroy();
                //return message
                return redirect('checkout/result')->with("notification", "Success! Has paid online. Please check your email!");
            } else { //Payment fail
                //Clear order in database
                $this->orderService->delete($vnp_TnRef);
                //return message
                return redirect('checkout/result')->with("notification", "Error! Payment fail or canceled!");
            }
        }
    }
    public function result()
    {
        $notification = session("notification");
        return view("front.shop.checkout.result", compact("notification"));
    }
    public function sendEmail($order, $total, $subtotal)
    {
        $email_to = $order->email;

        Mail::send(
            'front.shop.checkout.email',
            compact("order", "total", "subtotal"),
            function ($message) use ($email_to) {
                $message->from('dangthach1307@gmail.com', 'Fabulous Shop');
                $message->to($email_to, $email_to);
                $message->subject('Order Notification');
            }
        );
    }
}
