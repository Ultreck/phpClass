<?php
require("databaseconnect.php");
if(isset($_POST["submit"])){
$email = $_POST["email"];
$password = $_POST["password"];

$emailQuery = "SELECT * FROM users_tb WHERE  email = '$email' ";
$foundEmail = mysqli_query($connect, $emailQuery);
if($foundEmail -> num_rows > 0){
      echo("email exist");
      // print_r($foundEmail);
      $currentUser = mysqli_fetch_assoc($foundEmail);
      $verify = password_verify($password, $currentUser['password']);
      echo( $verify);
      if($verify){
            echo("verified");
            session_start();
            $_SESSION["userIndex"] = $currentUser['user_id'];
            $_SESSION["user_email"] = $currentUser['email'];
            header("Location: blogs.php");
      }
      else{
            echo("verification failed");
      }
}else{
      echo("email does not  exist");
      
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <script src="https://cdn.tailwindcss.com"></script>
      <script src="https://kit.fontawesome.com/b2b9838bd3.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="text w-full lg:w-1/3 mx-auto p-7 shadow-lg mt-20">
            <form action="signin.php" method="POST" class="text">
                  <h1 class="text-2xl font-bold text-green-600">Sign In Page</h1>
                  <input type="text" class="text border w-full py-1 my-3 px-4" placeholder="email" name="email">
                  <input type="text" class="text border w-full py-1 my-3 px-4" placeholder="password" name="password">
                  <input type="submit" class="text bg-green-500 hover:bg-green-600 text-white w-full text-center py-1 my-3" value="submit" name="submit">     
            </form>
      </div>
</body>
</html>