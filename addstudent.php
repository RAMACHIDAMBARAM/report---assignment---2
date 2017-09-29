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
$QUERY = mysql_list_tables('phase3_reportbee');
while($school_name =  mysql_fetch_row($QUERY))
{
  $Result = $school_name[0];
  $result = mysql_query("select * from `".$Result."` where email = '" . $_SESSION["email"]."'");
  $count=@mysql_num_rows($result);
  if($count == 1)
  {

						$query =  mysql_query("INSERT INTO `".$Result."` (`name`, `standard`, `section`,
								 `password`, `gender`, `email`) 
								  VALUES ('$name', '$standard', '$section', '$password', '$gender', '$email')");
			
							echo "<script language = \"javascript\">alert('Submitted Sucessfully.')</script>";
							echo "<script>setTimeout(\"location.href = 'http://localhost/phase-3ReportBee/adminpannel.php';\");</script>";
					}		
					}
					}
				
				?>