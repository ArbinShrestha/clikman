@extends('layouts.dashboard')

@section('homeSetting')

    <div class="card">
            <div class="card-header">{{ __('Home Setting') }}</div>
            <div class="card-body">
                <form method="POST" action="{{route('homeSetting.store')}}" enctype="multipart/form-data">
                @csrf

                <div class="form-group row">
                    <label for="Featured_Image" class="col-md-4 text-md-right">{{ __('Featured Image') }}</label>
                    <div class="input-group col-md-6">
                        <div class="custom-file">
                            <input type="file" class="form-control" id="Featured_Image" name="Featured_Image">
                        </div>
                        <iframe src="{{url('')}}"></iframe>
                    </div>

                </div>

                <hr>

                <div class="card">
                    <div class="card-header">{{ __('Section 1') }}</div>
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
                            <input type="file" class="form-control" id="Image">

                        </div>
                    </div>
                </div>
                        {{--<div class="form-group row">--}}
                            {{--<label for="Video" class="col-md-4 text-md-right">{{ __('Video') }}</label>--}}
                            {{--<div class="input-group col-md-6">--}}
                                {{--<div class="custom-file">--}}
                                    {{--<input type="file" class="form-control" id="Video">--}}

                            {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Save') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>

                    </div>
            </div>

@endsection