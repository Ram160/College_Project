<html>
<head>
<title> Contact Us </title>
<link href="css/style.css" rel="stylesheet" /> 
<link href="css/font-awesome.min.css" rel="stylesheet" /> 
</head>
<body>


</body>
<div class="outer">

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
<form method="post">


<div class="addrow" > 
<div class="addleft">  Old Password : </div>
<div class="addright"> <input type="password" name="op" class="input" placeholder="Old Password "> </div>
</div>


<div class="addrow" > 
<div class="addleft">  New Password : </div>
<div class="addright"> <input type="password" name="np" class="input" placeholder="New Password "> </div>
</div>

<div class="addrow" > 
<div class="addleft">  Confirm Password : </div>
<div class="addright"> <input type="password" name="cp" class="input" placeholder="Confirm Password "> </div>
</div>




<div class="addrow"> 
<div class="addleft"></div>
<div class="addright"> <input type="submit" name="submit" value="Update" class="submitbtn"> </div>
</div>

</form>
</div> <!-- mright-->
</div> <!-- main end-- >
<div class="footer"> </div>

</div>
</html>