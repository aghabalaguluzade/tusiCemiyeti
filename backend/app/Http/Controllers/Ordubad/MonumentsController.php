<?php

namespace App\Http\Controllers\Ordubad;

use App\Http\Controllers\Controller;
use App\Models\Monuments;
use Illuminate\Http\Request;

class MonumentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $monuments = Monuments::find(1);
        return view('ordubad.monuments',compact('monuments'));
    }

    public function update(Request $request,$id)
    {
        $monuments = Monuments::find($id);
        if($monuments === null) {
            $monuments = new Monuments();
            $monuments->description = $request->description;
        }
        $monuments->description = $request->description;
        
        if($monuments->img === null || $monuments->description === null) {
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
            
            if(file_exists($monuments->img)) {
                unlink($monuments->img);
            }

            $image->move($directory, $img_name);
            $img_name = $directory . $img_name;
            $monuments->img = $img_name;
        }

        return redirect()->back()->with($monuments->save() ? "success" : "error", true);
    }
}