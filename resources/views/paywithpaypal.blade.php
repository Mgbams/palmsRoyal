<html>
<head>
	<meta charset="utf-8">
	<title>How to integrate paypal into palmsRoyal</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
     <!--main css file starts here-->
    <link type="text/css" rel="stylesheet" href="{{ mix('css/paypal.css') }}">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container" style="padding: 40px 0px;">
        <div class="row">    	
            <div>
                <div><a href="{{route('book-now')}}" class="btn btn-primary">Go Back</a></div>        	
                <div>
                    <h1 class="text-center" style="margin: 30px 0px;">Effectuer vos Paiements</h1>
                </div>
                <form class="form-horizontal" method="POST" id="payment-form" role="form" action="{!! URL::route('paypal') !!}">
                        @csrf
                    <div style="display: flex; justify-content: space-between;">
                        <div class="panel panel-default col-sm-3" style="1px solid red; height: 40vh;">
                            <div class="panel-body">
                               <div>
                                 @if(Session::has('numberOfDaysBooked'))
                                 <div style="display: flex; justify-content: space-between;">
                                    <div>
                                        <p><strong>No Of Days Booked:&nbsp;</strong>
                                    </div>
                                    <div>
                                        <p>{{ Session::get('numberOfDaysBooked') }}</p></p>
                                    </div>
                                 </div>
                                 @endif
                               </div>

                               <div>
                                 @if(Session::has('checkInDate'))
                                 <div style="display: flex; justify-content: space-between;">
                                    <div>
                                        <p><strong>CheckIN Date:&nbsp;</strong>
                                    </div>
                                    <div>
                                        <p>{{ Session::get('checkInDate') }}</p>
                                    </div>
                                 </div>
                                 @endif
                               </div>

                               <div>
                                 @if(Session::has('checkOutDate'))
                                 <div style="display: flex; justify-content: space-between;">
                                    <div>
                                        <p><strong>CheckOut Date:&nbsp;</strong>
                                    </div>
                                    <div>
                                        <p>{{ Session::get('checkOutDate') }}</p>
                                    </div>
                                 </div>
                                 @endif
                               </div>

                                <div style="display: flex; justify-content: space-between;">
                                    <div>
                                        <p><strong>Room Price:&nbsp;</strong>
                                    </div>
                                    <div>
                                        <p>&euro;&nbsp;{{ $totalAmountToPay }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        @if (!Auth::check())
                        <div class="col-sm-4">
                                   
                            <div class="form-group">
                                <label>Prénom</label>
                                <input type="text" minlength="2" class="form-control {{ $errors->has('firstname') ? 'error' : '' }}" name="firstname" id="firstname">

                                <!-- Error -->
                                @if ($errors->has('firstname'))
                                <div class="error">
                                    {{ $errors->first('firstname') }}
                                </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Nom</label>
                                <input type="text" minlength="2" class="form-control {{ $errors->has('lastname') ? 'error' : '' }}" name="lastname" id="lastname">

                                <!-- Error -->
                                @if ($errors->has('lastname'))
                                <div class="error">
                                    {{ $errors->first('lastname') }}
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

                            <div class="form-group">
                                <label>Téléphone</label>
                                <input type="text" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone" id="phone">

                                @if ($errors->has('phone'))
                                <div class="error">
                                    {{ $errors->first('phone') }}
                                </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Adresse</label>
                                <input type="text" class="form-control {{ $errors->has('adresse') ? 'error' : '' }}" name="adresse"
                                    id="adresse">

                                @if ($errors->has('adresse'))
                                <div class="error">
                                    {{ $errors->first('adresse') }}
                                </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Ville</label>
                                <input type="text" class="form-control {{ $errors->has('ville') ? 'error' : '' }}" name="ville" id="ville">

                                <!-- Error -->
                                @if ($errors->has('ville'))
                                <div class="error">
                                    {{ $errors->first('ville') }}
                                </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <select class="form-control" name="country">
                                @foreach($countries as $country)
                                    <option value="{{$country->id}}">{{$country->nom_fr_fr}}</option>
                                @endforeach
                                </select>    
                            </div>

                            <div class="form-group">
                                <label>Code Postal</label>
                                <input type="text" class="form-control {{ $errors->has('postale') ? 'error' : '' }}" name="postale" id="postale">

                                <!-- Error -->
                                @if ($errors->has('postale'))
                                <div class="error">
                                    {{ $errors->first('postale') }}
                                </div>
                                @endif
                            </div>
                        </div>
                        @endif

                        @if (Auth::check())
                        <div class="col-sm-4" style="height: 70vh;">
                            <img src="{{$roomById->url}}" alt="{{$roomById->name}}" style="width: 100%; height: 100%;" />
                        </div>
                        @endif
                        
                        <div class="panel panel-default col-sm-3" style="height: 40vh;">
                            <div class="panel-heading"><b>Paywith Paypal</b></div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label>
                                        <input type="checkbox" name="offers">&nbsp;Informez-moi des offres spéciales
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label>
                                        <input type="checkbox" name="terms">&nbsp;J'ai lu et accepté le
                                            <a href="">Termes</a> & <a href="">Conditions</a> et <a href="">Politique de confidentialité</a>
                                    </label>
                                </div>

                                <div class="hiddenInputs">
                                    <input id="prix" type="hidden" class="form-control" name="prix" value="{{$roomById->price}}">
                                    <input id="room_name" type="hidden" class="form-control" name="room_name" value="{{$roomById->name}}">

                                    <input id="totalAmount" type="hidden" class="form-control" name="totalAmount" value="{{ $totalAmountToPay }}">
                                    <input id="checkOutDate" type="hidden" class="form-control" name="checkOutDate" value="{{ Session::get('checkOutDate') }}">
                                    <input id="numberOfDaysBooked" type="hidden" class="form-control" name="numberOfDaysBooked" value="{{ Session::get('numberOfDaysBooked') }}">
                                    <input id="checkInDate" type="hidden" class="form-control" name="checkInDate" value="{{ Session::get('checkInDate') }}">
                                </div>
                                            
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Paywith Paypal
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#payment-form").validate({
                rules: {
                    firstname : {
                        required: true,
                        minlength: 3
                    },
                    lastname: {
                        required: true,
                        minlength: 3
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    messages : {
                        firstname: {
                            required: 'Firstname is required',
                            minlength: "Name should be at least 3 characters"
                        },
                        lastname: {
                            required: 'Lastname is required',
                            minlength: "Name should be at least 3 characters"
                        },
                        email: {
                            required: 'Email is required',
                            email: "The email should be in the format: abc@domain.tld"
                        },
                    },
                    // Make sure the form is submitted to the destination defined
                    // in the "action" attribute of the form when valid
                    // submitHandler: function(form) {
                    //     form.submit();
                    // },
                    if (validator.form()) { // validation perform
                        $('#payment-form').attr({
                            action: '/paypal'
                        });
                        $('#payment-form').submit();
                    }
                }
            });
        });
    </script>
</body>
</html>