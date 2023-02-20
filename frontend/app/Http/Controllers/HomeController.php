<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Creation;
use App\Models\Events;
use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homeIndex() {
        $events = Events::select('title','img','description','created_at')->get();
        $news = News::select('title','img','description')->get();
        $activities =  Activity::select('img','description')->first();
        $creation = Creation::select('img','description')->first();
        return view('index',compact('events','news','activities','creation'));
    }
}