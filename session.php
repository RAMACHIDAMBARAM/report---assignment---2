<?php
   @include 'config.php';
   @include 'login_page.php';
   session_start();
   
   $email = $_SESSION['email'];

   if(!isset($_SESSION['email'])){
		header("location:http://localhost/phase-3ReportBee/");
	}
?>
