<?php 
	include_once("config.php");
	$ketnoi = new clsKetnoi();
	function get_khoa_bo_mon($id){
		$ketnoi = new clsKetnoi();
		$hoi = "SELECT * FROM `khoabomon` WHERE `idkhoa` = '$id'";
		$dulieu = mysqli_query($ketnoi->ketnoi(),$hoi);
		return $dulieu;
	}
	function get_nhan_su($id){
		$ketnoi = new clsKetnoi();
		$hoi = "SELECT * FROM `giaovien` WHERE `idkhoa` = '$id'";
		$dulieu = mysqli_query($ketnoi->ketnoi(),$hoi);
		return $dulieu;
	}
 ?>