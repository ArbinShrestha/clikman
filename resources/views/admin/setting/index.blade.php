@extends('layouts.dashboard')

@section('setting')

    <div class="card ">
        <div class="card-header">{{ __('Settings') }}</div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <th>Name</th>
                    <th>Value</th>
                    <th>Slug</th>
                    <th>Type</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                @foreach($setting as $settings)
                    <tr>
                        <td>{{$settings->name}}</td>
                        <td>{{$settings->value}}</td>
                        <td>{{$settings->slug}}</td>
                        <td>{{$settings->type}}</td>
                        <td><a href="{{route('setting.edit',$settings->id)}}" class="btn btn-xs btn-info">
                                Edit
                            </a></td>
                        <td><a href="{{route('setting.destroy',$settings->id)}}" class="btn btn-xs btn-danger">
                                Delete
                            </a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
