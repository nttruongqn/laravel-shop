<?php
namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductDetailController extends FrontendController
{
    public function productDetail(Request $request){
     $url = $request->segment(2);
     $url = preg_split('/(-)/i', $url);
     if($id = array_pop($url)){
        $productDetail = DB::table('products')->join('categories', 'products.pro_category_id', '=', 'categories.id')->select('products.*', 'categories.id', 'categories.c_slug', 'categories.c_name')->where('products.id',$id)->get();
        $viewData = [
            'productDetail' => $productDetail
        ];
      return view('product.detail', $viewData);
     };
    }
}
