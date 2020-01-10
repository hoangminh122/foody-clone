<?php
	session_start();
	unset($_SESSION['userlogged']);
	header("Location: login.php");
?>