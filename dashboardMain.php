<?php
// write a query to fetch database information
$query2 = "SELECT * FROM blog_tb";
$result2 = mysqli_query($connect, $query2);
$blog = mysqli_fetch_all($result2, MYSQLI_ASSOC);
//    for ($i=0; $i < count($blog); $i++) {  }
print_r(count($blog));
// delete code
$index;
$sqlDel = "DELETE FROM MyGuests WHERE id=3";
// echo($index)
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
      <h1 class="text">Here is the dashboard</h1>
      
</body>
</html>