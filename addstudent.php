<?php
	@require 'config.php';
    @include 'session.php';
			
if(isset($_POST['b_add']))
{
$name=$_POST['name']; 
$standard=$_POST['standard']; 
$section=$_POST['section']; 
$password=$_POST['password'];
$gender=$_POST['gender']; 
$email=$_POST['email'];
$school_name=$_POST['school_name'];

						$query =  mysql_query("INSERT INTO `".$school_name."` (`name`, `school_name`, `standard`, `section`,
								 `password`, `gender`, `email`) 
								  VALUES ('$name', '$school_name','$standard', '$section', '$password', '$gender', '$email')");
			
							echo "<script language = \"javascript\">alert('Submitted Sucessfully.')</script>";
							echo "<script>setTimeout(\"location.href = 'http://localhost/phase-3ReportBee/adminpannel.php';\");</script>";
					}		
				
				?>
