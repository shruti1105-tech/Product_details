@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form method="GET" action="{{ route('product.search') }}">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="search" class="form-control" placeholder="Search">
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-primary">Search</button>
                        </div>
                    </div>
                </form>
                <br><br>
                <div class="card">
                    <div class="card-header">Post List</div>
                    <div class="card-body">
                        <table class="table table-striped table-inverse">
                            <thead class="thead-inverse">
                            <tr>
                                <th>No</th>
                                <th>Product Name</th>
                                <th>Product Price</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($product as $products)
                                <tr>
                                    <td>{{$loop->index +1}}</td>
                                    <td>{{ $products->product_name }}</td>
                                    <td>{{ $products->product_price }}</td>
                                    <td><a href="{{ route('product.details',$products->id) }}">More</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
