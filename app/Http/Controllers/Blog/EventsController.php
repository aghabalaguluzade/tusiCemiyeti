<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Events;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Events::latest('created_at')->get();
        return view('events.eventsIndex',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.eventsCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required','string','max:255'],
            'description' => ['required'],
            'img' => ['required','image','mimes:png,jpg,jpeg,gif,jfif,webp','max:2048']
        ]);

        $image = $request->file('img');
        $directory = 'uploads/events/';
        $img_name = Str::slug($request->title)."." . $image->getClientOriginalExtension();
        $image->move($directory,$img_name);
        $img_name = $directory.$img_name;

        $event = Events::create([
            'img' => $img_name,
            'title' => $request->title,
            'description' => $request->description
        ]);

        return redirect()->back()->with($event ? "success" : "error", true);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function show(Events $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function edit(Events $event)
    {
        return view('events.eventsEdit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Events $event)
    {
        $request->validate([
            'title' => ['string','max:255'],
            'img' => ['image','mimes:png,jpg,jpeg,gif,jfif,webp','max:2048']
        ]);

        if($request->hasFile('img')) {
            $image = $request->file('img');
            $directory = 'uploads/events/';
            $img_name = Str::slug($request->title).'.' . $image->getClientOriginalExtension();
            
            if(file_exists($event->img)) {
                unlink($event->img);
            }
            
            $image->move($directory, $img_name);
            $img_name = $directory . $img_name;
            $event->img = $img_name;
        }

        $event->title = $request->title;
        $event->description = $request->description;

        return redirect()->back()->with($event->save() ? "success" : "error", true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function destroy(Events $events)
    {
        $referer = isset($_SERVER["HTTP_REFERER"]);
        if(!$referer) return redirect()->back();

        if($events) {
            if(file_exists($events->img)) {
                unlink($events->img);
            }
            return redirect()->back()->with($events->delete() ? "success" : "error", true);
        }
        return redirect()->back()->with("not_found", true);
    }
}
