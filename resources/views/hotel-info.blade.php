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
            <div id="about-top-image">
                <img src="https://cdn.pixabay.com/photo/2015/07/20/12/28/restaurant-852734_960_720.jpg" style="height: 100%; width: 100%;" />

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

            <!--Made by originals div-->
            <div style="width: 50%; margin-top: 100px;">
                <h2 class="col-6 offset-6" style="position: relative; top: 5vh;"> Made By palmsRoyal</h2>
            </div>
            <div style="width: 100%; height: 90vh; margin-bottom: 100px; display: flex;">

                <div style="width: 50%; height: 100%;">
                    <div style="width: 80%; height: 40%; position: relative; top: 20vh;">
                        <img src="https://cdn.pixabay.com/photo/2020/04/17/12/24/bed-5054985__340.jpg" style="width: 100%; height: 100%;" />
                    </div>
                </div>

                <div style="width: 50%; height: 100%; display: flex;">
                    <div style="width: 40%; height: 100%; position: relative; left: 6vw; top: 20vh;">
                        <p>
                            Rencontrez Emmanuel Macron et Bertille Andrews, et vous
                            comprendrez rapidement pourquoi ces deux personnalités extraordinaires,
                            deux Originales, sont les esprits créatifs derrière 11 Mirrors - le premier hôtel design de Lyon.
                            La superbe propriété de 11 étages nichée au cœur de Kiev est la vision concertée de
                            la légende.
                        </p>
                        <div style="position: absolute; left: 2vw; width: 20%; height: 20%;">
                            <div style="position: relative; top: 10vh; left: .5vw; z-index: 999;"><a class="special-offers-link read-more-link" href="{{url('/more-space')}}">READ MORE</a></div>
                            <div class="svg-container-hotel-info-made-by">
                                <svg viewBox="0 0 170 110" preserveAspectRatio="xMinYMin meet" class="svg-content-hotel-info-made-by">
                                    <path stroke="#7f7872" transform="translate(-475 -2950)" fill="white" fill-opacity="0" stroke-width="1" stroke-miterlimit="50" d="M613.07 3029.56C612.01 3030.35 610.94 3031.11 609.88 3031.86 608.81 3032.61 607.74 3033.33 606.66 3034.04 605.59 3034.75 604.51 3035.44 603.43 3036.1 602.35 3036.77 601.27 3037.42 600.19 3038.05 599.1 3038.68 598.02 3039.29 596.93 3039.89 595.84 3040.48 594.75 3041.05 593.66 3041.61 592.57 3042.16 591.48 3042.7 590.38 3043.22 589.29 3043.74 588.2 3044.24 587.1 3044.72 586.01 3045.2 584.92 3045.67 583.82 3046.11 582.73 3046.56 581.64 3046.99 580.54 3047.4 579.45 3047.82 578.36 3048.21 577.27 3048.59 576.18 3048.97 575.09 3049.33 574 3049.68 572.92 3050.02 571.83 3050.35 570.75 3050.66 569.66 3050.98 568.58 3051.27 567.5 3051.55 566.43 3051.83 565.35 3052.1 564.28 3052.34 563.21 3052.59 562.14 3052.82 561.07 3053.04 560.01 3053.26 558.95 3053.46 557.89 3053.64 556.83 3053.83 555.78 3054 554.73 3054.15 553.69 3054.31 552.64 3054.45 551.6 3054.57 550.57 3054.7 549.53 3054.81 548.51 3054.9 547.48 3054.99 546.46 3055.07 545.44 3055.14 544.43 3055.2 543.42 3055.25 542.42 3055.29 541.42 3055.32 540.42 3055.34 539.43 3055.35 538.45 3055.35 537.47 3055.34 536.49 3055.32 535.52 3055.3 534.55 3055.26 533.6 3055.21 532.64 3055.15 531.69 3055.09 530.75 3055.01 529.81 3054.93 528.88 3054.83 527.96 3054.72 527.04 3054.62 526.12 3054.49 525.22 3054.36 524.32 3054.22 523.42 3054.07 522.54 3053.91 521.66 3053.74 520.78 3053.56 519.92 3053.37 519.06 3053.18 518.21 3052.98 517.37 3052.76 516.53 3052.54 515.7 3052.31 514.88 3052.07 514.06 3051.83 513.26 3051.57 512.46 3051.3 511.67 3051.03 510.89 3050.75 510.12 3050.45 509.35 3050.16 508.59 3049.85 507.85 3049.53 507.1 3049.21 506.37 3048.88 505.66 3048.54 504.94 3048.19 504.24 3047.84 503.55 3047.47 502.86 3047.1 502.19 3046.72 501.53 3046.33 500.87 3045.94 500.22 3045.54 499.59 3045.13 498.96 3044.71 498.35 3044.29 497.75 3043.85 497.15 3043.42 496.57 3042.97 496 3042.51 495.43 3042.05 494.88 3041.58 494.35 3041.1 493.81 3040.63 493.29 3040.14 492.79 3039.64 492.29 3039.14 491.81 3038.63 491.34 3038.11 490.87 3037.58 490.43 3037.05 490 3036.51 489.56 3035.97 489.15 3035.42 488.76 3034.86 488.36 3034.3 487.99 3033.74 487.63 3033.16 487.28 3032.58 486.94 3031.99 486.62 3031.39 486.3 3030.8 486.01 3030.19 485.73 3029.58 485.45 3028.96 485.19 3028.34 484.96 3027.7 484.72 3027.07 484.5 3026.43 484.31 3025.78 484.11 3025.13 483.94 3024.47 483.78 3023.81 483.63 3023.14 483.5 3022.47 483.39 3021.79 483.28 3021.1 483.19 3020.41 483.13 3019.71 483.06 3019.02 483.02 3018.31 483 3017.6 482.98 3016.88 482.99 3016.16 483.01 3015.44 483.04 3014.71 483.09 3013.97 483.17 3013.23 483.24 3012.49 483.34 3011.74 483.47 3010.98 483.59 3010.22 483.74 3009.46 483.91 3008.69 484.08 3007.92 484.28 3007.14 484.51 3006.36 484.73 3005.58 484.98 3004.79 485.25 3003.99 485.53 3003.2 485.83 3002.39 486.16 3001.59 486.48 3000.78 486.84 2999.96 487.22 2999.14 487.6 2998.33 488.01 2997.5 488.45 2996.67 488.97 2995.67 489.54 2994.7 490.16 2993.75 490.79 2992.8 491.46 2991.88 492.18 2990.98 492.9 2990.08 493.66 2989.2 494.47 2988.35 495.27 2987.49 496.12 2986.66 497.02 2985.85 497.91 2985.05 498.84 2984.26 499.81 2983.5 500.78 2982.73 501.78 2981.99 502.83 2981.27 503.87 2980.55 504.95 2979.84 506.06 2979.17 507.16 2978.49 508.31 2977.83 509.48 2977.19 510.06 2976.87 510.66 2976.55 511.26 2976.24 511.86 2975.93 512.46 2975.63 513.08 2975.33 513.69 2975.03 514.31 2974.74 514.94 2974.45 515.56 2974.16 516.2 2973.87 516.84 2973.59 517.47 2973.31 518.12 2973.03 518.77 2972.76 519.42 2972.49 520.08 2972.23 520.74 2971.97 521.4 2971.7 522.07 2971.45 522.74 2971.19 523.41 2970.94 524.09 2970.7 524.77 2970.45 525.45 2970.21 526.14 2969.97 526.83 2969.74 527.52 2969.5 528.21 2969.27 528.91 2969.05 529.61 2968.82 530.31 2968.6 531.02 2968.39 531.72 2968.17 532.43 2967.96 533.14 2967.75 533.86 2967.55 534.57 2967.34 535.29 2967.15 536.01 2966.95 536.73 2966.76 537.45 2966.57 538.18 2966.38 538.91 2966.19 539.63 2966.01 540.36 2965.83 541.09 2965.66 541.83 2965.48 542.56 2965.31 543.29 2965.14 544.03 2964.98 544.77 2964.82 545.5 2964.66 546.24 2964.51 546.98 2964.35 547.72 2964.2 548.46 2964.05 549.2 2963.91 549.94 2963.77 550.69 2963.63 551.43 2963.49 552.17 2963.36 552.91 2963.23 553.65 2963.1 554.4 2962.98 555.14 2962.86 555.88 2962.74 556.62 2962.62 557.37 2962.51 558.11 2962.39 558.85 2962.29 559.59 2962.18 560.33 2962.08 561.07 2961.98 561.8 2961.88 562.54 2961.78 563.28 2961.69 564.01 2961.6 564.75 2961.52 565.48 2961.43 566.21 2961.35 566.94 2961.27 567.67 2961.19 568.4 2961.12 569.13 2961.05 569.85 2960.98 570.57 2960.91 571.3 2960.85 572.01 2960.79 572.73 2960.73 573.45 2960.67 574.16 2960.62 574.87 2960.57 575.58 2960.51 576.29 2960.47 576.99 2960.42 577.69 2960.38 578.39 2960.34 579.09 2960.3 579.78 2960.27 580.47 2960.23 581.16 2960.2 581.85 2960.17 582.53 2960.15 583.21 2960.12 583.88 2960.1 584.56 2960.08 585.22 2960.06 586.56 2960.03 587.87 2960.01 589.17 2960 590.46 2959.99 591.73 2959.99 592.97 2960 594.21 2960.02 595.43 2960.04 596.62 2960.08 597.81 2960.11 598.97 2960.16 600.09 2960.21 601.22 2960.27 602.32 2960.34 603.38 2960.41 604.44 2960.49 605.47 2960.57 606.47 2960.67 607.46 2960.76 608.45 2960.88 609.43 2961.02 610.42 2961.15 611.4 2961.31 612.38 2961.49 613.36 2961.66 614.33 2961.86 615.29 2962.08 616.25 2962.3 617.2 2962.54 618.14 2962.79 619.08 2963.05 620.01 2963.33 620.93 2963.63 621.84 2963.93 622.74 2964.25 623.63 2964.58 624.51 2964.92 625.38 2965.28 626.22 2965.66 627.07 2966.03 627.9 2966.43 628.71 2966.85 629.51 2967.27 630.3 2967.7 631.06 2968.16 631.82 2968.62 632.56 2969.09 633.26 2969.59 633.97 2970.08 634.65 2970.6 635.31 2971.13 635.96 2971.67 636.58 2972.22 637.17 2972.8 637.76 2973.37 638.32 2973.97 638.84 2974.58 639.36 2975.19 639.85 2975.82 640.3 2976.47 640.75 2977.12 641.16 2977.8 641.54 2978.48 641.91 2979.17 642.24 2979.88 642.53 2980.61 642.82 2981.34 643.07 2982.09 643.27 2982.85 643.47 2983.62 643.63 2984.4 643.74 2985.21 643.85 2986.01 643.91 2986.83 643.92 2987.67 643.93 2988.51 643.89 2989.37 643.8 2990.25 643.71 2991.13 643.56 2992.02 643.36 2992.94 643.16 2993.85 642.9 2994.79 642.58 2995.74 642.27 2996.69 641.9 2997.66 641.46 2998.65 641.03 2999.64 640.53 3000.64 639.97 3001.67 639.41 3002.69 638.79 3003.73 638.1 3004.79 637.42 3005.85 636.66 3006.93 635.84 3008.03 635.43 3008.57 635 3009.13 634.55 3009.68 634.11 3010.24 633.64 3010.8 633.16 3011.37 632.68 3011.93 632.18 3012.5 631.67 3013.07 631.15 3013.65 630.61 3014.22 630.06 3014.81 629.51 3015.39 628.93 3015.97 628.34 3016.57 627.75 3017.16 627.14 3017.75 626.51 3018.35 625.89 3018.95 625.24 3019.55 624.57 3020.16 623.9 3020.76 623.22 3021.38 622.51 3021.99 621.8 3022.61 621.08 3023.22 620.33 3023.85 619.59 3024.47 618.82 3025.1 618.03 3025.73 617.25 3026.36 616.44 3026.99 615.61 3027.63 614.78 3028.27 613.93 3028.91 613.07 3029.56Q613.07 3029.56 613.07 3029.56">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div style="width: 60%; height: 100%; background-color: green;"></div>
                </div>
            </div>

            <!--First div-->
            <div style="width: 100%; height: 90vh; margin-top: 100px; display: flex;">
                <div style="width: 50%; height: 100%;">
                    <img src="https://cdn.pixabay.com/photo/2020/04/17/12/24/bed-5054985__340.jpg" style="width: 100%; height: 100%;" />
                </div>
                <div style="width: 50%; height: 100%;">
                    <h2 style="position: relative; right: 35px; top: 70px; font-size: 5vw;">Conception <br /> Hôtels</h2>
                    <p class="col-5 offset-5" style="position: relative; top: 100px;">
                        Notre vision est de créer une communauté mondiale inégalée pour le design, l'architecture,
                        la culture et devenir la source définitive d'expériences d'accueil originales.
                    </p>
                    <div class="special-offers-div" style="position: absolute; left: 68vw; top: 278vh; width: 20%; height: 20%;">
                        <div style="position: relative; top: 10vh; left: .5vw; z-index: 999;"><a class="special-offers-link read-more-link" href="{{url('/more-space')}}">READ MORE</a></div>
                        <div class="svg-container">
                            <svg viewBox="0 0 170 110" preserveAspectRatio="xMinYMin meet" class="svg-content">
                                <path stroke="#7f7872" transform="translate(-475 -2950)" fill="white" fill-opacity="0" stroke-width="1" stroke-miterlimit="50" d="M613.07 3029.56C612.01 3030.35 610.94 3031.11 609.88 3031.86 608.81 3032.61 607.74 3033.33 606.66 3034.04 605.59 3034.75 604.51 3035.44 603.43 3036.1 602.35 3036.77 601.27 3037.42 600.19 3038.05 599.1 3038.68 598.02 3039.29 596.93 3039.89 595.84 3040.48 594.75 3041.05 593.66 3041.61 592.57 3042.16 591.48 3042.7 590.38 3043.22 589.29 3043.74 588.2 3044.24 587.1 3044.72 586.01 3045.2 584.92 3045.67 583.82 3046.11 582.73 3046.56 581.64 3046.99 580.54 3047.4 579.45 3047.82 578.36 3048.21 577.27 3048.59 576.18 3048.97 575.09 3049.33 574 3049.68 572.92 3050.02 571.83 3050.35 570.75 3050.66 569.66 3050.98 568.58 3051.27 567.5 3051.55 566.43 3051.83 565.35 3052.1 564.28 3052.34 563.21 3052.59 562.14 3052.82 561.07 3053.04 560.01 3053.26 558.95 3053.46 557.89 3053.64 556.83 3053.83 555.78 3054 554.73 3054.15 553.69 3054.31 552.64 3054.45 551.6 3054.57 550.57 3054.7 549.53 3054.81 548.51 3054.9 547.48 3054.99 546.46 3055.07 545.44 3055.14 544.43 3055.2 543.42 3055.25 542.42 3055.29 541.42 3055.32 540.42 3055.34 539.43 3055.35 538.45 3055.35 537.47 3055.34 536.49 3055.32 535.52 3055.3 534.55 3055.26 533.6 3055.21 532.64 3055.15 531.69 3055.09 530.75 3055.01 529.81 3054.93 528.88 3054.83 527.96 3054.72 527.04 3054.62 526.12 3054.49 525.22 3054.36 524.32 3054.22 523.42 3054.07 522.54 3053.91 521.66 3053.74 520.78 3053.56 519.92 3053.37 519.06 3053.18 518.21 3052.98 517.37 3052.76 516.53 3052.54 515.7 3052.31 514.88 3052.07 514.06 3051.83 513.26 3051.57 512.46 3051.3 511.67 3051.03 510.89 3050.75 510.12 3050.45 509.35 3050.16 508.59 3049.85 507.85 3049.53 507.1 3049.21 506.37 3048.88 505.66 3048.54 504.94 3048.19 504.24 3047.84 503.55 3047.47 502.86 3047.1 502.19 3046.72 501.53 3046.33 500.87 3045.94 500.22 3045.54 499.59 3045.13 498.96 3044.71 498.35 3044.29 497.75 3043.85 497.15 3043.42 496.57 3042.97 496 3042.51 495.43 3042.05 494.88 3041.58 494.35 3041.1 493.81 3040.63 493.29 3040.14 492.79 3039.64 492.29 3039.14 491.81 3038.63 491.34 3038.11 490.87 3037.58 490.43 3037.05 490 3036.51 489.56 3035.97 489.15 3035.42 488.76 3034.86 488.36 3034.3 487.99 3033.74 487.63 3033.16 487.28 3032.58 486.94 3031.99 486.62 3031.39 486.3 3030.8 486.01 3030.19 485.73 3029.58 485.45 3028.96 485.19 3028.34 484.96 3027.7 484.72 3027.07 484.5 3026.43 484.31 3025.78 484.11 3025.13 483.94 3024.47 483.78 3023.81 483.63 3023.14 483.5 3022.47 483.39 3021.79 483.28 3021.1 483.19 3020.41 483.13 3019.71 483.06 3019.02 483.02 3018.31 483 3017.6 482.98 3016.88 482.99 3016.16 483.01 3015.44 483.04 3014.71 483.09 3013.97 483.17 3013.23 483.24 3012.49 483.34 3011.74 483.47 3010.98 483.59 3010.22 483.74 3009.46 483.91 3008.69 484.08 3007.92 484.28 3007.14 484.51 3006.36 484.73 3005.58 484.98 3004.79 485.25 3003.99 485.53 3003.2 485.83 3002.39 486.16 3001.59 486.48 3000.78 486.84 2999.96 487.22 2999.14 487.6 2998.33 488.01 2997.5 488.45 2996.67 488.97 2995.67 489.54 2994.7 490.16 2993.75 490.79 2992.8 491.46 2991.88 492.18 2990.98 492.9 2990.08 493.66 2989.2 494.47 2988.35 495.27 2987.49 496.12 2986.66 497.02 2985.85 497.91 2985.05 498.84 2984.26 499.81 2983.5 500.78 2982.73 501.78 2981.99 502.83 2981.27 503.87 2980.55 504.95 2979.84 506.06 2979.17 507.16 2978.49 508.31 2977.83 509.48 2977.19 510.06 2976.87 510.66 2976.55 511.26 2976.24 511.86 2975.93 512.46 2975.63 513.08 2975.33 513.69 2975.03 514.31 2974.74 514.94 2974.45 515.56 2974.16 516.2 2973.87 516.84 2973.59 517.47 2973.31 518.12 2973.03 518.77 2972.76 519.42 2972.49 520.08 2972.23 520.74 2971.97 521.4 2971.7 522.07 2971.45 522.74 2971.19 523.41 2970.94 524.09 2970.7 524.77 2970.45 525.45 2970.21 526.14 2969.97 526.83 2969.74 527.52 2969.5 528.21 2969.27 528.91 2969.05 529.61 2968.82 530.31 2968.6 531.02 2968.39 531.72 2968.17 532.43 2967.96 533.14 2967.75 533.86 2967.55 534.57 2967.34 535.29 2967.15 536.01 2966.95 536.73 2966.76 537.45 2966.57 538.18 2966.38 538.91 2966.19 539.63 2966.01 540.36 2965.83 541.09 2965.66 541.83 2965.48 542.56 2965.31 543.29 2965.14 544.03 2964.98 544.77 2964.82 545.5 2964.66 546.24 2964.51 546.98 2964.35 547.72 2964.2 548.46 2964.05 549.2 2963.91 549.94 2963.77 550.69 2963.63 551.43 2963.49 552.17 2963.36 552.91 2963.23 553.65 2963.1 554.4 2962.98 555.14 2962.86 555.88 2962.74 556.62 2962.62 557.37 2962.51 558.11 2962.39 558.85 2962.29 559.59 2962.18 560.33 2962.08 561.07 2961.98 561.8 2961.88 562.54 2961.78 563.28 2961.69 564.01 2961.6 564.75 2961.52 565.48 2961.43 566.21 2961.35 566.94 2961.27 567.67 2961.19 568.4 2961.12 569.13 2961.05 569.85 2960.98 570.57 2960.91 571.3 2960.85 572.01 2960.79 572.73 2960.73 573.45 2960.67 574.16 2960.62 574.87 2960.57 575.58 2960.51 576.29 2960.47 576.99 2960.42 577.69 2960.38 578.39 2960.34 579.09 2960.3 579.78 2960.27 580.47 2960.23 581.16 2960.2 581.85 2960.17 582.53 2960.15 583.21 2960.12 583.88 2960.1 584.56 2960.08 585.22 2960.06 586.56 2960.03 587.87 2960.01 589.17 2960 590.46 2959.99 591.73 2959.99 592.97 2960 594.21 2960.02 595.43 2960.04 596.62 2960.08 597.81 2960.11 598.97 2960.16 600.09 2960.21 601.22 2960.27 602.32 2960.34 603.38 2960.41 604.44 2960.49 605.47 2960.57 606.47 2960.67 607.46 2960.76 608.45 2960.88 609.43 2961.02 610.42 2961.15 611.4 2961.31 612.38 2961.49 613.36 2961.66 614.33 2961.86 615.29 2962.08 616.25 2962.3 617.2 2962.54 618.14 2962.79 619.08 2963.05 620.01 2963.33 620.93 2963.63 621.84 2963.93 622.74 2964.25 623.63 2964.58 624.51 2964.92 625.38 2965.28 626.22 2965.66 627.07 2966.03 627.9 2966.43 628.71 2966.85 629.51 2967.27 630.3 2967.7 631.06 2968.16 631.82 2968.62 632.56 2969.09 633.26 2969.59 633.97 2970.08 634.65 2970.6 635.31 2971.13 635.96 2971.67 636.58 2972.22 637.17 2972.8 637.76 2973.37 638.32 2973.97 638.84 2974.58 639.36 2975.19 639.85 2975.82 640.3 2976.47 640.75 2977.12 641.16 2977.8 641.54 2978.48 641.91 2979.17 642.24 2979.88 642.53 2980.61 642.82 2981.34 643.07 2982.09 643.27 2982.85 643.47 2983.62 643.63 2984.4 643.74 2985.21 643.85 2986.01 643.91 2986.83 643.92 2987.67 643.93 2988.51 643.89 2989.37 643.8 2990.25 643.71 2991.13 643.56 2992.02 643.36 2992.94 643.16 2993.85 642.9 2994.79 642.58 2995.74 642.27 2996.69 641.9 2997.66 641.46 2998.65 641.03 2999.64 640.53 3000.64 639.97 3001.67 639.41 3002.69 638.79 3003.73 638.1 3004.79 637.42 3005.85 636.66 3006.93 635.84 3008.03 635.43 3008.57 635 3009.13 634.55 3009.68 634.11 3010.24 633.64 3010.8 633.16 3011.37 632.68 3011.93 632.18 3012.5 631.67 3013.07 631.15 3013.65 630.61 3014.22 630.06 3014.81 629.51 3015.39 628.93 3015.97 628.34 3016.57 627.75 3017.16 627.14 3017.75 626.51 3018.35 625.89 3018.95 625.24 3019.55 624.57 3020.16 623.9 3020.76 623.22 3021.38 622.51 3021.99 621.8 3022.61 621.08 3023.22 620.33 3023.85 619.59 3024.47 618.82 3025.1 618.03 3025.73 617.25 3026.36 616.44 3026.99 615.61 3027.63 614.78 3028.27 613.93 3028.91 613.07 3029.56Q613.07 3029.56 613.07 3029.56">
                                </path>
                            </svg>
                        </div>
                    </div>

                </div>
            </div>

            <!--Second div-->
            <div class="hotel-info-second-div" style="width: 100%; height: 100vh; margin-top: 140px;">
                <div style="position: relative; top: 60%; left: 10vw;">
                    <h1 style="color: white;">Virtual tour</h1>
                    <small style="color: white; margin-left: 17vw; letter-spacing: 1.7px;">Take an online tour of our design hotel</small>
                </div>
            </div>

            <!--Third div-->
            <div style="width: 100%; height: 100vh; margin-top: 80px; display: flex;">
                <div style="width: 50%; height: 100vh; display: flex; align-items: center; justify-content: center;" class="eat-drink-morning-ninenth-div-image">
                    <div style="width: 40vw; height: 40vh; position: relative; left: 30vw; display: flex; justify-content: space-between;">
                        <div style="width: 45%; height: 95%; border-radius: 50%;" class="nineth-left-image"></div>
                        <div style="width: 45%; height: 95%; border-radius: 50%;" class="nineth-right-image"></div>
                    </div>
                </div>

                <div style="width: 50%; height: 100vh;">
                    <h2 class="col-5 offset-2" style="font-size: 4vw;">Galerie</h2>
                    <div class="col-4 offset-7">
                        <p style="line-height: 1.6;">Des petits-déjeuners matinaux aux déjeuners panoramiques,
                            explorez le mode de vie du restaurant royal Palms Rooftop.
                        </p>
                    </div>
                </div>
            </div>

            <!--Fourth div-->
            <div id="left-image-homepage" style="margin-top: 120px;">
                <img src="https://cdn.pixabay.com/photo/2020/07/08/01/49/outdoors-5382306__340.jpg" />
            </div>

            <div>
                <div style="text-align: center;">
                    <h2>Quartier</h2>
                </div>
                <div class="col-5 offset-6">
                    <p>Ici vous pouvez trouver tous les endroits 
                        qui se trouvent à proximité du Design Hotel.
                        Découvrez tous les lieux historiques.
                    </p>
                </div>
                <div class="read-more offset-6">
                    <p><a href="{{ route('neighbourhood.show') }}">EXPLORE</a></p>
                </div>
            </div>

            <!--Fifth div partners-->
            <div style="margin-top: 120px; height: 100vh; display: flex;" class="hotel-info-partners-container">
                <div style="width: 50%; height: 100vh;" class="partner-left-div-image">
                    <div class="multiple-items" style="position: relative; top: 35%; width: 60vw; left: 65%; height: 35vh;">
                        <div style="height: 35vh; width: 20vw;">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQNuJzsaBPQH9odMfq--N7gQ3ANOeNx-kBaiQ&usqp=CAU" style="width: 20vw; height: 100%;" />
                        </div>
                        <div>
                            <h3> Hôtels Design ™</h3>
                            <p style="width: 18vw;">
                                Collection d'hôtels privés sélectionnés à la main - chacun étant
                                une expression créative tout à fait unique - dans des centaines
                                de destinations à travers le monde.
                            </p>
                        </div>
                        <div style="height: 35vh; width: 20vw;">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQNuJzsaBPQH9odMfq--N7gQ3ANOeNx-kBaiQ&usqp=CAU" style="width: 20vw; height: 100%;" />
                        </div>
                        <div>
                            <h3> Hôtels Design ™</h3>
                            <p style="width: 18vw;">
                                Collection d'hôtels privés sélectionnés à la main - chacun étant
                                une expression créative tout à fait unique - dans des centaines
                                de destinations à travers le monde.
                            </p>
                        </div>
                    </div>
                </div>

                <div style="width: 50%; height: 100vh;">
                    <h2 style="position: relative; top: 10%; width: 40%; left: 20%; font-size: 4vw;">Partners</h2>
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

            //slick
            $('.multiple-items').slick({
                infinite: true,
                slidesToShow: 2,
                slidesToScroll: 2,
                centerPadding: '80px'
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