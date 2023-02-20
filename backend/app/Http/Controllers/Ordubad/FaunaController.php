<?php

namespace App\Http\Controllers\Ordubad;

use App\Http\Controllers\Controller;
use App\Models\Fauna;
use Illuminate\Http\Request;

class FaunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fauna = Fauna::find(1);
        return view('ordubad.fauna',compact('fauna'));
    }

    public function update(Request $request,$id)
    {
        $fauna = Fauna::find($id);
        if($fauna === null) {
            $fauna = new Fauna();
            $fauna->description = $request->description;
        }
        $fauna->description = $request->description;
        
        if($fauna->img === null || $fauna->description === null) {
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
            
            if(file_exists($fauna->img)) {
                unlink($fauna->img);
            }

            $image->move($directory, $img_name);
            $img_name = $directory . $img_name;
            $fauna->img = $img_name;
        }

        return redirect()->back()->with($fauna->save() ? "success" : "error", true);
    }
}