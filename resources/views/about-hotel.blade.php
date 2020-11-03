<!DOCTYPE html>
<html lang="en" class="no-js">

<head>

	<link href='https://fonts.googleapis.com/css?family=Montserrat|Cardo' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.js"></script>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>About Hotel</title>
	<meta name="description" content="Blueprint: A basic template for a page stack navigation effect" />
	<meta name="keywords" content="blueprint, template, html, css, page stack, 3d, perspective, navigation, menu" />
	<meta name="author" content="Codrops" />
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<link rel="stylesheet" type="text/css" href="css/app.css" />
	<script src="js/modernizr-custom.js"></script>

	<!--slick css file-->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" rel="stylesheet">
	<!--slick css End Here-->
</head>

<body>
	<!-- navigation -->
	<nav class="pages-nav">
		<div class="pages-nav__item"><a class="link link--page" href="#page-home">Home</a></div>
		<div class="pages-nav__item"><a class="link link--page" href="#page-docu">Documentation</a></div>
		<div class="pages-nav__item"><a class="link link--page" href="#page-manuals">Manuals</a></div>
		<div class="pages-nav__item"><a class="link link--page" href="#page-software">Software</a></div>
		<div class="pages-nav__item"><a class="link link--page" href="#page-custom">Customization &amp; Settings</a></div>
		<div class="pages-nav__item"><a class="link link--page" href="#page-training">Training</a></div>
		<div class="pages-nav__item pages-nav__item--small"><a class="link link--page link--faded" href="#page-buy">Where to buy</a></div>
		<div class="pages-nav__item pages-nav__item--small"><a class="link link--page link--faded" href="#page-blog">Blog &amp; News</a></div>
		<div class="pages-nav__item pages-nav__item--small"><a class="link link--page link--faded" href="#page-contact">Contact</a></div>
		<div class="pages-nav__item pages-nav__item--social">
			<a class="link link--social link--faded" href="#"><i class="fa fa-twitter"></i><span class="text-hidden">Twitter</span></a>
			<a class="link link--social link--faded" href="#"><i class="fa fa-linkedin"></i><span class="text-hidden">LinkedIn</span></a>
			<a class="link link--social link--faded" href="#"><i class="fa fa-facebook"></i><span class="text-hidden">Facebook</span></a>
			<a class="link link--social link--faded" href="#"><i class="fa fa-youtube-play"></i><span class="text-hidden">YouTube</span></a>
		</div>
	</nav>
	<!-- /navigation-->
	<!-- pages stack -->
	<div class="pages-stack">
		<!-- page -->
		<div class="page about-hotel" id="page-home">
			<div id="about-top-image">
				<img src="https://cdn.pixabay.com/photo/2020/04/17/12/24/bed-5054985__340.jpg" style="height: 100%; width: 100%;" />

				<header class="main_h" style="color: yellow; position: fixed; top: 0px;">

					<div class="row">
						<a class="logo" href="{{url('/about')}}">royalPalms</a>

						<div class="mobile-toggle">
							<span></span>
							<span></span>
							<span></span>
						</div>

						<nav>
							<ul>
								<li><a href=".sec01">Section 01</a></li>
								<li><a href=".sec02">Section 02</a></li>
								<li><a href=".sec03">Section 03</a></li>
								<li><a href=".sec04">Section 04</a></li>
							</ul>
						</nav>

					</div> <!-- / row -->

				</header>

			</div>

			<div class="first-div-block">
				<div class="left-image">
					<img src="https://cdn.pixabay.com/photo/2020/04/17/12/24/bed-5054985__340.jpg" />
				</div>
				<div class="right-block">
					<div class="colored-div" class="col-10">
						<p class="col-6 offset-6">
							Chacune des 50 chambres et suites du palmsRoyal Design Hotel
							s'inspire du design intérieur contemporain avec une compréhension approfondie
							des tendances mondiales et des concepts innovants. L'élégance intelligente sans
							éléments lourds et exagérations impériales met en place un environnement créatif
							qui inspire et encourage une véritable interaction,
							tandis que le personnel de l'hôtel fournit un service d'une qualité exceptionnelle.
						</p>
					</div>
				</div>
			</div>

			<!-- Second Block-->
			<div class="second-div-block">
				<div class="left-block">
					<div class="left-block-content">
						<p class="col-6">
							On ne mérite que l'expérience la plus exaltante et la plus significative.
							Dans cet esprit, nous avons créé un hôtel design unique en son gen
							pour vous - voyageurs, chefs d'entreprise et esprits créatifs qui
							comprennent la vraie valeur de la vie.
						</p>
					</div>
				</div>

				<div class="right-block">
					<img src="https://cdn.pixabay.com/photo/2018/03/01/03/52/furniture-3189674__340.jpg" />
				</div>
			</div>

			<!-- Third Block-->

			<div class="third-div-block">
				<div class="left-block">
					<img src="https://cdn.pixabay.com/photo/2018/03/01/03/52/furniture-3189674__340.jpg" />
				</div>

				<div class="right-block">
					<div class="title">
						<h2>palmsRoyal</h2>
					</div>

					<div class="description">
						<p>
							palmsRoyal représente les onze reflets d'une personnalité accomplie
						</p>
					</div>

					<div class="list-and-block-container">
						<div class="list-container">
							<ul>
								<li><a href="#">CURIOSITÉ</a></li>
								<li><a href="#">OPTIMISME</a></li>
								<li><a href="#">COURAGE</a></li>
								<li><a href="#">LA PASSION</a></li>
								<li><a href="#">LA CRÉATIVITÉ</a></li>
								<li><a href="#">SENS DE L'HUMOUR</a></li>
								<li><a href="#">INDÉPENDANCE</a></li>
								<li><a href="#">CONFIANCE</a></li>
								<li><a href="#">FIABILITÉ</a></li>
								<li><a href="#">GÉNÉROSITÉ</a></li>
								<li><a href="#">HARMONIE</a></li>
							</ul>
						</div>

						<div class="colored-div">

						</div>
					</div>
				</div>
			</div>

			<!--Fourth Block-->
			<div style="margin-top: 70px; height: 100vh; width: 100%;">
				<h2 style="text-align:center; height: 10vh; font-size: 3rem; margin: 20px 0px;">Awards</h2>
				<div style="width: 100%; display: flex; height: 90vh;">
					<div style="width: 50%; padding-top: 40px;">
						<div style="width: 35%; margin-left: 70px;">
							<p>
								palmsRoyal a été reconnu comme le premier hôtel de Lyon et
								d'Europe par des prix très respectés.
							</p>
						</div>

						<div style="width: 35%; margin-left: 70px; margin-top: 70px;">
							<h2>TripAdvisor</h2>
							<p>
								# 1 hôtel sur TripAdvisor à Lyon pendant 4 années consécutives
							</p>
						</div>
					</div>

					<div style="width: 50%; height: 90vh; display: flex; flex-direction: column; justify-content: center; align-items: center;">
						<div class="about-slick" style="width: 100%; display: flex; flex-wrap: wrap; justify-content: center; align-items: center; padding: 0px 10px;">
							<div style="width: 23%;"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR5OQ8vtaczMJCZaBP4K4f6HID6GqnbVXjA-w&usqp=CAU" style="height: 25vh; width: 90%; padding-bottom: 30px;" /></div>
							<div style="width: 23%;"><img src="https://www.worldtravelawards.com/images/shields/web/wta-nominee-shield-2020-share.png?v=1574425286" style="height: 25vh; width: 90%; padding-bottom: 30px;" /></div>
							<div style="width: 23%;"><img src="data:image/png;base64,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" style="height: 25vh; width: 90%; padding-bottom: 30px;" /></div>
							<div style="width: 23%;"><img src="https://www.aiglobalmedialtd.com/wp-content/uploads/2018/01/luxsquarelogo.png" style="height: 25vh; width: 90%; padding-bottom: 30px;" /></div>
							<div style="width: 23%;"><img src="https://nihi.com/wp-content/uploads/2019/12/tlaward-1000x1000.jpg" style="height: 25vh; width: 90%; padding-bottom: 30px;" /></div>
							<div style="width: 23%;"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS2CSReT9bQuXrkEHN9BnHQSHgPmShLnbZRZw&usqp=CAU" style="height: 25vh; width: 90%; padding-bottom: 30px;" /></div>
							<div style="width: 23%;"><img src="https://www.ihgplc.com/-/media/ihg/images/about-us/awards/finder-award-green.png?h=1080&la=en&w=1080&hash=BED2675317D654E88BACD404B23C69FB" style="height: 25vh; width: 90%; padding-bottom: 30px;" /></div>
							<div style="width: 23%;"><img src="https://luzgrandhotel.fr/wp-content/uploads/2019/09/2019-hotel-awards-winner-logo-le-grand-hotel-thalasso-et-spa-prix-du-mei.jpg" style="height: 25vh; width: 90%; padding-bottom: 30px;" /></div>
							<div style="width: 23%;"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQWqr52pyZKDKBxqYGuAg5lI8EP2Ro8NPjrRA&usqp=CAU" style="height: 25vh; width: 90%; padding-bottom: 30px;" /></div>
							<div style="width: 23%;"><img src="https://www.rasahospitality.com/images/awards/Luxelife-Magazine.jpg" style="height: 25vh; width: 90%; padding-bottom: 30px;" /></div>
							<div style="width: 23%;"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTrqhrhtl7gwTl-OpLZGqgHltuxZtgh1IqEHg&usqp=CAU" style="height: 25vh; width: 90%; padding-bottom: 30px;" /></div>
							<div style="width: 23%;"><img src="data:image/jpeg;base64,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" style="height: 25vh; width: 90%; padding-bottom: 30px;" /></div>
						</div>
					</div>
				</div>

			</div>

		</div>



		<!-- /page -->
		<div class="page" id="page-docu">
			<header class="bp-header cf">
				<h1 class="bp-header__title">Documentation</h1>
				<p class="bp-header__desc">Based on Ilya Kostin's Dribbble shot <a href="https://dribbble.com/shots/2286042-Stacked-navigation">Stacked navigation</a></p>
				<p class="info">
					"We cannot have peace among men whose hearts find delight in killing any living creature." &mdash; Rachel Carson
				</p>
			</header>
			<img class="poster" src="images/6.jpg" alt="img06" />
		</div>
		<div class="page" id="page-manuals">
			<header class="bp-header cf">
				<h1 class="bp-header__title">Manuals</h1>
				<p class="bp-header__desc">Based on Ilya Kostin's Dribbble shot <a href="https://dribbble.com/shots/2286042-Stacked-navigation">Stacked navigation</a></p>
				<p class="info">
					"When you adopt a vegan diet we make a connection, you don't go back, it is not a diet, it is a lifestyle." &mdash; Freelee Frugivore
				</p>
			</header>
			<img class="poster" src="images/2.jpg" alt="img02" />
		</div>
		<div class="page" id="page-software">
			<header class="bp-header cf">
				<h1 class="bp-header__title">Software &amp; Downloads</h1>
				<p class="bp-header__desc">Based on Ilya Kostin's Dribbble shot <a href="https://dribbble.com/shots/2286042-Stacked-navigation">Stacked navigation</a></p>
				<p class="info">
					"I decided to pick the diet that I thought would maximize my chances of long-term survival." &mdash; Al Gore
				</p>
			</header>
			<img class="poster" src="images/3.jpg" alt="img03" />
		</div>
		<div class="page" id="page-custom">
			<header class="bp-header cf">
				<h1 class="bp-header__title">Customization &amp; Settings</h1>
				<p class="bp-header__desc">Based on Ilya Kostin's Dribbble shot <a href="https://dribbble.com/shots/2286042-Stacked-navigation">Stacked navigation</a></p>
				<p class="info">
					"You have to make a conscious decision to change for your own well-being, that of your family and your country." &mdash;Bill Clinton
				</p>
			</header>
			<img class="poster" src="images/4.jpg" alt="img04" />
		</div>
		<div class="page" id="page-training">
			<header class="bp-header cf">
				<h1 class="bp-header__title">Training &amp; Learning Center</h1>
				<p class="bp-header__desc">Based on Ilya Kostin's Dribbble shot <a href="https://dribbble.com/shots/2286042-Stacked-navigation">Stacked navigation</a></p>
				<p class="info">
					"The moment I began to understand what was going on with the treatment of animals, it led me more and more in the way of the path I am [on] now, which is a complete vegan." &mdash; Bryan Adams
				</p>
			</header>
			<img class="poster" src="images/5.jpg" alt="img05" />
		</div>
		<div class="page" id="page-buy">
			<header class="bp-header cf">
				<h1 class="bp-header__title">Where to buy</h1>
				<p class="bp-header__desc">Based on Ilya Kostin's Dribbble shot <a href="https://dribbble.com/shots/2286042-Stacked-navigation">Stacked navigation</a></p>
				<p class="info">
					"When people ask me why I don't eat meat or any other animal products, I say, 'Because they are unhealthy and they are the product of a violent and inhumane industry.'" &mdash;
				</p>
			</header>
			<img class="poster" src="images/6.jpg" alt="img06" />
		</div>
		<div class="page" id="page-blog">
			<header class="bp-header cf">
				<h1 class="bp-header__title">Blog &amp; News</h1>
				<p class="bp-header__desc">Based on Ilya Kostin's Dribbble shot <a href="https://dribbble.com/shots/2286042-Stacked-navigation">Stacked navigation</a></p>
				<p class="info">
					"The question is not, 'Can they reason?' nor, 'Can they talk?' but rather, 'Can they suffer?" &mdash; Jeremy Bentham
				</p>
			</header>
			<img class="poster" src="images/1.jpg" alt="img01" />
		</div>
		<div class="page" id="page-contact">
			<header class="bp-header cf">
				<h1 class="bp-header__title">Contact</h1>
				<p class="bp-header__desc">Based on Ilya Kostin's Dribbble shot <a href="https://dribbble.com/shots/2286042-Stacked-navigation">Stacked navigation</a></p>
				<p class="info">
					"Man is the only animal that can remain on friendly terms with the victims he intends to eat until he eats them." &mdash; Samuel Butler
				</p>
			</header>
			<img class="poster" src="images/4.jpg" alt="img04" />
		</div>
	</div>

	<!-- /pages-stack -->
	<button class="menu-button"><span>Menu</span></button>
	<script src="js/classie.js"></script>
	<script src="js/main.js"></script>

	<!--js-->
	<script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!--slick js-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

	<script>
		$(document).ready(() => {
			$('.about-slick').slick({
				slidesPerRow: 3,
				rows: 2,
				responsive: [{
					breakpoint: 478,
					settings: {
						slidesPerRow: 1,
						rows: 1,
					}
				}]
			});

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
		})
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