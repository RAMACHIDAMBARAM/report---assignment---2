<?php
@require 'config.php';
if(isset($_POST["submit"])) 

{

    $name=($_POST['name']);
	$school_name=($_POST['school_name']);
	$password=($_POST['password']);
	$gender=($_POST['gender']);
    $email=($_POST['email']);
	$i=$school_name;

	
$file1 = $_FILES['profile_picture'];
$file1_name = $file1['name'];
$file1_type = $file1['type'];
$file1_size = $file1['size'];
$file1_path = $file1['tmp_name'];


$file = $_FILES['school_logo'];
$file_name = $file['name'];
$file_type = $file['type'];
$file_size = $file['size'];
$file_path = $file['tmp_name'];


   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
	{
		echo "<script type=\"text/javascript\">
							alert(\"Invalid Email\");
							window.location = \"register.php\"
						  </script>";	

     }
	 else
	 {
	 if(mysql_num_rows(mysql_query("SHOW TABLES LIKE '".$school_name."'"))==1) 
	 {
	  echo "<script type=\"text/javascript\">
							alert(\"".$i." is already been registered\");
							window.location = \"register.php\"
						  </script>";	
	
}
	else 
	{
	 
	 $sql = "CREATE TABLE `" . $i . "` (
  `id` int(11) NOT NULL UNIQUE KEY AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `profile_picture` longblob NOT NULL,
  `school_name` varchar(50) NOT NULL,
  `school_logo` longblob NOT NULL,
  `standard` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL primary key ,
  `admin` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 "; 
$w= mysql_query($sql); 
if (($file1_name!="" && ($file1_type="Profile-Picture/jpeg"||$file1_type="Profile-Picture/png")&& $file1_size<=614400)  &&  ($file_name!="" && ($file_type="School-Logo/jpeg"||$file_type="School-Logo/png")&& $file_size<=614400) )
    if((move_uploaded_file ($file1_path,'Profile-Picture/'.$file1_name))  &&  (move_uploaded_file ($file_path,'School-Logo/'.$file_name)))

			$query=mysql_query("INSERT INTO `".$i."` (`name`, `profile_picture`, `school_name`, `school_logo`,`password`, `gender`, `email`, `admin`) VALUES ('$name','$file1_name','$i','$file_name','$password','$gender','$email','1')");  
			echo "<script type=\"text/javascript\">
							alert(\"created successfully.........!\");
							window.location = \"http://localhost/phase-3ReportBee/\"
						  </script>";	
			
  
	 }
	 

}
}
?>
