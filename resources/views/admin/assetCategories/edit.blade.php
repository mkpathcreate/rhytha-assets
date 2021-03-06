@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.assetCategory.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.asset-categories.update", [$assetCategory->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">{{ trans('cruds.assetCategory.fields.name') }}*</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($assetCategory) ? $assetCategory->name : '') }}" required>
                @if($errors->has('name'))
                    <p class="help-block">
                        {{ $errors->first('name') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.assetCategory.fields.name_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection