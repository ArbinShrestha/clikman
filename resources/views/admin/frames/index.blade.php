@extends('layouts.admin')

@section('films')

    <div class="card ">
        <div class="card-header"><h1>{{ __('Frames') }}</h1></div>

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
                @foreach($frame as $frames)
                    <tr>
                        <td>{{$frames->title}}</td>
                        <td>{{$frames->description}}</td>
                        <td><img src="{{ asset('uploads/frames/'.$frames->image) }}" width="100"></td>
                        <td><a href="{{route('frames.edit',$frames->id)}}" class="btn btn-xs btn-info">
                                Edit
                            </a> </td>
                        <td><a href="{{route('frames.destroy',$frames->id)}}" class="btn btn-xs btn-danger">
                                Delete
                            </a> </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
