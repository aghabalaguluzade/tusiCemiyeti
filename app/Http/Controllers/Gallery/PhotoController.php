<?php

namespace App\Http\Controllers\Gallery;

use App\Http\Controllers\Controller;
use App\Models\Images;
use App\Models\Photo;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::latest('created_at')->get();
        return view('photos.index', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('photos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'preview_img' => ['required','image','mimes:png,jpg,jpeg,gif,jfif,webp','max:2048'],
            'image' => ['required'],
            'image.*' => ['image','mimes:png,jpg,jpeg,gif,jfif,webp','max:2048'],
            'title' => ['required','string','max:255'],
            'description' => 'required'
        ]);

        // preview_img
        
        $image = $request->file('preview_img');
        $preview_img_directory = 'uploads/photos/preview_img/';
        $preview_img = Str::slug($request->title)."(preview_img)" . time() . '.' . $image->getClientOriginalExtension();
        $image->move($preview_img_directory,$preview_img);
        $preview_img = $preview_img_directory.$preview_img;


        $photo = Photo::create([
            'preview_img' => $preview_img,
            'title' => $request->title,
            'description' => $request->description
        ]);

        //img

        $files = $request->file('image');
        foreach ($files as $file) {
            $imageName = time().'_'.$file->getClientOriginalName();
            $upload_path = 'uploads/photos/img/';
            $file->move($upload_path, $imageName);
            $img_name = $upload_path.$imageName;
            $image = Images::create([
                'photo_id' => $photo->id,
                'image' => $img_name
            ]);

        }

        return redirect()->back()->with($photo && $image ? "success" : "error", true);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        return view('photos.show', compact('photo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        return view('photos.edit',compact('photo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        $request->validate([
            'preview_img' => ['image','mimes:png,jpg,jpeg,gif,jfif,webp','max:2048'],
            'image.*' => ['image','mimes:png,jpg,jpeg,gif,jfif,webp','max:2048'],
            'title' => ['string','max:255']
        ]);

        if($request->hasFile('preview_img')) {
            $image = $request->file('preview_img');
            $preview_img_directory = 'uploads/photos/preview_img/';
            $preview_img = Str::slug($request->title)."(preview_img)" . time() . '.' . $image->getClientOriginalExtension();
            
            if(file_exists($photo->preview_img)) {
                unlink($photo->preview_img);
            }
            
            $image->move($preview_img_directory,$preview_img);
            $preview_img = $preview_img_directory.$preview_img;
            $photo->preview_img = $preview_img;

        }

        $photo->title = $request->title;
        $photo->description = $request->description;

        if($request->hasFile('image')) {
            $files = $request->file('image');
            foreach ($files as $file) {
                $imageName = time().'_'.$file->getClientOriginalName();
                $upload_path = 'uploads/photos/img/';
                $file->move($upload_path, $imageName);
                $img_name = $upload_path.$imageName;
                $image = Images::create([
                    'photo_id' => $photo->id,
                    'image' => $img_name
                ]);
        }
    }

        return redirect()->back()->with($photo->save() ? "success" : "error", true);
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        $referer = isset($_SERVER["HTTP_REFERER"]);
        if(!$referer) return redirect()->back();

        if($photo) {
            if(file_exists($photo->preview_img)) {
                unlink($photo->preview_img);
            }

            if($photo->images) {
                foreach($photo->images as $image) {
                    if(file_exists($image->image)) {
                        unlink($image->image);
                    }
                }
            }
            return redirect()->back()->with($photo->delete() ? "success" : "error", true);
        }

        return redirect()->back()->with("not_found", true);
    }

    public function delete(int $id) {
        $referer = isset($_SERVER["HTTP_REFERER"]);
        if(!$referer) return redirect()->back();

        $images = Images::find($id);
        if($images) {
            if(file_exists($images->image)) {
                unlink($images->image);
            }
            return redirect()->back()->with($images->delete() ? "success" : "errror", true);
        }
        return redirect()->back()->with("not_found",true);
    }

}
