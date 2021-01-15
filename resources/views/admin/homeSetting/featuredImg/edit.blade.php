@extends('layouts.admin')

@section('featuredImg')

    <div class="card">
        <div class="card-header">{{ __('Update Featured Image') }}: {{$featured->name}}</div>

        <div class="card-body">
            <form method="post" action="{{route('featuredImg.update', $featured->id )}}">
                {{ method_field('PUT') }}
                @csrf

                <div class="form-group row">
                    <label for="Featured_Image" class="col-md-4 text-md-right">{{ __('Featured Image') }}</label>
                    <div class="input-group col-md-6">
                        <div class="custom-file">
                            <input class="form-control file-border" name="Featured_Image" type="file" accept="image/*" value="{{$featured->featured_img}}" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">

                        </div>
                        <div>
                            <img id="output" src="" alt="choose an image" width="200" height="200">
                        </div>

                    </div>

                </div>

                <div class="card">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Update') }}
                        </button>
                    </div>
            </form>
        </div>
    </div>
    </div>





@endsection
