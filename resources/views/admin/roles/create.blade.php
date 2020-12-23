@extends('layouts.permission')

@section('content')
<div class="container w-50">
    <div class="row mt-5 mb-3">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create New Role</h2>
            </div>
            <div class="pull-right mt-2">
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
    {!! Form::open(array('url' => 'admin/roles-and-permissions/store','method'=>'POST')) !!}
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-8">
            <div class="form-group">
                <strong>Name:</strong>
                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Permission:</strong><br />
                <div class="mt-3">
                    @foreach($permission as $value)
                    <label>
                        {{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                        {{ $value->name }}
                    </label><br />
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mb-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    {!! Form::close() !!}
</div>
@endsection