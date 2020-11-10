<!DOCTYPE html>
<html lang="en" class="no-js">

<head>

    <link href='https://fonts.googleapis.com/css?family=Montserrat|Cardo' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lobby Bar</title>
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
                <img src="https://cdn.pixabay.com/photo/2018/02/24/21/14/table-3179261_960_720.jpg" style="height: 100%; width: 100%;" />

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

                <div style="position: absolute; top: 38vh; left: 45vw; color: white;">
                    <h1 style="font-size: 6vw;">Lobby Bar</h1>
                    <p class="col-5 offset-5" style="margin-top: 30px;">Situé sur la mezzanine, le bar du hall est un endroit
                        idéal pour se détendre dans une atmosphère
                        élégante et informelle.
                    </p>
                </div>

            </div>


            <!--First div Restaurant-->
            <div style="margin: 50px 0px; text-align: center;">
                <h2 style="font-size: 4vw;">Amber-colored Charm</h2>
            </div>

            <div style="width: 100%; height: 100vh; display:flex;">
                <div style="width: 60%; height: 100%;">
                    <div class="col-5">
                        <p>
                            En raison de son mobilier moelleux et de son design
                            intérieur élégant de couleur ambre, le bar du hall a
                            son propre caractère distinctif. Avec un bar lumineux
                            aux panneaux de verre complétant son identité visuelle,
                            la mezzanine est conçue pour un moment décontracté,
                            complétée par un assortiment de cocktails classiques.
                        </p>
                    </div>
                </div>

                <div class="eat-drink-morning-second-div-image" style="border-radius: 5%; width: 40%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 999;">
                    <div style="width: 70%; height: 60%; background-color: #f9efea; position: relative; right: 17vw;">
                        <ul style="list-style-type: none; padding-top: 20px; text-decoration: underline;">
                            <li style="margin-bottom: 30px;"><i class="far fa-file-pdf" style="margin-right: 10px;"></i><a href="#">MENU PRINCIPAL DU COURS (PDF)</a></li>
                        </ul>
                    </div>
                </div>
            </div>


            <!--second div-->
            <div style="width: 100%; height: 90vh; margin-top: 100px; display: flex; justify-content: space-between;">

                <div class="lobby-bar-second-div-left-image" style="position: relative; z-index: 10; width: 50%; height: 100%; display: flex; justify-content: center; align-items: center;">

                </div>

                <div style="width: 50%; height: 100%;">
                    <div style="width: 40%; height: 50%; position: relative; left: 10vw;">
                        <p>Le bar du hall fonctionne tous les
                            jours de 11 h 00 à 23 h 00 et
                            sert des boissons alcoolisées et
                            non alcoolisées ainsi que du café et du thé.
                        </p>
                    </div>
                    <div style="width: 75%; height: 50%; position: relative; bottom: 13vh; background-color: #f9efea;">
                        <div class="lobby-bar-second-div-right-floating-image" style="width: 65%; height: 90%; position: absolute; left: 25vw; bottom: 8vh;">

                        </div>
                    </div>

                </div>
            </div>

            <!--Third div-->
            <div style="width: 100%; height: 90vh; margin-top: 100px; display: flex; justify-content: space-between;">

                <div style="width: 50%; height: 100%;">
                    <div style="width: 35%; height: 50%; position: relative; left: 5vw; top: 58vh; z-index: 999;">
                        <p>La mezzanine peut également être transformée en 
                            un espace pouvant accueillir des réunions privées, 
                            des présentations et des petits événements.
                        </p>
                    </div>
                    <div style="width: 100%; height: 68%; position: relative; bottom: 23vh; background-color: #f9efea;">
                        <div class="lobby-bar-third-div-right-floating-image" style="width: 50%; height: 80%; position: absolute; bottom: 34vh;">

                        </div>
                    </div>

                </div>

                <div class="lobby-bar-third-div-left-image" style="position: relative; z-index: 10; width: 50%; height: 100%; display: flex; justify-content: center; align-items: center;">

                </div>
            </div>

            <!--Fourth div-->
            <div style="display: flex; justify-content: flex-end; margin-top: 70px; padding: 0px 20px;"><small>&copy; palmsRoyal 2020</small></div>

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