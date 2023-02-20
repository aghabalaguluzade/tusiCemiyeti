<?php

namespace App\Http\Controllers\Ordubad;

use App\Http\Controllers\Controller;
use App\Models\Tourism;
use Illuminate\Http\Request;

class TourismController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tourism = Tourism::find(1);
        return view('ordubad.tourism',compact('tourism'));
    }

    public function update(Request $request,$id)
    {
        $tourism = Tourism::find($id);
        if($tourism === null) {
            $tourism = new Tourism();
            $tourism->description = $request->description;
        }
        $tourism->description = $request->description;
        
        if($tourism->img === null || $tourism->description === null) {
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
            
            if(file_exists($tourism->img)) {
                unlink($tourism->img);
            }

            $image->move($directory, $img_name);
            $img_name = $directory . $img_name;
            $tourism->img = $img_name;
        }

        return redirect()->back()->with($tourism->save() ? "success" : "error", true);
    }
}
