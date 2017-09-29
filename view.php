	<!DOCTYPE html>
<html>
<head>
<style>
.table
{
border:1px solid #4682b4;
border-width:1px;
border-color:#daa520;

}
.content
{
	width: auto;
	height:auto;
	margin:10% auto 10% auto;
	border:2px solid #daa520;
	border-radius:10px;
	color:#4682b4;
	font-weight:bold;
	overflow:hidden;
	
}
th{
	padding:3px 12px;
	text-align:center;
	font-size:15px;
	font-style:italic;
	color:#daa520;
	background-color:#4682b4;
	border: 2px solid #daa520;
}
td{
	font-weight:bold;
	border:2px solid #daa520;
	text-align:center;
	padding:3px 3px;
	
}

</style>
</head>
<div class="content">		
<ul>
<li><a href='logout.php'>Log Out</a></li> 
<li style="float:right"><?php @include 'config.php'; @include 'session.php'; echo "" . $_SESSION["email"]." ";?></li>
</ul>
<br>
<br>
<?php
@include 'config.php'; 
@include 'session.php';

$QUERY = mysql_list_tables('phase3_reportbee');
while($school_name =  mysql_fetch_row($QUERY))
{
  $Result = $school_name[0];
 $result = mysql_query("select school_name from `".$Result."` where email = '" . $_SESSION["email"]."'");
 $count=@mysql_num_rows($result);
  if($count == 1)
 {

  $i= $Result ;

 }
 }
 $sql = mysql_query("SELECT * FROM `".$i."` ");
echo "<table border='1'>
<tr>
<th>NAME</th>
<th>SCHOOL NAME</th>
<th>SECTION </th>
<th>STANDARD </th>
<th>ROLL NO</th>
<th>GENDER</th>
<th>PASSWORD</th>
<th>EMAIL</th>
</tr>";
 
while($row = mysql_fetch_array($sql))
  {
  echo "<tr>";
					echo "<td>" . $row['name'] . "</td>";
					echo "<td>" . $row['school_name'] . "</td>";
					echo "<td>" . $row['section'] . "</td>";
					echo "<td>" . $row['standard'] . "</td>";
					echo "<td>" . $row['id'] . "</td>";
					echo "<td>" . $row['gender'] . "</td>";
					echo "<td>" . $row['password'] . "</td>";
				    echo "<td>" . $row['email'] . "</td>";

	echo "</tr>";
  }
echo "</table>";
 
?>
<br>
<br>
</div>
</body>
</html>