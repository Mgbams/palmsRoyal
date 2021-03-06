@extends('layouts.permission')

@section('content')
<div class="container w-50">
    <div class="row pt-5">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Role</h2>
            </div>
            <div class="pull-right my-4">
                <a class="btn btn-primary" href="{{ url('admin/roles-and-permissions/index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong>
        There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    {!! Form::model($role, [
    'method' => 'POST',
    'url' => ['admin/roles-and-permissions/update', $role->id]])
    !!}
    <div class="row mb-4">
        <div class="col-xs-12 col-sm-8 col-md-8">
            <div class="form-group">
                <strong style="font-size: 18px;">Name:</strong>
                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group "><strong style="font-size: 20px;">Permission:</strong><br />
                <div class="mt-3">
                    @foreach($permission as $value)
                    <label>
                        {{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                        {{ $value->name }}
                    </label><br />
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    {!! Form::close() !!}
</div>
@endsection