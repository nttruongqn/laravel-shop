<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends FrontendController
{

    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        $hotProducts = Product::where(['pro_hot' => 1, 'pro_active' => 1])->get();
        $phoneProducts = Product::where(['pro_hot' => 1, 'pro_category_id'=>'1'])->get();
        $laptopProducts = Product::where(['pro_hot' => 1, 'pro_category_id'=>'2'])->get();
        $viewData = [
            'hotProducts' => $hotProducts,
            'phoneProducts' => $phoneProducts,
            'laptopProducts' => $laptopProducts
        ];

        return view('home.index', $viewData);
    }
}
