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

     <!-- Inline style -->
     <style>
        /***Fonts *****/ 
        @import url("https://fonts.googleapis.com/css?family=Nunito");
        @import url("https://fonts.googleapis.com/css2?family=Lora:ital@1&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Cinzel+Decorative&family=Lora:ital@1&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Gilda+Display&display=swap");

        @import url("https://fonts.googleapis.com/css?family=Oswald:300, 400, 700");
        @import url("https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic");

        h2, p, h3 {
            color: black;
        }

        /*Fonts*/
        h3, h2, h5, h6 {
            font-family: "Lora", serif;
        }

        h1, h4 {
            font-family: "Cinzel Decorative", cursive;
        }

        p, small, a {
            font-family: "Gilda Display", serif;
        }

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
        .invoice-container {
            padding-left: 20px;
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center; 
        }
        .invoice-container .first-div {
            width: 80%;
            display: flex; 
            justify-content: space-between;
            align-items: center; 
        }
        .first-div-inner-container {
            width: 40%;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
            align-items: center; 
        }
        .invoice {
            width: 20%;
        }
        #invoice-container {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            flex-direction: row  !important;
            justify-content: space-between;
            margin-top: 20px;
        }
        .left-invoice {
            width: 30%;
            margin-bottom: 20px;
        }
        .right-invoice {
            width: 60%;
            background-color: #0dcaf0;
            color: white;
        }
        .text-uppercase {
            text-transform: uppercase;
        }
        .borderless-table {
            color: white;
        }
        .text-capitalize {
            text-transform: capitalize;
        }
        .invoice-to {
            font-weight: bold;
        }
        .second-table {
            width: 100%;
            margin-top: 20px;
        }
        .second-table-heading {
            border: none !important;
            color: #0dcaf0;
        }
        .white-color {
            color: white;
            background-color: #0dcaf0 !important;
        }
        .warning-color {
            color: white;
             background-color: #F3D849 !important;
        }
        .last-table {
            width: 100%;
        }
        .last-table thead {
            color: white;
            background-color: #0dcaf0 !important;
        }
        .patronize {
            width: 100%;
            margin: 20px 0px;
        }
        .patronize-div {
            width: 50%;
        }
     </style>

    <title>Invoice</title>
  </head>
  <body>
    <div class="invoice-container">
        <div class="first-div">
            <div class="first-div-inner-container">
                <div><img src="./images/the-Palms-logo.png" alt="hotel-logo" width="150" height="100" /></div>
                <div style="position: relative">
                    <h4 style="margin: 0px;">PalmsRoyal</h4><br />
                    <small style="position: absolute; top: 35px;">Hotel & Lodging</small>
                </div>
            </div>
            <div class="invoice">
                <h5>Invoice</h5>
            </div>
        </div>
        <div class="invoice-container" id="invoice-container">
            <div class="left-invoice">
                <h6 class="text-uppercase invoice-to">invoice to</h6>
                <span class="text-capitalize">kingsley mgbams</span><br />
                <span class="text-capitalize">2 Rue auguste choolat</span><br />
                <span class="text-capitalize">lyon</span><br />
                <span class="text-capitalize">france</span>
            </div>
            <div class="right-invoice">
                <table class="table borderless-table">
                    <thead>
                        <tr>
                        <th class="text-uppercase" scope="col">Date</th>
                        <th class="text-uppercase" scope="col">invoice no</th>
                        <th class="text-uppercase" scope="col">total due</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr >
                            <td>12/10/2015</td>
                            <td>89770065</td>
                            <td>&euro; 2, 200</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        
        </div>
        <div class="second-table">
            <table class="table">
                    <thead class="second-table-heading">
                        <tr>
                            <th class="text-uppercase" scope="col" colspan="5">description</th>
                            <th class="text-uppercase" scope="col">price</th>
                            <th class="text-uppercase" scope="col">quantity</th>
                            <th class="text-uppercase" scope="col">total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr >
                            <td colspan="5">
                            <span class="badge bg-primary text-wrap" style="width: 2rem;">
                                01
                            </span>
                                <span>title</span><br />
                                <span>description</span>
                            </td>
                            <td>&euro; 674</td>
                            <td>1</td>
                            <td>&euro; 2, 200</td>
                        </tr>
                         <tr >
                            <td colspan="5"></td>
                            <td></td>
                            <td>
                               <span><strong>subtotal</strong></span><br />
                                <span><strong>20% VAT</strong></span><br />
                                <span><strong>5% discount</strong></span> 
                            </td>
                            <td>
                                <span><strong>&euro; 2, 200</strong></span><br />
                                <span><strong>&euro; 200</strong></span><br />
                                <span><strong>- &euro; 87</strong></span> 
                           </td>
                        </tr>
                         <tr >
                            <td colspan="5"></td>
                            <td></td>
                            <td class="white-color">
                               <span><strong class="text-uppercase">total</strong></span>
                            </td>
                            <td class="white-color">
                                <span><strong>&euro; 2, 313</strong></span>
                           </td>
                        </tr>
                         <tr >
                            <td colspan="5"></td>
                            <td></td>
                            <td class="warning-color">
                               <span><strong class="text-uppercase">balance</strong></span>
                            </td>
                            <td class="warning-color">
                                <span><strong>&euro; 0.0</strong></span>
                           </td>
                        </tr>
                    </tbody>
                </table>
        </div>

        <div class="patronize">
            <div class="patronize-div">
                <h1>Thank You <br />for patronizing us.</h1>
            </div>
        </div>

         <div class="last-table">
                <table class="table">
                    <thead>
                        <tr>
                        <th class="text-uppercase" scope="col">payment</th>
                        <th class="text-uppercase" scope="col">company info</th>
                        <th class="text-uppercase" scope="col">address</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr >
                            <td>
                                <span>
                                    Balance is to be paid before checkout
                                </span>
                            </td>
                            <td>
                                <span>wwww.palmsroyal.netlify</span><br />
                                <span>welcome@royalpalms.co.uk</span><br /><br />
                                <span>Company no: 1234567</span><br />
                                <span>VAT no: 1234567</span><br /><br />
                                <small><a href="#">Terms: wwww.royalpalms.netlify/terms</a></small>
                            </td>
                            <td>
                                <span  class="text-capitalize">Part Dieu</span><br />
                                <span  class="text-capitalize">5 Rue vivier Merle</span><br />
                                <span class="text-uppercase">lyon</span><br />
                                <span class="text-uppercase">france</span><br />
                                <span>69003</span><br />
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  </body>
</html>
