<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::latest('created_at')->get();
        return view('news.newsIndex',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('news.newsCreate');
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
        $directory = 'uploads/news/';
        $img_name = Str::slug($request->title)."." . $image->getClientOriginalExtension();
        $image->move($directory,$img_name);
        $img_name = $directory.$img_name;

        $news = News::create([
            'img' => $img_name,
            'title' => $request->title,
            'description' => $request->description
        ]);

        return redirect()->back()->with($news ? "success" : "error", true);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('news.newsEdit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $request->validate([
            'title' => ['string','max:255'],
            'img' => ['image','mimes:png,jpg,jpeg,gif,jfif,webp','max:2048']
        ]);

        if($request->hasFile('img')) {
            $image = $request->file('img');
            $directory = 'uploads/news/';
            $img_name = Str::slug($request->title).'.' . $image->getClientOriginalExtension();
            
            if(file_exists($news->img)) {
                unlink($news->img);
            }
            
            $image->move($directory, $img_name);
            $img_name = $directory . $img_name;
            $news->img = $img_name;
        }

        $news->title = $request->title;
        $news->description = $request->description;
        $news->status = $request->status;

        return redirect()->back()->with($news->save() ? "success" : "error", true);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $referer = isset($_SERVER["HTTP_REFERER"]);
        if(!$referer) return redirect()->back();

        if($news) {
            if(file_exists($news->img)) {
                unlink($news->img);
            }
            return redirect()->back()->with($news->delete() ? "success" : "error", true);
        }
        return redirect()->back()->with("not_found", true);
    }
}
