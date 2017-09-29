<?php
 @require 'config.php';
  @include 'connection.php';
  session_start();
  
  
 if($_SERVER["REQUEST_METHOD"] == "POST")
 {
$QUERY = mysql_list_tables('phase3_reportbee');

$email=$_POST['email']; 
$password=$_POST['password'];
$email=filter_var($email, FILTER_VALIDATE_EMAIL);

while($school_name =  mysql_fetch_row($QUERY))
{
  $Result = $school_name[0];
  $result = mysql_query("select * from `".$Result."` where email = '$email' and password = '$password' and admin = '1' ");
  $count=@mysql_num_rows($result);
  $result1 = mysql_query("select *from `".$Result."` where email = '$email' and password = '$password' and admin = '0' ");
  $count1=@mysql_num_rows($result1);
 
  if($count == 1)
  {
 $_SESSION["email"] = "$email";
 $uip=$_SERVER['REMOTE_ADDR'];
 @require 'connection.php';
    $w=mysql_query("insert into userLog(email,userIp) values('".$_SESSION["email"]."','$uip')");
			echo "<script type=\"text/javascript\">
							alert(\"Welcome " . $_SESSION["email"] . "  .........!\");
							window.location = \"http://localhost/phase-3ReportBee/adminpannel.php\"
						  </script>";
  $flag =1;
	break;
}
	else if($count1 >= 1)
	{
	$_SESSION["email"] = "$email";
	$uip=$_SERVER['REMOTE_ADDR'];
	@require 'connection.php';
    $w=mysql_query("insert into userLog(email,userIp) values('".$_SESSION["email"]."','$uip')");
			echo "<script type=\"text/javascript\">
							alert(\"Welcome " . $_SESSION["email"] . "  .........!\");
							window.location = \"http://localhost/phase-3ReportBee/all.php\"
						  </script>";
			$flag = 1;
			break;
	}
}
if($flag != 1)
{
echo "<script language = \"javascript\">alert('Invalid Credentials')</script>";
echo "<script>setTimeout(\"location.href = 'index.html';\",20);</script>";
}
}
?>