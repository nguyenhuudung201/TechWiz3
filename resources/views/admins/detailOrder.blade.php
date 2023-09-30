@extends('admins.layouts.app')
@section('content')
<div class="container-xl px-4 mt-n10">
    <div class="row">
        <div class="col-xl-12">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Detail Order</div>
                <div class="card-body">
                    <h2 class="mb-4">Item</h2>
                  
                    <table class="table">
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                        </tr>
                        @foreach ($orderdetail as $item)
                        <tr>
                            <td><img src="{{ asset('images/product/' .  $item->image) }} " style="max-width: 40px ; height: 40px" alt=""></td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->quantity}}</td>
                            <td>${{$item->price}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection