@extends('layouts.admin')

@section('gear')

    <div class="card ">
        <div class="card-header"><h1>{{ __('Gears') }}</h1></div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <th>Gear Name</th>
                    <th>Price</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                @foreach($gear as $gears)
                    <tr>
                        <td>{{$gears->name}}</td>
                        <td>{{$gears->price}}</td>
                        <td><a href="{{route('gear.edit',$gears->id)}}" class="btn btn-xs btn-info">
                                Edit
                            </a> </td>
                        <td><a href="{{route('gear.destroy',$gears->id)}}" class="btn btn-xs btn-danger">
                                Delete
                            </a> </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
