<?php
@require 'config.php';

 if(isset($_POST["Import"])){
		
		$filename=$_FILES["file"]["tmp_name"];		

		$count = 0;
		 if($_FILES["file"]["size"] > 0)
		 {
		$getData[9]=filter_var($getData[9], FILTER_VALIDATE_EMAIL);

		  	$file = fopen($filename, "r");
	        while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
	         {
				if ($count == 0)
				{
					$count = 1;
					continue;
				}
				else
				{
					
					
					
					$sql = "INSERT into user (Serial_Number,Student_Name,Standard,Section,School_Name,Date_Of_Birth,Gender,Blood_Group,Mobile,Email) 
                   values ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$getData[6]."','".$getData[7]."','".$getData[8]."','".$getData[9]."')";
                   $result = @mysql_query($sql);
				}		   
				
	         }
			
			if(!isset($result))
				{
					echo "<script type=\"text/javascript\">
							alert(\"Invalid File:Please Upload CSV File.\");
							window.location = \"index.php\"
						  </script>";		
				}
				else {
					  echo "<script type=\"text/javascript\">
						alert(\"CSV File has been successfully Imported.\");
						window.location = \"index.php\"
					</script>";
				}
				
	         fclose($file);	
		 }
	}	 


 ?>