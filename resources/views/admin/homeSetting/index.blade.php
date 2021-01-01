@extends('layouts.admin')

@section('itemGroup')

    <div class="card ">
        <div class="card-header">{{ __('Item Groups') }}</div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <th>Item Group</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                @foreach($itemGroup as $itemGroups)
                    <tr>
                        <td>{{$itemGroups->ItemGroup_Name}}</td>
                        <td><a href="{{route('itemGroup.edit',$itemGroups->ItemGroup_ID)}}" class="btn btn-xs btn-info">
                                Edit
                            </a> </td>
                        <td><a href="{{route('itemGroup.destroy',$itemGroups->ItemGroup_ID)}}" class="btn btn-xs btn-danger">
                                Delete
                            </a> </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
