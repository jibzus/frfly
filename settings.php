
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

    <title>Firefly - Settings</title>

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
            <li><a href="#"><i class="pe-7s-lock"></i> Sign Out</a></li>
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
            <li><a href="request"><dot></dot> Request Pickup</a></li>
            <li><a href="orders"><dot></dot> My orders</a></li>
            <li class="active"><a href="settings"><dot></dot> Settings</a></li>
            <li><a href="signout"><dot></dot> Sign Out</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <div class="settings-main">
            <div class="row">
                <div class="col-md-4">
                    <h3 class="holder-title"><i class="icon-briefcase"></i> Business Information</h3>
                    <div class="form-group">
                      <label for="inputBusinessName">Business Name</label>
                      <input type="text" class="form-control" id="inputBusinessName" placeholder="Sands Limited" autofocus="autofocus">
                    </div>
                    <div class="form-group">
                      <label for="inputBusinessEmail">Business Mobile Number</label>
                      <input type="email" class="form-control" id="inputBusinessEmail" placeholder="hello@sans.ng">
                    </div>
                    <div class="form-group">
                      <label for="inputBusinessMobile">Business Mobile Number</label>
                      <div class="tel-input">
                        <input type="tel" class="form-control tel-input__tel" id="inputBusinessMobile" placeholder="08099010101">
                      </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="holder-title"><i class="icon-map"></i> Address</h3>
                    <div class="form-group">
                      <label for="inputBusinessPickup1">Pickup Address 1</label>
                      <div class="row">
                        <div class="col-md-9 col-pr-0">
                          <input type="text" class="form-control" id="inputBusinessPickup1" placeholder="Neverland Drive, Ikoyi">
                        </div>
                        <div class="col-md-3 col-mobile-pt-10">
                          <input type="text" class="form-control" id="inputBusinessPickupNum1" placeholder="No.">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputBusinessPickup2">Pickup Address 2</label>
                      <div class="row">
                        <div class="col-md-9 col-pr-0">
                          <input type="text" class="form-control" id="inputBusinessPickup2" placeholder="Neverland Drive, Lekki Phase 1">
                        </div>
                        <div class="col-md-3 col-mobile-pt-10">
                          <input type="text" class="form-control" id="inputBusinessPickupNum2" placeholder="No.">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputBusinessPickup3">Pickup Address 3</label>
                      <div class="row">
                        <div class="col-md-9 col-pr-0">
                          <input type="text" class="form-control" id="inputBusinessPickup3" placeholder="Neverland Drive, Yaba">
                        </div>
                        <div class="col-md-3 col-mobile-pt-10">
                          <input type="text" class="form-control" id="inputBusinessPickupNum3" placeholder="No.">
                        </div>
                      </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="holder-title"><i class="icon-alarmclock"></i> Notifications</h3>
                    <div class="form-group">
                        <div class="row">
                          <div class="col-xs-5 text-right">
                              <label class="switch">
                                <input type="checkbox">
                                <div class="slider round"></div>
                              </label>
                          </div>
                          <div class="col-xs-7 pl-0">
                              <h3 class="switch-label">email notification</h3>
                          </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                          <div class="col-xs-5 text-right">
                              <label class="switch">
                                <input type="checkbox">
                                <div class="slider round"></div>
                              </label>
                          </div>
                          <div class="col-xs-7 pl-0">
                              <h3 class="switch-label">sms notification</h3>
                          </div>
                        </div>
                    </div>
                    <div class="form-group">
                      <button class="btn firefly-btn-inverse btn-block mt-30 loading-button request-now-desktop"><span class='default-state'>Save</span><div class='loading-state spinner'><div class='b1 se'></div><div class='b2 se'></div><div class='b3 se'></div><div class='b4 se'></div><div class='b5 se'></div><div class='b6 se'></div><div class='b7 se'></div><div class='b8 se'></div><div class='b9 se'></div><div class='b10 se'></div><div class='b11 se'></div><div class='b12 se'></div></div></button>
                    </div>
                    
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="request-button-holder-mobile"><button class="large-btn icon-arrow-right mt-30 loading-button"><span class='default-state'>Save</span><div class='loading-state spinner'><div class='b1 se'></div><div class='b2 se'></div><div class='b3 se'></div><div class='b4 se'></div><div class='b5 se'></div><div class='b6 se'></div><div class='b7 se'></div><div class='b8 se'></div><div class='b9 se'></div><div class='b10 se'></div><div class='b11 se'></div><div class='b12 se'></div></div></button></div>

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
