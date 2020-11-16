@extends('layouts.navigation-menu')

@section('title', 'Lobby Bar')

@section('content')
<div class="pages-stack">
    <!-- page -->
    <div class="page about-hotel" id="page-home">
        <div id="about-top-image">
            <img src="https://cdn.pixabay.com/photo/2018/02/24/21/14/table-3179261_960_720.jpg" style="height: 100%; width: 100%;" />

            <header class="main_h" style="color: yellow; position: fixed; top: 0px;">

                <div class="row">
                    <a class="logo" href="{{url('/palms-royal-homepage')}}">palmsRoyal</a>
                </div>

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
        <div style="width: 100%; height: 90vh; margin-top: 100px; display: flex; justify-content: space-between;" class="lobby-bar-second-div-container">

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
                <div style="width: 35%; height: 50%; position: relative; left: 5vw; top: 58vh; z-index: 30;">
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
</div>
@stop