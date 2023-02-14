<?php

namespace App\Http\Controllers\Mission;

use App\Http\Controllers\Controller;
use App\Models\Enlightenment;
use Illuminate\Http\Request;

class EnlightenmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enlightenments = Enlightenment::find(1);
        return view('mission.enlightenments',compact('enlightenments'));
    }

    public function update(Request $request,$id)
    {
        $enlightenments = Enlightenment::find($id);
        if($enlightenments === null) {
            $enlightenments = new Enlightenment();
            $enlightenments->description = $request->description;
        }
        $enlightenments->description = $request->description;
        
        if($enlightenments->img === null || $enlightenments->description === null) {
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
            
            if(file_exists($enlightenments->img)) {
                unlink($enlightenments->img);
            }

            $image->move($directory, $img_name);
            $img_name = $directory . $img_name;
            $enlightenments->img = $img_name;
        }

        return redirect()->back()->with($enlightenments->save() ? "success" : "error", true);
    }
}
