<html>

<head>
	<title> View News </title>
	<link href="css/style_admin.css" rel="stylesheet" />
	<link href="css/font-awesome.min.css" rel="stylesheet" />
</head>

<body>

	<div class="header">
		<div class="hleft"> LIPS </div>
		<div class="hright"> <img src="images/admin.png" width="100%" height="100%" /> </div>

	</div>
	<div class="main">
		<div class="mleft">
			<?php
			include("menubar.php");
			?>
		</div>
		<div class="mright">
			<div class="heading">
				<form method="post" class="form">
					<div class="viewrow">
						<div class="viewcol">
							<heading> S.NO </heading>
						</div>
						<div class="viewcol"> <input type="submit" name="deleteall" value="Delete" class="del"></div>
						<div class="viewcol w210">
							<heading> Title </heading>
						</div>
						<div class="viewcol w283">
							<heading> Description </heading>
						</div>
						<div class="viewcol w120">
							<heading> Visible </heading>
						</div>
						<div class="viewcol action">
							<heading> Action </heading>
						</div>
						</heading>
					</div>
					<div class="viewrow">
						<div class="viewcol"> 1</div>
						<div class="viewcol"> <input type="checkbox" name="chk" value=""></div>
						<div class="viewcol w210"> Result</div>
						<div class="viewcol w283"> Result has been </div>
						<div class="viewcol w120"> Hide</div>
						<div class="viewcol action">
							<div class="editbtn"><b class="fa fa-pencil"></b> Edit</div>
							<div class="delbtn"><b class="fa fa-trash"></b> Delete</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>

</html>