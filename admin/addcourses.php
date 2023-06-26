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

		$sql="insert into addcourses(title,fees,duration,eligibility,	department,description,visibility) values('$Title','$Fees',	'$Duration','$Eligibility','$Department','$Description',	'$Visibility')";

		if(mysqli_query($connection,$sql))
			$msg
	}
?>
<html>
<head>
<title> Add Courses </title>
<link href="css/style_admin.css" rel="stylesheet" /> 
</head>
<body>

		<div class="outer">
			<div class="header"> 
			<div class="hleft"> LIPS </div>
		    <div class="hright"> 
			</div>
		</div>
			<div class="main"> 
				<div class="mleft"> 
					<?php
        		        include("menubar.php");
        		    ?>
				</div>
				<div class="mright"> 
					<form method="post">
					<div class="row" > 
						<div class="rleft"> 
							 Title : 
						</div>
						<div class="r_right"> 
							<input type="text" name="title" class="input" placeholder="Title">
						</div>
					</div>

					<div class="row" > 
						<div class="rleft">  Fees : </div>
						<div class="r_right"> 
							<input type="text" name="fees" class="input" placeholder="Fees"> 
						</div>
					</div>

					<div class="row" > 
					<div class="rleft">  Duration : </div>
					<div class="r_right"> <input type="text" name="duration" class="input" 			placeholder="Duration"> </div>
					</div>

					<div class="row" > 
					<div class="rleft">  Eigibility : </div>
					<div class="r_right"> <input type="text" name="eligibility" class="input" 				placeholder="Eligibility"> 	</div>
					</div>

					<div class="row" > 
					<div class="rleft">  Department : </div>
					<div class="r_right"> <input type="text" name="department" class="input" 				placeholder="Department"> </div>
					</div>

					<div class="row" style="height:100px;" > 
					<div class="rleft"> Description : </div>
					<div class="r_right" style="height:100px"> <textarea name="description" 		class="tarea" 			placeholder="Description"></textarea> </div>
					</div>

					<div class="row" > 
					<div class="rleft"> Visibility : </div>
					<div class="r_right"> 
					<input type="radio" name="visibility" class="" value="Hide" checked> Hide 
					<input type="radio" name="visibility" class="" value="show"> Show 
					 </div>
					</div>


					<div class="row"> 
					<div class="rleft"></div>
					<div class="r_right"> <input type="submit" name="submit" value="Submit" 		class="submitbtn"> </div>
					</div>

					</form>
				</div> <!-- mright-->
			</div> <!-- main end-->
		</div>
	</body>
</html>