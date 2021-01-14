@extends('layouts.admin')

@section('team')

    <div class="card">
        <div class="card-header"><h1>{{ __('Update Teams Page') }}:{{$team->title}}</h1></div>

        <div class="card-body">
            <form method="post" action="{{route('team.update', $team->id)}}" enctype="multipart/form-data">
                {{ method_field('PUT') }}
                @csrf

                <div class="card-body">
                    <label for="title">Title</label>
                    <input type="text" name="title" value="{{$team->title}}"  class="form-control file-border">
                </div>
                <div class="card-body">
                    <label for="description">Description</label>
                    <input type="text" name="description" value="{{$team->description}}"  class="form-control file-border">
                </div>
                <div class="card-body">
                    <label for="designation">Designation</label>
                    <input type="text" name="designation" value="{{$team->designation}}"  class="form-control file-border">
                </div>
                <div class="card-body">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control file-border" value="{{$team->image}}" accept="image/*" onchange="document.getElementById('imagee').src = window.URL.createObjectURL(this.files[0])">
                    <img id="imagee" src="" alt="choose an image" width="200" height="200">
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
