<?php

namespace App\Http\Controllers\Ordubad;

use App\Http\Controllers\Controller;
use App\Models\Folklore;
use Illuminate\Http\Request;

class FolkloreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $folklore = Folklore::find(1);
        return view('ordubad.folklore',compact('folklore'));
    }

    public function update(Request $request,$id)
    {
        $folklore = Folklore::find($id);
        if($folklore === null) {
            $folklore = new Folklore();
            $folklore->description = $request->description;
        }
        $folklore->description = $request->description;
        
        if($folklore->img === null || $folklore->description === null) {
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
            
            if(file_exists($folklore->img)) {
                unlink($folklore->img);
            }

            $image->move($directory, $img_name);
            $img_name = $directory . $img_name;
            $folklore->img = $img_name;
        }

        return redirect()->back()->with($folklore->save() ? "success" : "error", true);
    }
}