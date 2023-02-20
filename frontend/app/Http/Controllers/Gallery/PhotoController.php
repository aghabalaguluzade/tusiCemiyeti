<?php

namespace App\Http\Controllers\Gallery;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function photoIndex() {
        // $photos = Photo::with('images')->get();
        $photos = Photo::latest('created_at')->get();
        return view('photo', compact('photos'));
    }
}
