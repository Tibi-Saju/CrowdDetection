<?php
$name=$_REQUEST["name"];
$email=$_REQUEST["email"];
$password=$_REQUEST["password"];
$password1=password_hash($password, PASSWORD_BCRYPT);
$cpassword=$_REQUEST["cpassword"];
$id=0;
if($password !== $cpassword){
        $errors['password'] = "Confirm password not matched!";
		
    }
else{
$conn=mysqli_connect("localhost","root","","crowduser");
if($conn)
{
	$q="insert into crowdu values('$id','$name','$email','$password1')";
	$r=mysqli_query($conn,$q);
	if($r)
	{
		header("location:login-user.php");
	}
	else
	{
		echo "<script>alert('Error')</script>";
	}
}
}
?>