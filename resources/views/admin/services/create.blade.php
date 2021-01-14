@extends('layouts.admin')

@section('services')

    <div class="card">
        <div class="card-header"><h1>{{ __('Services') }}</h1></div>

        <div class="card-body">
            <form method="POST" action="{{route('services.store')}}" enctype="multipart/form-data">
                @csrf


                            <div class="card-body">
                                <label for="title">Title</label>
                                <input type="text" name="title"  class="form-control file-border">
                            </div>
                            <div class="card-body">
                                <label for="description">Description</label>
                                <input type="textarea" name="description"  class="form-control file-border">
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
