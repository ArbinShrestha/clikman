<?php

namespace App\Http\Controllers;

use App\Models\FeaturedImage;
use Illuminate\Http\Request;

class FeaturedImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.homeSetting.featuredImg.index')->with('featured',FeaturedImage::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.homeSetting.featuredImg.create');
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
            'featured_img'=>'required|image',
        ]);

        $featureds = new FeaturedImage();

        //for featured image
        $featured =  $request->featured_img;
        $featured_new_name = sha1(time()).'.'.$featured->getClientOriginalExtension();

        $featured->move('uploads/featured', $featured_new_name);
        $featureds->featured_img = $featured_new_name;

        $featureds->save();

        return redirect()->route('featuredImg.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FeaturedImage  $featuredImage
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $featured = FeaturedImage::find($id);
        $featured->delete();
        return redirect()->route('featuredImg.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FeaturedImage  $featuredImage
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.homeSetting.featuredImg.edit')->with('featured',FeaturedImage::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FeaturedImage  $featuredImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $featureds = FeaturedImage::find($id);

        $featured =  $request->featured_img;
        $featured_new_name = sha1(time()).'.'.$featured->getClientOriginalExtension();

        $featured->move('uploads/featured', $featured_new_name);
        $featureds->featured_img = $featured_new_name;

        $featureds->save();

        return redirect()->route('featuredImg.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FeaturedImage  $featuredImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(FeaturedImage $featuredImage)
    {
        //
    }
}
