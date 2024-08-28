<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include("dbinfo.php");
        session_start();
        $U=$_REQUEST['Username'];
        $P=$_REQUEST['Password'];
        $con=mysqli_connect($server,$username,$password,$database);
        if(!$con)
        {
       die('could not connect:'.mysqli_connect_error());
        }
        $sql="select * from reg where Username='$U' and Password='$P'";
        if($result=mysqli_query($con,$sql))
                if(mysqli_num_rows($result)>0)
                {
           $_SESSION['UNAME']=$U;
           header("Location:userhome.php");
                }
                else
                    die('login is not successful:'.mysqli_error($con));
                mysqli_close($con);
        ?>
    </body>
</html>
