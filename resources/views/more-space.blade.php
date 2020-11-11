<!DOCTYPE html>
<html lang="en" class="no-js">

<head>

    <link href='https://fonts.googleapis.com/css?family=Montserrat|Cardo' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>More Space</title>
    <meta name="description" content="Blueprint: A basic template for a page stack navigation effect" />
    <meta name="keywords" content="blueprint, template, html, css, page stack, 3d, perspective, navigation, menu" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <!--main css file starts here-->
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
    <!--main css file ends here-->
    <script src="js/modernizr-custom.js"></script>

    <!--slick css file-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" rel="stylesheet">
    <!--slick css End Here-->
</head>

<body>
    <!-- navigation -->
    <nav class="pages-nav">
        <div class="pages-nav__item"><a href="{{url('/palms-royal-homepage')}}">Home</a></div>
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
            <div style="position: relative; top: 20vh;">
                <nav>
                    <ul style="display: flex; list-style-type: none;">
                        <li style="margin-right: 10px;"><a href="#" style="color: #6d6d6d;">Main</a></li>
                        <li style="margin-right: 10px; font-weight: 800;"> - </li>
                        <li style="margin-right: 10px;"><a href="#" style="color: #6d6d6d;">About</a></li>
                        <li style="margin-right: 10px; font-weight: 800;"> - </li>
                        <li style="margin-right: 10px;"><a href="#" style="color: #6d6d6d;">Special Offers</a></li>
                        <li style="margin-right: 10px; font-weight: 800;"> - </li>
                        <li style="margin-right: 10px;"><a href="#" style="color: #6d6d6d;">More Space, More Time</a></li>
                    </ul>
                </nav>
            </div>
            <div>

                <header class="main_h" style="color: yellow; position: fixed; top: 0px;">

                    <div class="row">
                        <a class="logo" href="{{url('/palms-royal-homepage')}}">palmsRoyal</a>

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

            <!--First div-->
            <div class="first-div-block" style="margin-top: 200px;">
                <div style="width: 60%;">
                    <img src="https://cdn.pixabay.com/photo/2020/04/17/12/24/bed-5054985__340.jpg" style="width: 100%; height: 100%;" />
                </div>
                <div style="width: 40%;">
                    <h2 style="position: relative; right: 7vw; font-size: 5vw;">More Space, <br /> More Time</h2>
                    <p class="col-8 offset-1" style="margin-top: 20vh;">
                        Pour avoir la chance de découvrir nos plus belles chambres
                        et suites, faites votre réservation directement auprès de l'hôtel.
                        À partir de maintenant, nous garantissons les avantages améliorés suivants
                        pour chaque réservation effectuée via notre moteur de réservation de site Web:
                    </p>
                    <div id="explore-link">
                        <a href="{{url('/about')}}" style="position: relative; left: 11vw;">BOOK NOW</a>
                        <svg viewBox="0 0 197 112" class="btn-border" style="width: 190px; height: 140px; left: 0px; top: 0px;">
                            <path stroke="#7f7872" transform="translate(-20 -2143)" d="M31.15 2208.32C31.26 2207.22 31.43 2206.13 31.66 2205.06 31.88 2203.99 32.15 2202.93 32.48 2201.88 32.81 2200.84 33.18 2199.8 33.61 2198.78 34.04 2197.75 34.52 2196.74 35.05 2195.74 35.58 2194.74 36.16 2193.75 36.79 2192.77 37.42 2191.8 38.1 2190.83 38.83 2189.87 39.56 2188.92 40.34 2187.97 41.17 2187.04 42 2186.11 42.87 2185.18 43.8 2184.27 44.72 2183.36 45.7 2182.46 46.72 2181.57 47.23 2181.12 47.75 2180.68 48.28 2180.24 48.82 2179.8 49.36 2179.36 49.92 2178.93 50.48 2178.49 51.05 2178.06 51.63 2177.63 52.21 2177.2 52.81 2176.77 53.41 2176.35 54.02 2175.92 54.63 2175.5 55.26 2175.08 55.89 2174.66 56.53 2174.24 57.18 2173.83 57.83 2173.41 58.49 2173 59.17 2172.59 59.84 2172.18 60.53 2171.77 61.22 2171.37 61.92 2170.96 62.63 2170.56 63.35 2170.16 64.07 2169.76 64.8 2169.36 65.54 2168.96 66.28 2168.57 67.04 2168.17 67.8 2167.78 68.57 2167.39 69.34 2167 70.13 2166.62 70.92 2166.23 71.72 2165.85 72.52 2165.46 73.33 2165.08 74.15 2164.7 74.98 2164.33 75.82 2163.95 76.7 2163.56 77.62 2163.16 78.54 2162.76 79.51 2162.35 80.51 2161.93 81.52 2161.51 82.57 2161.08 83.66 2160.65 84.74 2160.22 85.86 2159.78 87.02 2159.34 88.18 2158.9 89.37 2158.45 90.6 2158.01 91.82 2157.56 93.08 2157.11 94.36 2156.66 95.01 2156.44 95.66 2156.21 96.31 2155.99 96.97 2155.77 97.63 2155.54 98.3 2155.32 98.97 2155.1 99.65 2154.87 100.33 2154.65 101.01 2154.43 101.7 2154.21 102.39 2153.99 103.08 2153.77 103.78 2153.56 104.48 2153.34 105.19 2153.12 105.9 2152.91 106.61 2152.7 107.33 2152.48 108.04 2152.27 108.77 2152.06 109.49 2151.85 110.22 2151.65 110.95 2151.44 111.68 2151.24 112.42 2151.03 113.16 2150.83 113.89 2150.63 114.64 2150.44 115.38 2150.24 116.13 2150.05 116.88 2149.85 117.63 2149.66 118.38 2149.48 119.14 2149.29 119.9 2149.11 120.65 2148.92 121.41 2148.74 122.18 2148.57 122.94 2148.39 123.7 2148.22 124.47 2148.05 125.24 2147.88 126 2147.72 126.77 2147.56 127.54 2147.4 128.31 2147.24 129.08 2147.09 129.85 2146.94 130.63 2146.79 131.4 2146.65 132.17 2146.51 132.95 2146.37 133.72 2146.24 134.49 2146.1 135.27 2145.98 136.04 2145.85 136.81 2145.73 137.59 2145.61 138.36 2145.5 139.13 2145.39 139.9 2145.28 140.68 2145.18 141.45 2145.08 142.22 2144.98 142.99 2144.89 143.75 2144.81 144.52 2144.72 145.29 2144.65 146.05 2144.57 146.82 2144.5 147.58 2144.43 148.34 2144.37 149.1 2144.31 149.86 2144.26 150.61 2144.21 151.37 2144.17 152.12 2144.13 152.87 2144.09 153.62 2144.06 154.37 2144.04 155.11 2144.02 155.85 2144 156.59 2144 157.33 2143.99 158.07 2143.99 158.8 2144 159.53 2144 160.25 2144.02 160.98 2144.04 161.7 2144.07 162.42 2144.1 163.13 2144.14 163.84 2144.18 164.55 2144.23 165.25 2144.29 165.95 2144.35 166.65 2144.41 167.34 2144.49 168.04 2144.56 168.72 2144.65 169.4 2144.74 170.08 2144.83 170.76 2144.94 171.42 2145.05 172.09 2145.16 172.75 2145.28 173.41 2145.41 174.72 2145.68 176 2145.98 177.25 2146.32 178.5 2146.66 179.73 2147.05 180.91 2147.48 182.1 2147.9 183.26 2148.37 184.38 2148.89 185.5 2149.41 186.58 2149.97 187.62 2150.58 188.66 2151.19 189.67 2151.84 190.63 2152.55 191.59 2153.25 192.51 2154.01 193.38 2154.82 194.25 2155.63 195.08 2156.49 195.86 2157.4 196.64 2158.31 197.37 2159.28 198.05 2160.31 198.72 2161.33 199.35 2162.38 199.94 2163.44 200.52 2164.51 201.06 2165.59 201.56 2166.7 202.05 2167.8 202.5 2168.93 202.91 2170.06 203.31 2171.2 203.67 2172.35 203.99 2173.52 204.31 2174.69 204.58 2175.87 204.81 2177.06 205.05 2178.25 205.24 2179.45 205.38 2180.66 205.53 2181.87 205.64 2183.09 205.7 2184.31 205.77 2185.54 205.79 2186.77 205.78 2188.01 205.76 2189.24 205.71 2190.48 205.62 2191.73 205.52 2192.97 205.39 2194.21 205.22 2195.46 205.05 2196.7 204.84 2197.95 204.59 2199.19 204.34 2200.43 204.06 2201.67 203.74 2202.9 203.42 2204.14 203.06 2205.36 202.67 2206.59 202.28 2207.81 201.85 2209.02 201.39 2210.23 200.93 2211.44 200.43 2212.63 199.9 2213.82 199.37 2215 198.8 2216.18 198.2 2217.34 197.61 2218.49 196.98 2219.64 196.31 2220.77 195.65 2221.9 194.96 2223.01 194.23 2224.11 193.5 2225.2 192.75 2226.28 191.96 2227.34 191.17 2228.39 190.35 2229.43 189.5 2230.44 188.65 2231.45 187.78 2232.44 186.87 2233.41 185.96 2234.37 185.03 2235.31 184.07 2236.23 183.1 2237.14 182.11 2238.02 181.1 2238.88 180.08 2239.73 179.03 2240.56 177.96 2241.35 177.43 2241.75 176.89 2242.14 176.34 2242.52 175.79 2242.9 175.24 2243.27 174.67 2243.64 174.11 2244 173.55 2244.36 172.97 2244.7 172.4 2245.05 171.82 2245.39 171.23 2245.71 170.65 2246.04 170.06 2246.36 169.46 2246.67 168.86 2246.98 168.26 2247.28 167.65 2247.57 167.04 2247.87 166.42 2248.15 165.8 2248.42 165.18 2248.69 164.55 2248.95 163.92 2249.2 163.28 2249.45 162.65 2249.7 162 2249.93 161.36 2250.16 160.71 2250.38 160.05 2250.59 159.4 2250.79 158.74 2250.99 158.07 2251.18 157.41 2251.37 156.73 2251.54 156.06 2251.71 155.38 2251.87 154.7 2252.03 154.01 2252.17 153.33 2252.31 152.63 2252.44 151.94 2252.56 151.24 2252.68 150.54 2252.79 149.83 2252.88 149.12 2252.97 148.41 2253.06 147.69 2253.13 146.98 2253.19 146.25 2253.26 145.52 2253.32 144.79 2253.38 144.06 2253.44 143.31 2253.49 142.57 2253.55 141.82 2253.6 141.06 2253.64 140.31 2253.68 139.55 2253.72 138.78 2253.76 138.02 2253.8 137.24 2253.83 136.47 2253.86 135.69 2253.88 134.91 2253.91 134.12 2253.93 133.34 2253.95 132.54 2253.96 131.75 2253.97 130.95 2253.98 130.15 2253.99 129.35 2253.99 128.55 2253.99 127.74 2253.99 126.93 2253.98 126.12 2253.97 125.31 2253.96 124.49 2253.95 123.68 2253.93 122.86 2253.91 122.03 2253.88 121.21 2253.86 120.39 2253.83 119.56 2253.8 118.74 2253.76 117.91 2253.72 117.08 2253.68 116.25 2253.64 115.41 2253.59 114.58 2253.54 113.75 2253.49 112.91 2253.43 112.08 2253.37 111.24 2253.31 110.41 2253.25 109.57 2253.18 108.73 2253.11 107.9 2253.03 107.06 2252.95 106.22 2252.87 105.38 2252.79 104.55 2252.7 103.71 2252.61 102.87 2252.52 102.04 2252.42 101.2 2252.32 100.37 2252.22 99.53 2252.11 98.7 2252.01 97.87 2251.9 97.04 2251.78 96.2 2251.66 95.37 2251.54 94.55 2251.42 93.72 2251.29 92.89 2251.16 92.07 2251.02 91.25 2250.89 90.43 2250.75 89.61 2250.6 88.79 2250.46 87.98 2250.31 87.16 2250.15 86.35 2250 85.54 2249.84 84.74 2249.67 83.93 2249.51 83.13 2249.34 82.33 2249.17 81.54 2248.99 80.74 2248.81 79.95 2248.63 79.17 2248.44 78.38 2248.25 77.6 2248.06 76.82 2247.87 76.05 2247.67 75.28 2247.46 74.51 2247.26 73.74 2247.05 72.98 2246.84 72.23 2246.62 71.47 2246.41 70.73 2246.18 69.98 2245.96 69.24 2245.73 68.5 2245.49 67.77 2245.26 67.04 2245.02 66.32 2244.78 65.6 2244.53 64.89 2244.28 64.18 2244.03 63.47 2243.78 62.77 2243.52 62.08 2243.25 61.39 2242.99 60.71 2242.72 60.03 2242.44 59.36 2242.17 58.69 2241.89 58.03 2241.6 57.37 2241.32 56.72 2241.03 56.08 2240.73 55.44 2240.43 54.8 2240.13 54.18 2239.83 53.56 2239.52 52.94 2239.21 52.34 2238.89 51.73 2238.58 51.14 2238.25 50.56 2237.93 49.39 2237.27 48.26 2236.6 47.18 2235.9 46.09 2235.2 45.05 2234.48 44.06 2233.74 43.07 2233 42.12 2232.24 41.23 2231.46 40.33 2230.67 39.49 2229.87 38.7 2229.04 37.91 2228.21 37.17 2227.36 36.5 2226.49 35.82 2225.61 35.19 2224.72 34.63 2223.8 34.07 2222.88 33.57 2221.94 33.13 2220.98 32.69 2220.02 32.32 2219.03 32.01 2218.02 31.71 2217.01 31.47 2215.98 31.3 2214.93 31.13 2213.87 31.03 2212.79 31 2211.69 30.97 2210.59 31.02 2209.46 31.15 2208.32Q31.15 2208.32 31.15 2208.32" fill="white" fill-opacity="0" stroke-width="1" stroke-miterlimit="50">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Second Block-->
            <div class="terms-and-conditions-block" style="width: 100%; margin-top: 100px;">
                <h2 style="font-size: 3vw; margin-left: 40px; margin-bottom: 40px;">Terms and conditions:</h2>
                <div style="width: 100%; display: flex;">
                    <div style="width: 50%;">
                        <ul>
                            <li>Internet sans fil gratuit</li>
                            <li>Une bouteille d'eau gratuite par jour pour chaque invité</li>
                        </ul>
                    </div>
                    <div style="width: 50%;">
                        <ul>
                            <li>Un surclassement gratuit à l'enregistrement (sous réserve de disponibilité)</li>
                            <li>Départ tardif (selon disponibilité)</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Third Block-->
            <div class="terms-and-conditions-block" style="width: 100%; margin-top: 100px; height: 50vh; display: flex;">
                <div style="width: 50%;">
                    <h2 style="margin-left: 5vw; font-size: 3vw;">Veux-tu recevoir nouvelles et spéciaux de style de vie des offres?</h2>
                    <p style="margin-top: 40px; margin-left: 5vw;" class="col-5">Abonnez-vous à la newsletter palmsRoyal</p>
                </div>

                <div style="width: 50%; border: 1px solid red;">
                    <form method="post">

                        @csrf

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name">

                            <!-- Error -->
                            @if ($errors->has('name'))
                            <div class="error">
                                {{ $errors->first('name') }}
                            </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email">

                            @if ($errors->has('email'))
                            <div class="error">
                                {{ $errors->first('email') }}
                            </div>
                            @endif
                        </div>

                        <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
                    </form>
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