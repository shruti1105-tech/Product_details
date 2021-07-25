<?php


namespace App\Repository;

use App\Models\Product;

class ProductRepository implements IProductRepository
{

    public function getAllProduct()
    {
        return Product::all();
    }

    public function getProductById($id)
    {
        return Product::find($id);
    }

    public function createOrUpdate($id = null, $collection = [])
    {
        if (is_null($id)) {
            $product = new Product();
            $product->product_name = $collection['product_name'];
            $product->product_price = $collection['product_price'];
            $product->product_size=$collection['product_size'];
            $product->product_details=$collection['product_details'];
            return $product->save();
        }
        $product = Product::find($id);
        $product->product_name = $collection['product_name'];
        $product->product_price = $collection['product_price'];
        $product->product_size=$collection['product_size'];
        $product->product_details=$collection['product_details'];
        return $product->save();
    }

    public function deleteProduct($id)
    {
        return Product::find($id)->delete();
    }
}
