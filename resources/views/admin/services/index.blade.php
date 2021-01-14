@extends('layouts.admin')

@section('services')

    <div class="card ">
        <div class="card-header"><h1>{{ __('Services') }}</h1></div>

        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                @foreach($service as $services)
                    <tr>
                        <td>{{$services->title}}</td>
                        <td>{{$services->description}}</td>
                        <td><img src="{{ asset('uploads/services/'.$services->image) }}" width="100"></td>
                        <td><a href="{{route('services.edit',$services->id)}}" class="btn btn-xs btn-info">
                                Edit
                            </a> </td>
                        <td><a href="{{route('services.destroy',$services->id)}}" class="btn btn-xs btn-danger">
                                Delete
                            </a> </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
