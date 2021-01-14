@extends('layouts.admin')

@section('team')

    <div class="card ">
        <div class="card-header"><h1>{{ __('Gears') }}</h1></div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Designation</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                @foreach($team as $teams)
                    <tr>
                        <td>{{$teams->title}}</td>
                        <td>{{$teams->description}}</td>
                        <td><img src="{{ asset('uploads/team/'.$teams->image) }}" width="100"></td>
                        <td>{{$teams->designation}}</td>
                        <td><a href="{{route('team.edit',$teams->id)}}" class="btn btn-xs btn-info">
                                Edit
                            </a> </td>
                        <td><a href="{{route('team.destroy',$teams->id)}}" class="btn btn-xs btn-danger">
                                Delete
                            </a> </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
