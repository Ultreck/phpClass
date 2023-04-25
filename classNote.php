<?php 
// variables and constants

// variables
// $myName = "Kunle";
// $myName = "Shola";
// echo($myName);
// echo("Hello world");

// constants
// define('PI', 3.142);
// echo(PI);

// concatenation
// $myName = "Shola";
// echo("My name is " .$myName);

//template literals similarity
// $myName = "Shola";
// echo("My name is $myName");

$allColors = ['bala bulu', 'blue blue', 'bulaba'];
// echo($allColors[1]);

$allColors = array('bala bulu', 'blue blue', 'bulaba');
$allColors[] = 'light blue';
array_push($allColors, "light light");
array_pop($allColors);
count($allColors);
// echo(count($allColors));

$students = [
      "firstname" => "Shola",
      "lastname" => "Sade",
      "email" => "solasade@gmail.com",
      "password" => "fish"
];
      $allStudents = [
            [
                  'firstname' => "Elon",
                  'lastname' => "Musk",
                  'email' => "elomusk@gmail.com",
                  'passsword' => "tesla",
            ],
            [
                  'firstname' => "Jeff",
                  'lastname' => "Bezoz",
                  'email' => "jeffbezoz@gmail.com",
                  'passsword' => "amazon",
            ],
      ];
            
            for($i = 0; $i < count($allStudents); $i++){
            // print_r("<h1>{$allStudents[$i]["lastname"]}</h1>" );
            
      }

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
 <?php 
         for($i = 0; $i < count($allStudents); $i++){
            print_r("<h1>{$allStudents[$i]["lastname"]}</h1>" );
            
      }
      ?>
      <?php for($i = 0; $i < count($allStudents); $i++){?>
            <h1>
                  <?php $allStudents[$i]["lastname"]?>
            </h1>
      <?php }?> 








      <div class="text  grid lg:flex w-5/6 md:w-3/4 mx-auto mt-20 border-lime-500  shadow-lg gap-4 border h-4/5 bg-white">
            <div class="text w-5/6 md:w-1/3 lg:w-1/3 mx-5  p-6 my-10 border border-lime-500 border-dashed mt-32 h-80 ">
                  <h1 class="text-xl font-bold bg-lime-500 text-center text-white my-4">Add Blog</h1>
                              <form action="blogs.php" class="text grid " method="POST">
                                    <input type="text" placeholder="title " name="title" class="py-1 px-3 my-3 text border">
                                    <input type="text" placeholder="contents " name="contents" class="py-1 px-3 my-4 text border">
                                    <input type="submit"  placeholder="password " name="submit"  class="py-1 px-3 my-4 text-white bg-orange-500 hover:bg-orange-600 hover:font-bold">
                              </form>
            </div>
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
                                          <div class="flex justify-end text-end mt-3  "> <?php echo( substr(($blog[$i]['time_stamp']), 10, 6)) ?></div>
                                    </div>
                              </div>
                              <?php }?>
                  </div>
                 
            </div>

      </div>


      
</body>
</html>