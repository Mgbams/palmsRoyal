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
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap core CSS -->
    <link href='{{ asset("bootstrap/css/bootstrap.css") }}' rel="stylesheet" />

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
                 @if (Session::has('reservationError'))
                <span class="alert-error">{{Session::get('reservationError')}}</span>
                @endif

                <h3>Recherche par Numéro de Confirmation</h3>
                <div class="mt-5">
                    <form method="post" id="cancel_by_email" action="{{ route('cancel.reservation.number') }}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="confirmationNumber">Réservation ou confirmation numéro</label>
                            <input type="text" name="confirmationNumber" class="form-control" id="confirmationNumber" placeholder="Réservation number">
                        </div>
                        <button type="submit" class="btn mt-2 cancel-reservation-btn" style="background-color: #864747; color: white;">SEARCH</button>
                    </form>
                </div>
            </div>

            <!--Search by Email and Password-->
            <div class="col-sm-6 search-by-email" style="height: 60vh;">
                @if (Session::has('message'))
                <span class="alert-error">{{Session::get('message')}}</span>
                @endif

                <h3>Recherche par E-mail et Mot de Passe</h3>
                <div  class="mt-5">
                    <form method="post" id="search_by_password"  action="{{ route('cancel.email.password') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                        <button type="submit"  class="btn mt-2 cancel-reservation-btn" style="background-color: #864747; color: white;">SEARCH</button>
                    </form>
                </div>

                <!--forgotten password-->
                <div class="mt-5"><a href="{{ route('password.update') }}" class="cancel-reservation-forgot-password-link" style="font-size: 16px;">Mot de passe oublié ? Cliquez ici</a></div>
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