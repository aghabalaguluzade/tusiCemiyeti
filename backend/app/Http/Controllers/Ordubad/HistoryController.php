<?php

namespace App\Http\Controllers\Ordubad;

use App\Http\Controllers\Controller;
use App\Models\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $history = History::find(1);
        return view('ordubad.history',compact('history'));
    }

    public function update(Request $request,$id)
    {
        $history = History::find($id);
        if($history === null) {
            $history = new History();
            $history->description = $request->description;
        }
        $history->description = $request->description;
        
        if($history->img === null || $history->description === null) {
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
            
            if(file_exists($history->img)) {
                unlink($history->img);
            }

            $image->move($directory, $img_name);
            $img_name = $directory . $img_name;
            $history->img = $img_name;
        }

        return redirect()->back()->with($history->save() ? "success" : "error", true);
    }
}