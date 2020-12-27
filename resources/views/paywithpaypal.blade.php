<html>
<head>
	<meta charset="utf-8">
	<title>How to integrate paypal into palmsRoyal</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container" style="padding-top: 50px;">
        <div class="row">    	
            <div class="col-md-8 col-md-offset-2">        	
                <h3 class="text-center" style="margin-top: 30px;">Make your payments</h3>
                <div class="panel panel-default" style="margin-top: 60px;">

                    {{-- @if($message = Session::get('success'))
                    <div class="custom-alerts alert alert-success fade in">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                        {!! $message !!}
                    </div>
                    <?php Session::forget('success');?>
                    @endif

                    @if($message = Session::get('error'))
                    <div class="custom-alerts alert alert-danger fade in">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                        {!! $message !!}
                    </div>
                    <?php Session::forget('error');?>
                    @endif --}}
                    <div class="panel-heading"><b>Paywith Paypal</b></div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" id="payment-form" role="form" action="{!! URL::route('paypal') !!}" >
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
                                <label for="amount" class="col-md-4 control-label">Enter Amount</label>

                                <div class="col-md-6">
                                    <input id="amount" type="text" class="form-control" name="amount" value="{{ old('amount') }}" autofocus>
                                    <input id="prix" type="hidden" class="form-control" name="prix" value="{{$roomById->price}}">
                                     <input id="room_name" type="hidden" class="form-control" name="room_name" value="{{$roomById->name}}">
                                    @if ($errors->has('amount'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('amount') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('quantity') ? ' has-error' : '' }}">
                                <label for="quantity" class="col-md-4 control-label">Enter Quantity</label>
                                <div class="col-md-6 mt-3">
                                    <input id="quantity" type="tnumber" class="form-control" name="quantity" value="{{ old('quantity') }}">
                                    @if ($errors->has('quantity'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('quantity') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Paywith Paypal
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>