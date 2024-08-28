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
        include('dbinfo.php');
        $link=mysqli_connect($server,$username,$password,$database)
                or die("Could not connect:" . mysqli_error($link));
        $photo=$_FILES['photo']['name'];
        $price=$_POST['price'];
        $description=$_POST['dis'];
        $dbl=$_POST['db'];
        $size=$_POST['size'];
        $today=date("Y-m-d");
        $ImageDir=$dbl."/";
        $ImageName=$ImageDir.$photo;
        if(move_uploaded_file($_FILES['photo']['tmp_name'],$ImageName))
                $instr=fopen($ImageName,"rb");//read binary image data
        
        $image=addslashes(fread($instr,filesize($ImageName)));
        $insert="INSERT INTO ".$dbl."(photo,price,size,description,path) VALUES ('$image','$price',
                '$size','$description','$ImageName')";
        $insertresults=mysqli_query($link,$insert)or die(mysqli_error($link));
        
        header("location:add.php");
        
        ?>
    </body>
</html>
