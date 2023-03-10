<?php

namespace App\Http\Controllers;

use App\Models\Prospect;
use Illuminate\Http\Request;

class ProspectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prospect = Prospect::find(1);
        return view('prospect',compact('prospect'));
    }

    public function update(Request $request,$id)
    {
        $prospect = Prospect::find($id);
        if($prospect === null) {
            $prospect = new Prospect();
            $prospect->description = $request->description;
        }
        $prospect->description = $request->description;

        if($prospect->img === null || $prospect->description === null) {
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

            if(file_exists($prospect->img)) {
                unlink($prospect->img);
            }

            $image->move($directory, $img_name);
            $img_name = $directory . $img_name;
            $prospect->img = $img_name;
        }

        return redirect()->back()->with($prospect->save() ? "success" : "error", true);
    }
}
