<?php include("navbar.php") ?>
<?php
require("databaseconnect.php");
if(isset($_POST["submit"])){
$title = mysqli_real_escape_string($connect, $_POST["title"]);
$contents = mysqli_real_escape_string($connect, $_POST["contents"]);

session_start();
$user_id = $_SESSION['userIndex'];
echo($user_id);
// echo($title .$contents);

   // Afer all validation and no single error, write a query to save to database
   $query = "INSERT INTO  second_blog_tb (title, contents, user_id) VALUES ('$title', '$contents', '$user_id')";

   // Run this query to connect to the database
   $result = mysqli_query($connect, $query);
   header("Location: dashboard.php");
   
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
      <div class="text w-5/6 md:w-1/3  p-6 my-10  mt-32 mx-auto shadow-lg border-t">
            <h1 class="text-xl font-bold  text-center text my-4 ">Add Blog</h1>
            <div class="text border border-lime-500 mx-auto border-dashed  p-6 my-10">
                              <form action="blogs.php" class="text grid " method="POST">
                                    <input type="text" placeholder="title " name="title" class="py-1 px-3 my-3 text border">
                                    <input type="text" placeholder="contents " name="contents" class="py-1 px-3 my-4 text border">
                                    <input type="submit"  placeholder="password " name="submit"  class="py-1 px-3 my-4 text-white bg-lime-500 hover:bg-lime-600 hover:font-bold">
                              </form>
            </div>
      </div>
</body>
</html>