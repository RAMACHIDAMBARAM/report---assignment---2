<!DOCTYPE html>
<html>
	<head>
		<style>
		
		body{
	width:1331px;
}
.navbar ul{
	border-top-left-radius:5px;
	border-top-right-radius:5px;
	background-color:#4682b4;
	color:#daa520;
	height:50px;
	margin-top:100px;
	margin-bottom:0px;
	padding:0px;
	border: 2px solid #daa520;
	width:1331px;
	font-weight:bold;
}
.navbar li{
	padding:12px;
	list-style-type:none;
	float:left;
	border-right:1px solid #DAA520;
	font-style:italic;
}

.navbar li:hover{
	background-color:white;
	border-bottom: 2px solid #daa520;
}

.navbar li a{
	text-decoration:none;
	color:#daa520;
	font-weight:bold;
	font-size:23px;
}


.navbar li a:hover{
	text-decoration:none;
	color:#4682b4;
	font-weight:bold;
}




.section{
	
	margin:41px 0px 0px 50px;
	list-style-type:none;
	color:#daa520;
	width:750px;
	height:690px;
	border:1px solid #daa520;
	border-radius:6px;
	padding-left:80px;
}

.section h3{
	padding: 10px;
	width:500px;
	width:500px;
	background-color:#4682b4;
	border-top-left-radius:5px;
	border-top-right-radius:5px;
	border: 1px solid #daa520;
	margin-top:0px;
}

.section form{
	height:auto;
	padding-left:15px;
	
}

.section ul{
	padding-left:10px;	
	list-style-type:none;
	float:left;
	color:#4682b4;
	
}

.left li{
	font-size:20px;
	padding:25px 20px 30px 	0px;
	margin-left:50px;
	list-style-type:disc;
}



.left-text li{
	padding:20px 10px 36px 0px;
	margin-left:0px;
}

.left-text input{
	text-align:center;
	height:20px;
	border:1px solid #daa520;
	border-radius:2px;
}



.button{
	padding:15px  15px 15px 15px;
	margin-left:80px;
	border: 5px solid #daa520;
	color:#daa520;
	border-radius:5px;
	background-color:white;
	font-weight:bold;
	text-align:center;
}

.button:hover{
	color:#4682b4;
}
		
		</style>
	</head>
	<body>
		<div class="navbar">
			<ul> 
				<li><a href="view.php"> View All Students</a></li>
				<li><a href="Form.php">Form</a></li>
				<li><a href="#">Add Data</a></li>
				<li><a  href="logout.php">LOGOUT</a></li>
				<p style="float:right"><?php @include 'config.php'; @include 'session.php'; echo "" . $_SESSION["email"]." ";?><p>
					</div>
				</li>
			</ul>
		</div>

			<center><div class="section">
		     <h3>ADD STUDENT DATA</h3>
				<form action="addstudent.php" method="POST">	
					<ul class = "left">
						<li class = "id1">NAME</li>
						<li class = "id1">STANDARD</li>
						<li class = "id1">SECTION</li>
						<li class = "id1">PASSWORD</li>
						<li class = "id1">GENDER</li>
						<li class = "id1">EMAIL</li>
                       <li class = "id1">SCHOOL NAME</li>
					</ul>
					<ul class = "left-text">
						<li><input size="15" type="text" name="name" required/></li>
						<li><input size="15" type="text" name="standard" required/></li>
						<li><input size="15" type="text" name="section" required/></li>
						<li><input size="15" type="password" name="password" required/></li>
						<li><input size="15" type="text" name="gender" required/></li>
						<li><input size="15" type="text" name="email" required/></li>
						 <?php
	@require 'config.php';
    @include 'session.php';

 $QUERY = mysql_list_tables('phase3_reportbee');
while($school_name =  mysql_fetch_row($QUERY))
{
  $Result = $school_name[0];
 $result = mysql_query("select school_name from `".$Result."` where email = '" . $_SESSION["email"]."'");
 $count=@mysql_num_rows($result);
  if($count == 1)
 {

  echo  " <input name='school_name'  size='15' value='$Result' readonly='true'></div>"  ;

 }
 }
 
 ?>
							<li>
							<input class="button" type="submit" name="b_add" value="ADD" />	
							<input class="button" type="reset" name="b_reset" value="RESET"/>
						</li>
						</ul>
				
						
					
				</form>
				
			</div></center>
		</div>
		
	</body>
</html>

