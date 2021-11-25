

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
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Sno
                      </th>
                      <th>
                        City
                      </th>
                      <th class="text-center">
                        Crowd Count
                      </th>
                      <th class="text-right">
                        Status
                      </th>
					     <th class="text-right">
                        Details
                      </th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          1
                        </td>
                        <td>
							Nandhini (christ)
                        </td>
                        <td class="text-center">
                          <?php
						  
						  $servername = "localhost";
						  $username = "root";
						  $password = "";
						  $dbName = "shops";
						  $conn = new mysqli($servername, $username, $password, $dbName);
							if ($conn->connect_error) {
							  die("Connection failed: " . $conn->connect_error);
							}

							$sql = "SELECT nopeople FROM shop1 ORDER BY id DESC LIMIT 1";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
							  // output data of each row
							  while($row = $result->fetch_assoc()) {
								echo $row["nopeople"];
							  }
							} else
								{
							  echo "0 results";
							}
							$conn->close();
						  ?>
                        </td>
                        <td class="text-right">
                           <?php
						  
						  $servername = "localhost";
						  $username = "root";
						  $password = "";
						  $dbName = "shops";
						  $conn = new mysqli($servername, $username, $password, $dbName);
							if ($conn->connect_error) {
							  die("Connection failed: " . $conn->connect_error);
							}

							$sql = "SELECT nopeople FROM shop1 ORDER BY id DESC LIMIT 1";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
							  // output data of each row
							  while($row = $result->fetch_assoc()) {
								$n=$row["nopeople"];
								if($n<2)
								{
									echo "Not Crowded";
								}
								else if($n==2)
								{
									echo "Moderate";
								}
								else
								{
									echo "crowded";
								}
									
							  }
							} else
								{
							  echo "0 results";
							}
							$conn->close();
						  ?>
                        </td>
						   <td class="text-right">
                          <a class="btn btn-primary" href="dashboard1.php" role="button">View</a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          2
                        </td>
                        <td>
                          Malabar cafe
                        </td>
                        <td class="text-center">
                          <?php
						  
						  $servername = "localhost";
						  $username = "root";
						  $password = "";
						  $dbName = "shops";
						  $conn = new mysqli($servername, $username, $password, $dbName);
							if ($conn->connect_error) {
							  die("Connection failed: " . $conn->connect_error);
							}

							$sql = "SELECT nopeople FROM shop2 ORDER BY id DESC LIMIT 1";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
							  // output data of each row
							  while($row = $result->fetch_assoc()) {
								echo $row["nopeople"];
							  }
							} else
								{
							  echo "0 results";
							}
							$conn->close();
						  ?>
                        </td>
                        <td class="text-right">
                           <?php
						  
						  $servername = "localhost";
						  $username = "root";
						  $password = "";
						  $dbName = "shops";
						  $conn = new mysqli($servername, $username, $password, $dbName);
							if ($conn->connect_error) {
							  die("Connection failed: " . $conn->connect_error);
							}

							$sql = "SELECT nopeople FROM shop2 ORDER BY id DESC LIMIT 1";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
							  // output data of each row
							  while($row = $result->fetch_assoc()) {
								$n=$row["nopeople"];
								if($n<2)
								{
									echo "Not Crowded";
								}
								else if($n==2)
								{
									echo "Moderate";
								}
								else
								{
									echo "crowded";
								}
									
							  }
							} else
								{
							  echo "0 results";
							}
							$conn->close();
						  ?>
                        </td>
						   <td class="text-right">
                          <a class="btn btn-primary" href="dashboard2.php" role="button">View</a>
                        </td>
                      </tr>
                     
                    </tbody>
                  </table>
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