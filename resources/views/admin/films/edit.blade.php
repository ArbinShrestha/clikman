@extends('layouts.admin')

@section('films')

    <div class="card">
        <div class="card-header"><h1>{{ __('Update Services Page') }}</h1></div>

        <div class="card-body">
            <form method="post" action="{{route('films.update', $service->id)}}" enctype="multipart/form-data">
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
