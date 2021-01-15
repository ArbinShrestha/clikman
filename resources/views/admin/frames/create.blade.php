@extends('layouts.admin')

@section('frames')

    <div class="card">
        <div class="card-header"><h1>{{ __('Frames') }}</h1></div>

        <div class="card-body">
            <form method="POST" action="{{route('frames.store')}}" enctype="multipart/form-data">
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
                    <label for="frame_categories"><b>Select a Category</b></label>
                    <select name="frame_categories" id="frame_categories" class="form-control file-border">
                        @foreach($frameCategory as $frameCategorys)
                            <option value="{{$frameCategorys->id}}">{{$frameCategorys->name}}</option>
                        @endforeach
                    </select>
                </div>
                    <div class="card-body">
                        <label for="image">Image</label>
                        <input type="file" name="image" class="form-control file-border">
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
