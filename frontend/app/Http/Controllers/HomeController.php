<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Activity;
use App\Models\Structure;
use App\Models\Events;
use App\Models\News;
use App\Models\History;
use App\Models\Tourism;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homeIndex() {
        $events = Events::select('id','title','img','description','created_at')->paginate(4);
        $news = News::select('id','title','img','description')->paginate(5);
        $activities =  Activity::select('img','description')->first();
        $structure = Structure::select('img','description')->first();
        $history = History::select('img','description')->first();
        $tourism = Tourism::select('img','description')->first();
        $about = About::select('description')->first();
        return view('index',compact('events','news','activities','structure','about','history', 'tourism'));
    }

    public function searchIndex() {
        $search = request()->query('search');

        if($search) {
            $news = News::where('title', 'LIKE', "%{$search}%")->simplePaginate(3);
        }else {
            $news = News::simplePaginate(3);
        }
        return view('news')->with('news',$news);
    }
}
