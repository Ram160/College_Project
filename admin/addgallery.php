<html>
<head>
<title> Add Gallery </title>
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
<div class="addleft">  Title : </div>
<div class="addright"> <input type="text" name="title" class="input" placeholder="Title"> </div>
</div>

<div class="addrow" > 
<div class="addleft">  Image : </div>
<div class="addright"> <input type="file" name="file" class="input"> </div>
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
<div class="addright"> <input type="submit" name="submit" value="Submit" class="submitbtn"> </div>
</div>

</form>
</div> <!-- mright-->
</div> <!-- main end-- >
<div class="footer"> </div>

</div>
</html>