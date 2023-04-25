<?php
require("vendor/autoload.php");
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$hostname =  $_ENV("HOSTNAME");
$username =  $_ENV("ROOT");
$password =  $_ENV("");
$database =  $_ENV("DATABASE");
 $connect = mysqli_connect($hostname, $username , $password , $database );
if ($connect) {
    echo("connected successfully");
}else{
      echo("sqi no gree connect" .mysqli_connect_error());
}

?>