<?php

namespace App\Http\Controllers\Ordubad;

use App\Http\Controllers\Controller;
use App\Models\Nature;
use Illuminate\Http\Request;

class NatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nature = Nature::find(1);
        return view('ordubad.nature',compact('nature'));
    }

    public function update(Request $request,$id)
    {
        $nature = Nature::find($id);
        if($nature === null) {
            $nature = new Nature();
            $nature->description = $request->description;
        }
        $nature->description = $request->description;
        
        if($nature->img === null || $nature->description === null) {
            $request->validate([
                'img' => 'required|mimes:png,jpg,jpeg,gif,jfif,webp',
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
            
            if(file_exists($nature->img)) {
                unlink($nature->img);
            }

            $image->move($directory, $img_name);
            $img_name = $directory . $img_name;
            $nature->img = $img_name;
        }

        return redirect()->back()->with($nature->save() ? "success" : "error", true);
    }
}
