<!DOCTYPE html>
<!-- Created by Ram Chouhan -->
<html>
<head>
    <title>Home</title>
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div class="box">
		<?php
			include("header.php");
			include("menubar.php");
		?>
		
		<div class="slider">
			<img src="Images\AU-wp4.jpg" height="250" width="850">
		</div>
		<div class="main">
			<?php
				include("mleft.php");
			?>
			
				<div class="enquiry">
					<h3>Enter Your Details</h3>
					<form>
						<div class="crow">
							<div class="cleft">
								Name<r>*</r>
							</div>
							<div class="cright">
								<input type="text"  placeholder="Enter your Name">
							</div>
						</div>

						<div class="crow">
							<div class="cleft">
								E-mail<r>*</r>
							</div>
							<div class="cright">
								<input type="email" placeholder="abc07@mail.com">
							</div>
						</div>

						<div class="crow">
							<div class="cleft">
								Password<r>*</r>
							</div>
							<div class="cright">
								<input type="password" placeholder="Enter your Password"></	input>
							</div>
						</div>

						<div class="crow">
							<div class="cleft">
								Image<r>*</r>
							</div>
							<div class="cright">
								<input type="file"></input>
							</div>
						</div>

						<div class="crow">
							<div class="cleft">
								Gender<r>*</r>
							</div>
							<div class="cright">
								<div class="pn">
									<input type="radio" name="gen" value="1" >Male</input>
									<input type="radio" name="gen" value="2" >Female</input>
								</div>
							</div>
						</div>

						<div class="crow">
							<div class="cleft">
								Address
							</div>
							<div class="cright">
								<textarea></textarea>
							</div>
						</div>

						<div class="crow">
							<div class="cleft">
								Qualification
							</div>
							<div class="cright">
								<input type="checkbox" >10<sup>th</sup>
								<input type="checkbox" >12<sup>th</sup>
								<input type="checkbox" >Degree
								<input type="checkbox" >Diploma
							</div>
						</div>

						<div class="crow">
							<div class="cleft">
								Action
							</div>
							<div class="cright">
								<input type="submit" value="Print">							
								<input type="submit" value="Save Data">							
							</div>
						</div>

						<div class="crow">
							<div class="cleft">
								City
							</div>
							<div class="cright">
								<select name="city"> 
									<option value="0">Select City</option>
									<option value="1">Jodhpur</option>
									<option value="2">Jaipur</option>
									<option value="3">Udaipur</option>
								</select>	
							</div>
						</div>

						<div class="crow">
							<div class="cleft bn">
							</div>
							<div class="cright">
								<input type="submit" value="Submit">							
								<input type="submit" value="Reset">							
							</div>
						</div>

					</form>
				</div>
			<?php
			include("footer.php");
			?>
    </div>
</body>
</html>
