@extends('layouts.app')

@section('title', 'Admin DashBoard')

@section('content')
<div class="container-sm overflow-hidden mt-5">
    <div class="row">
        <div class="col-md-3">
            <div class="p-3 border bg-light" style="height: 20vh; margin-bottom: 15px;">
                <h5>Total Rooms</h5>
                <div class="d-flex justify-content-between">
                    <div>
                        <small>All Rooms Value</small>
                    </div>
                    <div>
                        <small>&euro;5000</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="p-3 border bg-light" style="height: 20vh; margin-bottom: 15px;">
                <h5>Guests</h5>
                <div class="d-flex justify-content-between">
                    <div>
                        <small>All Guests</small>
                    </div>
                    <div>
                        <small>200</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="p-3 border bg-light" style="height: 20vh; margin-bottom: 15px;">
                <h5>Facilities</h5>
                <div class="d-flex justify-content-between">
                    <div>
                        <small>All Facilities</small>
                    </div>
                    <div>
                        <small>10</small>
                    </div>
                </div>
            </div>
        </div>
       <div class="col-md-3">
            <div class="p-3 border bg-light" style="height: 20vh; margin-bottom: 15px;">
                 <h5>Available Rooms</h5>
                <div class="d-flex justify-content-between">
                    <div>
                        <small>Rooms Not Yet Booked</small>
                    </div>
                    <div>
                        <small>5</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5 row" style="width: 100%;">
        <div class="col-md-6">
            <div class="p-3 border bg-light" style="height: 40vh; margin-bottom: 15px;">
                <h5>New Guests</h5>
                <div class="d-flex justify-content-between mt-3">
                    <div class="d-flex justify-content-between align-items-center" style="width: 20%;">
                        <p><img src="https://latelierduformateur.fr/wp-content/uploads/2018/03/avatar-1606916_960_720.png" class="rounded-circle" style="width: 50px; height: 50px;" /></p>
                        <p>You</p>
                    </div>
                    <div style="width: 15%;" class="d-flex justify-content-between align-items-center" >
                        <p>Admin</p>
                    </div>
                </div>

                <hr style="position: relative; bottom: 25px;" />
            </div>
        </div>
       <div class="col-md-6">
            <div class="p-3 border bg-light" style="height: 40vh; margin-bottom: 15px;">
                <h5>Income</h5>
                <div class="d-flex justify-content-between">
                    <div>
                        <small>Income for the month</small>
                    </div>
                    <div>
                        <small>&euro;12000</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection