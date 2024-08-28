<?php
include('dbinfo.php');
$db=mysqli_connect("localhost","root","",$database);
$dbname=$_REQUEST['tb'];
$id=$_REQUEST['id'];
$sql="delete from ".$dbname. " WHERE id='".$id."'";
if(mysqli_query($db,$sql)){
        ?>
<script>alert("Deleted successfully");
    window.location.href='edit.php';
    </script>
   
 <?php
} else{
        echo"ERROR:Could not able to execute $sql." .mysqli_error($db);
    }
    mysqli_close($db);
    ?>