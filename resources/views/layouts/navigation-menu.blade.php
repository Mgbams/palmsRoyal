<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <meta name="description" content="A hotel reservation website development" />
    <meta name="keywords" content="palmsRoyal, rooms, hotel, reservation, hotel booking" />
    <meta name="author" content="Mgbams Kingsley" />
    <link rel="shortcut icon" href="../favicon.ico">
    <script src="js/modernizr1-custom.js"></script>

    <!--main css file starts here-->
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
    <!--main css file ends here-->
    <link rel="stylesheet" type="text/css" href="{{url('css/normalize.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('css/style1.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('css/style2.css')}}" />

    <!--slick css file-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" rel="stylesheet">
    <!--slick css End Here-->
</head>

<body>
    <div class="container">
        <ul id="gn-menu" class="gn-menu-main">
            <li class="gn-trigger">
                <a class="gn-icon gn-icon-menu"><span>Menu</span></a>
                <nav class="gn-menu-wrapper">
                    <div class="gn-scroller">
                        <ul class="gn-menu">
                            <li class="gn-search-item">
                                <input placeholder="Search" type="search" class="gn-search">
                                <a class="gn-icon gn-icon-search"><span>Search</span></a>
                            </li>
                            <li>
                                <a href="{{url('/about')}}" class="gn-icon gn-icon-download">About</a>
                            </li>
                            <li><a class="gn-icon gn-icon-cog">Settings</a></li>
                            <li><a class="gn-icon gn-icon-help">Help</a></li>
                            <li>
                                <a href="{{url('/show-rooms')}}" class="gn-icon gn-icon-archive">Rooms</a>
                                <!--<ul class="gn-submenu">
                                    <li><a class="gn-icon gn-icon-article">Articles</a></li>
                                    <li><a class="gn-icon gn-icon-pictures">Images</a></li>
                                    <li><a class="gn-icon gn-icon-videos">Videos</a></li>
                                </ul>-->
                            </li>
                        </ul>
                    </div>
                </nav>
            </li>
            <li><a href="{{url('/palms-royal-homepage')}}">palmsRoyal</a></li>
            {{--<li><a class="codrops-icon codrops-icon-prev" href="#"><span>Previous Demo</span></a></li>--}}
            <li class="d-flex" style="padding-right: 10px;">
                <a class="codrops-icon" href="{{url('/login')}}">
                    <span>Login</span>
                </a>
                <a class="codrops-icon" href="{{url('/register')}}">
                    <span>Register</span>
                </a>
            </li>
        </ul>
        <header>
            @yield('content')
        </header>
    </div>

    <!--js-->
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--slick js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <script src="{{url('js/classie1.js')}}"></script>
    <script src="{{url('js/gnmenu.js')}}"></script>
    <script>
        new gnMenu(document.getElementById('gn-menu'));
    </script>

    <script>
        $(document).ready(() => {
            $('#slideshow .slick').slick({
                dots: true,
                speed: 500,
                fade: true,
                cssEase: 'linear'
            });

            // Second slide settings
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

            // mixed-carousel slide settings
            $('.mixed-carousel').slick({
                infinite: true,
                slidesToShow: 3,
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
        })
    </script>
</body>

</html>