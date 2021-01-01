@extends('layouts.admin')

@section('itemGroup')

    <div class="card">
        <div class="card-header">{{ __('Update Item Group') }}: {{$itemGroup->ItemGroup_Name}}</div>

        <div class="card-body">
            <form method="post" action="{{route('itemGroup.update', $itemGroup->ItemGroup_ID )}}">
                {{ method_field('PUT') }}
                @csrf

                <div class="form-group row">
                    <label for="ItemGroup_Name" class="col-md-4 col-form-label text-md-right">{{ __('Item Group Name') }}</label>
                    <div class="col-md-6">
                        <input id="ItemGroup_Name" type="text" class="form-control @error('ItemGroup_Name') is-invalid @enderror" name="ItemGroup_Name" value="{{$itemGroup->ItemGroup_Name}}" required autocomplete="ItemGroup_Name" autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Remark" class="col-md-4 col-form-label text-md-right">{{ __('Remark') }}</label>
                    <div class="col-md-6">
                        <textarea class="form-control @error('Remark') is-invalid @enderror" id="Remark" name="Remark" value="{{ $itemGroup->Remark }}" ></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right" for="Status">{{ __('Status') }}</label>
                    <div class="form-check">
                        <label class="col-form-label" for="Status">{{ __('Avialable') }}</label>
                        <input class="form-check-label" type="checkbox" id="Status" name="Status[{{$itemGroup->Status}}]" value="{{$itemGroup->Status}}"
                                {{  ($itemGroup->Status == 1 ? 'checked' : '') }} >

                        {{--if ItemType is deleted value="Status" will be deleted/ Status='2'--}}

                    </div>


                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Update') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>





@endsection