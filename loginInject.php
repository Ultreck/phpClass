<?php
require("databaseconnect.php");
$email = $_POST['email'];
$query = "SELECT * FROM users_tb WHERE email = ?";
$prepareQuery = $connect->prepare($query);
$bindParams = $prepareQuery->bind_param('s', $email);
$insert = $prepareQuery->execute();
if($insert){
      print_r($prepareQuery->get_result()->fetch_assoc());
      // bind_param('sss', $name, $email, $phone);
      $blog = "INSERT blog (name, title, desc, user_id) VALUE (?, ?, ?, ?)";
      $query = $connect->prepare($query);
      $bindParams = $query->bind_param('ssss', $name, $title, $desc, $user_id);
}
?>