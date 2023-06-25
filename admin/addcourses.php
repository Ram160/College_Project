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


					<div class="addrow" > 
					<div class="addleft">  Title : </div>
					<div class="addright"> <input type="text" name="title" class="input" placeholder="Title"> 		</	div>
					</div>

					<div class="addrow" > 
					<div class="addleft">  Fees : </div>
					<div class="addright"> <input type="text" name="fees" class="input" placeholder="Fees"> </		div>
					</div>

					<div class="addrow" > 
					<div class="addleft">  Duration : </div>
					<div class="addright"> <input type="text" name="duration" class="input" 			placeholder="Duration"> </	div>
					</div>

					<div class="addrow" > 
					<div class="addleft">  Eigibility : </div>
					<div class="addright"> <input type="text" name="eligibility" class="input" 				placeholder="Eligibility"> 	</div>
					</div>

					<div class="addrow" > 
					<div class="addleft">  Department : </div>
					<div class="addright"> <input type="text" name="department" class="input" 				placeholder="Department"> </	div>
					</div>

					<div class="addrow" style="height:100px;" > 
					<div class="addleft"> Description : </div>
					<div class="addright" style="height:100px"> <textarea name="descr" 		class="tarea" 			placeholder="Description"></textarea> </div>
					</div>

					<div class="addrow" > 
					<div class="addleft"> Visibility : </div>
					<div class="addright"> 
					<input type="radio" name="visible" class="" value="Hide" checked> Hide 
					<input type="radio" name="visible" class="" value="show"> Show 
					 </div>
					</div>


					<div class="addrow"> 
					<div class="addleft"></div>
					<div class="addright"> <input type="submit" name="submit" value="Submit" 		class="submitbtn"> </div>
					</div>

					</form>
				</div> <!-- mright-->
			</div> <!-- main end-->
		</div>
	</body>
</html>