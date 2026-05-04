<?php 

require_once "./db/Message.php";

class Database {
   private $pdo;  
 
   function __construct() {
      $dbHost = "127.0.0.1";
      $dbName = "zybooksdb";
      $dbUsername = "root";
      $dbPassword = "";
      $this->pdo = new PDO("mysql:host=$dbHost;port=3306;dbname=$dbName", $dbUsername, $dbPassword);
   }
   function addMessage($text, $name) {
      $sql = "INSERT INTO message (text, name, posted) VALUES (?, ?, NOW())";
      $stmt = $this->pdo->prepare($sql);
      $stmt->execute([$text, $name]);
   }

   function deleteMessage($messageId) {
      $sql = "DELETE FROM message WHERE id = ?";
      $stmt = $this->pdo->prepare($sql);
      $stmt->execute([$messageId]);
   }

   function getMessages() {
      $messages = [];

      $sql = "SELECT * FROM message ORDER BY posted DESC";
      $stmt = $this->pdo->query($sql);

     while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

   $messages[] = new Message($row["id"], $row["text"], $row["name"], $row["posted"]);

}

      return $messages;
   }
}

?>