<?php
	include("admin/config/connection.php");
	$sql="SELECT * FROM home";
	$result=mysqli_query($connection,$sql);
	$row=mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
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
				<div class="cheading">
					<h1>
						<?php echo $row['Title']; ?>
					</h1>
				</div>
				<div class="cinfo">
					<p><?php echo $row['Description']; ?></p>
				</div>
			</div>
		</div>
		<?php
			include("footer.php");
		?>
    </div>
</body>
</html>