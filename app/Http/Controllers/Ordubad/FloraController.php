<?php

namespace App\Http\Controllers\Ordubad;

use App\Http\Controllers\Controller;
use App\Models\Flora;
use Illuminate\Http\Request;

class FloraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flora = Flora::find(1);
        return view('ordubad.flora',compact('flora'));
    }

    public function update(Request $request,$id)
    {
        $flora = Flora::find($id);
        if($flora === null) {
            $flora = new Flora();
            $flora->description = $request->description;
        }
        $flora->description = $request->description;
        
        if($flora->img === null || $flora->description === null) {
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
            $directory = 'uploads/ordubad/';
            $img_name = $request->file('img')->getClientOriginalName();
            
            if(file_exists($flora->img)) {
                unlink($flora->img);
            }

            $image->move($directory, $img_name);
            $img_name = $directory . $img_name;
            $flora->img = $img_name;
        }

        return redirect()->back()->with($flora->save() ? "success" : "error", true);
    }
}