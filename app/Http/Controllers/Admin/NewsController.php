<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Http\Requests\ArticleRequest;
use Efriandika\LaravelSettings\Facades\Settings;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        pagetitle( [ trans( 'news.index' ), settings( 'server_name' ) ] );
        $articles = Article::paginate( settings( 'news_items_per_page' ) );
        return view( 'admin.news.view', compact( 'articles' ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        pagetitle( [ trans( 'news.create' ), settings( 'server_name' ) ] );
        return view( 'admin.news.create' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ArticleRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store( ArticleRequest $request )
    {
        Article::create( $request->all() );

        flash()->success( trans( 'news.create_success' ) );

        return redirect( 'admin/news' );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Article $article
     * @return \Illuminate\Http\Response
     */
    public function edit( Article $article )
    {
        pagetitle( [ trans( 'news.edit', ['title' => $article->title] ), settings( 'server_name' ) ] );
        return view( 'admin.news.edit', compact( 'article' ) );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Article $article
     * @param ArticleRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function update( Article $article, ArticleRequest $request )
    {
        $article->update( $request->all() );

        flash()->success( trans( 'news.edit_success' ) );

        return redirect( 'admin/news' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param Article $article
     */
    public function destroy( Request $request, Article $article )
    {
        if ( $request->ajax() )
        {
            $article->delete();
        }
    }

    public function getSettings()
    {
        pagetitle( [ trans( 'main.settings' ), trans( 'main.apps.news' ), settings( 'server_name' ) ] );
        return view( 'admin.news.settings' );
    }

    public function postSettings( Request $request )
    {
        Settings::set( 'news_items_per_page', $request->articles_per_page );

        flash()->success( trans( 'main.settings_saved' ) );

        return redirect( 'admin/news' );
    }
}
