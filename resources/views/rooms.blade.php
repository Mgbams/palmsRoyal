@extends('layouts.navigation-menu')

@section('title', 'Rooms')

@section('content')
<!-- pages stack -->
<div class="pages-stack">
    <!-- page -->
    
    <div class="page about-hotel container-fluid" id="page-home">
        <div id="about-top-image">
            <img src="https://cdn.pixabay.com/photo/2020/04/17/12/24/bed-5054985__340.jpg" style="height: 100%; width: 100%;" />
            <div class="rooms-header" style="text-align:center; position: absolute; top: 50vh; color: white; width: 100%;">
                <p>explore</p>
                <h1>Rooms & Suites</h1>
            </div>
            <div class="row">
                <p class="logo">palmsRoyal</p>
            </div>
        </div>

        <!--First block of select elements-->
        <form method="post" action="{{ route('filter-rooms') }}" id="rooms-form" >
            @csrf
            <div class="row my-5 room-select">
                <select class="custom-select col-sm-6 col-md-2 ml-4" name="price">
                    <option selected value=""> -- select price -- </option>
                    <option value="100"><= 100</option>
                    <option value="200"><= 200</option>
                    <option value="300"><= 300</option>
                    <option value="400"><= 400</option>
                    <option value="500"><= 500</option>
                    <option value="500"><= 600</option>
                </select>
                <select class="custom-select col-sm-6 col-md-2 ml-2 form-control" name="capacity">
                        <option selected value=""> -- select a capacity -- </option>
                    @foreach($capacity as $capacity)
                        <option value="{{ $capacity->capacity }}"><= {{ $capacity->capacity }} m²</option>
                    @endforeach
                </select>

                 <input type="submit" name="filter_button" class="btn btn-primary px-5 ml-2 filter_button" value="Filter" style="border-radius: 25px;" />
            </div>
        </form>
        
        <!--Second div for rooms-->

        <div id="rooms-page-wrapper">
            <!--FINAL RESULT TO BE USED AS DATA IS USED FROM DATABASE-->
            <!--Change the link for the image to make it work when i conclude the database-->

            @if($rooms)
            @foreach($rooms as $room)
            <div id="rooms-inner-wrapper">
                <div class="room-image-wrapper">
                   <?php $decodedImage = json_decode($room->url , true); ?>
                    <img src="/rooms/images/{{  $decodedImage[0] }}"/>
                </div>
                <h2 class="mt-3 room_name">{{ $room->name }}</h2> 
                <div>
                 @if($room->facilities != 'null')
                 <?php $facility = json_decode($room->facilities, true); ?>
                 <div class="d-flex justify-content-between row flex-wrap room_utils" style="width: 80%; margin: auto;">
                        @if (array_key_exists(0, $facility))
                        <div>
                            <p><i class="fas fa-bed mr-2"></i>{{ $facility[0] }}</p>
                        </div>
                        @endif

                        @if (array_key_exists(1, $facility))
                        <div>
                            <p><i class="fas fa-wifi mr-2"></i>{{ $facility[1] }}</p>
                        </div>
                        @endif

                     
                        @if (array_key_exists(2, $facility))
                        <div>
                            <p><i class="fas fa-bed mr-2"></i>{{ $facility[2] }}</p>
                        </div>
                        @endif
                    

                        @if (array_key_exists(3, $facility))
                        <div>
                            <p><i class="fas fa-wifi mr-2"></i>{{ $facility[3] }}</p>
                        </div>
                        @endif
                     
                 </div>
                 @endif
                </div>
                    <div class="button-wrapper">
                    <div class="details"><a class="special-offers-link read-more-link" href="{{url('/room/'.$room_links[$room->id])}}">DETAILS</a></div>
                </div> 
            </div>
           
            @endforeach

            <div class="row" style="display: flex; justify-content: center; width: 100%;">
                <div>
                    {{ $rooms->links()}}
                </div>
            </div>
            @endif

        </div>
    </div>
</div>


<!--js link for bootstrap modal-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script>
    $(document).ready(() => {
        // Second-carousel slide settings
        $('.second-carousel').slick({
            infinite: true,
            slidesToShow: 2,
            slidesToScroll: 3,
            centerMode: true,
            responsive: [{
                    breakpoint: 1200,
                    settings: {
                        arrows: false,
                        centerMode: true,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        slidesToShow: 1
                    }
                }
            ]
        });
    });
</script>

<script>
    // navigation scroll lijepo radi materem
    $('nav a').click(function(event) {
        var id = $(this).attr("href");
        var offset = 70;
        var target = $(id).offset().top - offset;
        $('html, body').animate({
            scrollTop: target
        }, 500);
        event.preventDefault();
    });
</script>
@stop
