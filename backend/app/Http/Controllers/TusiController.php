<?php
namespace App\Http\Controllers;

use App\Models\Tusi;
use Illuminate\Http\Request;

class TusiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $view = Tusi::find(1);
        return view('tusi',compact('view'));
    }

    public function update(Request $request,$id)
    {
        $view = Tusi::find($id);
        if($view === null) {
            $view = new Tusi();
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
