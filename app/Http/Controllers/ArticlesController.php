<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use Carbon\Carbon;

class ArticlesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')
            ->except(['index', 'show']);
    }

    /**
     * 記事一覧の表示
     */
    public function index() {
        // $articles = Article::all();
        $articles = Article::latest('published_at')->latest('created_at')
            ->published()
            ->get();

        return view('articles.index', compact('articles'));
    }

    /**
     * 記事の表示
     */
    public function show($id) {
        $article = Article::findOrFail($id);

        return view('articles.show', compact('article'));
    }

    /**
     * 記事の作成
     */
    public function create() {
        return view(('articles.create'));
    }

    /**
     * 作成した記事の保存処理
     */
    public function store(ArticleRequest $request) {

        Article::create($request->validated());

        return redirect('articles')->with('message', '記事を投稿しました。');
    }

    /**
     * 記事の編集
     */
    public function edit($id) {
        $article = Article::findOrFail($id);

        return view('articles.edit', compact('article'));
    }

    /**
     * 記事の更新
     */
    public function update(ArticleRequest $request, $id) {
        $article = Article::findOrFail($id);

        $article->update($request->validated());

        return redirect(route('articles.show', ['id' => $article->id]))->with('message', '記事を更新しました。');
    }

    /**
     * 記事の削除
     */
    public function destroy($id) {
        $article = Article::findOrFail($id);

        $article->delete();

        return redirect('articles')->with('message', '記事を削除しました。');
    }
}
