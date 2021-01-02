<?php

namespace App\Http\Controllers;

use App\Models\HomeSetting;
use Illuminate\Http\Request;
use Ramsey\Uuid\Validator;

class HomeSettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.homeSetting.create')->with('featured',HomeSetting::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'Featured_Image'=>'required|image',
            'Title' => 'required|string|max:255',
            'URL'=>'required',
            'Image'=>'required|image',
            'Video'=>'required|mimes:mp4,ogx,oga,ogv,ogg,webm'
        ]);

        $homeSetting = new HomeSetting();

        //for featured image
        $featured =  $request->Featured_Image;
        $featured_new_name = time().$featured->getClientOriginalName();
        $featured->move('uploads/featured', $featured_new_name);
        $homeSetting->Featured_Image = $featured;

        //for image
        $image =  $request->Image;
        $image_new = time().$image->getClientOriginalName();
        $image->move('uploads/image', $image_new);
        $homeSetting->Image = $image;

        //for video
        $video = $request->Video;
        $video_new = time().$video->getClientOriginalName();
        $video->move('uploads/video', $video_new);
        $homeSetting->Video = $video;


        $homeSetting->Title = $request->Title;
        $homeSetting->URL = $request->URL;

        $homeSetting->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
