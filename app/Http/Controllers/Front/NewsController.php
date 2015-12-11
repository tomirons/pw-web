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
        $articles = Article::orderBy( 'created_at', 'desc' )->paginate();
        return view( 'front.news.index', compact( 'articles' ) );
    }
}
