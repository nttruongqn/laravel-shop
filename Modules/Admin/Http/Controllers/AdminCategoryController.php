<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Requests\RequestCategory;
use App\Models\Category;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;


class AdminCategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $viewData = ['categories' => $categories];
        return view('admin::category.index', $viewData);
    }

    public function create()
    {
        return view('admin::category.create');
    }

    public function store(RequestCategory $requestCategory)
    {
        $this->insertOrUpdate($requestCategory);
        return redirect()->route('admin.get.list.category');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin::category.edit', compact('category'));
    }

    public function update(RequestCategory $requestCategory, $id)
    {
        $this->insertOrUpdate($requestCategory, $id);
        return redirect()->route('admin.get.list.category');
    }

    public function insertOrUpdate($requestCategory, $id = '')
    {
        $category = new Category();
        if ($id) $category = Category::find($id);

        $category->c_name = $requestCategory->c_name;
        $category->c_slug = str_slug($requestCategory->c_name);
        $category->c_icon = str_slug($requestCategory->c_icon);
        $category->c_title_seo = $requestCategory->c_title_seo ? $requestCategory->c_title_seo : $requestCategory->c_name;
        $category->c_description_seo = $requestCategory->c_description_seo;
        if ($requestCategory->hasFile('c_avatar')) {
            $file = upload_image('c_avatar');
            if (isset($file['name'])) {
                $category->c_avatar = $file['name'];
            }
        }
        if ($requestCategory->hasFile('c_avatar_header')) {
            $file = upload_image('c_avatar_header');
            if (isset($file['name'])) {
                $category->c_avatar_header = $file['name'];
            }
        }
        $category->save();
        return redirect()->route('admin.get.list.category');
    }

    public function action(Request $request, $action, $id)
    {
        if ($action) {
            $category = Category::find($id);
            switch ($action) {
                case 'delete':
                    $category->delete();
                    break;
                case 'active':
                    $category->c_active = !$category->c_active;
                    $category->save();
                    break;
            }
        }
        return redirect()->back();
    }
}
