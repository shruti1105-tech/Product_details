<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\IProductRepository;
use App\Models\Product;
use Illuminate\Support\Facades\View;

class ProductController extends Controller
{
    public $product;

    public function __construct(IProductRepository $product)
    {
        $this->product = $product;
    }
    public function showProduct()
    {
        $products = $this->product->getAllProduct();
        return View::make('admin.product.index', compact('products'));
    }
    public function createProduct()
    {
        return View::make('admin.product.create');
    }
    public function getProduct($id)
    {
        $product = $this->product->getProductById($id);

        return View::make('admin.product.edit', compact('product'));
    }
    public function saveProduct(Request $request, $id = null)
    {
        $collection = $request->except(['_token', '_method']);

        if (!is_null($id)) {
            $this->product->createOrUpdate($id, $collection);
        } else {
            $this->product->createOrUpdate($id = null, $collection);
        }

        return redirect()->route('product.show');
    }
    public function deleteProduct($id)
    {
        $this->product->deleteProduct($id);
        return redirect()->route('product.show');
    }
}
