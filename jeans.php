 <?php
        // put your code here
        session_start();
        $connect = mysqli_connect("localhost","root","","test");
        
        if(isset($_POST["add_to_cart"]))
        {
        if(isset($_SESSION["shopping_cart"]))
        {
        $item_array_id = array($_SESSION["shopping_cart"],"item_id");
        
        if(!in_array($_GET["id"], $item_array_id))
        {
        $count = count($_SESSION["shopping_cart"]);
        $item_array = array(
            'item_id' => $_GET["id"],
            'item_name' => $_POST["hidden_name"],
            'item_price' => $_POST["hidden_price"],
            'item_quantity' => $_POST["quantity"]
                );
        $_SESSION["shopping_cart"][$count] = $item_array;
        }
 else {
     echo '<script>alert("Item Already Added")</script>';
 }
        }
        else 
            {
        $item_array = array(
            'item_id' => $_GET["id"],
            'item_name' => $_POST["hidden_name"],
            'item_price' => $_POST["hidden_price"],
            'item_quantity' => $_POST["quantity"]
                );
        $_SESSION["shopping_cart"][0] = $item_array;
            }
    }
    if(isset($_GET["action"]))
    {
      if($_GET["action"] == "delete")
      {
       foreach($_SESSION["shopping_cart"] as $keys => $values)
       {
       if($values["item_id"] == $_GET["id"])
       {
         unset($_SESSION["shopping_cart"][$keys]);
         echo '<script>alert("Item Removed")</script>';
         echo'<script>window.location="demo.php"</script>';
       }
      }
      }
    }
        ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> Shopping Cart</title>
    </head>
    <body>
        <br />
        <div class="container">
            <br />
            <br />
            <br />
            <h3 align="center">Jeans</a></h3><br/>
            <br/><br/>
            
        <?php
        $query = "SELECT * FROM jeans ORDER BY id ASC";
        $result = mysqli_query($connect,$query);
        if(mysqli_num_rows($result) > 0)
        {
           while($row = mysqli_fetch_array($result))
           {
?>
            <div class="col-md-6">
                <form method="post" action="jeans.php?action=add&id=<?php echo $row["id"]; ?>">
                    <div style="border:3px solid #5cb85c; background-color:whitesmoke; border-radius:5px; padding:16px;" align="center">
                   <img width="100" height="100"
                        src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['photo']); ?>" /></a> <br/>
                    <h4 class="text-info"><?php echo $row["description"]; ?></h4>
                    <h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>
                    <input type="number" min="1" max="20" name="quantity" value="1" class="form-control" />
                    <input type="hidden" name="hidden_name" value="<?php echo $row["description"]; ?>" />
                    <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>"/>
                    <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to cart" />
                    </div>
                </form>
            </div>
            <?php
           }
        }
        ?>
            <div style="clear:both"></div>
            <br />
            <h3>Order Details</h3>
            <form action="placeorder.php">
                <div class="table-responsive">
           <table class="table table-bordered">
               <tr>
                   <th width="40%">Item Name</th>
                   <th width="10%">Quantity</th>
                   <th width="20%">Price</th>
                   <th width="15%">Total</th>
                   <th width="5%">Action</th>
               </tr>
               <?php
               if(!empty($_SESSION["shopping_cart"]))
               {
               $total = 0;
               foreach($_SESSION["shopping_cart"]as $keys => $values)
               {
                   ?>
               <tr>
                   <td><?php echo $values["item_name"]; ?></td>
                   <td><?php echo $values["item_quantity"]; ?></td>
                   <td><?php echo $values["item_price"]; ?> </td>
                   
                   <td>$<?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?> </td>
                   <td><a href="demo php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span>
                       </tr>
                       <?php
                       $total =$total + ($values["item_quantity"] * $values["item_price"]);
               }
               ?>
                       <tr>
                           <td colspan="3" align="right">Total</td>
                           <td align="right">$ <?php echo number_format($total,2); ?> </td>
                           
                           <input type="hidden" name="tot" value="<?php echo number_format($total,2); ?>">
                           <td><input type="submit" style="margin-top:5px;" class="btn btn-success" value="Check Out"/></td>
                   </tr>
                   <?php
               }
               ?>
                   </form>
</table>
                    </div>
        </div>
    </div>
    <br />
</body>
</html>
               
               
                   
               
                       
                 
            
                    
        
