<?php

namespace App\Http\Controllers;

use App\Models\Structure;
use Illuminate\Http\Request;

class StructureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $structure = Structure::find(1);
        return view('structure',compact('structure'));
    }

    public function update(Request $request,$id)
    {
        $structure = Structure::find($id);
        if($structure === null) {
            $structure = new Structure();
            $structure->description = $request->description;
        }
        $structure->description = $request->description;
        
        if($structure->img === null || $structure->description === null) {
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
            $directory = 'uploads/about/';
            $img_name = $request->file('img')->getClientOriginalName();
            
            if(file_exists($structure->img)) {
                unlink($structure->img);
            }

            $image->move($directory, $img_name);
            $img_name = $directory . $img_name;
            $structure->img = $img_name;
        }

        return redirect()->back()->with($structure->save() ? "success" : "error", true);
    }
}
