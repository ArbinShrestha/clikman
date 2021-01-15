@extends('layouts.admin')

@section('featuredImg')

    <div class="card ">
        <div class="card-header"><h1>{{ __('Featured Image') }}</h1></div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <th>Featured Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                @foreach($featured as $featureds)
                    <tr>
                        <td><img src="{{ asset('/public/uploads/featured/'.$featureds->featured_img) }}"></td>
                        <td><a href="{{route('featuredImg.edit',$featureds->id)}}" class="btn btn-xs btn-info">
                                Edit
                            </a> </td>
                        <td><a href="{{route('featuredImg.destroy',$featureds->id)}}" class="btn btn-xs btn-danger">
                                Delete
                            </a> </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
