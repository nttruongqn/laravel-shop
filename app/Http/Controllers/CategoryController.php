<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getListProduct(Request $request) {
       $url = $request->segment(2);
       $url = preg_split('/(-)/', $url);
       if($id = array_pop($url)){
        $products = Product::where([
            'pro_category_id' => $id,
            'pro_active' => Product::STATIC_PUBLIC
        ])->orderBy('id', 'DESC')->paginate(10);
       }
       $viewData = [
        'products' => $products
       ];
       return view('product.index', $viewData);
    }


}