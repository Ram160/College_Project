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
				
			</div>
		</div>
		<?php
			include("footer.php");
		?>
    </div>
</body>
</html>
