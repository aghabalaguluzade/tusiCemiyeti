<?php

namespace App\Http\Controllers\Ordubad;

use App\Http\Controllers\Controller;
use App\Models\General_Information;
use Illuminate\Http\Request;

class General_InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $general_Information = General_Information::find(1);
        return view('ordubad.general_information',compact('general_Information'));
    }

    public function update(Request $request,$id)
    {
        $general_Information = General_Information::find($id);
        if($general_Information === null) {
            $general_Information = new General_Information();
            $general_Information->description = $request->description;
        }
        $general_Information->description = $request->description;
        
        if($general_Information->img === null || $general_Information->description === null) {
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
            
            if(file_exists($general_Information->img)) {
                unlink($general_Information->img);
            }

            $image->move($directory, $img_name);
            $img_name = $directory . $img_name;
            $general_Information->img = $img_name;
        }

        return redirect()->back()->with($general_Information->save() ? "success" : "error", true);
    }
}
