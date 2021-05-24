@extends('layouts.navigation-menu')

@section('title', 'Available Rooms')

@section('content')
<!-- pages stack -->
<div class="pages-stack">
    <!-- page -->
    <div class="container">
        @if($available_rooms)
        @foreach($available_rooms as $room)
        <div class="d-flex" style="width: 80vw; margin: 100px auto; background-color: #f9efea;">
            <div class="col-md-4" style="height: 50vh; padding-left: 0px;">
                <?php $decodedImages = json_decode($room->url, true); ?>
                <img class="w-100" src="/rooms/images/{{ $decodedImages[0] }}" style="height: 100%; width: 100%; background-size: cover;" />
            </div>
            <div class="col-md-8 d-flex justify-content-between" style="padding-right: 0px;">
                <div>
                    <h3 class="mt-3">{{ $room->name }}</h3>
                    <div class="d-flex justify-content-between my-3">
                        <?php $decodedFacilities = json_decode($room->facilities, true); ?>
                        @switch($decodedFacilities)
                            @case("Wifi")
                                <i class='fa fa-bed' style='font-size:24px; color: black;'></i>
                                @break
                            @case("TV")
                                <i class='fa fa-bath' style='font-size:24px; color: black;'></i>
                                @break
                            @case("Capacity")
                                <i class='fa fa-bath' style='font-size:24px; color: black;'></i>
                                @break
                            @case("Heater")
                                 <i class='fa fa-bath' style='font-size:24px; color: black;'></i>
                                @break
                            @default
                                 <i class='fa fa-bath' style='font-size:24px; color: black;'></i>
                        @endswitch
                    </div>
                    <p class="mt-3" style="width: 250px;">{{ $room->description }}</p>
                </div>
                <div class="d-flex flex-column justify-content-between">
                    <div>
                        <p><input type="radio" checked> Best available rate</p>
                    </div>
                    <div class="d-flex align-items-end">
                        <p class="d-flex justify-content-center align-items-center" style="background-color: #444; color:white; width: 80px; height: 50px; margin: 0px;">{{ $room->price }}&nbsp;&euro;</p>
                        <a class="btn d-flex justify-content-center align-items-center" href="{{url('/paywithpaypal/'.$room->id_room)}}" style="background-color: #A61D27; color: white !important; border-radius: 0px; height: 50px;">BOOK</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @endif
    </div>
</div>

<!--Jquery cdn use this version of jquery cdn as it helps maintain the top navbar functional-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<!--js link for bootstrap modal-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

{{--<script>
    $(document).ready(() => {});
</script>--}}

@stop