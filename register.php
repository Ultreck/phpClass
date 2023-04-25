
<?php
// REGEX
if(preg_match("/^[a-zA-Z] {}+$/", "dami123")){}
// filter for validation
if(filter_var('ola@gmail.con', FILTER_VALIDATE_EMAIL)){
echo('This is an email');
}else{
      echo("This is not an email");
}


// cross site scripting - XSS
// Frontend, serverside, 
$error = ['firstname' =>'', 'lastname' => '', 'email' =>'', 'passsword' =>''];

if(isset($_POST['submit'])) {
      // echo("Somebody made a post request");
      // echo(htmlspecialchars($_POST["firstname"]));
      echo($_POST["firstname"]);
      // print_r($_POST);
      $firstname = $_POST['firstname'];
      $email = $_POST['email'];

      // Validation code for firstname
      if(empty($firstname)){
            $error['firstname'] = 'First name is required';
            echo("first name is required");
      }else if(preg_match('/^[a-zA-Z]+$/', $firstname)){
            echo("Only word charaters are allowed");
      }
      // Validation code for email
      if(empty($email)){
            $error['email'] = 'Please provide a valid email';
            echo("email is required");
      }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo("Please enter a valid email");
      }


      // Routing to other pages and first check whether all input values are back to empty string
      if($error['firstname'] == "" && $error['lastname'] == "" && $error['email'] == "" && $error['password'] == "" ){
            // header('Location:dashboard.php');
      }
      // another method
      // if(array_filter($error)){

      // }
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
</head>
<body>
      <div class="text">
            <div class="text w-5/6 md:w-1/2 lg:w-1/4 mx-auto shadow-lg p-6 mt-20">
                  <form action="register.php" class="text grid " method="POST">
                        <h1 class="text-xl font-bold ">Register</h1>
                        <input type="text" placeholder="first name " name="firstname" class="py-1 px-3 my-3 text border">
                        <small class="text"> <?php echo $error['firstname'] ?> </small>
                        <input type="text" placeholder="last name " name="lastname" class="py-1 px-3 my-3 text border">
                        <input type="text" placeholder="email " name="email" class="py-1 px-3 my-3 text border">
                        <small class="text"> <?php echo $error['email'] ?> </small>
                        <input type="text" placeholder="password " name="password" class="py-1 px-3 my-3 text border">
                        <input type="submit" placeholder="password " name="submit"  class="py-1 px-3 my-3 text-white bg-blue-500 ">
                        <!-- <button class="py-1 px-3 my-3 text bg-blue-500 ">Submit</button> -->
                  </form>
            </div>
      </div>
</body>
</html>