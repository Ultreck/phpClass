<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");

require("vendor/autoload.php");
// require realpath("vendor/autoload.php");
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
// $hostname =  $_ENV("HOSTNAME");
// $username =  $_ENV("USERNAME");
// $password =  $_ENV("PASSWORD");
// $database =  $_ENV("DATABASE");

$hostname =  "localhost";
$username = "root";
$password =  "";
$database =  "new_blog_db";
 $connect = mysqli_connect($hostname, $username , $password , $database );
if ($connect) {
    echo("connected successfully");
}else{
      echo("sqi no gree connect" .mysqli_connect_error());
}

?>