@extends('layouts.permission')

@section('content')
<div class="row">
    <div class="col-lg-12 mt-5">
        <div class="pull-left mb-5">
            <h2>Role Management</h2>
        </div>
        <div class="mb-3 d-flex justify-content-end">
            {{--@can('role-create')--}}
            @if(Auth::user()->isSuperAdministrator())
            <a class="btn btn-success" href="{{ url('admin/roles-and-permissions/create') }}">
                Create New Role
            </a>
            @endif
            {{--@endcan--}}
        </div>
    </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($roles as $key => $role)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $role->name }}</td>
        <td>
            <a class="btn btn-info" href="{{ url('admin/roles-and-permissions/show',$role->id) }}">
                Show
            </a>
            {{--@can('role-edit')--}}
            @if(Auth::user()->isAdministrator() || Auth::user()->isSuperAdministrator())
            <a class="btn btn-primary" href="{{ url('admin/roles-and-permissions/edit',$role->id) }}">
                Edit
            </a>
            @endif
            {{--@endcan--}}
            @if(Auth::user()->isSuperAdministrator())
            {!! Form::open([
            'method' => 'POST',
            'url' => ['admin/roles-and-permissions/destroy'],
            'style'=>'display:inline'])
            !!}
            {{ Form::hidden('id', $role->id) }}
            @csrf
            {{method_field('delete')}}
            {!! Form::submit('Delete', [
            'class' => 'btn btn-danger'
            ])
            !!}
            {!! Form::close() !!}
            @endif

        </td>
    </tr>
    @endforeach
</table>
{!! $roles->render() !!}
@endsection