<?php

namespace App\Http\Controllers;

use App\Models\Charitable;
use App\Models\Activity;
use App\Models\News;
use App\Models\Events;
use App\Models\Enlightenment;
use Illuminate\Http\Request;

class MissionController extends Controller
{
    public function missionIndex() {
        $charitable = Charitable::select('img','description')->first();
        $enlightenment = Enlightenment::select('img','description')->first();
        $activity = Activity::select('img','description')->first();
        $latest_news = News::orderBy('created_at','desc')->select('id','title','created_at','img')->paginate(3);
        $latest_events = Events::orderBy('created_at','desc')->select('id','title','created_at','img')->paginate(3);
        return view('mission', compact('charitable','enlightenment', 'activity', 'latest_news', 'latest_events'));
    }
}
