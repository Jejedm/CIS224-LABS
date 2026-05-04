<?php 

if (!empty($_GET["id"])) {

   // Get message id submitted from index.php
   $id = trim($_GET["id"]);

require_once "./db/Database.php";
$db = new Database();
$db->deleteMessage($id);

}

// Redirect the browser to index.php
header("Location: index.php");

?>