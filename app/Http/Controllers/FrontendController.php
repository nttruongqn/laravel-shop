<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function __construct()
    {
        $categories = Category::all();
        view()->share('categories', $categories);
    }


}
