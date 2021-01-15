@extends('layouts.admin')

@section('frames')

    <div class="card">
        <div class="card-header"><h1>{{ __('Update Frames Page') }}</h1></div>

        <div class="card-body">
            <form method="post" action="{{route('frames.update', $frame->id)}}" enctype="multipart/form-data">
                {{ method_field('PUT') }}
                @csrf

                <div class="card-body">
                    <label for="title">Title</label>
                    <input type="text" name="title" value="{{$frame->title}}"  class="form-control file-border">
                </div>
                <div class="card-body">
                    <label for="description">Description</label>
                    <input type="text" name="description" value="{{$frame->description}}" class="form-control file-border">
                </div>
                <div class="card-body">
                    <label for="image">Image</label>
                    <input type="file" name="image" value="{{$frame->image}}" class="form-control file-border">
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
