
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

    <title>Firefly - Orders</title>

    <!-- Bootstrap core CSS -->
    <link href="./assets/css/vendor/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="./assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

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
            <li><a href="settings"><dot></dot> Settings</a></li>
            <li><a href="signout"><dot></dot> Sign Out</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <div class="row full-height">

            <div class="col-md-5 drop-shadow-right module-content module-left">

              <div class="row">
                <div class="col-xs-12 mb-10 text-right">
                  <span class='label label-info'>En-route</span>
                </div>
                <div class="col-xs-12 mb-20">
                  <div class="input-group">
                      <span class="input-group-addon">Order Number</span>
                      <input type="text" class="form-control" readonly value="FF76829" style="cursor: default; background: white">
                  </div>
                </div>
              </div>
              <div class="table-responsive">
                  <table class="table table-stripped dt-responsive nowrap" cellspacing="0" width="100%">
                      <tbody>
                          <tr>
                            <td>Pickup</td>
                            <td class="text-right">11 Never land drive, Ikoyi</td>
                          </tr>
                          <tr>
                            <td>Drop off</td>
                            <td class="text-right">22B Wale Olunge road, Victoria Island</td>
                          </tr>
                          <tr>
                            <td>Driver accepted at</td>
                            <td class="text-right">12:32 <span class="hint">PM</span></td>
                          </tr>
                          <tr>
                            <td>Item picked up on</td>
                            <td class="text-right">01:10 <span class="hint">PM</span></td>
                          </tr>
                          <tr>
                              <td>Item delivered on</td>
                              <td class="text-right">02:17 <span class="hint">PM</span></td>
                          </tr>
                          <tr>
                            <td>Created On</td>
                            <td class="text-right" style="font-size:1.2rem;">01/05/2017<p class='hint'>(dd/mm/yyyy)</p></td>
                          </tr>
                      </tbody>
                  </table>
              </div>
                
            </div>
            <div class="col-md-7 module-sidebar">
                
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                  <li role="presentation" class="active"><a href="#driver" aria-controls="driver" role="tab" data-toggle="tab">driver</a></li>
                  <li role="presentation"><a href="#customer" aria-controls="customer" role="tab" data-toggle="tab">customer</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane active" id="driver">
                      <div class="row">
                          <div class="col-xs-12">
                              <table class="table table-stripped dt-responsive nowrap" cellspacing="0" width="100%">
                                  <tbody>
                                      <tr>
                                        <td>Name</td>
                                        <td class="text-right">John Doe</td>
                                      </tr>
                                      <tr>
                                        <td>Mobile</td>
                                        <td class="text-right"><a href="tel:" class="label label-success label-phone"><i class="pe-7s-call" style="font-weight:bold;"></i> 0809-0010-101</a></td>
                                      </tr>
                                      <tr>
                                        <td>Car Type</td>
                                        <td class="text-right">Toyota Camry</td>
                                      </tr>
                                      <tr>
                                          <td>Car Number</td>
                                          <td class="text-right">GHF-127</td>
                                      </tr>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
                  <div role="tabpanel" class="tab-pane" id="customer">
                    <div class="row">
                          <div class="col-xs-12">
                              <table class="table table-stripped dt-responsive nowrap" cellspacing="0" width="100%">
                                  <tbody>
                                      <tr>
                                        <td>First Name</td>
                                        <td class="text-right">John</td>
                                      </tr>
                                      <tr>
                                        <td>Last Name</td>
                                        <td class="text-right">Doe</td>
                                      </tr>
                                      <tr>
                                        <td>Mobile</td>
                                        <td class="text-right"><a href="tel:" class="label label-success label-phone"><i class="pe-7s-call" style="font-weight:bold;"></i> 0809-0010-101</a></td>
                                      </tr>
                                      <tr>
                                        <td>Email</td>
                                        <td class="text-right"><a href="mailto:" class="label label-primary label-phone"><i class="pe-7s-envelope" style="font-weight:bold;"></i> john@mail.com</a></td>
                                      </tr>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
                </div>

            </div>

          </div>
        </div>
      </div>
    </div>

    <!-- Hidden Fields -->
    <input type="hidden" id="current_page_track">

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
