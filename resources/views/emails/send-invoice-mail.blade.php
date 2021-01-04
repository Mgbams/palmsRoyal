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
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container-sm pl-5 d-flex flex-column justify-content-center align-items-center">
        <div class="row d-flex justify-content-between align-items-center" style="width: 80%;">
            <div class="col-sm-5 d-flex justify-content-evenly align-items-center">
                <div><img src="./images/the-Palms-logo.png" alt="hotel-logo" width="150" height="100" /></div>
                <div style="position: relative">
                    <h4 style="margin: 0px;">PalmsRoyal</h4><br />
                    <small style="position: absolute; top: 35px;">Hotel & Lodging</small>
                </div>
            </div>
            <div class="col-sm-2">
                <h5>Invoice</h5>
            </div>
        </div>
        <div class="row d-flex justify-content-between mt-3" style="width: 100%;">
            <div class="col-sm-3 mb-3">
                <h6 class="text-uppercase fw-bold">invoice to</h6>
                <span class="text-capitalize">kingsley mgbams</span><br />
                <span class="text-capitalize">2 Rue auguste choolat</span><br />
                <span class="text-capitalize">lyon</span><br />
                <span class="text-capitalize">france</span>
            </div>
            <div class="col-sm-6 bg-info text-white table-responsive">
                <table class="table able-borderless text-white">
                    <thead style="border: none !important;">
                        <tr style="border: none !important;">
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
        <div class="row mt-2" style="width: 100%;">
            <table class="table able-borderless">
                    <thead style="border: none !important;">
                        <tr style="border: none !important;">
                        <th class="text-uppercase" scope="col" colspan="5">description</th>
                        <th class="text-uppercase" scope="col">price</th>
                        <th class="text-uppercase" scope="col">quantity</th>
                          <th class="text-uppercase" scope="col">total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr >
                            <td colspan="5">
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
                            <td class="bg-info text-white">
                               <span><strong>subtotal</strong></span>
                            </td>
                            <td class="bg-info text-white">
                                <span><strong>&euro; 2, 313</strong></span>
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
