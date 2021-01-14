@extends('layouts.admin')

@section('films')

    <div class="card">
        <div class="card-header"><h1>{{ __('Films') }}</h1></div>

        <div class="card-body">
            <form method="POST" action="{{route('films.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <label for="title">Title</label>
                    <input type="text" name="title"  class="form-control file-border">
                </div>
                <div class="card-body">
                    <label for="description">Description</label>
                    <input type="text" name="description"  class="form-control file-border">
                </div>
                <div class="card-body">
                    <label for="filmCategory"><b>Select a Category</b></label>
                    <select name="filmCategory" id="filmCategory" class="form-control file-border">
                        @foreach($filmCategory as $filmCategorys)
                            <option value="{{$filmCategorys->id}}">{{$filmCategorys->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="card-body">
                    <label for="video">Video</label>
                    <input type="file" name="video" value="1" class="form-control file-border"><br>
{{--                    <input type="file" name="video[]" value="2" class="form-control file-border"><br>--}}
{{--                    <input type="file" name="video[]" value="3" class="form-control file-border"><br>--}}
                </div>

                <div class="card-body">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">
                            Save
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>








@endsection
