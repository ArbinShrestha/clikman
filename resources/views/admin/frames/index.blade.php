@extends('layouts.admin')

@section('films')

    <div class="card ">
        <div class="card-header"><h1>{{ __('Films') }}</h1></div>

        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Video</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                @foreach($film as $films)
                    <tr>
                        <td>{{$films->title}}</td>
                        <td>{{$films->description}}</td>
                        <td><img src="{{ asset('uploads/services/'.$films->video) }}" width="100"></td>
                        <td><a href="{{route('films.edit',$films->id)}}" class="btn btn-xs btn-info">
                                Edit
                            </a> </td>
                        <td><a href="{{route('films.destroy',$films->id)}}" class="btn btn-xs btn-danger">
                                Delete
                            </a> </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
