<?php

 session_start();
{
$sid=$_POST['sid'];
$pass=$_POST['pass']; 
 $con=mysqli_connect('localhost','root','') or die(mysqli_error());
 mysqli_select_db($con,'iitm');
  if(!$con)
  echo "<script> alert('Connection Failed') </script>";
 
 $res="select* from school";
 $query=mysqli_query($con,$res);

 if(!$query)
 {
	 echo "<script> alert('DATA BASE NOT FOUND') </script>";
 }
   $num=mysqli_num_rows($query);
   $temp=0;
 for($i=0;$i<$num;$i++)
 {
	 $val=mysqli_fetch_array($query);
	 {
		 if($val['sid']==$sid && ($val['pass'])==$pass)
		 {
			 header('Location: http://localhost/hrecord.html');
			 $temp=1;
		 }
		 
	 } 
 }
 if($temp==0)
 {
	 
	
	 echo "<script> alert('Invalid School id or password') </script>";
	 echo "<script> window.location.href='http://localhost/alphatodelta/sch_login.php'</script>";

 }

 
}

?> 