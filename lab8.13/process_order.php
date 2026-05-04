<!DOCTYPE html>
<html lang="en">
<head>
   <title>Your Bistro order</title>
   <link rel="stylesheet" href="styles.css">
</head>
<body>
   <h1>Your Bistro order</h1>

   <p>Here is your Bistro order:</p>
   
   <?php
   require "./order_functions.php";
   echo "<p>" . order() . "</p>";
   ?>

   <p>Your order has been saved for next time!</p>
   <p><a href="forget_order.php">Forget Order</a></p>
   <p><a href="index.php">Order Again!</a></p>

</body>
</html>
