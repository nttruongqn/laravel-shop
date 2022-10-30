<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Requests\requestArticle;
use App\Models\Article;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        $viewData = [
            'articles' => $articles
        ];
        return view('admin::article.index', $viewData);
    }

    public function create()
    {
        return view('admin::article.create');
    }

    public function store(requestArticle $requestArticle)
    {
        return $this->insertOrUpdate($requestArticle);
        return redirect()->back();
    }

    public function edit($id)
    {
        $article = Article::find($id);
        return view('admin::article.edit', compact('article'));
    }

    public function update(RequestArticle $requestArticle, $id)
    {
        $this->insertOrUpdate($requestArticle, $id);
        return redirect()->route('admin.get.list.article');
    }


    public function insertOrUpdate(requestArticle $requestArticle, $id = '')
    {
        $article = new Article();
        if ($id) $article = Article::find($id);
        $article->a_name = $requestArticle->a_name;
        $article->a_slug = str_slug($requestArticle->a_name);
        $article->a_description = $requestArticle->a_description;
        $article->a_content = $requestArticle->a_content;
        $article->a_description_seo = $requestArticle->a_description_seo ? $requestArticle->a_description_seo : $requestArticle->a_name;
        $article->a_title_seo = $requestArticle->a_title_seo ? $requestArticle->a_title_seo : $requestArticle->a_name;

        if ($requestArticle->hasFile('a_avatar')) {
            $file = upload_image('a_avatar');
            if (isset($file['name'])) {
                $article->a_avatar = $file['name'];
            }
        }
        $article->save();
    }

    public function action(Request $request, $action, $id)
    {
        if($action){
            $article = Article::find($id);
            switch($action){
                case 'delete':
                    $article->delete();
                    break;
                case 'hot';
                   $article->a_hot = !$article->a_hot;
                   $article->save();
                   break;
               }
        }
        return redirect()->back();
    }
}
