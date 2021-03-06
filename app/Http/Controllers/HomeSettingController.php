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
        return view('admin.homeSetting.index')->with('homeSetting',HomeSetting::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.homeSetting.create');
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
            'Title' => 'required|string|max:255',
            'URL'=>'required',
            'Image'=>'required|image',
            'Video'=>'required|mimes:mp4,ogx,oga,ogv,ogg,webm'
        ]);

        $homeSetting = new HomeSetting();

        //for image
        $image =  $request->Image;
        $image_new = sha1(time()).'.'.$image->getClientOriginalExtension();
        $image->move('uploads/image', $image_new);
        $homeSetting->Image = $image_new;

        //for video
        $video = $request->Video;
        $video_new = sha1(time()).'.'.$video->getClientOriginalExtension();
        $video->move('uploads/video', $video_new);
        $homeSetting->Video = $video_new;


        $homeSetting->Title = $request->Title;
        $homeSetting->URL = $request->URL;

        $homeSetting->save();

        return redirect()->route('homeSetting.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $homeSetting = HomeSetting::find($id);
        $homeSetting->delete();
        return redirect()->route('homeSetting.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.homeSetting.edit')->with('homeSetting',HomeSetting::find($id));
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
        $homeSetting = HomeSetting::find($id);

        //for image
        $image =  $request->Image;
        $image_new = time().$image->getClientOriginalName();
        $image->move('uploads/image', $image_new);
        $homeSetting->Image = $image_new;

        //for video
        $video = $request->Video;
        $video_new = time().$video->getClientOriginalName();
        $video->move('uploads/video', $video_new);
        $homeSetting->Video = $video_new;


        $homeSetting->Title = $request->Title;
        $homeSetting->URL = $request->URL;

        $homeSetting->save();

        return redirect()->route('homeSetting.index');
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
