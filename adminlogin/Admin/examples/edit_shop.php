
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
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php
include "./topbar/navbar.php";
?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php 

include "./topbar/sidebar.php";
?>
 <div class="panel-header panel-header-sm">
      </div>
  <!-- Content Wrapper. Contains page content -->
  <div class="content">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <div class="card card-upgrade">
              <div class="card-header text-center">
                <h4 class="card-title">ADD NEARBY LOCATIONS</h3>
                  <p class="card-category">Add locations of nearby shops for users to see crowds.</p>
              </div>
              <div class="card-body">
                <div class="table-responsive table-upgrade">

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Fill the details of Locations</h3>
              </div>
			  <?php
$conn=new mysqli("localhost","root","","crowduser");

								$id=$_GET['sid'];
								$sql = "SELECT * FROM shopsdetails WHERE id=$id";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
if ($result=$conn->query($sql) === FALSE) {
    echo "Error: ";
}
?>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" action="shopupdate.php?sid=<?php echo $id;?>" method="POST">
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail">Shop Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail" placeholder="Enter FullName" value=<?php echo $row['name']; ?>>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Location</label>
                    <input type="text" name="location" class="form-control"  id="exampleInputEmail1" placeholder="Enter Shop Location" value=<?php echo $row['location']; ?>>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Contact Number</label>
                    <input type="text" name="mobile" class="form-control" maxlength="10" id="exampleInputEmail1" placeholder="Enter Contact Number" value=<?php echo $row['contact']; ?>>
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Owner Name</label>
                    <input type="text" name="oname" class="form-control" id="exampleInputName" placeholder="Enter Name" value=<?php echo $row['owner']; ?>>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Shop Website</label>
                    <input type="text" name="website" class="form-control" id="exampleInputEmail1" placeholder="Enter Shop Website" value=<?php echo $row['website']; ?>>
                  </div>
                
                 
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
  <?php 

include "./topbar/footer.php";
?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      alert( "Form successful submitted!" );
    }
  });
  $('#quickForm').validate({
    rules: {
      name: {
        required: true,
        name: true,
      },
      mobile: {
        required: true,
        mobile: true,
      },
      email: {
        required: true,
        email: true,
      },
      identity: {
        required: true,
        identity: true,
      },
      cardnum: {
        required: true,
        cardnum: true,
      },
      category: {
        required: true,
        category: true,
      },
      fromdt: {
        required: true,
        fromdt: true,
      },
      todt: {
        required: true,
        todt: true,
      },
    },
    messages: {
      name: {
        required: "Please enter your full name",
        name: "Please enter a valid name"
      },
      mobile: {
        required: "Please enter your contact number",
        mobile: "Please enter a valid number"
      },
      email: {
        required: "Please enter a email address",
        email: "Please enter a vaild email address"
      },
      identity: {
        required: "Please enter your identity type",
        identity: "Please enter a valid identity type"
      },
      cardnum: {
        required: "Please enter your identity card number",
        cardnum: "Please enter a valid identity card number"
      },
      category: {
        required: "Please enter a category",
        category: "Please enter a valid category"
      },
      fromdt: {
        required: "Please enter a date",
        fromdt: "Please enter a valid date"
      }, 
      todt: {
        required: "Please enter a date",
        todt: "Please enter a valid date"
      },
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
</body>
</html>
