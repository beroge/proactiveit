<?php 
	session_start();
	unset ($_SESSION['id']);
	header('Location: ../login.php?logout=true');
	$_SESSION['msg'] = '<div class="alert alert-success" role="alert"> Logout Successfully!</div>';
	die();
 ?>