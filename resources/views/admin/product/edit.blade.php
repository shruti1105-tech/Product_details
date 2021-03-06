@extends('admin/layouts/app')
@section('headSection')
    <link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">

    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
@endsection

@section('main-content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1 style="font-size: 24px">
                Create Product
            </h1>

        </section>

        <section class="content">
            <div class="row">
                <div class="col-md-12" style="font-size: 15px">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title" style="font-size: 18px;padding: 5px">Product</h3>
                        </div>

                        @if(count($errors) >0)
                            @foreach($errors->all() as $error)
                                <p class="alert alert-danger">{{$error}}</p>
                            @endforeach
                        @endif
                        @if (session()->has('message'))
                            <p class="alert-default-success">{{session('message')}}</p>
                        @endif

                        <form role="form" action="{{route('product.update', $product->id)}}" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="product_name">Product Name</label>
                                    <input type="text" class="form-control" style="font-size: 15px;height: 35px"
                                           id="product_name" name="product_name" placeholder="Product Name" value="{{ $product->product_name }}">
                                </div>
                                <div class="form-group">
                                    <label for="product_price">Product Price</label>
                                    <input type="text" class="form-control" style="font-size: 15px;height: 35px"
                                           id="product_price" name="product_price" placeholder="Product Price" value="{{ $product->product_price }}">
                                </div>
                                <div class="form-group">
                                    <label for="product_size">Product Size</label>
                                    <input type="text" class="form-control" style="font-size: 15px;height: 35px"
                                           id="product_size" name="product_size" placeholder="Product Size" value="{{ $product->product_size }}">
                                </div>
                                <div class="form-group">
                                    <label for="product_details">Product Details</label>
                                    <input type="text" class="form-control" style="font-size: 15px;height: 35px"
                                           id="product_details" name="product_details" placeholder="Product Details" value="{{ $product->product_details }}">
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary" style="font-size: 18px">Submit
                                    </button>
                                    <a type="button" href="{{ route('product.show') }}" class="btn btn-warning"
                                       style="font-size: 18px">Back</a>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('footerSection')
    <script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $(".select2").select2();
        });

    </script>
@endsection

