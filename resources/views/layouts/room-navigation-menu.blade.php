<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
	<meta name="description" content="Inspiration for on scroll header animations with various effects" />
	<meta name="keywords" content="on scroll, animate, header, transition, css3, 3d, effect, inspiration" />
	<meta name="author" content="Codrops" />
	<link rel="shortcut icon" href="../favicon.ico">
	<link rel="stylesheet" type="text/css" href="{{url('css/header-effects-normalize.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{url('css/header-effects-component.css')}}" />
	<script src="{{url('js/header-effects-modernizr-custom.js')}}"></script>
	<!--using font awesome kit-->
	<script src="https://use.fontawesome.com/c6daccf4ba.js"></script>

	<!--slick-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />
</head>

<body>
	<div class="container">
		<!-- the header that will be animated by adding the respective state class to it -->
		<header id="ha-header" class="ha-header ha-header-large" style="z-index: 999;">
			<div class="ha-header-perspective">
				<div class="ha-header-front">
					<h1><span>palmsRoyal</span></h1>
					<nav>
						<a href="{{ route('show-rooms') }}">&lsaquo; page précédente</a>
						<a>Something</a>
						<a>Anything</a>
						<a href="#">Back to the article</a>
					</nav>
				</div>
				<div class="ha-header-bottom">
					<nav>
						<a href="{{url('/palms-royal-homepage')}}">Home</a>
						<a>Inglenook</a>
						<a>Lagniappe</a>
						<a>Mellifluous</a>
						<a>Erstwhile</a>
						<a>Wafture</a>
						<a>Serendipity</a>
						<a>Love</a>
					</nav>
				</div>
			</div>
		</header>
		<!-- the sections with triggers -->
		<section class="top-image">
			@yield('top-image')
		</section>
		<section class="first-effects-div">
			@yield('first-content')
		</section>
		<section class="ha-waypoint second-effects-div" data-animate-down="ha-header-small" data-animate-up="ha-header-large">
			@yield('second-content')
		</section>
		<section class="ha-waypoint third-effects-div" data-animate-down="ha-header-hide" data-animate-up="ha-header-small">
			@yield('third-content')
		</section>
		<section class="ha-waypoint fourth-effects-div" data-animate-down="ha-header-show" data-animate-up="ha-header-hide">
			@yield('fourth-content')
		</section>
		<section class="ha-waypoint fifth-effects-div" data-animate-down="ha-header-subshow" data-animate-up="ha-header-show">
			@yield('fifth-content')
		</section>
		<section class="ha-waypoint sixth-effects-div dummy-nav" data-animate-down="ha-header-show" data-animate-up="ha-header-subshow">
			<!--Empty div with no content, only used here to enable top header animation-->
		</section>
		<section class="ha-waypoint special-offers dummy-nav" data-animate-down="ha-header-shrink" data-animate-up="ha-header-show">
			<!--Empty div with no content, only used here to enable top header animation-->
		</section>
		<section class="ha-waypoint slideshow-div dummy-nav" data-animate-down="ha-header-rotateBack" data-animate-up="ha-header-shrink">
			<!--Empty div with no content, only used here to enable top header animation-->
		</section>
		<section class="ha-waypoint nineth-content-container dummy-nav" data-animate-down="ha-header-rotate" data-animate-up="ha-header-rotateBack">
			<!--Empty div with no content, only used here to enable top header animation-->
		</section>
		<section class="ha-waypoint tenth-content-container dummy-nav" data-animate-down="ha-header-rotateBack" data-animate-up="ha-header-rotate">
			<!--Empty div with no content, only used here to enable top header animation-->
		</section>

		<section class="ha-waypoint dummy-nav" data-animate-down="ha-header-color" data-animate-up="ha-header-rotateBack">
			<!--Empty div with no content, only used here to enable top header animation-->
		</section>
		<section class="ha-waypoint dummy-nav" data-animate-down="ha-header-small" data-animate-up="ha-header-color">
			<!--Empty div with no content, only used here to enable top header animation-->
		</section>

		{{--<section class="ha-waypoint" data-animate-down="ha-header-box" data-animate-up="ha-header-small">
			<!--Empty div with no content, only used here to enable top header animation-->
		</section>
		<section class="ha-waypoint" data-animate-down="ha-header-fullscreen" data-animate-up="ha-header-box">
			<!--Empty div with no content, only used here to enable top header animation-->
		</section>
		<section class="ha-waypoint" data-animate-down="ha-header-subfullscreen" data-animate-up="ha-header-fullscreen">
			<!--Empty div with no content, only used here to enable top header animation-->
		</section>--}}

	</div>

	<!--Jquery cdn use this version of jquery cdn as it helps maintain the top navbar functional-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

	<script src="{{url('js/waypoints.min.js')}}"></script>

	<!--slick js-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous"></script>

	<script>
		var $head = $('#ha-header');
		$('.ha-waypoint').each(function(i) {
			var $el = $(this),
				animClassDown = $el.data('animateDown'),
				animClassUp = $el.data('animateUp');

			$el.waypoint(function(direction) {
				if (direction === 'down' && animClassDown) {
					$head.attr('class', 'ha-header ' + animClassDown);
				} else if (direction === 'up' && animClassUp) {
					$head.attr('class', 'ha-header ' + animClassUp);
				}
			}, {
				offset: '100%'
			});
		});
	</script>
	<script>
		$(document).ready(() => {
			$(".main_h").animate({
				opacity: 0.5,
				height: "toggle",
				scrollTop: '50px'
			}, 5000, function() {
				// Animation complete.
				$(".main_h").animate({
					opacity: 1,
					height: "toggle",
					scrollBottom: '50px'
				});
			});

			// mixed-carousel slide settings
			$('.mixed-carousel').slick({
				infinite: true,
				slidesToShow: 2,
				slidesToScroll: 1,
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
		// Sticky Header
		$(window).on('scroll', function() {
			console.log('am inside scroll');
			if ($('.main_h').scrollTop() > 100) {
				console.log("greater than 100");
				$('.main_h').addClass('sticky');
			} else {
				console.log("remove 100");
				$('.main_h').removeClass('sticky');
			}
		});

		// Mobile Navigation
		$('.mobile-toggle').click(function() {
			if ($('.main_h').hasClass('open-nav')) {
				$('.main_h').removeClass('open-nav');
			} else {
				$('.main_h').addClass('open-nav');
			}
		});

		$('.main_h li a').click(function() {
			if ($('.main_h').hasClass('open-nav')) {
				$('.navigation').removeClass('open-nav');
				$('.main_h').removeClass('open-nav');
			}
		});

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
</body>

</html>