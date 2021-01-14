<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
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
        return view('admin.aboutUs.index')->with('aboutUs',AboutUs::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.aboutUs.create');
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


        $about = new AboutUs();

        $image = $request->image;
        $image_new = time().$image->getClientOriginalName();
        $image->move('uploads/aboutUs', $image_new);
        $about->image = $image_new;

        $about->title = $request->title;
        $about->description = $request->description;


        $about->save();

        return redirect()->route('aboutUs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $about = AboutUs::find($id);
        $about->delete();
        return redirect()->route('aboutUs.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.aboutUs.edit')->with('aboutUs',AboutUs::find($id));
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
        $about = AboutUs::find($id);

        $image = $request->image;
        $image_new = time().$image->getClientOriginalName();
        $image->move('uploads/aboutUs', $image_new);
        $about->image = $image_new;

        $about->title = $request->title;
        $about->description = $request->description;


        $about->save();

        return redirect()->route('aboutUs.index');
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
