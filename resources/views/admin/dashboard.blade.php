@extends('layouts.app')

@section('title', 'Admin DashBoard')

@section('content')
<div class="container-sm overflow-hidden mt-5">
    <div class="row">
        <div class="col-md-4 image-containers">
            <div class="text-block">
                <h4>Nature</h4>
                <p style="color: white;">What a beautiful sunrise</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 border bg-light" style="height: 50vh; margin-bottom: 15px;">Custom column padding</div>
        </div>
        <div class="col-md-4">
            <div class="p-3 border bg-light" style="height: 50vh; margin-bottom: 15px;">Custom column padding</div>
        </div>
    </div>
</div>
@endsection