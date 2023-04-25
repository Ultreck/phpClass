<?php 
require('databaseconnect.php');
if(isset($_POST['submit'])){
      $firstname = $_POST["firstname"];
      $lastname = $_POST["lastname"];
      $email = $_POST["email"];
      $password = $_POST["password"];
       $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
      //  echo($hashedPassword);
      // echo("$firstname, $lastname, $email, $password");
      
      $searchEmail =  "SELECT * FROM users_tb WHERE email = '$email' " ;
      $foundEmail = mysqli_query($connect, $searchEmail);
      print_r($foundEmail -> num_rows );
      if($foundEmail -> num_rows  > 1){
            echo("user exists");
      }else{
            $query = "INSERT INTO users_tb (first_name, last_name, email, password) VALUES ('$firstname', '$lastname', '$email', '$hashedPassword')";
            $result = mysqli_query($connect, $query);
            if($result){
                  echo("registration successful");
                  header("Location: signin.php");
            }else{
                  echo("registration failed".mysqli_error($connect));
            }
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
            <form action="signup2.php" method="POST" class="text">
                  <h1 class="text-2xl font-bold text-blue-600">Sign Up Page</h1>
                  <input type="text" class="text border w-full py-1 my-3 px-4" placeholder="firstname" name="firstname">
                  <input type="text" class="text border w-full py-1 my-3 px-4" placeholder="lastname" name="lastname">
                  <input type="text" class="text border w-full py-1 my-3 px-4" placeholder="email" name="email">
                  <input type="text" class="text border w-full py-1 my-3 px-4" placeholder="password" name="password">
                  <input type="submit" class="text bg-blue-500 hover:bg-blue-600 text-white w-full text-center py-1 my-3" value="submit" name="submit">     
            </form>
      </div>
</body>
</html>