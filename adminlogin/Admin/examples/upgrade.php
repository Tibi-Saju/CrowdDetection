
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    AMPLE| Upgrade
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
  <?php
include "./topbar/sidebar.php";
?>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <?php 

include "./topbar/navbar.php";
?>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <div class="card card-upgrade">
              <div class="card-header text-center">
                <h4 class="card-title">AMPLE PRO</h3>
                  <p class="card-category">Are you looking for more components? Please check our Premium Version of AMPLE PRO.</p>
              </div>
              <div class="card-body">
                <div class="table-responsive table-upgrade">
                  <table class="table">
                    <thead>
                      <th></th>
                      <th class="text-center">Free</th>
                      <th class="text-center">PRO</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Components</td>
                        <td class="text-center">16</td>
                        <td class="text-center">160</td>
                      </tr>
                      <tr>
                        <td>Plugins</td>
                        <td class="text-center">4</td>
                        <td class="text-center">13</td>
                      </tr>
                      <tr>
                        <td>Example Pages</td>
                        <td class="text-center">7</td>
                        <td class="text-center">27</td>
                      </tr>
                      <tr>
                        <td>Login, Register, Pricing, Lock Pages</td>
                        <td class="text-center"><i class="now-ui-icons ui-1_simple-remove text-danger"></i></td>
                        <td class="text-center"><i class="now-ui-icons ui-1_check text-success"></i></td>
                      </tr>
                      <tr>
                        <td>DataTables, VectorMap, SweetAlert, Wizard, jQueryValidation, FullCalendar etc...</td>
                        <td class="text-center"><i class="now-ui-icons ui-1_simple-remove text-danger"></i></td>
                        <td class="text-center"><i class="now-ui-icons ui-1_check text-success"></i></td>
                      </tr>
                      <tr>
                        <td>Mini Sidebar</td>
                        <td class="text-center"><i class="now-ui-icons ui-1_simple-remove text-danger"></i></td>
                        <td class="text-center"><i class="now-ui-icons ui-1_check text-success"></i></td>
                      </tr>
                      <tr>
                        <td>Premium Support</td>
                        <td class="text-center"><i class="now-ui-icons ui-1_simple-remove text-danger"></i></td>
                        <td class="text-center"><i class="now-ui-icons ui-1_check text-success"></i></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="text-center">Free</td>
                        <td class="text-center">Just $49</td>
                      </tr>
                      <tr>
                        <td class="text-center"></td>
                        <td class="text-center">
                          <a href="#" class="btn btn-round btn-default disabled">Current Version</a>
                        </td>
                        <td class="text-center">
                          <a target="_blank" href="https://www.creative-tim.com/product/now-ui-dashboard-pro?ref=nud-free-upgrade-live" class="btn btn-round btn-primary">Upgrade to PRO</a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php 

include "./topbar/footer.php";
?>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
</body>

</html>