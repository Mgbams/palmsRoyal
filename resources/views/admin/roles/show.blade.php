@extends('layouts.permission')

@section('content')
<div class="container w-50">
    <div class="mt-5">
        <div>
            <h2> Show Role</h2>
        </div>
        <div>
            <a class="btn btn-primary" href="{{ url('admin/roles-and-permissions/index') }}">
                Back
            </a>
        </div>
    </div>
</div>
<div class="container w-50 mb-3">
    <div class="my-3">
        <strong style="font-size: 20px;">Name: &nbsp;</strong>
        <span style="font-size: 18px;">{{ $role->name }}</span>
    </div>
    <div>
        <strong style="font-size: 1.5rem;">Permissions:</strong>
        @if(!empty($rolePermissions))
        @foreach($rolePermissions as $rolePermission)
        <li style="font-size: 18px; list-style-type: none;">* {{ $rolePermission->name }}</li>
        @endforeach
        @endif
    </div>
</div>

@endsection