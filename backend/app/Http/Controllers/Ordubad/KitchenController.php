<?php

namespace App\Http\Controllers\Ordubad;

use App\Http\Controllers\Controller;
use App\Models\Kitchen;
use Illuminate\Http\Request;

class KitchenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kitchen = Kitchen::find(1);
        return view('ordubad.kitchen',compact('kitchen'));
    }

    public function update(Request $request,$id)
    {
        $kitchen = Kitchen::find($id);
        if($kitchen === null) {
            $kitchen = new Kitchen();
            $kitchen->description = $request->description;
        }
        $kitchen->description = $request->description;
        
        if($kitchen->img === null || $kitchen->description === null) {
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
            
            if(file_exists($kitchen->img)) {
                unlink($kitchen->img);
            }

            $image->move($directory, $img_name);
            $img_name = $directory . $img_name;
            $kitchen->img = $img_name;
        }

        return redirect()->back()->with($kitchen->save() ? "success" : "error", true);
    }
}