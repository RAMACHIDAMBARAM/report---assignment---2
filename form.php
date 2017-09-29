
<!DOCTYPE html>
<html>
	<head>
		<title>STUDENTS RECORD</title>
<style>

body
{
background-image :url("Niit University.jpg");
background-repeat:no-repeat;  
max-width: 100%;
height: auto;
position: relative;
background-size: 100% 100%;
background-attachment:fixed;  
}

h1
{ 
font-size: 100px;
text-align :center;
color: #990000;

margin-top: 25px;
text-shadow: -2px -2px 1px #666666,
                       1px 1px 3px #FFFFFF;

}

h3
{ 
font-size: 50px;
text-align :center;
color: #990000;

margin-top: 25px;
text-shadow: -2px -2px 1px #666666,
                       1px 1px 3px #FFFFFF;

}
.form-horizontal
{
width: 100%;
height: 100%;
background-color: rgba(0, 26,0,0.4);
padding-top: 10px;
padding-left: 50px;
padding-bottom:30px;
border-radius: 15px;
-webkit-border-radius:15px;
-o-border-radius:15px;
-moz-border-radius:15px;
colour:white;
font-weight: bolder;
box-shadow: inset -4px -4px rgba(0,0,0,0.5);
font-size: 28px;
color:#CCCCCC;
}

input,select{
width: 300px;
height: 40px;
padding-left:5px;
border:1;
border-radius: 5px;
-webkit-border-radius:5px;
-o-border-radius:5px;
-moz-border-radius:5px;
}
.button{
	border: 2px solid ;
	color:#990000;
	border-radius:5px;
	background-color:white;
	font-weight:bold;
}

.button:hover{
	color:#4682b4;
}

</style>
</head>
<body> 
<h1>Student Records</h1>
<form class="form-horizontal" action="form_validation.php" method="post" enctype="multipart/form-data">

<h3><legend>Registration Form</legend></h3>
 
  <label  for="name">Name:</label>  
 <div>
  <input id="name" name="name" type="varchar" placeholder="Enter the name" required="">
   
  </div>
<br>

<label  for="profile_picture">Profile Picture</label>  
 <div>
  <input id="profile_picture" name="profile_picture"  type="file" required="">
   
  </div>
<br>

 

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

  echo  " <label> School Name: </label><div><input name='school_name' value='$Result' readonly='true'></div>"  ;

 }
 }
 
 ?>


<br>

<br> 

 <label  for="school_logo">School Logo:</label>  
 <div>
  <input id="school_logo" name="school_logo" type="file"  required="">
   
  </div>
<br> 

<label  for="standard">Standard:</label>  
 <div>
  <input id="standard" name="standard" type="varchar" placeholder="Enter the standard" required="">
   
  </div>
<br>
  
   <label  for="section">Section:</label>  
 <div>
  <input id="section" name="section" type="varchar" placeholder="Enter the name" required="">
   
  </div>
<br>

  <label  for="password">Password:</label>  
  <div>
  <input id="password" name="password" type="password"  placeholder="password"  required="">
  </div>
  <br>

 
   <label for="gender">Gender:</label>
  <div >
    <select id="gender" name="gender">
      <option value="-1">Select</option>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
	   <option value="Others">Others</option>
    </select>
    </div>
  <br>

 <br>
 <label  for="email"> Email Address:</label>  
  <div>
  <input id="email" name="email" type="varcahr" placeholder="Enter your email id"  required="">
   </div>		
   
   <br>
  

   
   <center>  <input class="button" type="submit" name="submit"  value="REGISTER" >  <br>
<br>   <a class="button"  href="logout.php">LOGOUT</a> </center>
  
</form>
</body>
</html>