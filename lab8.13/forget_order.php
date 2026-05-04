<?php

// Clear all session variables
session_start();
session_destroy();

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title>Your Bistro order</title>
   <link rel="stylesheet" href="styles.css">
</head>
<body>
   <h1>Your Bistro order</h1>
   <p>Your Bistro order has been forgotten.</p>
   <a href="index.php">Order Again!</a>
</body>
</html>
