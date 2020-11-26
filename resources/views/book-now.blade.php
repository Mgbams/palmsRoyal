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

    <!------ Bootstrap cdn---------->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--Used for datepicker-->
    <link rel="stylesheet" type="text/css" href="{{url('css/daterangepicker.css')}}" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <!-- Optional theme -->



    <!--main css file starts here-->
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body>
    <div id="book-now-container">

        <section>
            <div class="title row" style="background-color: yellow;">
                <div class="col-md-4 col-sm-12 d-flex justify-content-center align-items-center flex-column" style="height: 20vh;">
                    <h3>Let's do some</h3>
                    <h1>PARALLAX</h1>
                </div>
                <div class="col-md-8 col-sm-12 d-flex justify-content-center align-items-center flex-column" style="height: 20vh;">
                    <h1>pamsRoyal</h1>
                    <p>Hotel</p>
                </div>
            </div>
        </section>

        <section>
            <div class="parallax-one" style="min-height: 100vh;">
                <div class="parallax-inner" style="background-color: rgba(0, 0, 0, .5); width: 90%; height: 90vh; margin: auto;">
                    <div class="row">
                        <div class="col-sm-2 mt-5 ml-2 select-dates">
                            <p style="color: white;">SELECT DATES</p>
                        </div>
                        <div class="btn-group col-sm-4 offset-md-4 mt-5 country-money-toggle">
                            <button type="button" class="btn btn-primary">Log In</button>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                    Euros <span class="caret"></span></button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">US-Dollar</a></li>
                                    <li><a href="#">Pounds</a></li>
                                </ul>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                    English-US <span class="caret"></span></button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">French-FR</a></li>
                                    <li><a href="#">Spanish-SP</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="info-text mt-5">
                        <small>
                            Pour réserver plusieurs chambres, sélectionnez le nombre de chambres ci-dessous.
                            Vous aurez également la possibilité d'ajouter ou de modifier le nombre de chambres,
                            les dates et d'autres informations dans les prochaines étapes.
                        </small>
                    </div>

                    <!--Number of nights to be booked-->
                    <div id="numberOfNights" style="text-align: center;" class="col-2 offset-8"></div>

                    <!--single date picker-->
                    <div style="margin-top: 20px; display: flex; justify-content: space-between;" class="container row">

                        <!--Arrival div-->
                        <div class="col-sm-6 col-md-2" style="margin-top: 20px; overflow: hidden;">
                            <div><label style="color: white;">ARRIVAL</label></div>
                            <div><input type="text" name="arrival" value="11/24/2020" /></div>
                        </div>

                        <!--Departure div-->
                        <div class="col-sm-6 col-md-2" style="margin-top: 20px; overflow: hidden;">
                            <div><label style="color: white;">DEPARTURE</label></div>
                            <div><input type="text" name="departure" value="11/28/2020" /></div>
                        </div>

                        <!--Rooms select-->
                        <div style="margin-top: 22px;" class="col-sm-6 col-md-2 select-divs">
                            <div><label style="color: white;">Room(s)</label></div>
                            <select style="font-size:0.9em;" id="PersonSelector" class="fieldDrop">
                                <option selected="selected disabled" value="0">All</option>

                                <option value="1">1</option>

                                <option value="2">2</option>

                                <option value="3">3</option>

                            </select>
                        </div>

                        <!--Adults select-->
                        <div style="margin-top: 22px;" class="col-sm-6 col-md-2 select-divs">
                            <div><label style="color: white;">Adult(s)</label></div>
                            <select style="font-size:0.9em;" id="PersonSelector" class="fieldDrop">
                                <option selected="selected disabled" value="0">All</option>

                                <option value="1">1</option>

                                <option value="2">2</option>

                                <option value="3">3</option>

                            </select>
                        </div>

                        <!--Kids select-->
                        <div style="margin-top: 22px;" class="col-sm-6 col-md-2 select-divs">
                            <div><label style="color: white;">Kids(s)</label></div>
                            <select style="font-size:0.9em;" id="PersonSelector" class="fieldDrop">
                                <option selected="selected disabled" value="0">All</option>

                                <option value="1">1</option>

                                <option value="2">2</option>

                                <option value="3">3</option>

                            </select>
                        </div>
                    </div>

                    <!--Check Availability button-->
                    <div class="availabilty-div" style="margin: 60px auto;">
                        <button class="availabilty-button">CHECK AVAILABILITY</button>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!------ Bootstrap cdn script tags---------->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!--script tags used for datetime picker-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

    <script>
        $(function() {
            var arrival; //Declare an arrival variable to hold arrival dates
            var daysBooked; // passed to controllerfor the number of days reserved
            // single date pickers starts HERE

            /***** ARRIVAL DATETIME PICKER *****/
            $('input[name="arrival"]').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                minYear: 1901,
                timePicker: true,
                locale: {
                    format: 'M/DD hh:mm A'
                },
                maxYear: 2030,
            }, function(start, end, label) {
                var years = moment().diff(start, 'years');
                //console.log(start);
                //alert("You are " + years + " years old!");
            });

            $('input[name="arrival"]').on('apply.daterangepicker', function(ev, picker) {
                var arrivalDate = picker.startDate.format('YYYY-MM-DD');
                arrival = new Date(arrivalDate).getTime();
            });

            /***** DEPARTURE DATETIME PICKER *****/
            $('input[name="departure"]').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                minYear: 1901,
                timePicker: true,
                locale: {
                    format: 'M/DD hh:mm A'
                },
                maxYear: 2030,
            }, function(start, end, label) {
                // var years = moment().diff(start, 'years');
                // alert("You are " + years + " years old!");
            });

            $('input[name="departure"]').on('apply.daterangepicker', function(ev, picker) {
                var departureDate = picker.startDate.format('YYYY-MM-DD');
                var departure = new Date(departureDate).getTime(); // Convert datetime to milliseconds

                var differenceInMilliseconds = departure - arrival; // Diff between arrival and departure dates in milliseconds
                console.log("differenceInMilliseconds  " + differenceInMilliseconds);
                var differenceInDays = Math.ceil(differenceInMilliseconds / (1000 * 3600 * 24)); // Diff between arrival and departure dates in Days

                /* Check if the selected daterange is valid */
                if (differenceInDays == 0 || differenceInDays < 0) {
                    alert("Please Enter a valid date range");
                } else {
                    $('#numberOfNights').html(differenceInDays);
                    $('#numberOfNights').append("<p>Night(s)</p>"); // Appending content to div element
                    $('#numberOfNights').css({
                        "border": "1px solid #ccc",
                        "margin-bottom": "10px"
                    });
                    //alert(differenceInDays);
                    daysBooked = differenceInDays;
                }
            });
            // single date pickers end HERE
        });
    </script>

</body>

</html>