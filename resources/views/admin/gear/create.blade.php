@extends('layouts.dashboard')

@section('gear')

    <div class="card">
        <div class="card-header"><h1>{{ __('Gear') }}</h1></div>

        <div class="card-body">
            <form method="POST" action="{{route('gear.store')}}" enctype="multipart/form-data">
                @csrf


                            <div class="card-body">
                                <label for="name">Name</label>
                                <input type="text" name="name"  class="form-control file-border">
                            </div>
                            <div class="card-body">
                                <label for="description">Description</label>
                                <input type="text" name="description"  class="form-control file-border">
                            </div>
                            <div class="card-body">
                                <label for="price">Price</label>
                                <input type="number" name="price"  class="form-control file-border">
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