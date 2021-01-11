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
    <div class="container-sm-fluid">
        <input type="hidden" id="hidden-route" name="hidden-route" value="{{ Route::currentRouteName() }}" />
        <input type="hidden" id="hidden-language" name="hidden-language" value="{{ app()->getlocale() }}" />
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
                            <li>
                                <a href="{{url('/show-rooms')}}" class="gn-icon gn-icon-archive">Rooms</a>
                            </li>
                            @if(Auth::check())
                            @if (Auth::user()->role_id == 1 || Auth::user()->role_id == 3 || Auth::user()->role_id == 5)
                            <li><a class="gn-icon gn-icon-cog">Settings</a></li>
                            @endif
                            @endif
                            <li><a class="gn-icon gn-icon-help">Help</a></li>
                        </ul>
                    </div>
                </nav>
            </li>
            <li class="palmsroyal-nav-name"><a href="{{url('/')}}">palmsRoyal</a></li>
            @if(Auth::check())
            @if (Auth::user()->role_id == 1 || Auth::user()->role_id == 3 || Auth::user()->role_id == 5)
            <li><a class="codrops-icon" href="{{url('/admin/dashboard')}}"><span>DashBoard</span></a></li>
            @endif
            @endif

            <li class="d-flex sign-out-display" style="position: relative; top: 0px !important;">
                 @if(Auth::check() &&  Auth::user()->role_id != 3 && Auth::user()->role_id != 5)
                 <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Sign out
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                @endif

                @if(!Auth::check())
                <a class="codrops-icon" href="{{url('/login')}}">
                    <span>Login</span>
                </a>
                @endif
                @if(!Auth::check())
                <a class="codrops-icon" href="{{url('/register')}}">
                    <span>Register</span>
                </a>
                @endif
                 <!-- <select class="form-control Langchange">
                  @foreach (config('app.available_locales') as $locale)
                    <option value="{{ strtoupper($locale) }}" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                  @endforeach
                </select> -->
                
                @foreach (config('app.available_locales') as $locale)
                <a class="lang-change"
                    href="locale/{{$locale}}"
                    @if (app()->getLocale() == $locale) style="font-weight: bold; text-decoration: underline" @endif>{{ strtoupper($locale) }}
                </a>
                @endforeach
       
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
            //language starts here
              /* var url =  $('#hidden-route').val();
              var language =  $('#hidden-language').val();
              window.location.href = url + "?lang="+ language;  */
            //language ends here
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