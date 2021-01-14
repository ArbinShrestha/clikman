<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\FilmCategory;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('admin.films.index')->with('film',Film::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $filmCategory = FilmCategory::all();
        return view('admin.films.create',compact('filmCategory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|string',
            'description'=>'required|string',
            'video[]'=>'required|mimes:mp4,ogx,oga,ogv,ogg,webm',
        ]);

        $film = new Film();

        $Video = $request->video;
        $video_new = sha1(time()).'.'.$Video->getClientOriginalExtension();
        $Video->move('uploads/video/film', $video_new);
        $film->video = $video_new;

        $film->title = $request->title;
        $film->description = $request->description;
        dd($film);

        $film->save();

        return redirect()->route('films.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\RedirectResponse
     */
    public function show($id)
    {
        $film = Film::find($id);
        $film->delete();
        return redirect()->route('films.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        return view('admin.services.edit')->with('films',Film::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $film = Film::find($id);

        $Video = $request->video;
        $video_new = sha1(time()).'.'.$Video->getClientOriginalExtension();
        $Video->move('uploads/video/film', $video_new);
        $film->video = $video_new;

        $film->title = $request->title;
        $film->description = $request->description;


        $film->save();

        return redirect()->route('films.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function destroy(Film $film)
    {
        //
    }
}
