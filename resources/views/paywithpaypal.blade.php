<html>
<head>
	<meta charset="utf-8">
	<title>How to integrate paypal into palmsRoyal</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container" style="padding: 40px 0px;">
        <div class="row">    	
            <div>        	
                <h1 class="text-center" style="margin: 30px 0px;">Effectuer vos Paiements</h1>
                <form class="form-horizontal" method="POST" id="payment-form" role="form" action="{!! URL::route('paypal') !!}">
                        @csrf
                    <div style="display: flex; justify-content: space-between;">
                        <div class="panel panel-default col-sm-3" style="1px solid red; height: 40vh;">
                            <div class="panel-body">
                               3
                            </div>
                        </div>
                        <div class="col-sm-4">
                                   
                            <div class="form-group">
                                <label>Prénom</label>
                                <input type="text" class="form-control {{ $errors->has('firstname') ? 'error' : '' }}" name="firstname" id="firstname">

                                <!-- Error -->
                                @if ($errors->has('firstname'))
                                <div class="error">
                                    {{ $errors->first('firstname') }}
                                </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Nom</label>
                                <input type="text" class="form-control {{ $errors->has('lastname') ? 'error' : '' }}" name="lastname" id="lastname">

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

                                <div>
                                    <input id="prix" type="hidden" class="form-control" name="prix" value="{{$roomById->price}}">
                                    <input id="room_name" type="hidden" class="form-control" name="room_name" value="{{$roomById->name}}">
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
</body>
</html>