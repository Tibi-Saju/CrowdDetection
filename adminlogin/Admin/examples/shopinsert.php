<?php
$name=$_REQUEST["name"];
$location=$_REQUEST["location"];
$mobile=$_REQUEST["mobile"];
$oname=$_REQUEST["oname"];
$website=$_REQUEST["website"];
$id=0;

$conn=mysqli_connect("localhost","root","","crowduser");
if($conn)
{
	$q="insert into shopsdetails values('$id','$name','$location','$mobile','$oname','$website')";
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