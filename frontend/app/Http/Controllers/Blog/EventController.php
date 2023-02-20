<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Events;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function eventIndex() {
        $data = Events::select('id','title','description','img','created_at')->get();
        return view('event_blog',compact('data'));
    }

    public function eventShow($id) {
        $data = Events::find($id);
        $latest_events = Events::where('id','!=',$id)->orderBy('created_at','desc')->select('id','title','created_at','img')->paginate(5);
        return view('event_detail',compact('data','latest_events'));
    }
}
