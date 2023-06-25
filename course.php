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
			<div class="mright">
				<ul type="square" style="font-size:25px;">
					<li>BCA - BACHELOR of COMPUTER and APPLICATIONS</li>
					<li>MCA - MASTER of COMPUTER and APPLICATIONS</li>
					<li>BBA - Bachelor of Business Administration</li>
					<li>MBA - Masters of Business Administration</li>
					<li>B.Com - Bachelor of Commerce</li>
					<li>M.com - Masters in Commerce</li>
					<li>B.Sc (PCM) - PHYSICS , CHEMISTRY, MATHEMATICS</li>
					<li>B.Sc (PCB) - PHYSICS, CHEMISTRY, BIOLOGY</li>
					<li>M.Sc </li>
				</ul>
			</div>
		</div>
		<?php
			include("footer.php");
		?>
    </div>
</body>
</html>
