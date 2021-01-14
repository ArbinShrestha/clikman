@extends('layouts.admin')

@section('aboutUs')

    <div class="card">
        <div class="card-header"><h1>{{ __('About Us') }}</h1></div>

        <div class="card-body">
            <form method="POST" action="{{route('aboutUs.store')}}" enctype="multipart/form-data">
                @csrf


                            <div class="card-body">
                                <label for="title">Title</label>
                                <input type="text" name="title"  class="form-control file-border">
                            </div>
                <div class="card-body">
                    <label for="description">Description</label>
                        <textarea rows="5" type="text" name="description"  class="form-control file-border"></textarea>
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
