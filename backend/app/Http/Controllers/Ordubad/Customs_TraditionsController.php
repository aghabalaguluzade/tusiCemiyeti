<?php

namespace App\Http\Controllers\Ordubad;

use App\Http\Controllers\Controller;
use App\Models\Customs_Traditions;
use Illuminate\Http\Request;

class Customs_TraditionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customs_traditions = Customs_Traditions::find(1);
        return view('ordubad.customs_traditions',compact('customs_traditions'));
    }

    public function update(Request $request,$id)
    {
        $customs_traditions = Customs_Traditions::find($id);
        if($customs_traditions === null) {
            $customs_traditions = new Customs_Traditions();
            $customs_traditions->description = $request->description;
        }
        $customs_traditions->description = $request->description;
        
        if($customs_traditions->img === null || $customs_traditions->description === null) {
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
            
            if(file_exists($customs_traditions->img)) {
                unlink($customs_traditions->img);
            }

            $image->move($directory, $img_name);
            $img_name = $directory . $img_name;
            $customs_traditions->img = $img_name;
        }

        return redirect()->back()->with($customs_traditions->save() ? "success" : "error", true);
    }
}
