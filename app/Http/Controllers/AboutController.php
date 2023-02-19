<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function AboutIndex() {
        $about = About::find(1);
        return view('about',compact('about'));
    }

    public function AboutUpdate(Request $request) {
        $about = About::first();
        if($about === null) {
            $about = new About();
            $about->description = $request->description;
        }
        $about->description = $request->description;
        
        if($about->img === null || $about->description === null) {
            $request->validate([
                'img' => 'required|image|mimes:png,jpg|max:1024',
                'description' => 'required'
            ]);    
        }

        $request->validate([
        'img' => 'image|mimes:png,jpg|max:1024',
        'description' => 'required'
    ]);

    if($request->hasFile('img')) {
        $image = $request->file('img');
        $directory = 'uploads/about/';
        $img_name = $request->file('img')->getClientOriginalName();
        
        if(file_exists($about->img)) {
            unlink($about->img);
        }

        $image->move($directory, $img_name);
        $img_name = $directory . $img_name;
        $about->img = $img_name;
    }

    return redirect()->back()->with($about->save() ? "success" : "error", true);

}

}