<?php
session_start();
$con=mysqli_connect('localhost','root','') or die(mysqli_error());
 mysqli_select_db($con,'iitm');
if(!$con)
    echo "<script> alert('Connection Failed') </script>";

$name=$_POST['name'];
$email=$_POST['email'];
$mob_num=$_POST['mob_num'];
$address=$_POST['address'];
$pass=$_POST['pass'];


if(isset($name))
{
	
	$db="INSERT INTO parents(name,email,mob_num,address,pass)	
values('".$name."','".$email."','".$mob_num."','".$address."','".$pass."')";
	$query=mysqli_query($con,$db);
	header('Location: http://localhost/iitm/parent_signin.php ');
}	
else
	echo "Failed";
?>