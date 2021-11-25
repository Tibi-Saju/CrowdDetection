
<!DOCTYPE html>


<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    AMPLE| User Dashboard
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
<meta http-equiv="refresh" content="10">
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
      <div class="panel-header panel-header-md">
      <div class="header text-center">
          <h1 class="title">AMPLE</h1>
          <p class="category">Welcome to AMPLE User Dashboard</p>
        </div>
      </div>
      <div class="content">
      
        <div class="row">
                    <div class="card">
              <div class="card-header">
                <h5 class="card-category">Status</h5>
                <h4 class="card-title"> Crowd Status Table</h4>
              </div>
              <div class="card-body">
               
                <div id="chart-container">FusionCharts will render here</div>
  <script src="js/jquery-2.1.4.js"></script>
  <script src="js/fusioncharts.js"></script>
  <script src="js/fusioncharts.charts.js"></script>
  <script src="js/themes/fusioncharts.theme.zune.js"></script>
  <script src="js/app.js"></script>
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
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
	

  </script>
</body>

</html>