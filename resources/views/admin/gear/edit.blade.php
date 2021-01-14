@extends('layouts.admin')

@section('gear')

    <div class="card">
        <div class="card-header"><h1>{{ __('Update Gear') }}:{{$gear->name}}</h1></div>

        <div class="card-body">
            <form method="post" action="{{route('gear.update', $gear->id)}}" >
                {{ method_field('PUT') }}
                @csrf

                <div class="card-body">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="{{$gear->name}}"  class="form-control file-border">
                </div>
                <div class="card-body">
                    <label for="description">Description</label>
                    <input type="text" name="description" value="{{$gear->description}}"  class="form-control file-border">
                </div>
                <div class="card-body">
                    <label for="price">Price</label>
                    <input type="number" name="price" value="{{$gear->price}}"  class="form-control file-border">
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">
                            Update
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
