<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function aboutIndex() {
        $about = About::select('img','description')->first();
        return view('about',compact('about'));
    }
}
