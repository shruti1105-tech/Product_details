@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="/home" class="btn btn-primary" style="float: left;margin-right: 100px;border-radius: 5px;padding: 15px">Back</a>
        <div class="row">
                <div class="col-4">
                    <div class="card" style="padding: 10px">
                        <h4 class="card-title" style="text-align: center;font-family: 'Times New Roman';padding-top: 10px">{{$product->product_name}}</h4>
                        <p>Product Price:- {{ $product->product_price }}</p>
                        <p>Product Size:- {{ $product->product_size }}</p>
                        <p>Product Details:- {{ $product->product_details }}</p>
                    </div>
                </div>
            <br>
        </div>
    </div>
@endsection
