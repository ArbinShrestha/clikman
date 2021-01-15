@extends('layouts.admin')

@section('homeSetting')

    <div class="card">
            <div class="card-header"><h1>{{ __('Home Setting') }}</h1></div>
            <div class="card-body">
                <form method="POST" action="{{route('homeSetting.store')}}" enctype="multipart/form-data">
                @csrf

                <div class="card">
                    <div class="card-header">{{ __('Section') }}</div>
                    <div class="card-body">

                <div class="form-group row">
                    <label for="Title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>
                    <div class="col-md-6">
                        <input id="Title" type="text" class="form-control @error('Title') is-invalid @enderror" name="Title" value="{{ old('Title') }}" required autocomplete="Title" autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="URL" class="col-md-4 col-form-label text-md-right">{{ __('URL') }}</label>
                    <div class="col-md-6">
                        <input id="URL" type="text" class="form-control @error('URL') is-invalid @enderror" name="URL" value="{{ old('URL') }}" required autocomplete="URL" autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="Image" class="col-md-4 text-md-right">{{ __('Image') }}</label>
                    <div class="form-group col-md-6">
                        <div class="custom-file">
                            <input class="form-control" name="Image" type="file" accept="image/*" onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])">
                        </div>
                        <div >
                            <img id="image" src="" alt="choose an image" width="200" height="200">
                        </div>
                        </div>
                    </div>
                </div>
                        <div class="form-group row">
                            <label for="Video" class="col-md-4 text-md-right">{{ __('Video') }}</label>
                            <div class="input-group col-md-6">
                                <div class="custom-file">
                                    <input class="form-control" name="Video" type="file" accept="video/*" onchange="document.getElementById('video').src = window.URL.createObjectURL(this.files[0])">
                        </div>
                        <div >
                            <img id="video" src="" alt="choose a video" width="200" height="200">
                        </div>

                                 </div>
                            </div>
                        </div>


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
