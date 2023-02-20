<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideosController extends Controller
{
    public function videosIndex() {
        $videos = Video::select('title','preview_img','url')->get();
        return view('videos', compact('videos'));  
    }
}
