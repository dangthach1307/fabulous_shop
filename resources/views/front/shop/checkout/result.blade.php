@extends('front.layout.master')

@section('title', 'Checkout Result')

@section('css')
    <link rel="stylesheet" href="{{ asset('front/css/payment_type.css') }}">
@endsection
@section('body_class', '')
@section('body')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul>
                        <li class="home"> <a href="{{ route('home') }}" title="Go to Home Page">Home</a> <span>/</span> </li>
                        <li> <strong>Checkout</strong> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- main-container -->
    <div class="main-container col1-layout">
        <div class="main container">
            <div class="row">
                <section class="col-sm-12 col-xs-12">
                    <div class="col-main">
                        <div class="page-title">
                            <h1>Checkout</h1>
                        </div>
                        <div class="page-content checkout-page">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="checkout-sep">
                                        {{$notification}}
                                    </h3>
                                    <a href="{{ route('home') }}" class="btn btn-default">Continue shopping</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!--End main-container -->
@endsection
