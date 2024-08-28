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
       $Username=$_POST['Username'];
       $Password=$_POST['Password'];
       $Emailid=$_POST['Email'];
       $Addrss=$_POST['Addr'];
       $phoneno=$_POST['Phone'];
       include("dbinfo.php");
       $con=mysqli_connect($server,$username,$password,$database);
       if(!$con)
       {
      die('Could not connect:'.mysqli_error($con));
       }
       $sql="Insert into reg(Username,Password,Emailid,Addrss,phoneno) values ('$Username','$Password','$Emailid','$Addrss','$phoneno')";
       if(!mysqli_query($con,$sql))
       {
        die('error:'.mysqli_error($con));
       }
       else{
       echo'<h2 align="center" class="style9"><font color="green"><marquee>Account Created</marquee></h2>';
       }
       mysqli_close($con);
        ?>
    </body>
</html>
