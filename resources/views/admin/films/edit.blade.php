@extends('layouts.admin')

@section('films')

    <div class="card">
        <div class="card-header"><h1>{{ __('Update Films Page') }}</h1></div>

        <div class="card-body">
            <form method="post" action="{{route('films.update', $film->id)}}" enctype="multipart/form-data">
                {{ method_field('PUT') }}
                @csrf

                <div class="card-body">
                    <label for="title">Title</label>
                    <input type="text" name="title" value="{{$film->title}}"  class="form-control file-border">
                </div>
                <div class="card-body">
                    <label for="description">Description</label>
                    <input type="text" name="description" value="{{$film->description}}" class="form-control file-border">
                </div>
                <div class="card-body">
                    <label for="film_categories"><b>Select a Category</b></label>
                    <select name="film_categories" id="film_categories" class="form-control file-border">

                            <option value="{{$film->film_categories}}">{{$filmCategorys->name}}</option>

                    </select>
                </div>
                <div class="card-body">
                    <label for="video">Video</label>
                    <input type="file" name="video" value="{{$film->video}}" class="form-control file-border"><br>
                </div>

                <div class="card-body">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">
                            Update
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
