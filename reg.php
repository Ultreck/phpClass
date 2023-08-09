<?php
require("databaseconnect.php");
$_POST = json_decode(file_get_contents("php://input"));
$first_name = $_POST->firstname;
$last_name = $_POST->lastname;
$email = $_POST->email;
$password = $_POST->password;
$query =  "INSERT INTO data_tb (`first_name`, `last_name`, `email`, `password`) VALUES (?, ?, ?, ?)";
$prepareQuery = $connect->prepare($query);
$bindParams = $prepareQuery->bind_param("ssss", $first_name, $last_name, $email, $password);
$insert = $prepareQuery->execute();
$resp = [];
if($insert){
      $resp['success'] = true;
}else{
      $resp['success'] = false;
      
}
echo json_encode($_POST);
?>