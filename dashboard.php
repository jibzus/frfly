
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
    

    <title>Firefly - Dashboard</title>

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
            <li class="active"><a href="dashboard"><dot></dot> Dashboard</a></li>
            <li><a href="request"><dot></dot> Request Pickup</a></li>
            <li><a href="orders"><dot></dot> My orders</a></li>
            <li><a href="settings"><dot></dot> Settings</a></li>
            <li><a href="signout"><dot></dot> Sign Out</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="sub-header text-center">
            Welcome back Rodney!
          </h2>
          <div class="dashboard-main text-center">
            <div class="row">
                <div class="col-md-6">
                    <div class="left-holder">
                        <h1><i class="pe-7s-box2"></i></h1>
                        <h2>2</h2>
                        <h3>Total Orders</h3>
                        <a href="request" class="btn label-block firefly-btn-inverse btn-lg-text">Request Pickup</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-holder">
                        <h1><i class="icon-wallet"></i></h1>
                        <h2>NGN 2,500.00</h2>
                        <h3>Available Balance</h3>
                        <a href="#0" class="btn label-block firefly-btn btn-lg-text" data-toggle="modal" data-target="#fundWalletModal">Fund Wallet</a>
                    </div>
                </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="dashboard-help">
                    <h2><i class="pe-7s-help1"></i> Need help</h2>
                    <a href="tel:09099010101" class="label label-block label-success"><i class="pe-7s-call"></i> 0909-9010-101</a>
                    <a href="mailto:hello@firefly.ng" class="label label-block label-info"><i class="icon-envelope"></i> hello@firefly.ng</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

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
