<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Image;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $images = Image::all();
        return view('images.index',['images' => $images]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('images.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->file('image')){
            $image_name = 'img_'.time().'.'.$request->file('image')->getClientOriginalExtension();
            $counter = 1;
            while(file_exists(public_path().'/uploads/'.$image_name))
            {
                $image_name = 'img_'.time().'_'.$counter.'.'.$request->file('image')->getClientOriginalExtension();
                $counter ++;
            }
            $request->file('image')->move(public_path().'/uploads/', $image_name);

        }
        $image = Image::create([
            'name' => $image_name,
            'description' => $request->description,
            'title' => $request->title
        ]);

        return redirect('image')->with('id',$image->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $image = Image::findOrFail($id);

        return view('images.show',['image' => $image]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $image = Image::findOrFail($id);

        return view('images.edit',['image' => $image]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $image = Image::findOrFail($id);

        if($image){
            if($request->file('image')){
                $image_name = $image->name;
                $request->file('image')->move(public_path().'/uploads/', $image_name);
            }

            $image->update([
                'description' => $request->description,
                'title' => $request->title
            ]);
        }
        return redirect('image')->with('id',$image->id);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = Image::findOrFail($id);

        $image->deleteImage();

        return redirect('image');
    }
}
