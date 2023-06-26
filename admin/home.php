<?php
    $msg="";
    $host="localhost:3306";
    $user="root";
    $password="";
    $db_name="college_project";
    $connection=mysqli_connect($host,$user,$password,$db_name);

    if($connection)
        echo"Connection successfull";
    else
        die('Connection failed');

    if(isset($_POST['update']))
    {
        $Title=$_POST['title'];
        $Description=$_POST['description'];

        $sql="insert into home(title, description) values('$Title','$Description');"; 


        if(mysqli_query($connection,$sql))
            $msg='Data successfully inserted';
        else
            $msg='Data could not inserted';
        mysqli_close($connection);
    }

?>


<html>
    <head>
        <title>Home</title>
        <link href="css/style_admin.css" rel="stylesheet">
    </head>
    <body>
        <div class="outer">
            <?php
                include("header.php");
            ?>
            <div class="main">
                <div class="mleft">
                    <?php
                        include("menubar.php");
                    ?>
                </div>
                <div class="mright">
                    <h1>Home</h1>
                    <div class="heading">
                        <?php
                            include("form.php");
                            echo "$msg";
                        ?>
                    </div>
                </div>
            </div>
        </div>      
    </body>
</html>d