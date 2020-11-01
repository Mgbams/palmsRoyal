<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
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
		<div class="page" id="page-home">
			<div id="slideshow">
			<img src="https://cdn.pixabay.com/photo/2020/04/17/12/24/bed-5054985__340.jpg" style="height: 100%; width: 100%;" />
			</div>

			<div style="width: 100%; height: 100vh; margin-top: 80px; display: flex;">
				<div style="height: 100%; width: 50%;">
					<img src="https://cdn.pixabay.com/photo/2020/04/17/12/24/bed-5054985__340.jpg" style="height: 100%; width: 100%;" />
				</div>
				<div style=" width: 50%; height: 100%; position: relative;">
					<div style="height: 50%; background-color:pink; margin: 0; position: absolute; top: 50%; -ms-transform: translateY(-50%);
  transform: translateY(-50%);" class="col-10">
						<p class="col-6 offset-6" style="position:relative; bottom: 120px;">
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
			<div style="width: 100%; height: 100vh; margin-top: 80px; display: flex;">
				<div style=" width: 50%; height: 100%; position: relative;">
					<div style="height: 50%; background-color:pink; margin: 0; position: absolute; top: 50%; -ms-transform: translateY(-50%);
  transform: translateY(-50%); width: 80%; left: 20%;">
						<p class="col-6" style="position:relative; top: 250px;">
							On ne mérite que l'expérience la plus exaltante et la plus significative.
							Dans cet esprit, nous avons créé un hôtel design unique en son gen
							pour vous - voyageurs, chefs d'entreprise et esprits créatifs qui
							comprennent la vraie valeur de la vie.
						</p>
					</div>
				</div>

				<div style="height: 100%; width: 50%;">
					<img src="https://cdn.pixabay.com/photo/2018/03/01/03/52/furniture-3189674__340.jpg" style="height: 100%; width: 100%;" />
				</div>
			</div>

			<!-- Third Block-->

			<div style="width: 100%; height: 100vh; margin-top: 80px; display: flex;">

				<div style="height: 100%; width: 40%;">
					<img src="https://cdn.pixabay.com/photo/2018/03/01/03/52/furniture-3189674__340.jpg" style="height: 100%; width: 100%;" />
				</div>

				<div style=" width: 60%; height: 100%;">
					<div style="position: relative; bottom: 40px; height: 10vh; text-align: center; font-size: 5rem;">
						<h2 style=" font-size: 4rem;">palmsRoyal</h2>
					</div>

					<div style="height: 25vh;" class="col-3 offset-6">
						<p>
							palmsRoyal représente les onze reflets d'une personnalité accomplie
						</p>
					</div>

					<div style="display: flex; width: 100%; height: 65vh;">
						<div style="width: 30%; height: 65vh;">
							<ul style="list-style-type: none; height: 100%; display: flex; flex-direction:column; justify-content:space-evenly">
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

						<div style="width: 60%; height: 30vh; background-color: pink; margin-top: 30px;">

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
			$('#slideshow .slick').slick({
				dots: true,
				speed: 500,
				fade: true,
				cssEase: 'linear'
			});
		})
	</script>
</body>

</html>