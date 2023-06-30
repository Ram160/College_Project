<?php
	$msg="";
	$host="localhost:3306";
	$user="root";
	$password="";
	$db_name="college_project";
	
	$connection=mysqli_connect($host,$user,$password,$db_name);

	if($connection)
		echo"Connection Successful";
	else
		die ("Connection Failed".mysqli_connect_error());
	
	if(isset($_POST['submit']))
	{
		$Title=$_POST['title'];
		$Fees=$_POST['fees'];
		$Duration=$_POST['duration'];
		$Eligibility=$_POST['eligibility'];
		$Department=$_POST['department'];
		$Description=$_POST['description'];
		$Visibility=$_POST['visibility'];

		$sql="insert into addcourse(title,fees,duration,eligibility,department,description,visibility) values('$Title','$Fees',	'$Duration','$Eligibility','$Department','$Description','$Visibility')";

		if(mysqli_query($connection,$sql))
			$msg="Data inserted into DataBase Successfully";
		else
			$msg=die("Failed to insert Data into DataBase");
	}
?>
<html>
<head>
<title> Add Courses </title>
<link href="css/style_admin.css" rel="stylesheet" /> 
</head>
<body>

		<div class="outer">
			<?php
                include("header.php");
            ?>
			<div class="main"> 
				<div class="mleft"> 
					<?php
        		        include("menubar.php");
        		    ?>
				</div>
				<div class="mright"> 
					<h1>Add Courses</h1>
					<div class="heading">
						<form method="post" class="form">
							<div class="row" > 
								<div class="rleft"> 
									 Title : 
								</div>
								<div class="r_right"> 
									<input type="text" name="title" class="input" placeholder="Title">
								</div>
							</div>

							<div class="row" > 
								<div class="rleft">  
									Fees : 
								</div>
								<div class="r_right"> 
									<input type="text" name="fees" class="input" placeholder="Fees"> 
								</div>
							</div>

							<div class="row" > 
								<div class="rleft"> 
									Duration : 
								</div>
								<div class="r_right"> 
									<input type="text" name="duration" class="input" placeholder="Duration"> 
								</div>
							</div>

							<div class="row" > 
								<div class="rleft">  
									Eigibility : 
								</div>
								<div class="r_right"> 
									<input type="text" name="eligibility" class="input" placeholder="Eligibility"> 	
								</div>
							</div>

							<div class="row" > 
								<div class="rleft">  
									Department : 
								</div>
								<div class="r_right"> 
									<input type="text" name="department" class="input" placeholder="Department"> 
								</div>
							</div>

							<div class="row" style="height:100px;" > 
								<div class="rleft"> 
									Description : 
								</div>
								<div class="r_right" style="height:100px"> 
									<textarea name="description" class="tarea" 	placeholder="Description"></textarea> 
								</div>
							</div>

							<div class="row" > 
								<div class="rleft"> 
									Visibility : 
								</div>
								<div class="r_right"> 
									<input type="radio" name="visibility" value="0" checked>Hide								
									<input type="radio" name="visibility" value="1">Show 
								</div>
							</div>


							<div class="row"> 
								<div class="rleft"></div>
								<div class="r_right"> 
									<input type="submit" name="submit" value="Submit" class="button"> 
									<?php
										echo $msg;
									?>
								</div>
							</div>
						</form>
					</div>
				</div>	
			</div> 
		</div>
	</body>
</html>