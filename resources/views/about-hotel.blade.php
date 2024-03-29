@extends('layouts.navigation-header-effects')

@section('title', 'About Hotel')

<div class="pages-stack">
	<!-- Top image -->
	@section('top-image')
	<div class="page about-hotel" id="page-home">
		<div id="about-top-image">
			<img src="https://cdn.pixabay.com/photo/2020/04/17/12/24/bed-5054985__340.jpg" style="height: 100%; width: 100%;" />
		</div>
	</div>
	@stop

	@section('first-content')
	<div class="first-div-block">
		<div class="left-image">
			<img src="https://cdn.pixabay.com/photo/2020/04/17/12/24/bed-5054985__340.jpg" />
		</div>
		<div class="right-block">
			<div class="colored-div">
				<small>
					Chacune des 50 chambres et suites du palmsRoyal Design Hotel
					s'inspire du design intérieur contemporain avec une compréhension approfondie
					des tendances mondiales et des concepts innovants. L'élégance intelligente sans
					éléments lourds et exagérations impériales met en place un environnement créatif
					qui inspire et encourage une véritable interaction,
					tandis que le personnel de l'hôtel fournit un service d'une qualité exceptionnelle.
				</small>
			</div>
		</div>
	</div>
	@stop

	@section('second-content')
	<!-- Second Block-->
	<div class="second-div-block">
		<div class="left-block">
			<div class="left-block-content">
				<small class="col-6">
					On ne mérite que l'expérience la plus exaltante et la plus significative.
					Dans cet esprit, nous avons créé un hôtel design unique en son gen
					pour vous - voyageurs, chefs d'entreprise et esprits créatifs qui
					comprennent la vraie valeur de la vie.
				</small>
			</div>
		</div>

		<div class="right-block">
			<img src="https://cdn.pixabay.com/photo/2018/03/01/03/52/furniture-3189674__340.jpg" />
		</div>
	</div>
	@stop

	@section('third-content')
	<!-- Third Block-->

	<div class="third-div-block">
		<div class="left-block">
			<img src="https://cdn.pixabay.com/photo/2018/03/01/03/52/furniture-3189674__340.jpg" />
		</div>

		<div class="right-block">
			<div class="title" style="position: relative; z-index: 1;">
				<h2>palmsRoyal</h2>
			</div>

			<div class="description" style="position: relative; z-index: 1;">
				<small style="font-size: 22px;">
					palmsRoyal représente les onze reflets d'une personnalité accomplie
				</small>
			</div>

			<div class="list-and-block-container">
				<div class="list-container">
					<ul style="color: black; font-size: 14px;">
						<li>CURIOSITÉ</li>
						<li>OPTIMISME</li>
						<li>COURAGE</li>
						<li>LA PASSION</li>
						<li>LA CRÉATIVITÉ</li>
						<li>SENS DE L'HUMOUR</li>
						<li>INDÉPENDANCE</li>
						<li>CONFIANCE</li>
						<li>FIABILITÉ</li>
						<li>GÉNÉROSITÉ</li>
						<li>HARMONIE</li>
					</ul>
				</div>

				<div class="colored-div">

				</div>
			</div>
		</div>
	</div>
	@stop

	@section('fourth-content')
	<!--Fourth Block-->
	<div style="margin-top: 130px; height: 100vh; width: 100%; margin-bottom: 70px;">
		<h2 style="text-align:center; height: 5vh; font-size: 3rem; margin: 20px 0px; position: relative; z-index: 1;">Awards</h2>
		<div style="width: 100%; display: flex; height: 90vh;">
			<div style="width: 50%; padding-top: 40px;" class="trip-advisor-container">
				<div style="width: 35%; margin-left: 70px;  position: relative; z-index: 1;">
					<small style="display: inline-block; color: black;">
						palmsRoyal a été reconnu comme le premier hôtel de Lyon et
						d'Europe par des prix très respectés.
					</small>
				</div>

				<div style="width: 35%; margin-left: 70px; margin-top: 70px;  position: relative; z-index: 1;">
					<h2>TripAdvisor</h2>
					<small style="display: inline-block; color: black;">
						# 1 hôtel sur TripAdvisor à Lyon pendant 4 années consécutives
					</small>
				</div>
			</div>

			<div style="width: 50%; height: 90vh; display: flex; flex-direction: column; justify-content: center; align-items: center;">
				<div class="about-slick" style="width: 100%; display: flex; flex-wrap: wrap; justify-content: center; align-items: center; padding: 0px 10px;">
					<div style="width: 23%;"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR5OQ8vtaczMJCZaBP4K4f6HID6GqnbVXjA-w&usqp=CAU" style="height: 25vh; width: 90%; padding-bottom: 30px;" /></div>
					<div style="width: 23%;"><img src="https://www.worldtravelawards.com/images/shields/web/wta-nominee-shield-2020-share.png?v=1574425286" style="height: 25vh; width: 90%; padding-bottom: 30px;" /></div>
					<div style="width: 23%;"><img src="data:image/png;base64,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" style="height: 25vh; width: 90%; padding-bottom: 30px;" /></div>
					<div style="width: 23%;"><img src="https://www.aiglobalmedialtd.com/wp-content/uploads/2018/01/luxsquarelogo.png" style="height: 25vh; width: 90%; padding-bottom: 30px;" /></div>
					<div style="width: 23%;"><img src="https://comin.madmagz.news/wp-content/uploads/sites/2/2016/04/604499_orig.png" style="height: 25vh; width: 90%; padding-bottom: 30px;" /></div>
					<div style="width: 23%;"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS2CSReT9bQuXrkEHN9BnHQSHgPmShLnbZRZw&usqp=CAU" style="height: 25vh; width: 90%; padding-bottom: 30px;" /></div>
				</div>
			</div>
		</div>

	</div>
	@stop

	<!-- Fifth Block-->
	@section('fifth-content')
	<div id="stay-page" style="position: relative; z-index: 1;">
		<div style="display: flex;" class="stay-page-inner-container">
			<div id="image-div" class="col-7">
				<img src="https://media.istockphoto.com/photos/five-golden-stars-isolated-against-black-rating-concept-3d-stock-picture-id1208252775?b=1&k=6&m=1208252775&s=170667a&w=0&h=XK8xzwdQua7f1uoje9QntAXoyvWom9tclebKzKBW3RQ=" />
			</div>

			<div class="col-5 stay-text">
				<h1 class="about-award-title">World <br /> Boutique <br /> Hotel Awards</h1>
				<small class="col-3 offset-2" style="display: inline-block; color: black;">
					En 2016, palmsRoyal a reçu deux prix extrêmement influents reconnus dans le monde entier:
					le meilleur hôtel de lyon avec 5 étoiles.
				</small>
			</div>
		</div>
	</div>
	@stop

	<!-- Sixth Block-->
	@section('sixth-content')
	<div class="sixth-div-block" style=" position: relative; z-index: 1;">
		<div class="left-block">
			<div class="col-5 offset-7 left-block-title-div">
				<h2>palmsRoyal in Media</h2>
			</div>
			<div class="left-block-content" style="width: 23vw;">
				<small class="col-7" style="display: inline-block; color: black;">
					Beaux visuels et dernières nouvelles sur nos réseaux sociaux et <br />
				</small>
				<small style="display: inline-block; color: black;">
					Suivez nos hashtags sur les plateformes: <br />
					<a href="https://github.com/Mgbams?tab=repositories" target=”_blank”>#MgbamsGithub</a> <a href="https://www.linkedin.com/in/kingsley-mgbams-33b781155/" target=”_blank”>#MgbamsLinkedIn</a>
				</small>
			</div>
		</div>

		<div class="right-block">
			<img src="https://cdn.pixabay.com/photo/2018/03/01/03/52/furniture-3189674__340.jpg" />
		</div>
	</div>
	@stop

	<!--seventh block-->
	@section('seventh-content')
	<div class="special-offers-div about-special-offers" style="position: relative; z-index: 1;">
		<h2>Offres Spéciales</h2>
	</div>
	@stop

	<!--Eight block-->
	@section('eight-content')
	<section id="slideshow-about-center">
		<div class="second-carousel">
			<div><img src="https://cdn.pixabay.com/photo/2018/02/24/17/17/window-3178666__340.jpg" /></div>
			<div><img src="https://cdn.pixabay.com/photo/2015/11/06/11/45/interior-1026452__340.jpg" /></div>
			<div><img src="https://cdn.pixabay.com/photo/2018/08/23/00/11/girl-3624933__340.jpg" /></div>
			<div><img src="https://cdn.pixabay.com/photo/2017/05/31/10/23/manor-house-2359884__340.jpg" /></div>
			<div><img src="https://cdn.pixabay.com/photo/2015/01/10/11/39/hotel-595121__340.jpg" /></div>
			<div><img src="https://cdn.pixabay.com/photo/2016/11/18/17/41/summer-1836046__340.jpg" /></div>
		</div>
	</section>


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
		})
	</script>

	@stop

	<!--Nineth block-->
	@section('nineth-content')
	<div class="special-offers-div" style="display: flex; justify-content: center; align-items: center;">
		<div>
			<small style="margin-bottom: 60px; position: relative; z-index: 50; display: inline-block;"><a href="#" style="font-size: 16px; color: black;">Plus d'espace, plus de temps</a></small>
			<div class="read-more"><a class="special-offers-link read-more-link" href="{{url('more-space')}}" style="font-size: 16px; position: relative; left: 3vw; z-index: 50; color: black;">READ MORE</a></div>
			<div class="about-hotel-svg-container" style="bottom: 10vh; padding: 60px;">
				<svg viewBox="0 0 170 110" preserveAspectRatio="xMinYMin meet" class="about-hotel-svg-content">
					<path stroke="#7f7872" transform="translate(-475 -2950)" fill="white" fill-opacity="0" stroke-width="1" stroke-miterlimit="50" d="M613.07 3029.56C612.01 3030.35 610.94 3031.11 609.88 3031.86 608.81 3032.61 607.74 3033.33 606.66 3034.04 605.59 3034.75 604.51 3035.44 603.43 3036.1 602.35 3036.77 601.27 3037.42 600.19 3038.05 599.1 3038.68 598.02 3039.29 596.93 3039.89 595.84 3040.48 594.75 3041.05 593.66 3041.61 592.57 3042.16 591.48 3042.7 590.38 3043.22 589.29 3043.74 588.2 3044.24 587.1 3044.72 586.01 3045.2 584.92 3045.67 583.82 3046.11 582.73 3046.56 581.64 3046.99 580.54 3047.4 579.45 3047.82 578.36 3048.21 577.27 3048.59 576.18 3048.97 575.09 3049.33 574 3049.68 572.92 3050.02 571.83 3050.35 570.75 3050.66 569.66 3050.98 568.58 3051.27 567.5 3051.55 566.43 3051.83 565.35 3052.1 564.28 3052.34 563.21 3052.59 562.14 3052.82 561.07 3053.04 560.01 3053.26 558.95 3053.46 557.89 3053.64 556.83 3053.83 555.78 3054 554.73 3054.15 553.69 3054.31 552.64 3054.45 551.6 3054.57 550.57 3054.7 549.53 3054.81 548.51 3054.9 547.48 3054.99 546.46 3055.07 545.44 3055.14 544.43 3055.2 543.42 3055.25 542.42 3055.29 541.42 3055.32 540.42 3055.34 539.43 3055.35 538.45 3055.35 537.47 3055.34 536.49 3055.32 535.52 3055.3 534.55 3055.26 533.6 3055.21 532.64 3055.15 531.69 3055.09 530.75 3055.01 529.81 3054.93 528.88 3054.83 527.96 3054.72 527.04 3054.62 526.12 3054.49 525.22 3054.36 524.32 3054.22 523.42 3054.07 522.54 3053.91 521.66 3053.74 520.78 3053.56 519.92 3053.37 519.06 3053.18 518.21 3052.98 517.37 3052.76 516.53 3052.54 515.7 3052.31 514.88 3052.07 514.06 3051.83 513.26 3051.57 512.46 3051.3 511.67 3051.03 510.89 3050.75 510.12 3050.45 509.35 3050.16 508.59 3049.85 507.85 3049.53 507.1 3049.21 506.37 3048.88 505.66 3048.54 504.94 3048.19 504.24 3047.84 503.55 3047.47 502.86 3047.1 502.19 3046.72 501.53 3046.33 500.87 3045.94 500.22 3045.54 499.59 3045.13 498.96 3044.71 498.35 3044.29 497.75 3043.85 497.15 3043.42 496.57 3042.97 496 3042.51 495.43 3042.05 494.88 3041.58 494.35 3041.1 493.81 3040.63 493.29 3040.14 492.79 3039.64 492.29 3039.14 491.81 3038.63 491.34 3038.11 490.87 3037.58 490.43 3037.05 490 3036.51 489.56 3035.97 489.15 3035.42 488.76 3034.86 488.36 3034.3 487.99 3033.74 487.63 3033.16 487.28 3032.58 486.94 3031.99 486.62 3031.39 486.3 3030.8 486.01 3030.19 485.73 3029.58 485.45 3028.96 485.19 3028.34 484.96 3027.7 484.72 3027.07 484.5 3026.43 484.31 3025.78 484.11 3025.13 483.94 3024.47 483.78 3023.81 483.63 3023.14 483.5 3022.47 483.39 3021.79 483.28 3021.1 483.19 3020.41 483.13 3019.71 483.06 3019.02 483.02 3018.31 483 3017.6 482.98 3016.88 482.99 3016.16 483.01 3015.44 483.04 3014.71 483.09 3013.97 483.17 3013.23 483.24 3012.49 483.34 3011.74 483.47 3010.98 483.59 3010.22 483.74 3009.46 483.91 3008.69 484.08 3007.92 484.28 3007.14 484.51 3006.36 484.73 3005.58 484.98 3004.79 485.25 3003.99 485.53 3003.2 485.83 3002.39 486.16 3001.59 486.48 3000.78 486.84 2999.96 487.22 2999.14 487.6 2998.33 488.01 2997.5 488.45 2996.67 488.97 2995.67 489.54 2994.7 490.16 2993.75 490.79 2992.8 491.46 2991.88 492.18 2990.98 492.9 2990.08 493.66 2989.2 494.47 2988.35 495.27 2987.49 496.12 2986.66 497.02 2985.85 497.91 2985.05 498.84 2984.26 499.81 2983.5 500.78 2982.73 501.78 2981.99 502.83 2981.27 503.87 2980.55 504.95 2979.84 506.06 2979.17 507.16 2978.49 508.31 2977.83 509.48 2977.19 510.06 2976.87 510.66 2976.55 511.26 2976.24 511.86 2975.93 512.46 2975.63 513.08 2975.33 513.69 2975.03 514.31 2974.74 514.94 2974.45 515.56 2974.16 516.2 2973.87 516.84 2973.59 517.47 2973.31 518.12 2973.03 518.77 2972.76 519.42 2972.49 520.08 2972.23 520.74 2971.97 521.4 2971.7 522.07 2971.45 522.74 2971.19 523.41 2970.94 524.09 2970.7 524.77 2970.45 525.45 2970.21 526.14 2969.97 526.83 2969.74 527.52 2969.5 528.21 2969.27 528.91 2969.05 529.61 2968.82 530.31 2968.6 531.02 2968.39 531.72 2968.17 532.43 2967.96 533.14 2967.75 533.86 2967.55 534.57 2967.34 535.29 2967.15 536.01 2966.95 536.73 2966.76 537.45 2966.57 538.18 2966.38 538.91 2966.19 539.63 2966.01 540.36 2965.83 541.09 2965.66 541.83 2965.48 542.56 2965.31 543.29 2965.14 544.03 2964.98 544.77 2964.82 545.5 2964.66 546.24 2964.51 546.98 2964.35 547.72 2964.2 548.46 2964.05 549.2 2963.91 549.94 2963.77 550.69 2963.63 551.43 2963.49 552.17 2963.36 552.91 2963.23 553.65 2963.1 554.4 2962.98 555.14 2962.86 555.88 2962.74 556.62 2962.62 557.37 2962.51 558.11 2962.39 558.85 2962.29 559.59 2962.18 560.33 2962.08 561.07 2961.98 561.8 2961.88 562.54 2961.78 563.28 2961.69 564.01 2961.6 564.75 2961.52 565.48 2961.43 566.21 2961.35 566.94 2961.27 567.67 2961.19 568.4 2961.12 569.13 2961.05 569.85 2960.98 570.57 2960.91 571.3 2960.85 572.01 2960.79 572.73 2960.73 573.45 2960.67 574.16 2960.62 574.87 2960.57 575.58 2960.51 576.29 2960.47 576.99 2960.42 577.69 2960.38 578.39 2960.34 579.09 2960.3 579.78 2960.27 580.47 2960.23 581.16 2960.2 581.85 2960.17 582.53 2960.15 583.21 2960.12 583.88 2960.1 584.56 2960.08 585.22 2960.06 586.56 2960.03 587.87 2960.01 589.17 2960 590.46 2959.99 591.73 2959.99 592.97 2960 594.21 2960.02 595.43 2960.04 596.62 2960.08 597.81 2960.11 598.97 2960.16 600.09 2960.21 601.22 2960.27 602.32 2960.34 603.38 2960.41 604.44 2960.49 605.47 2960.57 606.47 2960.67 607.46 2960.76 608.45 2960.88 609.43 2961.02 610.42 2961.15 611.4 2961.31 612.38 2961.49 613.36 2961.66 614.33 2961.86 615.29 2962.08 616.25 2962.3 617.2 2962.54 618.14 2962.79 619.08 2963.05 620.01 2963.33 620.93 2963.63 621.84 2963.93 622.74 2964.25 623.63 2964.58 624.51 2964.92 625.38 2965.28 626.22 2965.66 627.07 2966.03 627.9 2966.43 628.71 2966.85 629.51 2967.27 630.3 2967.7 631.06 2968.16 631.82 2968.62 632.56 2969.09 633.26 2969.59 633.97 2970.08 634.65 2970.6 635.31 2971.13 635.96 2971.67 636.58 2972.22 637.17 2972.8 637.76 2973.37 638.32 2973.97 638.84 2974.58 639.36 2975.19 639.85 2975.82 640.3 2976.47 640.75 2977.12 641.16 2977.8 641.54 2978.48 641.91 2979.17 642.24 2979.88 642.53 2980.61 642.82 2981.34 643.07 2982.09 643.27 2982.85 643.47 2983.62 643.63 2984.4 643.74 2985.21 643.85 2986.01 643.91 2986.83 643.92 2987.67 643.93 2988.51 643.89 2989.37 643.8 2990.25 643.71 2991.13 643.56 2992.02 643.36 2992.94 643.16 2993.85 642.9 2994.79 642.58 2995.74 642.27 2996.69 641.9 2997.66 641.46 2998.65 641.03 2999.64 640.53 3000.64 639.97 3001.67 639.41 3002.69 638.79 3003.73 638.1 3004.79 637.42 3005.85 636.66 3006.93 635.84 3008.03 635.43 3008.57 635 3009.13 634.55 3009.68 634.11 3010.24 633.64 3010.8 633.16 3011.37 632.68 3011.93 632.18 3012.5 631.67 3013.07 631.15 3013.65 630.61 3014.22 630.06 3014.81 629.51 3015.39 628.93 3015.97 628.34 3016.57 627.75 3017.16 627.14 3017.75 626.51 3018.35 625.89 3018.95 625.24 3019.55 624.57 3020.16 623.9 3020.76 623.22 3021.38 622.51 3021.99 621.8 3022.61 621.08 3023.22 620.33 3023.85 619.59 3024.47 618.82 3025.1 618.03 3025.73 617.25 3026.36 616.44 3026.99 615.61 3027.63 614.78 3028.27 613.93 3028.91 613.07 3029.56Q613.07 3029.56 613.07 3029.56">
					</path>
				</svg>
			</div>
		</div>
	</div>
	@stop

	<!--Tenth block-->
	@section('tenth-content')
	<div class="copy">
		<small>&copy; palmsRoyal 2020</small>
	</div>
	@stop
</div>