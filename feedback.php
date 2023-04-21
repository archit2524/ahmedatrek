<?php
	$_name=$_GET['_name'];
	$num_ber=$_GET['num_ber'];
	$feed_back=$_GET['feed_back'];
	$complain_=$_GET['complain_'];
                $factors_=$_GET['factors_'];
                 $r1=$_GET['r1'];
                 $con=mysqli_connect("localhost","root","");
	$db=mysqli_select_db($con,"ahmedatrek1");
	$qur="insert into feedback(_name,num_ber,feed_back,complain_,factors_,r1)values('".$_name."', '".$num_ber."','".$feed_back."','".$complain_."','".$factors_."','".$r1."')";
	
	$res=mysqli_query($con,$qur);
	if($res)
	{
	echo "Thanks for your Feedback!!";
	}
	mysqli_close($con);

?>