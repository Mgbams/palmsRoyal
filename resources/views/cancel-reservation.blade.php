<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <meta name="description" content="A hotel reservation website development" />
    <meta name="keywords" content="palmsRoyal, rooms, hotel, reservation, hotel booking" />
    <meta name="author" content="Mgbams Kingsley" />

    <!--main css file starts here-->
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body>
    <div class="container" style="height: 100vh;">
        <div style="border-bottom: 1px solid #ccc; height: 25vh;" class="row d-flex flex-column justify-content-center align-items-center">
            <h1>palmsRoyal</h1>
            <p style="font-size: 24px;">Hotel</p>
        </div>
        <section class="row mt-5">

            <!--Search by Email and Reservation Number-->
            <div class="col-sm-6 cancel-by-number pr-5" style="height: 60vh; border-right: 1px solid #ccc;">
                <h3>Recherche par Numéro de Confirmation</h3>
                <div class="mt-5">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="confirmationNumber">Réservation ou confirmation d'itinéraire</label>
                            <input type="text" class="form-control" id="confirmationNumber" placeholder="Réservation number">
                        </div>
                        <button type="submit" class="btn mt-2 cancel-reservation-btn" style="background-color: #864747; color: white;">SEARCH</button>
                    </form>
                </div>
            </div>

            <!--Search by Email and Password-->
            <div class="col-sm-6 search-by-email" style="height: 60vh;">
                <h3>Recherche par E-mail et Mot de Passe</h3>
                <div  class="mt-5">
                    <form>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password">
                        </div>
                        <button type="submit"  class="btn mt-2 cancel-reservation-btn" style="background-color: #864747; color: white;">SEARCH</button>
                    </form>
                </div>

                <!--forgotten password-->
                <div class="mt-5"><a href="#" class="cancel-reservation-forgot-password-link" style="font-size: 16px;">Mot de passe oublié ? Cliquez ici</a></div>
            </div>
        </section>

    </div>

    <!--js-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>

    <script>
        $(function() {});
    </script>

</body>

</html>