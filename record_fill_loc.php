<?php
session_start();
$con=mysqli_connect('localhost','root','') or die(mysqli_error());
 mysqli_select_db($con,'iitm');
if(!$con)
    echo "<script> alert('Connection Failed') </script>";

$roll=$_POST['roll'];
$height=$_POST['height'];
$weight=$_POST['weight'];
$bmi=$_POST['bmi'];
$bmi_per=$_POST['bmi_per'];
$vision=$_POST['vision'];
$haemoglobin=$_POST['haemoglobin'];
$haematocrit=$_POST['haematocrit'];
$rbc=$_POST['rbc'];
$wbc=$_POST['wbc'];
$platelets=$_POST['platelets'];
$bgrp=$_POST['bgrp'];
$breathing_issues=$_POST['breathing_issues'];
$bmd=$_POST['bmd'];
$fever=$_POST['fever'];
$allergies=$_POST['allergies'];
$skin_infections=$_POST['skin_infections'];
$ent_prb=$_POST['ent_prb'];
$sore_throat=$_POST['sore_throat'];


if(isset($roll))
{
	
	$db="INSERT INTO record(roll,height,weight,bmi,bmi_per,vision,haemoglobin,haematocrit,rbc,wbc,platelets,bgrp,breathing_issues,bmd,fever,allergies,skin_infections,ent_prb,sore_throat)	
values('".$roll."','".$height."','".$weight."','".$bmi."','".$bmi_per."','".$vision."','".$haemoglobin."','".$haematocrit."','".$rbc."','".$wbc."','".$platelets."','".$bgrp."','".$breathing_issues."','".$bmd."','".$fever."','".$allergies."','".$skin_infections."','".$ent_prb."','".$sore_throat."')";
	$query=mysqli_query($con,$db);
	header('Location: http://localhost/iiitm/hrecord.html');
}	
else
	echo "Failed";
?>