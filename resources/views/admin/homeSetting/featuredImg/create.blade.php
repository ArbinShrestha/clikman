@extends('layouts.admin')

@section('featuredImg')

    <div class="card">
            <div class="card-header"><h1>{{ __('Featured Image') }}</h1></div>
            <div class="card-body">
                <form method="POST" action="{{route('featuredImg.store')}}" enctype="multipart/form-data">
                @csrf

                <div class="form-group row">
                    <label for="featured_img" class="col-md-4 text-md-right">{{ __('Featured Image') }}</label>
                    <div class="input-group col-md-6">
                        <div class="custom-file">
                            <input class="form-control file-border" name="featured_img" type="file" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">

                        </div>
                        <div>
                            <img id="output" src="" alt="choose an image" width="200" height="200">
                        </div>

                    </div>

                </div>
<
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Save') }}
                                    </button>
                                </div>
                            </div>

                </form>
            </div>
    </div>


@endsection
