<?php

namespace App\Http\Controllers\Mission;

use App\Http\Controllers\Controller;
use App\Models\Charitable;
use Illuminate\Http\Request;

class CharitableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $charitables = Charitable::find(1);
        return view('mission.charitables',compact('charitables'));
    }

    public function update(Request $request,$id)
    {
        $charitables = Charitable::find($id);
        if($charitables === null) {
            $charitables = new Charitable();
            $charitables->description = $request->description;
        }
        $charitables->description = $request->description;
        
        if($charitables->img === null || $charitables->description === null) {
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
            $directory = 'uploads/mission/';
            $img_name = $request->file('img')->getClientOriginalName();
            
            if(file_exists($charitables->img)) {
                unlink($charitables->img);
            }

            $image->move($directory, $img_name);
            $img_name = $directory . $img_name;
            $charitables->img = $img_name;
        }

        return redirect()->back()->with($charitables->save() ? "success" : "error", true);
    }
}