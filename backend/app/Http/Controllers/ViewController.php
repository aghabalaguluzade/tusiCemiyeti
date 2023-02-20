<?php

namespace App\Http\Controllers;

use App\Models\View;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $view = View::find(1);
        return view('view',compact('view'));
    }

    public function update(Request $request,$id)
    {
        $view = View::find($id);
        if($view === null) {
            $view = new View();
            $view->description = $request->description;
        }
        $view->description = $request->description;
        
        if($view->img === null || $view->description === null) {
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
            
            if(file_exists($view->img)) {
                unlink($view->img);
            }

            $image->move($directory, $img_name);
            $img_name = $directory . $img_name;
            $view->img = $img_name;
        }

        return redirect()->back()->with($view->save() ? "success" : "error", true);
    }
}
