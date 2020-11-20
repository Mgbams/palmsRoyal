@extends('layouts.room-navigation-menu')

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
	<div class="room-details-first-div" style="display: flex; height: 100vh; width: 100vw;">
		<div class="room-details-left" style="height: 100%; width: 50%; position: relative; z-index: 50;">
			<P style="font-size: 20px; text-align: center;">01 - APPRENDRE ENCORE PLUS</P>
			<h3 style="font-size: 20px; text-align: center;">À PROPOS DE CETTE CHAMBRE</h3>
			<div style="display: flex; justify-content: center;">
				<p class="col-6" style="height: 100%; width: 50%; position: relative; z-index: 2; font-size: 18px; line-height: 1.6;">
					Nos chambres doubles de luxe avec vue sur le Cervin
					sont conçues dans un style boutique européen et disposent
					d'un grand lit double Queen Size ou de deux lits simples.
					Le grand salon avec canapé peut accueillir un lit d'appoint.
					Assis sur les chaises longues du balcon orienté au sud, vous pourrez
					profiter de la vue imprenable sur le Cervin, de l'air frais
					des montagnes et du doux soleil de l'après-midi.
				</p>
			</div>
			<div style="position: relative;">
				<a href="{{url('/about')}}" style="font-size: 16px; position: absolute; left: 17vw; top: 8vh; text-decoration: none; z-index: 10;">BOOK NOW</a>
				<div style="position: absolute; left: 13vw;">
					<svg viewBox="0 0 197 112" class="btn-border" style="width: 190px; height: 140px; left: 0px; top: 0px;">
						<path stroke="#7f7872" transform="translate(-20 -2143)" d="M31.15 2208.32C31.26 2207.22 31.43 2206.13 31.66 2205.06 31.88 2203.99 32.15 2202.93 32.48 2201.88 32.81 2200.84 33.18 2199.8 33.61 2198.78 34.04 2197.75 34.52 2196.74 35.05 2195.74 35.58 2194.74 36.16 2193.75 36.79 2192.77 37.42 2191.8 38.1 2190.83 38.83 2189.87 39.56 2188.92 40.34 2187.97 41.17 2187.04 42 2186.11 42.87 2185.18 43.8 2184.27 44.72 2183.36 45.7 2182.46 46.72 2181.57 47.23 2181.12 47.75 2180.68 48.28 2180.24 48.82 2179.8 49.36 2179.36 49.92 2178.93 50.48 2178.49 51.05 2178.06 51.63 2177.63 52.21 2177.2 52.81 2176.77 53.41 2176.35 54.02 2175.92 54.63 2175.5 55.26 2175.08 55.89 2174.66 56.53 2174.24 57.18 2173.83 57.83 2173.41 58.49 2173 59.17 2172.59 59.84 2172.18 60.53 2171.77 61.22 2171.37 61.92 2170.96 62.63 2170.56 63.35 2170.16 64.07 2169.76 64.8 2169.36 65.54 2168.96 66.28 2168.57 67.04 2168.17 67.8 2167.78 68.57 2167.39 69.34 2167 70.13 2166.62 70.92 2166.23 71.72 2165.85 72.52 2165.46 73.33 2165.08 74.15 2164.7 74.98 2164.33 75.82 2163.95 76.7 2163.56 77.62 2163.16 78.54 2162.76 79.51 2162.35 80.51 2161.93 81.52 2161.51 82.57 2161.08 83.66 2160.65 84.74 2160.22 85.86 2159.78 87.02 2159.34 88.18 2158.9 89.37 2158.45 90.6 2158.01 91.82 2157.56 93.08 2157.11 94.36 2156.66 95.01 2156.44 95.66 2156.21 96.31 2155.99 96.97 2155.77 97.63 2155.54 98.3 2155.32 98.97 2155.1 99.65 2154.87 100.33 2154.65 101.01 2154.43 101.7 2154.21 102.39 2153.99 103.08 2153.77 103.78 2153.56 104.48 2153.34 105.19 2153.12 105.9 2152.91 106.61 2152.7 107.33 2152.48 108.04 2152.27 108.77 2152.06 109.49 2151.85 110.22 2151.65 110.95 2151.44 111.68 2151.24 112.42 2151.03 113.16 2150.83 113.89 2150.63 114.64 2150.44 115.38 2150.24 116.13 2150.05 116.88 2149.85 117.63 2149.66 118.38 2149.48 119.14 2149.29 119.9 2149.11 120.65 2148.92 121.41 2148.74 122.18 2148.57 122.94 2148.39 123.7 2148.22 124.47 2148.05 125.24 2147.88 126 2147.72 126.77 2147.56 127.54 2147.4 128.31 2147.24 129.08 2147.09 129.85 2146.94 130.63 2146.79 131.4 2146.65 132.17 2146.51 132.95 2146.37 133.72 2146.24 134.49 2146.1 135.27 2145.98 136.04 2145.85 136.81 2145.73 137.59 2145.61 138.36 2145.5 139.13 2145.39 139.9 2145.28 140.68 2145.18 141.45 2145.08 142.22 2144.98 142.99 2144.89 143.75 2144.81 144.52 2144.72 145.29 2144.65 146.05 2144.57 146.82 2144.5 147.58 2144.43 148.34 2144.37 149.1 2144.31 149.86 2144.26 150.61 2144.21 151.37 2144.17 152.12 2144.13 152.87 2144.09 153.62 2144.06 154.37 2144.04 155.11 2144.02 155.85 2144 156.59 2144 157.33 2143.99 158.07 2143.99 158.8 2144 159.53 2144 160.25 2144.02 160.98 2144.04 161.7 2144.07 162.42 2144.1 163.13 2144.14 163.84 2144.18 164.55 2144.23 165.25 2144.29 165.95 2144.35 166.65 2144.41 167.34 2144.49 168.04 2144.56 168.72 2144.65 169.4 2144.74 170.08 2144.83 170.76 2144.94 171.42 2145.05 172.09 2145.16 172.75 2145.28 173.41 2145.41 174.72 2145.68 176 2145.98 177.25 2146.32 178.5 2146.66 179.73 2147.05 180.91 2147.48 182.1 2147.9 183.26 2148.37 184.38 2148.89 185.5 2149.41 186.58 2149.97 187.62 2150.58 188.66 2151.19 189.67 2151.84 190.63 2152.55 191.59 2153.25 192.51 2154.01 193.38 2154.82 194.25 2155.63 195.08 2156.49 195.86 2157.4 196.64 2158.31 197.37 2159.28 198.05 2160.31 198.72 2161.33 199.35 2162.38 199.94 2163.44 200.52 2164.51 201.06 2165.59 201.56 2166.7 202.05 2167.8 202.5 2168.93 202.91 2170.06 203.31 2171.2 203.67 2172.35 203.99 2173.52 204.31 2174.69 204.58 2175.87 204.81 2177.06 205.05 2178.25 205.24 2179.45 205.38 2180.66 205.53 2181.87 205.64 2183.09 205.7 2184.31 205.77 2185.54 205.79 2186.77 205.78 2188.01 205.76 2189.24 205.71 2190.48 205.62 2191.73 205.52 2192.97 205.39 2194.21 205.22 2195.46 205.05 2196.7 204.84 2197.95 204.59 2199.19 204.34 2200.43 204.06 2201.67 203.74 2202.9 203.42 2204.14 203.06 2205.36 202.67 2206.59 202.28 2207.81 201.85 2209.02 201.39 2210.23 200.93 2211.44 200.43 2212.63 199.9 2213.82 199.37 2215 198.8 2216.18 198.2 2217.34 197.61 2218.49 196.98 2219.64 196.31 2220.77 195.65 2221.9 194.96 2223.01 194.23 2224.11 193.5 2225.2 192.75 2226.28 191.96 2227.34 191.17 2228.39 190.35 2229.43 189.5 2230.44 188.65 2231.45 187.78 2232.44 186.87 2233.41 185.96 2234.37 185.03 2235.31 184.07 2236.23 183.1 2237.14 182.11 2238.02 181.1 2238.88 180.08 2239.73 179.03 2240.56 177.96 2241.35 177.43 2241.75 176.89 2242.14 176.34 2242.52 175.79 2242.9 175.24 2243.27 174.67 2243.64 174.11 2244 173.55 2244.36 172.97 2244.7 172.4 2245.05 171.82 2245.39 171.23 2245.71 170.65 2246.04 170.06 2246.36 169.46 2246.67 168.86 2246.98 168.26 2247.28 167.65 2247.57 167.04 2247.87 166.42 2248.15 165.8 2248.42 165.18 2248.69 164.55 2248.95 163.92 2249.2 163.28 2249.45 162.65 2249.7 162 2249.93 161.36 2250.16 160.71 2250.38 160.05 2250.59 159.4 2250.79 158.74 2250.99 158.07 2251.18 157.41 2251.37 156.73 2251.54 156.06 2251.71 155.38 2251.87 154.7 2252.03 154.01 2252.17 153.33 2252.31 152.63 2252.44 151.94 2252.56 151.24 2252.68 150.54 2252.79 149.83 2252.88 149.12 2252.97 148.41 2253.06 147.69 2253.13 146.98 2253.19 146.25 2253.26 145.52 2253.32 144.79 2253.38 144.06 2253.44 143.31 2253.49 142.57 2253.55 141.82 2253.6 141.06 2253.64 140.31 2253.68 139.55 2253.72 138.78 2253.76 138.02 2253.8 137.24 2253.83 136.47 2253.86 135.69 2253.88 134.91 2253.91 134.12 2253.93 133.34 2253.95 132.54 2253.96 131.75 2253.97 130.95 2253.98 130.15 2253.99 129.35 2253.99 128.55 2253.99 127.74 2253.99 126.93 2253.98 126.12 2253.97 125.31 2253.96 124.49 2253.95 123.68 2253.93 122.86 2253.91 122.03 2253.88 121.21 2253.86 120.39 2253.83 119.56 2253.8 118.74 2253.76 117.91 2253.72 117.08 2253.68 116.25 2253.64 115.41 2253.59 114.58 2253.54 113.75 2253.49 112.91 2253.43 112.08 2253.37 111.24 2253.31 110.41 2253.25 109.57 2253.18 108.73 2253.11 107.9 2253.03 107.06 2252.95 106.22 2252.87 105.38 2252.79 104.55 2252.7 103.71 2252.61 102.87 2252.52 102.04 2252.42 101.2 2252.32 100.37 2252.22 99.53 2252.11 98.7 2252.01 97.87 2251.9 97.04 2251.78 96.2 2251.66 95.37 2251.54 94.55 2251.42 93.72 2251.29 92.89 2251.16 92.07 2251.02 91.25 2250.89 90.43 2250.75 89.61 2250.6 88.79 2250.46 87.98 2250.31 87.16 2250.15 86.35 2250 85.54 2249.84 84.74 2249.67 83.93 2249.51 83.13 2249.34 82.33 2249.17 81.54 2248.99 80.74 2248.81 79.95 2248.63 79.17 2248.44 78.38 2248.25 77.6 2248.06 76.82 2247.87 76.05 2247.67 75.28 2247.46 74.51 2247.26 73.74 2247.05 72.98 2246.84 72.23 2246.62 71.47 2246.41 70.73 2246.18 69.98 2245.96 69.24 2245.73 68.5 2245.49 67.77 2245.26 67.04 2245.02 66.32 2244.78 65.6 2244.53 64.89 2244.28 64.18 2244.03 63.47 2243.78 62.77 2243.52 62.08 2243.25 61.39 2242.99 60.71 2242.72 60.03 2242.44 59.36 2242.17 58.69 2241.89 58.03 2241.6 57.37 2241.32 56.72 2241.03 56.08 2240.73 55.44 2240.43 54.8 2240.13 54.18 2239.83 53.56 2239.52 52.94 2239.21 52.34 2238.89 51.73 2238.58 51.14 2238.25 50.56 2237.93 49.39 2237.27 48.26 2236.6 47.18 2235.9 46.09 2235.2 45.05 2234.48 44.06 2233.74 43.07 2233 42.12 2232.24 41.23 2231.46 40.33 2230.67 39.49 2229.87 38.7 2229.04 37.91 2228.21 37.17 2227.36 36.5 2226.49 35.82 2225.61 35.19 2224.72 34.63 2223.8 34.07 2222.88 33.57 2221.94 33.13 2220.98 32.69 2220.02 32.32 2219.03 32.01 2218.02 31.71 2217.01 31.47 2215.98 31.3 2214.93 31.13 2213.87 31.03 2212.79 31 2211.69 30.97 2210.59 31.02 2209.46 31.15 2208.32Q31.15 2208.32 31.15 2208.32" fill="white" fill-opacity="0" stroke-width="1" stroke-miterlimit="50">
						</path>
					</svg>
				</div>
			</div>
		</div>
		<div class="room-details-right" style="height: 100%; width: 50%; position: relative; z-index: 50;">
			<p style="font-size: 18px; height: 5vh;">- ROOM FACILITIES</p>
			<div class="FACILITIES" style="display: flex; height: 95vh;">
				<div style="width: 50%; background-color: yellow; height: 100%;"> hi</div>
				<div style="width: 50%; background-color: green; height: 100%;">hello</div>
			</div>
		</div>
	</div>
	@stop

	@section('second-content')
	<!-- Second Block-->
	<div class="room-details-second-div" style="width: 100vw; height: 100vh; margin-top: 150px; display:flex;">
		<div style="position: relative; bottom: 40vh; writing-mode: vertical-lr; width: 5vw; height: 100vh; text-align: center; color: black; letter-spacing: 2.5;">
			COURTYARD DELUXE
		</div>
		<div class="right-block" style="width: 70vw; height: 100vh; display: flex; justify-content: center; align-items: center;">
			<div class="right-block-inner" style="width: 60vw; height: 50%; display: flex; position: relative; left: 25vw; justify-content: space-between">
				<div class="right-block-inner-first" style="width: 40%; height: 80%;">

				</div>
				<div class="right-block-inner-second" style="width: 40%; height: 80%;">

				</div>
			</div>
		</div>
	</div>
	@stop

	@section('third-content')
	<!-- Third Block-->

	<div class="room-details-third-block" style="z-index: 50; position: relative; margin-top: 100px; width: 50vw; flex-direction: column; display: flex; justify-content: center; align-items: center;">
		<h3 style="font-size: 18px;">INFORMATION ADDITIONNELLE</h3>
		<p style="font-size: 16px; width: 20vw;">
			Ce type de chambre est disponible avec une porte
			communicante vers nos chambres doubles standard,
			offrant la solution parfaite pour les familles de trois à cinq personnes.
		</p>
	</div>
	@stop

	@section('fourth-content')
	<!--Fourth Block-->
	<div class="room-details-third-block" style="position: relative; z-index: 50; margin-top: 100px; width: 50vw; flex-direction: column; display: flex; justify-content: center; align-items: center;">
		<div style="display: flex; justify-content: space-between;">
			<span style="color: black; margin-right: 30px;">02</span>
			<span style="position: relative; top: 3vh; width: 40px; height: 1px; border: 0.02px solid black; margin-right: 30px;"></span>
			<span style="color: black;">EXPLORE</span>
		</div>
		<h3 style="font-size: 20px; margin-top: 40px;">CHAMBRES &nbsp;&nbsp; SIMILAIRES</h3>
	</div>
	@stop

	<!-- Fifth Block-->
	@section('fifth-content')
	<div style="width: 100vw; height: 100vh;">
		<div class="mixed-carousel" style="width: 90vw; height: 95vh; margin-left: 3vw;">
			<div>

				<img src="https://images.pexels.com/photos/2227774/pexels-photo-2227774.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" />

				<div style="width: 80%; height: 35vh; position: relative; z-index: 100; padding-top: 30px;">
					<p style="width: 80%; margin: auto;"><a href="#">palmsRoyal Brand remporte deux prix TripAdvisor</a></p>
					<div class="readmore" style="text-align: center; padding-top: 20px;">
						<a href="#">READ MORE</a>
					</div>
				</div>
			</div>
			<div>
				<img src="https://images.pexels.com/photos/2670273/pexels-photo-2670273.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" />

				<div style="width: 80%; height: 35vh; position: relative; z-index: 100; padding-top: 30px;">
					<p style="width: 80%; margin: auto;"><a href="#">palmsRoyal Brand remporte deux prix TripAdvisor</a></p>
					<div class="readmore" style="text-align: center; padding-top: 20px;">
						<a href="#">READ MORE</a>
					</div>
				</div>
			</div>
			<div>
				<img src="https://images.pexels.com/photos/1769392/pexels-photo-1769392.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" />

				<div style="width: 80%; height: 35vh; position: relative; z-index: 100; padding-top: 30px;">
					<p style="width: 80%; margin: auto;"><a href="#">palmsRoyal Brand remporte deux prix TripAdvisor</a></p>
					<div class="readmore" style="text-align: center; padding-top: 20px;">
						<a href="#">READ MORE</a>
					</div>
				</div>
			</div>
			<div>
				<img src="https://cdn.pixabay.com/photo/2016/03/16/22/17/hotel-room-1261900__340.jpg" />

				<div style="width: 80%; height: 35vh; position: relative; z-index: 100; padding-top: 30px;">
					<p style="width: 80%; margin: auto;"><a href="#">palmsRoyal Brand remporte deux prix TripAdvisor</a></p>
					<div class="readmore" style="text-align: center; padding-top: 20px;">
						<a href="#">READ MORE</a>
					</div>
				</div>
			</div>
			<div>
				<img src="https://cdn.pixabay.com/photo/2017/08/09/10/42/hotel-rooms-2614141__340.jpg" />

				<div style="width: 80%; height: 35vh; position: relative; z-index: 100; padding-top: 30px;">
					<p style="width: 80%; margin: auto;"><a href="#">palmsRoyal Brand remporte deux prix TripAdvisor</a></p>
					<div class="readmore" style="text-align: center; padding-top: 20px;">
						<a href="#">READ MORE</a>
					</div>
				</div>
			</div>
			<div>
				<img src="https://cdn.pixabay.com/photo/2015/11/02/06/46/hotel-1018039__340.jpg" />

				<div style="width: 80%; height: 35vh; position: relative; z-index: 100; padding-top: 30px;">
					<p style="width: 80%; margin: auto;"><a href="#">palmsRoyal Brand remporte deux prix TripAdvisor</a></p>
					<div class="readmore" style="text-align: center; padding-top: 20px;">
						<a href="#">READ MORE</a>
					</div>
				</div>
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
			<div class="left-block-content">
				<p class="col-7">
					Beaux visuels et dernières nouvelles sur nos réseaux sociaux: <br />
					<a href="#">FACEBOOK</a> <br />
				</p>
				<p>
					Suivez nos hashtags sur les plateformes: <br />
					<a href="#">#MgbamsGithub</a> <a href="#">#MgbamsLinkedIn</a>
				</p>
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
	<section id="slideshow-about">
		<div class="about-carousel" style="display: flex; padding-left: 50px;">
			<div><img src="https://cdn.pixabay.com/photo/2018/02/24/17/17/window-3178666__340.jpg" /></div>
			<div><img src="https://cdn.pixabay.com/photo/2015/11/06/11/45/interior-1026452__340.jpg" /></div>
			<div><img src="https://cdn.pixabay.com/photo/2018/08/23/00/11/girl-3624933__340.jpg" /></div>
			<div><img src="https://cdn.pixabay.com/photo/2017/05/31/10/23/manor-house-2359884__340.jpg" /></div>
		</div>
	</section>

	<!--js-->
	<script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!--slick js-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
	<!--Necessary in each blade template that has slick carousel for slick to work -->
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

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

	<script>
		// Second-carousel slide settings
		$('.about-carousel').slick({
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
	</script>
	@stop

	<!--Nineth block-->
	@section('nineth-content')
	<div class="special-offers-div" style="display: flex; justify-content: center; align-items: center;">
		<div>
			<p style="margin-bottom: 60px; position: relative; z-index: 50;"><a href="#" style="font-size: 16px; color: black;">Plus d'espace, plus de temps</a></p>
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