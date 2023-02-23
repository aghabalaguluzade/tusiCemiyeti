<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Creation;
use App\Models\Charitable;
use App\Models\News;
use App\Models\Events;
use App\Models\Enlightenment;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function activityIndex() {
        $activity = Activity::select('img','description')->first();
        $charitable = Charitable::select('img','description')->first();
        $enlightenment = Enlightenment::select('img','description')->first();
        $latest_news = News::orderBy('created_at','desc')->select('id','title','created_at','img')->paginate(3);
        $latest_events = Events::orderBy('created_at','desc')->select('id','title','created_at','img')->paginate(3);
        return view('activity', compact('activity','charitable','enlightenment','latest_news', 'latest_events'));
    }


}
