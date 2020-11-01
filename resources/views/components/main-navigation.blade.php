<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Blueprint: Page Stack Navigation</title>
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
		<div class="page" id="page-home">
			<!-- Blueprint header -->
			<!--<header class="bp-header cf">
				<span class="bp-header__present">Blueprint <span class="bp-tooltip bp-icon bp-icon--about" data-content="The Blueprints are a collection of basic and minimal website concepts, components, plugins and layouts with minimal style for easy adaption and usage, or simply for inspiration."></span></span>
				<h1 class="bp-header__title">Page Stack Navigation</h1>
				<p class="bp-header__desc">Based on Mgbams kingsley's design<a href="https://dribbble.com/shots/2286042-Stacked-navigation">Stacked navigation</a></p>
				<nav class="bp-nav">
					<a class="bp-nav__item bp-icon bp-icon--prev" href="http://tympanus.net/Blueprints/ZoomSlider/" data-info="previous Blueprint"><span>Previous Blueprint</span></a>

					<a class="bp-nav__item bp-icon bp-icon--drop" href="http://tympanus.net/codrops/?p=25311" data-info="back to the Codrops article"><span>back to the Codrops article</span></a>
					<a class="bp-nav__item bp-icon bp-icon--archive" href="http://tympanus.net/codrops/category/blueprints/" data-info="Blueprints archive"><span>Go to the archive</span></a>
				</nav>
			</header>
			<img class="poster" src="images/1.jpg" alt="img01" />-->
			<section id="slideshow">
				<div class="slick">
					<div><img src="https://cdn.pixabay.com/photo/2015/12/28/10/19/hotel-1111199__340.jpg" /></div>
					<div><img src="https://cdn.pixabay.com/photo/2015/03/26/10/01/burj-al-arab-690768__340.jpg" /></div>
					<div><img src="https://cdn.pixabay.com/photo/2015/10/01/13/08/beach-966994__340.jpg" /></div>
				</div>
			</section>

			<!-- Adding About royal palms info using component -->
			<x-about-royal-palms />
			<!-- Adding stay block using component -->
			<x-stay-block />
			<!-- Adding image block using component -->
			<x-homepage-room-image />
			<!-- Adding Eat and Drink block using component -->
			<x-eat-and-drink />
			<div class="special-offers-div">
				<h2>Offres Spéciales</h2>
			</div>
			<section id="slideshow-center">
				<div class="second-carousel">
					<div><img src="https://cdn.pixabay.com/photo/2018/02/24/17/17/window-3178666__340.jpg" /></div>
					<div><img src="https://cdn.pixabay.com/photo/2015/11/06/11/45/interior-1026452__340.jpg" /></div>
					<div><img src="https://cdn.pixabay.com/photo/2018/08/23/00/11/girl-3624933__340.jpg" /></div>
					<div><img src="https://cdn.pixabay.com/photo/2017/05/31/10/23/manor-house-2359884__340.jpg" /></div>
					<div><img src="https://cdn.pixabay.com/photo/2015/01/10/11/39/hotel-595121__340.jpg" /></div>
					<div><img src="https://cdn.pixabay.com/photo/2016/11/18/17/41/summer-1836046__340.jpg" /></div>
				</div>
			</section>
			<div class="special-offers-div">
				<p><a class="special-offers-link" href="#">Plus d'espace, plus de temps</a></p>
				<div class="read-more"><a class="special-offers-link read-more-link" href="#">READ MORE</a></div>
			</div>
			<div id="mixed-div-slider-container" style="width: 100vw; height: 100vh; margin-top: 50px;">
				<div id="mixed-div-coloured" style="width: 50%; height: 100vh;  background-color: pink; padding-top: 27vh;">
					<div class="mixed-carousel" style="width: 90vw; height: 60vh; margin-left: 6vw;">
						<div>
							<img src="https://images.pexels.com/photos/2227774/pexels-photo-2227774.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" />
							<div style="width: 18vw; height: 19vh; padding-top: 10px;">
								<p><a href="#">palmsRoyal Brand remporte deux prix TripAdvisor</a></p>
								<div class="readmore">
									<a href="#">READ MORE</a>
								</div>
							</div>
						</div>
						<div>
							<img src="https://images.pexels.com/photos/2670273/pexels-photo-2670273.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" />
							<div style="width: 18vw; height: 19vh; padding-top: 10px;">
								<p><a href="#">palmsRoyal est le meilleur bar d'hôtel de Lyon</a></p>
								<div class="readmore">
									<a href="#">READ MORE</a>
								</div>
							</div>
						</div>
						<div>
							<img src="https://images.pexels.com/photos/1769392/pexels-photo-1769392.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" />
							<div style="width: 18vw; height: 19vh; padding-top: 10px;">
								<p><a href="#">Histoires de palmiersRoyal - Mgbams Kingsley</a></p>
								<div class="readmore">
									<a href="#">READ MORE</a>
								</div>
							</div>
						</div>
						<div>
							<img src="https://cdn.pixabay.com/photo/2016/03/16/22/17/hotel-room-1261900__340.jpg" />
							<div style="width: 18vw; padding-top: 10px; height: 19vh;">
								<p><a href="#">palmsRoyal Brand remporte deux prix TripAdvisor</a></p>
								<div class="readmore">
									<a href="#">READ MORE</a>
								</div>
							</div>
						</div>
						<div>
							<img src="https://cdn.pixabay.com/photo/2017/08/09/10/42/hotel-rooms-2614141__340.jpg" />
							<div style="width: 18vw; height: 19vh; padding-top: 10px;">
								<p><a href="#">palmsRoyal remporte un prix de style de vie de luxe</a></p>
								<div class="readmore">
									<a href="#">READ MORE</a>
								</div>
							</div>
						</div>
						<div>
							<img src="https://cdn.pixabay.com/photo/2015/11/02/06/46/hotel-1018039__340.jpg" />
							<div style="width: 18vw; height: 19vh; padding-top: 10px;">
								<p><a href="#">palm Royale pour vos meilleurs plats africains</a></p>
								<div class="readmore">
									<a href="#">READ MORE</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="left-image-homepage">
				<img src="https://cdn.pixabay.com/photo/2020/07/08/01/49/outdoors-5382306__340.jpg" />
			</div>

			<div>
				<div style="text-align: center;">
					<h2>Quartier</h2>
				</div>
				<div class="col-5 offset-6">
					<p>Découvrez les sites, les attractions, les centres commerciaux, 
						la vie nocturne haut de gamme,
						si que des activités culturelles et de divertissement proposées par le quartier.
					</p>
				</div>
				<div class="read-more offset-6">
					<p><a href="#">EXPLORE</a></p>
				</div>
			</div>

			<div id="new-emotions">
				<img src="https://i.pinimg.com/originals/ba/c1/18/bac11813914b84eb0ac73b7bb577a22b.gif" />
				<p class="col-4">Découvrez de nouvelles émotions et laissez-vous inspirer par l'ambiance locale</p>
			</div>

			<div class="about-hotel-link">
				<p><a href="#">About Hotel </a><a href="#" id="hotelLink"><i class="fa fa-arrow-right"></i></a></p>
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