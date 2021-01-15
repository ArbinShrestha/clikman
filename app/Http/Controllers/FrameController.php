<?php

namespace App\Http\Controllers;

use App\Models\Frame;
use App\Models\FrameCategory;
use Illuminate\Http\Request;

class FrameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.frames.index')->with('frame',Frame::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $frameCategory = FrameCategory::all();
        return view('admin.frames.create',compact('frameCategory'));
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
            'image'=>'required|image',
            'title'=>'required|string',
            'description'=>'required|string',
        ]);


        $frame = new Frame();

        $image = $request->image;
        $image_new = time().$image->getClientOriginalName();
        $image->move('uploads/frames', $image_new);
        $frame->image = $image_new;

        $frame->frame_categories = $request->frame_categories;
        $frame->title = $request->title;
        $frame->description = $request->description;


        $frame->save();

        return redirect()->route('frames.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Frame  $frame
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $frame = Frame::find($id);
        $frame->delete();
        return redirect()->route('frames.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Frame  $frame
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.frames.edit')->with('frame',Frame::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Frame  $frame
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $frame = Frame::find($id);

        $image = $request->image;
        $image_new = time().$image->getClientOriginalName();
        $image->move('uploads/frames', $image_new);
        $frame->image = $image_new;

        $frame->title = $request->title;
        $frame->description = $request->description;


        $frame->save();

        return redirect()->route('frames.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Frame  $frame
     * @return \Illuminate\Http\Response
     */
    public function destroy(Frame $frame)
    {
        //
    }
}
