@extends('layouts.admin')

@section('services')

    <div class="card">
        <div class="card-header"><h1>{{ __('Update Services Page') }}</h1></div>

        <div class="card-body">
            <form method="post" action="{{route('services.update', $service->id)}}" enctype="multipart/form-data">
                {{ method_field('PUT') }}
                @csrf

                <div class="card-body">
                    <label for="title">Title</label>
                    <input type="text" name="title" value="{{$service->title}}"  class="form-control file-border">
                </div>
                <div class="card-body">
                    <label for="description">Description</label>
                    <input type="text" name="description" value="{{$service->description}}" class="form-control file-border">
                </div>
                <div class="card-body">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control file-border" value="{{$service->image}}" accept="image/*" onchange="document.getElementById('imagee').src = window.URL.createObjectURL(this.files[0])">
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
