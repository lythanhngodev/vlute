<?php 
	include_once("config.php");
	$ketnoi = new clsKetnoi();
	// lay ra cac slider
	$hoi = "Select * from slider where kichhoat=1";
	$slider = mysqli_query($ketnoi->ketnoi(),$hoi);
 ?>