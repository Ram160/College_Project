<!DOCTYPE html>
<!-- Created by Ram Chouhan -->
<html>
<head>
    <title>Contact</title>
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div class="box">
		<?php
			include("header.php");
			include("menubar.php");
		?>
		
		<div class="slider">
			<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14309.126612829654!2d72.9880524!3d26.2849679!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39418e7e0d255cf3%3A0x5ac5174a1431e729!2sLucky%20Institute%20of%20Professional%20Studies!5e0!3m2!1sen!2sin!4v1686552649305!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" height="0" width="100%"></iframe>
		</div>
		<div class="main">
			<?php
				include("mleft.php");
			?>
			<div class="contact">
				<div class="crow">
					<div class="cleft">Address</div>
					<div class="cright">Kamla Nehru Nagar, First Extension Jodhpur (Raj.)</div>
				</div>
				<div class="crow">
					<div class="cleft">E-mail</div>
					<div class="cright">lssjodhpur@yahoo.co.in</div>
				</div>
				<div class="crow">
					<div class="cleft">Phone</div>
					<div class="cright">+91-97842-11113 +91-0291-2750260</div>
				</div>
			</div>
		</div>
		<?php
			include("footer.php");
		?>
    </div>
</body>
</html>
