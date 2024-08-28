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
        session_start();
        if(isset($_SESSION['UNAME']))
        {
            unset($_SESSION['UNAME']);
        }
        header('Location:index.php?target=blank');
        ?>
    </body>
</html>
