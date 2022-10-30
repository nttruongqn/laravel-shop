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
        $viewData = [
            'hotProducts' => $hotProducts
        ];

        return view('home.index', $viewData);
    }
}
