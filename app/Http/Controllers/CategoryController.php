<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends FrontendController
{
    public function getListProduct(Request $request) {
       $url = $request->segment(2);
       $url = preg_split('/(-)/', $url);
       if($id = array_pop($url)){
        $category = Category::find($id);
        $products = Product::where([
            'pro_category_id' => $id,
            'pro_active' => Product::STATIC_PUBLIC
        ])->orderBy('id', 'DESC')->paginate(10);
       }
       $viewData = [
        'products' => $products,
        'category' => $category
       ];
       return view('product.index', $viewData);
    }


}
