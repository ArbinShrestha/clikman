@extends('layouts.admin')

@section('aboutUs')

    <div class="card ">
        <div class="card-header"><h1>{{ __('About Us') }}</h1></div>

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
                @foreach($aboutUs as $aboutUss)
                    <tr>
                        <td>{{$aboutUss->title}}</td>
                        <td>{{$aboutUss->description}}</td>
                        <td><img src="{{ asset('uploads/aboutUs/'.$aboutUss->image) }}" width="100"></td>
                        <td><a href="{{route('aboutUs.edit',$aboutUss->id)}}" class="btn btn-xs btn-info">
                                Edit
                            </a> </td>
                        <td><a href="{{route('aboutUs.destroy',$aboutUss->id)}}" class="btn btn-xs btn-danger">
                                Delete
                            </a> </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
