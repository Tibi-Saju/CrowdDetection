<?php
$name=$_REQUEST["name"];
$location=$_REQUEST["location"];
$mobile=$_REQUEST["mobile"];
$oname=$_REQUEST["oname"];
$website=$_REQUEST["website"];
$id=0;
$id=$_GET['sid'];


$conn=mysqli_connect("localhost","root","","crowduser");
if($conn)
{
	$q="UPDATE shopsdetails SET name='$name',location='$location',contact='$mobile',owner='$oname',website='$website' WHERE id='$id'";
	$r=mysqli_query($conn,$q);
	if($r)
	{
		header("location:dashboard.php");
	}
	else
	{
		echo "<script>alert('Error')</script>";
	}
}

?>