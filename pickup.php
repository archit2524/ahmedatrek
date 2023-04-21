<?php

	 $no=$_GET['no'];
	$pi=$_GET['pi'];
	$dr=$_GET['dr'];
	$wh=$_GET['wh'];
 
     $con=mysqli_connect("localhost","root","");
     if ($con) {
     	echo "conect server";
     }
	$db=mysqli_select_db($con,"ahmedatrek1");
    $qur="insert into pickup(number,pick,destination,time)values('".$no."','".$pi."','".$dr."','".$wh."')"; 
     	$res=mysqli_query($con,$qur);
	if($res)
	{
		 echo "<script language=\"JavaScript\">\n";
	echo "alert('passenger registerd !!');\n";
	echo "window.location='index.html'";
	echo "</script>";	}
	mysqli_close($con);

?>
