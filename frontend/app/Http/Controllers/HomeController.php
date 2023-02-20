<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Activity;
use App\Models\Creation;
use App\Models\Events;
use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homeIndex() {
        $events = Events::select('id','title','img','description','created_at')->paginate(4);
        $news = News::select('id','title','img','description')->paginate(5);
        $activities =  Activity::select('img','description')->first();
        $creation = Creation::select('img','description')->first();
        $about = About::select('description')->first();
        return view('index',compact('events','news','activities','creation','about'));
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