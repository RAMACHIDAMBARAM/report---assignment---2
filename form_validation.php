<?php
@require 'config.php';
@require 'session.php';
if(isset($_POST["submit"])) 

{

    $name=($_POST['name']);
	$standard=($_POST['standard']);
	$section=($_POST['section']);
	$password=($_POST['password']);
	$gender=($_POST['gender']);
    $email=($_POST['email']);
	$school_name=($_POST['school_name']);

	
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
if (($file1_name!="" && ($file1_type="Profile-Picture/jpeg"||$file1_type="Profile-Picture/png")&& $file1_size<=614400)  &&  ($file_name!="" && ($file_type="School-Logo/jpeg"||$file_type="School-Logo/png")&& $file_size<=614400) )
    if((move_uploaded_file ($file1_path,'Profile-Picture/'.$file1_name))  &&  (move_uploaded_file ($file_path,'School-Logo/'.$file_name)))

			$query=mysql_query("INSERT INTO `" . $school_name . "` (`name`, `profile_picture`, `school_name`, `school_logo`,`standard`, `section`,`password`, `gender`, `email`) VALUES ('$name','$file1_name','$school_name','$file_name','$standard', '$section', '$password','$gender','$email')");  
			echo "<script type=\"text/javascript\">
							alert(\"Created Successfully.........1\");
							window.location = \"view.php\"
						  </script>	";	
			
  
	 }
	 

}
?>
