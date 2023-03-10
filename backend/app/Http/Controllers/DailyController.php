<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Daily;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class DailyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daily = Daily::latest('created_at')->get();
        return view('daily.dailyIndex',compact('daily'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('daily.dailyCreate');
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
            'title' => ['string','max:255'],
            'img' => ['image','mimes:png,jpg,jpeg,gif,jfif,webp','max:2048']
        ]);

          if($request->hasFile('img')) {
            $image = $request->file('img');
            $directory = 'uploads/daily/';
            $img_name = Str::slug($request->title).'.' . $image->getClientOriginalExtension();

            $image->move($directory, $img_name);
            $img_name = $directory . $img_name;
        }

        $daily = Daily::create([
            'img' => $img_name ?? null,
            'title' => $request->title,
            'description' => $request->description
        ]);

        return redirect()->back()->with($daily ? "success" : "error", true);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(Daily $daily)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(Daily $daily)
    {
        return view('daily.dailyEdit', compact('daily'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Daily $daily)
    {
        $request->validate([
            'title' => ['string','max:255'],
            'img' => ['image','mimes:png,jpg,jpeg,gif,jfif,webp','max:2048']
        ]);

        if($request->hasFile('img')) {
            $image = $request->file('img');
            $directory = 'uploads/daily/';
            $img_name = Str::slug($request->title).'.' . $image->getClientOriginalExtension();

            if(file_exists($daily->img)) {
                unlink($daily->img);
            }

            $image->move($directory, $img_name);
            $img_name = $directory . $img_name;
            $daily->img = $img_name;
        }

        $daily->title = $request->title;
        $daily->description = $request->description;

        return redirect()->back()->with($daily->save() ? "success" : "error", true);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(Daily $daily)
    {
        $referer = isset($_SERVER["HTTP_REFERER"]);
        if(!$referer) return redirect()->back();

        if($daily) {
            if(file_exists($daily->img)) {
                unlink($daily->img);
            }
            return redirect()->back()->with($daily->delete() ? "success" : "error", true);
        }
        return redirect()->back()->with("not_found", true);
    }
}
