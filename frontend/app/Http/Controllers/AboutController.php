<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Structure;
use App\Models\View;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function aboutIndex() {
        $about = About::select('img','description')->first();
        return view('about',compact('about'));
    }

    public function Index() {
        $structure = Structure::select('img','description')->first();
        $view = View::select('img','description')->first();
        return view('about',compact('structure','view'));
    }
}
