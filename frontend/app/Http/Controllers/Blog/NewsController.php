<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function newsIndex() {
        $news = News::select('id','title','img','description')->get();
        return view('news',compact('news'));
    }

    public function newsShow($id) {
        $new = News::find($id);
        $latest_news = News::where('id','!=',$id)->orderBy('created_at','desc')->select('id','title','created_at','img')->paginate(5);
        return view('news-detail',compact('new','latest_news'));
    }
}
