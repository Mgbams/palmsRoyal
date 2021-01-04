<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!--Custom css for sendinvoice mail-->
     <link rel="stylesheet" type="text/css" href="{{url('css/invoice.css')}}" />
     <!--Inline style-->
     <style>
        .card {
            border-top-left-radius: none !important;
            border-top-right-radius: none !important;
        }

        * {
            box-sizing: border-box;
        }

        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        #top-image {
            height: 15vh; 
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #647295;
        }
        #top-image img {
            z-index: 2; 
            margin-top: 14vh;
            border-radius: 50%;
        }
        .card-container {
            width: 50vw;
            padding-left: 5px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
            background-color: #E8ECEB;
        }

        .card-container .royalpalms-title {
            width: 100%;
            margin-top: 60px; 
        }
        .royalpalms-title h2 {
            text-align: center;
        }
        .welcome-container {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 15px;
        }
        .welcome-container .description {
            width: 60%;
        }
        .text-capitalize {
            text-transform: capitalize;
        }
        .divider-1 {
            margin-top: 15px;
            width: 45vw; 
            height: 1px; 
            border-bottom: 1px solid gray;
        }
        .login {
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            border: solid 1px #20538D;
            text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.4);
            -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.2);
            -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.2);
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.2);
            background: #4479BA;
            color: #FFF;
            padding: 8px 12px;
            text-decoration: none;
            justify-content: center;
            text-transform: capitalize;
            margin-top: 10px; 
        }
        .information-container  {
            display: flex;
            flex-direction: column; 
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }
        .information-title {
            margin-top: 20px;
        }
        .login-details {
            display: flex; 
            justify-content: space-between;
            margin-top: 20px;
            width: 80%;
        }
        .login-details .description {
            width: 40%;
        }
        .login-details-content {
            width: 75%;
        }
        .question-container {
            margin: 20px 0px; 
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .divider-2 {
            width: 45vw; 
            height: 1px; 
            border-bottom: 1px solid gray;
            margin: 25px 0px;
        }
        .thanks-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-bottom: 10px;
        }

     </style>
    <title>Successful Registration</title>
  </head>
  <body>
    <div id="top-image">
        <img src="https://i.pinimg.com/originals/f4/42/29/f442290e56d1b44f3c48c81192db10c4.jpg" alt="" width="150" height="150">
    </div>
    <div class="card-container">
        <div class="royalpalms-title">
            <h2>RoyalPalms</h2>
        </div>
        <div class="welcome-container">
            <div class="description">
                <h3>Welcome to palmsRoyal Hotel!</h3><br />
                <span class="text-capitalize">hi {{ $data['name'] }},</span><br />
                <span>You can proceed to reserving a room and</span><br />
                <span>enjoy all the adventures palmsRoyal has in store for you</span>
            </div>
        </div>
        <!--horizontal divider-->
        <div class="divider-1"></div>
        <div class="information-container">
            <h3 class="information-title">Here's your Login Information:</h3>
            <div class="login-details">
                <div class="description">
                    <p>Custom URL :</p>
                    <p>Email :</p>
                </div>
                <div class="login-details-content">
                    <p>www.royalPalms.netlify</p>
                    <p>{{ $data['email'] }}</p>
                </div>
            </div>
            <a class="login">login now</a>
        </div>
        <!--horizontal divider-->
        <div class="divider-2"></div>
        <div class="thanks-container">
            <span>Thanks for choosing Royalpalms</span><br />
        </div>
    </div>
    <div class="question-container">
        <div style="margin-bottom: 15px;"><strong>Question?</strong></div>
        <div>
            <footer> 
                <blockquote>
                    Reply to this email or get in touch with us at <a href="#">royalPalms@contact</a> 
                </blockquote>
            </footer>
        </div>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  </body>
</html>
