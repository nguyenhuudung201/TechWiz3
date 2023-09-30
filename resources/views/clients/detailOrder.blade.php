@extends('clients.layouts.app')
@section('content')
<div class="ltn__breadcrumb-area ltn__breadcrumb-area-4 ltn__breadcrumb-color-white---">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner text-center">
                    <h1 class="ltn__page-title">Order</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="{{URL::to('account')}}">Account</a></li>
                            <li>Order</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="liton__shoping-cart-area mb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping-cart-inner">
                    <div class="shoping-cart-table table-responsive">
                        <table class="table"  >
                            @foreach ($orderdetail as $item)
                            <tr>
                                <td class="cart-product-image"><a href="{{URL::to('single/accessory/'.$item->accessory_id)}}"><img src="{{ asset('images/product/' .  $item->image) }} " ></a></td>
                                <td class="cart-product-info"><a href="{{URL::to('single/accessory/'.$item->accessory_id)}}">{{$item->name}}</a></td>
                                <td class="cart-product-quantity">{{$item->quantity}}</td>
                                <td class="cart-product-price">${{$item->price}}</td>
                            </tr>
                            @endforeach
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection