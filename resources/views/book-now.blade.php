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

    <!-- Flatpickr css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/material_green.css">

    <!--main css file starts here-->
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
    <!--Availability Calendar css-->
    <link href="{{url('css/availability-calendar.css')}}" rel="stylesheet">
</head>

<body>
    <div id="book-now-container">

        <section>
            <div class="d-flex bg-secondary py-3 justify-content-between">
                <div class="ml-5">
                    <a href="{{ url('/show-rooms') }}" class="btn mt-2 return-back-btn" style="background-color: #864747; color: white;">Go Back</a>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="mr-5">info@palmsroyal-hotel.com</div>
                    <div class="mr-3">+33759876543</div>
                </div>
            </div>
            <div class="title row" style="background-color: yellow;">
                <div class="col-md-4 col-sm-12 d-flex justify-content-center align-items-center flex-column" style="height: 20vh;">
                    <h3>Let's do some</h3>
                    <h1>BOOKING</h1>
                </div>
                <div class="col-md-8 col-sm-12 d-flex justify-content-center align-items-center flex-column" style="height: 20vh;">
                    <h1>pamsRoyal</h1>
                    <p>Hotel</p>
                </div>
            </div>
        </section>

        <section>
            <div class="parallax-one" style="min-height: 100vh;">
                <div class="parallax-inner" style="background-color: rgba(0, 0, 0, .5); width: 90%; height: 76vh; margin: auto;">
                    <div class="row">
                        <div class="col-sm-2 mt-5 ml-2 select-dates">
                            <p style="color: white;">SELECT DATES</p>
                        </div>
                        <div class="btn-group col-sm-4 offset-md-4 mt-5 country-money-toggle">
                            <a type="button" href="{{url('/login', app()->getlocale())}}" class="btn btn-primary">Log In</a>
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
                    <div id="numberOfNights" class="col-sm-2 offset-sm-8" style="text-align: center; color: white; font-size: 22px;" class="col-2 offset-8"></div>

                    <!--single date picker-->
                    <div style="margin-top: 20px; display: flex; justify-content: space-between;" class="container row">

                        <!--Flatpickr3-->
                        <div class="col-sm-6 col-md-2" style="margin-top: 20px; overflow: hidden;">
                            <div><label style="color: white;">CHECK-IN</label></div>
                            <input type="text" name="arrival" type="date" class="arrival" placeholder="select date/time">
                        </div>

                        <!--Flatpickr4-->
                        <div class="col-sm-6 col-md-2" style="margin-top: 20px; overflow: hidden;">
                            <div><label style="color: white;">CHECK-OUT</label></div>
                            <input type="text" type="date" class="checkout" name="checkout" placeholder="select date/time">
                        </div>

                        <!--Rooms select-->
                        <div style="margin-top: 22px;" class="col-sm-6 col-md-2 select-divs">
                            <div><label style="color: white;">Room(s)</label></div>
                            <select style="font-size:0.9em;" id="roomSelector" class="fieldDrop">
                                <option selected="selected disabled" value="0">All</option>

                                <option value="1">1</option>

                                <option value="2">2</option>

                                <option value="3">3</option>

                            </select>
                        </div>

                        <!--Adults select-->
                        <div style="margin-top: 22px;" class="col-sm-6 col-md-2 select-divs">
                            <div><label style="color: white;">Adult(s)</label></div>
                            <select style="font-size:0.9em;" id="adultSelector" class="fieldDrop">
                                <option selected="selected disabled" value="0">All</option>

                                <option value="1">1</option>

                                <option value="2">2</option>

                                <option value="3">3</option>

                            </select>
                        </div>

                        <!--Kids select-->
                        <div style="margin-top: 22px;" class="col-sm-6 col-md-2 select-divs">
                            <div><label style="color: white;">Kids(s)</label></div>
                            <select style="font-size:0.9em;" id="kidsSelector" class="fieldDrop">
                                <option selected="selected disabled" value="0">All</option>

                                <option value="1">1</option>

                                <option value="2">2</option>

                                <option value="3">3</option>

                            </select>
                        </div>
                    </div>

                    <!--Check Availability button-->
                    <div class="availabilty-div" style="margin: 60px auto;">
                        <a id="availability-dates-link" class="availabilty-button btn" href="">CHECK AVAILABILITY</a>
                    </div>
                </div>

                <!--Availability calendar-->
                <div class="availability-calendar parallax-inner-two" style="background-color: rgba(0, 0, 0, .5); width: 90%; min-height: 100vh; margin: 0px auto; text-align: center;">
                    <div id="calendar"></div>

                    <div class=" cancel-reservation-link row" style="margin-top: 60px">
                        <a class="btn" href="{{url('cancel-reservation')}}"><span>Modify or Cancel Reservation</span><em></em></a>
                    </div>
                    <!-- <div style="margin-top: 40px;"><a href="{{url('cancel-reservation')}}" class="cancel-reservation-link" style="color: white; background-color: grey;  padding: 20px;">Modify or Cancel Reservation</a></div> -->
                </div>

                <!--Cancel Reservation-->
                <div class="cancel-reservation parallax-inner-three " style="background-color: rgba(0, 0, 0, .5); width: 90%; height: 2vh; margin: 0px auto; text-align: center;">

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


    <!--flatpicker-->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <!--Availability calendar js-->
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="{{url('js/availability-calendar.js')}}"></script>


    <script>
        $(function() {
            var arrival; //Declare an arrival variable to hold arrival dates
            var daysBooked; // NUMBER OF DAYS BOOKED
            var checkinDate; // Date CHECKED IN, used when we select from the calendar
            var checkOutDate; // Date CHECKED OUT,  used when we select from the calendar
            var today = new Date();
            var tomorrow = today.setDate(today.getDate() + 1);
        
            /**Manipulating tomorrow's date**/
            var tomorrowDate = new Date(tomorrow);
            tomorrowDate = tomorrowDate.toLocaleDateString().split("/");
            var z =  tomorrowDate.splice(-1)[0];
            // set `z` as item at index `0` of `d`
             tomorrowDate.splice(0, 0, z);
            // join items within `d` with dash character `"-"`
            var tomorrowCheckoutDate =  tomorrowDate.join("-");
            //console.log(tomorrowCheckoutDate);

            /**Manipulating today's date**/
            var todayDate = new Date().toLocaleDateString().split("/"); 
            var y = todayDate.splice(-1)[0];
            // set `y` as item at index `0` of `d`
            todayDate.splice(0, 0, y);
            // join items within `d` with dash character `"-"`
            var presentDayDate = todayDate.join("-");
            //console.log(date);

            console.log($('#roomSelector').val());
            console.log($('#adultSelector').val());
            console.log($('#kidsSelector').val());
            
             $("#availability-dates-link").prop("href", `available-rooms/${daysBooked || 1}/${presentDayDate}/${tomorrowCheckoutDate }`);

            /***Availability calendar unavailable dates***/
            var unavailableDates = [{
                    start: '2020-12-01',
                    end: '2020-12-09'
                },
                {
                    start: '2020-11-20',
                    end: '2020-11-30'
                },
                {
                    start: '2020-12-25',
                    end: '2020-12-28'
                }
            ];

            //flatpickr CHECK-IN
            flatpickr('.arrival', {
                defaultDate: new Date(),
                minDate: "2020-01",
                enableTime: true,
                time_24Hr: true,
                altInput: true,
                altFormat: 'd M Y H:i',
                dateFormat: 'Y-m-d H:i',
            });

            //flatpickr CHECK-OUT
            flatpickr('.checkout', {
                defaultDate: tomorrow,
                minDate: "2020-01",
                enableTime: true,
                time_24Hr: true,
                altInput: true,
                altFormat: 'd M Y H:i',
                dateFormat: 'Y-m-d H:i',
            });

            //Getting the dates selected for checkout

            $(".checkout").change(getSelectedDate);
            $(".arrival").change(getSelectedDate);

            function getSelectedDate() {
                var start = new Date($('.checkout').val()).getTime();
                var checkin = new Date($('.arrival').val()).getTime();
                var checkout = new Date($('.checkout').val()).getTime(); // Convert datetime to milliseconds
                
                /* Splitting the arrival and departure 
                dates using split method */
                var arrivalSplitArray = new Array();
                arrivalSplitArray = ($('.arrival').val().split(" "));
                checkinDate = arrivalSplitArray[0];
                console.log(checkinDate);

                var departureSplitArray = new Array();
                departureSplitArray  = ($('.checkout').val().split(" "));
                checkOutDate = departureSplitArray[0];
                console.log(checkOutDate);
                            
                var differenceInMilliseconds = checkout - checkin; // Diff between arrival and departure dates in milliseconds
                //console.log("differenceInMilliseconds  " + differenceInMilliseconds);
                var differenceInDays = Math.ceil(differenceInMilliseconds / (1000 * 3600 * 24)); // Diff between arrival and departure dates in Days

                /* Check if the selected daterange is valid */
                if (differenceInDays == 0 || differenceInDays < 0) {
                    alert("Please Enter a valid date range");
                } else {
                    $('#numberOfNights').html(differenceInDays);
                    $('#numberOfNights').append("<p style='color: white; font-size: 22px;'>Night(s)</p>"); // Appending content to div element
                    $('#numberOfNights').css({
                        "border": "1px solid #ccc",
                        "margin-bottom": "10px",
                        "margin-top": "20px"
                    });
                    //alert(differenceInDays);
                    daysBooked = differenceInDays;
                    $("#availability-dates-link").prop("href", `available-rooms/${daysBooked || 1}/${checkinDate || presentDayDate}/${checkOutDate || tomorrowCheckoutDate }`);
                    console.log(daysBooked);
                }
            }


            //Initializing availability calendar plugin
            $('#calendar').availabilityCalendar(unavailableDates);


        });
    </script>

</body>

</html>