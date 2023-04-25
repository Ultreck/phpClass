<?php 
      require("databaseconnect.php");
      $studentObj = [];
      $studentArr = [];
            if (isset($_POST["submit"])) {
                  $firstname = $_POST["firstname"];
                  $lastname = $_POST["lastname"];
                  $email = $_POST["email"];
                  $password = $_POST["password"];
                  
                  $studentObj = [
                        'firstname' =>   $firstname,
                        'lastname' => $lastname,
                        'email' =>  $email,
                        'password' =>    $password,
                  ];
                  print_r($studentObj);
                  // $studentArr = [$studentObj];
                  array_push($studentArr, $studentObj);
            }

            
           

              //free previous result from memory
              mysqli_free_result($result); 

            //   close database connection
            mysqli_close($connect);
      print_r($studentArr);
?>



<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="text">
            <div class="text w-5/6 md:w-1/2 lg:w-1/4 mx-auto shadow-lg p-6 mt-20">
                  <form action="signUp.php" class="text grid " method="POST">
                        <h1 class="text-xl font-bold ">Sign Up</h1>
                        <input type="text" placeholder="first name " name="firstname" class="py-1 px-3 my-3 text border">
                        <input type="text" placeholder="last name " name="lastname" class="py-1 px-3 my-3 text border">
                        <input type="text" placeholder="email " name="email" class="py-1 px-3 my-3 text border">
                        <input type="text" placeholder="password " name="password" class="py-1 px-3 my-3 text border">
                        <input type="submit"  placeholder="password " name="submit"  class="py-1 px-3 my-3 text-white bg-blue-500 ">
                        <button class="py-1 px-3 my-3 text bg-blue-500 " onclick="createForm()">Submit</button> 
                  </form>
            </div>
      </div>
</body>
</html>