!DOCTYPE html>
<?php 
@require 'config.php';
 
?>	
<html>
	<head>

		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
		<link rel="stylesheet" href="css/bootstrap-custom.css">
 
 
	</head>
	<body>    
 
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container"> 
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="#">Report Bee - Assignment - Bulk Upload</a>
 
 
			</div>
		</div>
	</div>
 
	<div id="wrap">
	<div class="container">
		<div class="row">
			<div class="span3 hidden-phone"></div>
			<div class="span6" id="form-login">
				<form class="form-horizontal well" action="import.php" method="post" name="upload_excel" enctype="multipart/form-data">
					<fieldset>
						<div class="control-group">
							<div class="control-label">
								<label>CSV/Excel File:</label>
							</div>
							<div class="controls">
								<input type="file" name="file" id="file" class="input-large">
							</div>
						</div>
 
						<div class="control-group">
							<div class="controls">
							<button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Upload</button>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
			<div class="span3 hidden-phone"></div>
		</div>
 
		<table class="table table-bordered">
			<thead>
				  	<tr>
				  		<th>Serial_Number</th>
				  		<th>Student_Name</th>
				  		<th>ROll_Number</th>
				  		<th>Standard</th>
				  		<th>Section</th>
						<th>School_Name</th>
						<th>Date_Of_Birth</th>
						<th>Gender</th>
						<th>Blood_Group</th>
						<th>Mobile</th>
						<th>Email</th>
 
 
				  	</tr>	
				  </thead>
			<?php
				$SQL = "SELECT * FROM user ";
				$result_set =  mysql_query($SQL);
				while($row = mysql_fetch_array($result_set))
				{
				?>
 
					<tr>
						<td><?php echo $row['Serial_Number']; ?></td>
						<td><?php echo $row['Student_Name']; ?></td>
						<td><?php echo $row['ROll_Number']; ?></td>
						<td><?php echo $row['Standard']; ?></td>
						<td><?php echo $row['Section']; ?></td>
						<td><?php echo $row['School_Name']; ?></td>
						<td><?php echo $row['Date_Of_Birth']; ?></td>
						<td><?php echo $row['Gender']; ?></td>
						<td><?php echo $row['Blood_Group']; ?></td>
						<td><?php echo $row['Mobile']; ?></td>
						<td><?php echo $row['Email']; ?></td>
 
					</tr>
				<?php
				}
			?>
		</table>
	</div>
 
	</div>
 
	</body>
</html>