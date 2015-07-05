<?php
	//session_start();
	if(!isset($_SESSION['id_utilizator'])){
		header("Location: login.php");
	}
?>