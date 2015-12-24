<?php

namespace App\Http\Controllers\Front;

use App\Article;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function getIndex()
    {
        pagetitle( [ trans( 'main.apps.news' ), settings( 'server_name' ) ] );
        $articles = Article::orderBy( 'created_at', 'desc' )->paginate( settings( 'news_items_per_page' ) );
        return view( 'front.news.index', compact( 'articles' ) );
    }
}
