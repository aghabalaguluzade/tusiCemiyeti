<?php

namespace App\Http\Controllers\Ordubad;

use App\Http\Controllers\Controller;
use App\Models\Production;
use Illuminate\Http\Request;

class ProductionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $production = Production::find(1);
        return view('ordubad.productions',compact('production'));
    }

    public function update(Request $request,$id)
    {
        $production = Production::find($id);
        if($production === null) {
            $production = new Production();
            $production->description = $request->description;
        }
        $production->description = $request->description;
        
        if($production->img === null || $production->description === null) {
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
            
            if(file_exists($production->img)) {
                unlink($production->img);
            }

            $image->move($directory, $img_name);
            $img_name = $directory . $img_name;
            $production->img = $img_name;
        }

        return redirect()->back()->with($production->save() ? "success" : "error", true);
    }
}
