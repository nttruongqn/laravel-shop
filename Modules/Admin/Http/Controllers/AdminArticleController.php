<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminArticleController extends Controller
{
   public function index()
   {
   return view('admin::article.index');
   }

   public function create()
   {
   # code...
   }

   public function store(Request $request)
   {
   return $request->all();
   }

   public function action(Request $request){

   }
}
