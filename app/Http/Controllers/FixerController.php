<?php

namespace App\Http\Controllers;

use App\Models\Fixer;
use Illuminate\Http\Request;

class FixerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.fixers.index')->with('fixer',Fixer::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.fixers.create');
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
            'title'=>'required|string',
            'description'=>'required|string',
            'uploads'=> 'required|mimes:pdf,xlx,csv|max:2048',
        ]);


        $about = new Fixer();

        $fileName = $request->uploads;
        $fileName_new = time().'.'.$fileName->extension();
        $fileName->move('uploads/file', $fileName_new);
        $about->uploads = $fileName_new;

        $about->title = $request->title;
        $about->description = $request->description;

        $about->save();

        return redirect()->route('fixers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fixer  $fixer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $about = Fixer::find($id);
        $about->delete();
        return redirect()->route('fixers.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fixer  $fixer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.fixers.edit')->with('fixer',Fixer::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fixer  $fixer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $about = Fixer::fimd($id);

        $fileName = $request->uploads;
        $fileName_new = time().'.'.$fileName->extension();
        $fileName->move('uploads/file', $fileName_new);
        $about->uploads = $fileName_new;

        $about->title = $request->title;
        $about->description = $request->description;

        $about->save();

        return redirect()->route('fixers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fixer  $fixer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fixer $fixer)
    {
        //
    }
}
