<?php
session_start();
$con=mysqli_connect('localhost','root','') or die(mysqli_error());
 mysqli_select_db($con,'iitm');
if(!$con)
    echo "<script> alert('Connection Failed') </script>";

$sid=$_POST['sid'];
$name=$_POST['name'];
$mob_num=$_POST['mob_num'];
$email=$_POST['email'];
$address=$_POST['address'];
$pass=$_POST['pass'];


if(isset($sid))
{
	
	$db="INSERT INTO school(sid,name,mob_num,email,address,pass)	
values('".$sid."','".$name."','".$mob_num."','".$email."','".$address."','".$pass."')";
	$query=mysqli_query($con,$db);
	header('Location: http://localhost/iiitm/sch_login.php ');
}	
else
	echo "Failed";
?>