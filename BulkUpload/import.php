<?php
@require 'config.php';

 if(isset($_POST["Import"])){
		
		$filename=$_FILES["file"]["tmp_name"];		

		$count = 0;
		 if($_FILES["file"]["size"] > 0)
		 {
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

				
				
			if(empty($getdata[0]) || empty($getdata[1])|| empty($getdata[2]) || empty($getdata[3]) || empty($getdata[4]) || empty($getdata[5]) || empty($getdata[6]) || empty($getdata[7]) || empty($getdata[8]) || empty($getdata[9]) )
			{
				$remark = "Columns can not be empty\n";
			}
			
					$Serial_Number=$getData[0] ;
					$Student_Name=$getData[1] ;
					$Standard=$getData[2] ;
					$Section=$getData[3] ;
					$School_Name=$getData[4] ;
					$Date_Of_Birth=$getData[5] ;
					$Gender=$getData[6];
					$Blood_Group=$getData[7];
					$Mobile=$getData[8];
					$Email=$getData[9];

					$sql = "INSERT into user (Serial_Number,Student_Name,Standard,Section,School_Name,Date_Of_Birth,Gender,Blood_Group,Mobile,Email) 
                   values ('$Serial_Number','$Student_Name','$Standard','$Section','$School_Name','$Date_Of_Birth','$Gender','$Blood_Group','$Mobile','$Email')";
                   $result = mysql_query($sql);
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
				
	         	
		 }
	}
	


 ?>
