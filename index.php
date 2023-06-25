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
				<p>
					Lucky Institute of Professional Studies is established by the Lucky Shikshan Sansthan, Jodhpur which has continuously been in the field of education for the last 48 years. The institute is running under the kind and able guidance of its Chairman Sh. S.N. Kachhwaha and educationalist 	and a great visionary having a long association with the education field.
				</p>
				<p>	
					Lucky Institute of Professional Studies is emerging as one of the leading Institution on the educational horizon of northwest India. It has made modest beginning with a three-year postgraduate program in Master of Computer Application in 2001. The college is approved by All India Council of Technical Education (AICTE),New Delhi & Department of M.H.R.D Govt. of India, Delhi and affilated to Jai Narain Vyas University, Jodhpur & Rajasthan Technical University, Kota.
				</p>
			</div>
		</div>
		<?php
			include("footer.php");
		?>
    </div>
</body>
</html>
