<?php 
	include_once("config.php");
	$ketnoi = new clsKetnoi();
	$hoi = "Select * from slider where kichhoat=1";
	$slider = mysqli_query($ketnoi->ketnoi(),$hoi);
	function get_khoa_bm(){
		$ketnoi = new clsKetnoi();
		$hoi = "Select * from khoabomon";
		$dulieu = mysqli_query($ketnoi->ketnoi(),$hoi);
		return $dulieu;
	}
 ?>