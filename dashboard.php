<?php
require("databaseconnect.php");
session_start();
$user_id = $_SESSION['userIndex'];
$email = $_SESSION['user_email'];
echo($user_id);

$query2 = "SELECT * FROM second_blog_tb ";
$result2 = mysqli_query($connect, $query2);
$blog = mysqli_fetch_all($result2, MYSQLI_ASSOC);
//    for ($i=0; $i < count($blog); $i++) {  }
print_r(count($blog));
$query = "INSERT INTO (user_id,) VALUES ('$user_id'')";
$result = mysqli_query($connect, $query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<body>
      <!-- <h1 class="text">Here is the header or in other word , This is dashboard</h1> -->
      <div class="text w-5/6 md:w-2/3 lg:w-2/3 border-lime-500  px-6  my-10 mx-5 border  bg-white overflow-auto">
                  
                  <h1 class="text-center text-white font-bold text-lg mb-5 sticky top-0 bg-lime-500">Display Blogs</h1>
                  <div class="text grid grid-cols-1 lg:grid-cols-3">
                        <?php for($i = 0; $i < count($blog); $i++){ ?>
                              <div class="text border my-2 mx-2 hover:shadow-lg hover:scale-105 hover:border-lime-500 rounded">
                                    <div class="text-end mx-2">
                                          <button class="text hover:scale-110 " title="edit">
                                                <i class="fa-sharp fa-solid fa-pen-to-square fa-xs  text-blue-500"></i>
                                          </button>
                                          <button class="text  hover:scale-110 " title="delete" >
                                                <i class="fa-solid fa-trash-can fa-xs text-red-500"></i>
                                          </button>
                                    </div>
                                    <div class="text px-5">
                                          <h1 class="text font-bold text-lg">
                                                <?php echo($blog[$i]['title'])?>
                                          </h1>
                                          <p class="text my-4"> <?php echo($blog[$i]['contents'])?> </p>
                                          <div class="flex justify-end text-end mt-3  "> <?php echo( substr(($blog[$i]['time']), 10, 6)) ?></div>
                                    </div>
                              </div>
                              <?php }?>
                  </div>
                 
            </div>
</body>
</html>