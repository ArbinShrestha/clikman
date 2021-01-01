@extends('layouts.dashboard')

@section('setting')

    <div class="card">
        <div class="card-header">{{ __('Setting') }}</div>

        <div class="card-body">
            <form method="POST" action="{{route('setting.store')}}">
                @csrf

                <div class="form-group row">
                    <label for="Name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                    <div class="col-md-6">
                        <input id="Name" type="text" class="form-control @error('Name') is-invalid @enderror" name="Name" value="{{ old('Name') }}" required autocomplete="Name" autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Value" class="col-md-4 col-form-label text-md-right">{{ __('Value') }}</label>
                    <div class="col-md-6">
                        <input id="Value" type="text" class="form-control @error('Value') is-invalid @enderror" name="Value" value="{{ old('Value') }}" required autocomplete="Value" autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Type" class="col-md-4 col-form-label text-md-right">{{ __('Type') }}</label>
                    <div class="col-md-6">
                        <input id="Type" type="text" class="form-control @error('Type') is-invalid @enderror" name="Type" value="{{ old('Type') }}" required autocomplete="Type" autofocus>
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