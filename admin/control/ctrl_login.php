<?php 
	include_once("../model/md_login.php");
	if (isset($_POST['username']) && isset($_POST['password']) && !empty($_POST['username']) && !empty($_POST['password'])) {
		if (vlu_login($_POST['username'],$_POST['password'])){
			session_start();
			$_SESSION['username'] = $_POST['username'];
			$_SESSION['password'] = $_POST['password'];
			header("Location: ..");
		}
		else
			header("Location: ../login.php");
	}
	else
		header("Location: ../login.php");
 ?>