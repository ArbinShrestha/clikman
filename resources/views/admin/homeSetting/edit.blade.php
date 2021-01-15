@extends('layouts.admin')

@section('homeSetting')

    <div class="card">
        <div class="card-header">{{ __('Update Home Setting') }}: {{$homeSetting->name}}</div>

        <div class="card-body">
            <form method="post" action="{{route('homeSetting.update', $homeSetting->id )}}">
                {{ method_field('PUT') }}
                @csrf

                <div class="card">
                    <div class="card-header">{{ __('Section') }}</div>
                    <div class="card-body">

                        <div class="form-group row">
                            <label for="Title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>
                            <div class="col-md-6">
                                <input id="Title" type="text" class="form-control @error('Title') is-invalid @enderror" name="Title" value="{{ $homeSetting->Title }}" required autocomplete="Title" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="URL" class="col-md-4 col-form-label text-md-right">{{ __('URL') }}</label>
                            <div class="col-md-6">
                                <input id="URL" type="text" class="form-control @error('URL') is-invalid @enderror" name="URL" value="{{ $homeSetting->URL }}" required autocomplete="URL" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Image" class="col-md-4 text-md-right">{{ __('Image') }}</label>
                            <div class="form-group col-md-6">
                                <div class="custom-file">
                                    <input class="form-control" name="Image" type="file" accept="image/*" value="{{$homeSetting->Image}}" onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])">
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
                                <input class="form-control" name="Video" type="file" accept="video/*" value="{{$homeSetting->Video}}" onchange="document.getElementById('video').src = window.URL.createObjectURL(this.files[0])">
                            </div>
                            <div >
                                <img id="video" src="" alt="choose a video" width="200" height="200">
                            </div>

                        </div>
                    </div>
                </div>
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Update') }}
                        </button>
                    </div>
            </form>
        </div>
    </div>





@endsection
