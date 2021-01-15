@extends('layouts.admin')

@section('fixers')

    <div class="card ">
        <div class="card-header"><h1>{{ __('Fixers') }}</h1></div>

        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Uploads</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                @foreach($fixer as $fixers)
                    <tr>
                        <td>{{$fixers->title}}</td>
                        <td>{{$fixers->description}}</td>
                        <td><img src="{{ asset('uploads/fixers/'.$fixers->uploads) }}" width="100"></td>
                        <td><a href="{{route('fixers.edit',$fixers->id)}}" class="btn btn-xs btn-info">
                                Edit
                            </a> </td>
                        <td><a href="{{route('fixers.destroy',$fixers->id)}}" class="btn btn-xs btn-danger">
                                Delete
                            </a> </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
