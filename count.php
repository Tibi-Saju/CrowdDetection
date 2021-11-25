<?php
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, shrink-to-fit=no, user-scalable=no">
    <title>AMPLE</title>

    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/plugins/image-hover/imagehover.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

<body  >

    <!--###################### Navigation Starts Here ############################-->

    <?php 

include "./topbar/navigate.php";
?>

    <!--###################### Slider Starts Here ############################-->
    <div id="home" class="banner-container no-padding">
        <div class="container">
            <div class="row mx-auto">

            </div>
            <div class="slider-det">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                   
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <span>AMPLE</span>
                            <h2>KEEP TRACKING!!!</h2>
                            <p>
                            	<h1>
                            	<?php
                            	 $conn=new mysqli("localhost","root","","shops");
								

							
								$sql = mysqli_query($conn, "SELECT * FROM shop1 WHERE id=(SELECT max(id) from shop1)");
								$row = mysqli_num_rows($sql);
							while ($row = mysqli_fetch_array($sql))
								{

							echo $row['nopeople'];
						}
						?>
                            </h1></p>
                        </div>
                      
                    </div>
                 
                </div>
            </div>
        </div>
    </div>










</body>
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/plugins/scroll-nav/js/jquery.easing.min.js"></script>
<script src="assets/js/script.js"></script>



</html>
