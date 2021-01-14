@extends('layouts.admin')

@section('aboutUs')

    <div class="card">
        <div class="card-header"><h1>{{ __('Update About Us Page') }}</h1></div>

        <div class="card-body">
            <form method="post" action="{{route('aboutUs.update', $aboutUs->id)}}" enctype="multipart/form-data">
                {{ method_field('PUT') }}
                @csrf

                <div class="card-body">
                    <label for="title">Title</label>
                    <input type="text" name="title" value="{{$aboutUs->title}}"  class="form-control file-border">
                </div>
                <div class="card-body">
                    <label for="description">Description</label>
                    <textarea rows="5" type="text" name="description" value="{{$aboutUs->description}}"  class="form-control file-border"></textarea>
                </div>
                <div class="card-body">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control file-border" value="{{$aboutUs->image}}" accept="image/*" onchange="document.getElementById('imagee').src = window.URL.createObjectURL(this.files[0])">
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
