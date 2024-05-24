<?php

namespace App\Http\Controllers\Backend;

use App\Models\Shoporder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\KoreanArticle;

class KoreanArticleController extends Controller
{

    public function index()
    {
        $articles = KoreanArticle::all();
        return view('admin.korean-articles.index', compact('articles'));
    }

    public function koreanArticle()
    {
        // 按id降序排序并分页
        $articles = KoreanArticle::orderBy('id', 'desc')->paginate(3);

        // 将分页结果传递给视图
        return view('front-korean-article', compact('articles'));
    }


    public function create()
    {
        return view('admin.korean-articles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'nullable',
            'content' => 'required',
            'translation' => 'nullable',
        ]);
        $article = new KoreanArticle();
        $article->title = $request->title;
        $article->content = $request->content;
        $article->translation = $request->translation;
        $article->save();

        toastr('Profile created successfully');

        return redirect()->back();
    }
}
