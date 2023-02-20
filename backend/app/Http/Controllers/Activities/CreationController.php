<?php

namespace App\Http\Controllers\Activities;

use App\Http\Controllers\Controller;
use App\Models\Creation;
use Illuminate\Http\Request;

class CreationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $creation = Creation::find(1);
        return view('activity.creations',compact('creation'));
    }

    public function update(Request $request,$id)
    {
        $creation = Creation::find($id);
        if($creation === null) {
            $creation = new Creation();
            $creation->description = $request->description;
        }
        $creation->description = $request->description;
        
        if($creation->img === null || $creation->description === null) {
            $request->validate([
                'img' => 'required|image|mimes:png,jpg,jpeg,gif,jfif,webp',
                'description' => 'required'
            ]);    
        }

        $request->validate([
        'img' => 'image|mimes:png,jpg,jpeg,gif,jfif,webp',
        'description' => 'required'
    ]);

        if($request->hasFile('img')) {
            $image = $request->file('img');
            $directory = 'uploads/activity/';
            $img_name = $request->file('img')->getClientOriginalName();
            
            if(file_exists($creation->img)) {
                unlink($creation->img);
            }

            $image->move($directory, $img_name);
            $img_name = $directory . $img_name;
            $creation->img = $img_name;
        }

        return redirect()->back()->with($creation->save() ? "success" : "error", true);
    }
}