<?php 
	include_once("config.php");
	function vlu_login($username, $password){
		$password = md5($password);	
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$hoi = "select * from user where (email = '$username' or tendn = '$username') and matkhau = '$password' and quyen!='0'";
		$thucthi = mysqli_query($conn, $hoi);
		$dem_user = mysqli_num_rows($thucthi);
		if ($dem_user > 0)
			return true;
		else
			return false;
	}
 ?>