<?php

namespace App\Http\Controllers\Gallery;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::latest('created_at')->get();
        return view('videos.index',compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('videos.create');
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
            'preview_img' => ['required','image','mimes:png,jpg,jpeg,gif,jfif,webp','max:2048'],
            'title' => ['required','string','max:255'],
            'url' => ['required','string','url','max:255']
        ]);

        
        $image = $request->file('preview_img');
        $preview_img_directory = 'uploads/videos/';
        $preview_img = Str::slug($request->title)."(preview_img)" . time() . '.' . $image->getClientOriginalExtension();
        $image->move($preview_img_directory,$preview_img);
        $preview_img = $preview_img_directory.$preview_img;


        $video = Video::create([
            'preview_img' => $preview_img,
            'title' => $request->title,
            'url' => $request->url
        ]);

        return redirect()->back()->with($video ? "success" : "error", true);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        return view('videos.edit', compact('video'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        $request->validate([
            'preview_img' => ['image','mimes:png,jpg,jpeg,gif,jfif,webp','max:2048'],
            'title' => ['string','max:255'],
            'url' => ['string','url','max:255']
        ]);
    
        if($request->hasFile('preview_img')) {
            $image = $request->file('preview_img');
            $directory = 'uploads/videos/';
            $img_name = Str::slug($request->title). '(preview_img' . time() . '.' .$image->getClientOriginalExtension();
            if(file_exists($video->preview_img)) {
                unlink($video->preview_img);
            };
            $image->move($directory,$img_name);
            $img_name = $directory.$img_name;
            $video->preview_img = $img_name;
        };

        $video->title = $request->title;
        $video->url = $request->url;

        return redirect()->back()->with($video->save() ? "success" : "error", true);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        $referer = isset($_SERVER['HTTP_REFERER']);
        if(!$referer) return redirect()->back();

        if($video) {
            if(file_exists($video->preview_img)) {
                unlink($video->preview_img);
            }
            
            return redirect()->back()->with($video->delete() ? "success" : "errror", true);
        }
        return redirect()->back()->with("not_found",true);
    }
}
