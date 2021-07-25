<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductDetailsController extends Controller
{
    public function show($id)
    {
        $product=Product::find($id);
        return view('user/productDetails',compact('product'));
    }
}
