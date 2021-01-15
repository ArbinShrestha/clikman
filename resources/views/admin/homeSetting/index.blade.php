@extends('layouts.admin')

@section('homeSetting')

    <div class="card ">
        <div class="card-header"><h1>{{ __('Home Settings') }}</h1></div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>

                    <th>Title</th>
                    <th>URL</th>
                    <th>Image</th>
                    <th>Video</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                @foreach($homeSetting as $homeSettings)
                    <tr>
                        <td>{{$homeSettings->Title}}</td>
                        <td>{{$homeSettings->URL}}</td>
                        <td><img src="{{ asset('/public/uploads/image/'.$homeSettings->Image) }}"></td>
                        <td><img src="{{ asset('/public/uploads/video/'.$homeSettings->Video) }}"></td>
                        <td><a href="{{route('homeSetting.edit',$homeSettings->id)}}" class="btn btn-xs btn-info">
                                Edit
                            </a> </td>
                        <td><a href="{{route('homeSetting.destroy',$homeSettings->id)}}" class="btn btn-xs btn-danger">
                                Delete
                            </a> </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
