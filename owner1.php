<?php
	 $pickup=$_GET['pickup'];
	$drop=$_GET['drop1'];
	$when=$_GET['when1'];
	$name=$_GET['name1'];
      $no=$_GET['no1'];
       $ow=$_GET['ow'];

	 $con=mysqli_connect("localhost","root","");
	 $db=mysqli_select_db($con,"ahmedatrek1");
	$qur="insert into owner(pickup,drop1,when1,name1,no1,ow)values('".$pickup."', '".$drop."','".$when."','".$name."','".$no."','".$ow."')";
	 $res=mysqli_query($con,$qur);
	 if($res)
   {
	echo "<script language=\"JavaScript\">\n";
	echo "alert('Your Vehicle Registered !!');\n";
	echo "window.location='index.html'";
	echo "</script>";
   }
	mysqli_close($con);

?>