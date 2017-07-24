
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta http-equiv="cleartype" content="on">
    <meta name="format-detection" content="telephone=no">
    <meta name="MobileOptimized" content="320">
    <meta name="HandheldFriendly" content="True">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="copyright" content="ET Limited">
    <!-- Robot nofollow noindex -->
    <meta name="robots" content="noindex, nofollow">

    <!--  Favicons  -->
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon/favicon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="assets/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon/favicon-96x96.png">

    <title>Firefly - Request</title>

    <!-- Bootstrap core CSS -->
    <link href="./assets/css/vendor/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="./assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Sweet Alerts -->
    <link href="./assets/js/vendor/sweet-alert/sweet-alert.min.css" rel="stylesheet">

    <!-- Fonts styles -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
    <script src="https://use.fontawesome.com/a14edfea47.js"></script>
    <link href="./assets/css/fonts.css" rel="stylesheet">

    <!-- Custom styles -->
    <link href="./assets/css/dashboard.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="dashboard"><i class="pe-7s-calculator"></i> Dashboard</a></li>
            <li><a href="request"><i class="pe-7s-map-2"></i> Request Pickup</a></li>
            <li><a href="orders"><i class="pe-7s-box2"></i> My Orders</a></li>
            <li><a href="settings"><i class="pe-7s-config"></i> Settings</a></li>
            <li><a href="signout"><i class="pe-7s-lock"></i> Sign Out</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <a href="#" class="logo-holder">Firefly</a>
          <ul class="nav nav-sidebar">
            <li><a href="dashboard"><dot></dot> Dashboard</a></li>
            <li class="active"><a href="request"><dot></dot> Request Pickup</a></li>
            <li><a href="orders"><dot></dot> My orders</a></li>
            <li><a href="settings"><dot></dot> Settings</a></li>
            <li><a href="signout"><dot></dot> Sign Out</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <div class="order-map-holder" id="gmaps"></div>
          <div class="request-main">
            <div class="row">
                <div class="col-md-4">
                    <h3 class="holder-title"><i class="icon-map"></i> Address</h3>
                    <div class="form-group">
                      <label for="inputPickup">Pickup Address</label>
                      <div class="row">
                        <div class="col-md-9 col-sm-12 pr-0">
                          <input type="text" class="form-control" id="inputPickup" placeholder="11 Neverland Drive">
                        </div>
                        <div class="col-md-3 col-sm-12 pr-5">
                          <input type="text" class="form-control" id="inputPickupNumber" placeholder="No.">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputDropoff">Drop off Address</label>
                      <div class="row">
                          <div class="col-md-9 col-sm-12 pr-0">
                            <input type="text" class="form-control" id="inputDropoff" placeholder="22 Openlane Street">
                          </div>
                          <div class="col-md-3 col-sm-12 pr-5">
                            <input type="text" class="form-control" id="inputDropoffNumber" placeholder="No.">
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-12 pr-0" style="margin-top:10px;">
                            <input type="text" class="form-control" id="inputDropoffExtra" placeholder="Flat/Office/Building name">
                          </div>
                      </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="holder-title"><i class=" icon-profile-male"></i> Customer</h3>
                    <div class="form-group">
                      <label for="inputCustomerFirstName">First Name</label>
                      <input type="text" class="form-control" id="inputCustomerFirstName" placeholder="John">
                    </div>
                    <div class="form-group">
                      <label for="inputCustomerLastName">Last Name</label>
                      <input type="text" class="form-control" id="inputCustomerLastName" placeholder="Doe">
                    </div>
                    <div class="form-group">
                      <label for="inputCustomerMobile">Mobile</label>
                      <div class="tel-input">
                        <input type="tel" class="form-control tel-input__tel" id="inputCustomerMobile" placeholder="08099010101">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputCustomerEmail">Email</label>
                      <div class="tel-input">
                        <input type="email" class="form-control tel-input__tel" id="inputCustomerEmail" placeholder="john@mail.com">
                      </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="holder-title"><i class="pe-7s-cash" style="font-size:2.5rem;vertical-align:sub;"></i> Order Total</h3>
                    <div class="order-summary text-center">
                      <h1 class="currency order-total"><span class="cc-code">NGN</span>2,000.00</h1>
                      <span class="hint">Prices are calculated based on distance and time of request</span>
                      <button class="large-btn icon-arrow-right mt-30 request-now-desktop loading-button"><span class='default-state'>Request Now</span><div class='loading-state spinner'><div class='b1 se'></div><div class='b2 se'></div><div class='b3 se'></div><div class='b4 se'></div><div class='b5 se'></div><div class='b6 se'></div><div class='b7 se'></div><div class='b8 se'></div><div class='b9 se'></div><div class='b10 se'></div><div class='b11 se'></div><div class='b12 se'></div></div></button>
                    </div>
                    
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="request-button-holder-mobile"><button class="large-btn icon-arrow-right mt-30 loading-button"><span class='default-state'>Request Now</span><div class='loading-state spinner'><div class='b1 se'></div><div class='b2 se'></div><div class='b3 se'></div><div class='b4 se'></div><div class='b5 se'></div><div class='b6 se'></div><div class='b7 se'></div><div class='b8 se'></div><div class='b9 se'></div><div class='b10 se'></div><div class='b11 se'></div><div class='b12 se'></div></div></button></div>

    <!-- Fund Wallet Modal -->
    <div class="modal fade" id="fundWalletModal" tabindex="-1" role="dialog" aria-labelledby="fundWalletModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="fundWalletModalLabel">Fund Wallet</h4>
          </div>
          <div class="modal-body">
              <div class="form-group">

                <label for="inputAmount">Amount</label>
                <div class="input-group">
                  <div class="input-group-addon">NGN</div>
                  <input type="number" class="form-control" id="inputAmount" placeholder="0" value="2000">
                  <div class="input-group-addon">.00</div>
                </div>
                <span class="">Please enter amount you want to fund wallet. </span>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-fund-wallet firefly-btn loading-button"><span class='default-state'>Fund</span><div class='loading-state spinner'><div class='b1 se'></div><div class='b2 se'></div><div class='b3 se'></div><div class='b4 se'></div><div class='b5 se'></div><div class='b6 se'></div><div class='b7 se'></div><div class='b8 se'></div><div class='b9 se'></div><div class='b10 se'></div><div class='b11 se'></div><div class='b12 se'></div></div></button>
          </div>
        </div>
      </div>
    </div>

    <!-- Hidden Fields -->
    <input type="hidden" id="inputUserMobile" value="+2348136159447">
    <input type="hidden" id="inputUserEmail" value="zonner55@gmail.com">
    <input type="hidden" id="current_page_request">


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="./assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="./assets/js/vendor/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./assets/js/ie10-viewport-bug-workaround.js"></script>
    <!-- Google Maps API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDvHU1rADXAdNOx657oYLDqdz9peo6x0UI&libraries=places"></script>
    <!-- Paystack JS -->
    <script src="https://js.paystack.co/v1/inline.js"></script>
    <!-- Sweet Alerts -->
    <script src="./assets/js/vendor/sweet-alert/sweet-alert.min.js"></script>
    <!-- Telephone JS Utils -->
    <script src="./assets/js/vendor/telephone.min.js"></script>
    <!-- Firefly JS Engine -->
    <script src="./assets/js/engine.firefly.js"></script>
  </body>
</html>
