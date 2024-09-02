<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Brand\BrandServiceInterface;
use App\Utilities\Common;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    private $brandService;
    public function __construct(BrandServiceInterface $brandService)
    {
        $this->brandService = $brandService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $brands = $this->brandService->searchAndPaginate("name", $request->get('search'));
        return view("admin.brand.index", compact("brands"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("admin.brand.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();
        $data['slug'] = Str::slug($data['name'], '-');
        //Image:
        if ($request->hasFile('image')) {
            $data['image'] = Common::uploadFile($request->file('image'), 'front/images/brands/');
        }
        $this->brandService->create($data);
        return redirect()->route("brand.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $brand = $this->brandService->find($id);
        return view("admin.brand.edit", compact("brand"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = $request->all();
        $data['slug'] = Str::slug($data['name'], '-');
        //Image:
        if ($request->hasFile('image')) {
            //add new
            $data['image'] = Common::uploadFile($request->file('image'), 'front/images/brands/');

            //remove old
            $file_name_old =  $request->get('old_image');
            if ($file_name_old != '') {
                unlink('front/images/brands/' . $file_name_old);
            }
        }
        $this->brandService->update($data, $id);
        return redirect()->route("brand.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $brand = $this->brandService->find($id);

        if($brand)
        {
            $this->brandService->delete($id);
            $file_name = $brand->image;
            if ($file_name != '') {
                unlink('front/images/brands/' . $file_name);
            }
        }
        return redirect()->route('brand.index');
    }
}
