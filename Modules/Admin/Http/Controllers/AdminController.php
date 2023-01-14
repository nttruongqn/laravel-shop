<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Article;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Rating;
use App\Models\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
            $ratings = Rating::with('user:id,name', 'product:id,pro_name')->limit(10)->get();
            $contacts = Contact::limit(10)->get();
            $productCount = Product::count();
            $userCount = User::count();
            $articleCount = Article::count();
            $ratingCount = Rating::count();


            $viewData = [
                "ratings" => $ratings,
                "contacts" => $contacts,
                "productCount" => $productCount,
                "userCount" => $userCount,
                "articleCount" => $articleCount,
                "ratingCount" => $ratingCount
            ];
            return view('admin::index', $viewData);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('admin::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('admin::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('admin::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
