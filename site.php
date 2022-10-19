<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form action="site.php" method="post">
  First num: <input type="number" step="0.001" name="num1"> <br>
  OP: <input type="text" name="op"> <br>
  Second num: <input type="number" step="0.001" name="num2"> <br>
    <input type="submit">
    </form>

   <?php

   $num1 = $_POST["num1"];
   $num2 = $_POST["num2"];
   $op = $_POST["op"];

   if($op == "+"){
      echo $num1 + $num2;
   } elseif ($op == "-") {
     echo $num1 - $num2;
   } elseif ($op == "/") {
     echo $num1 / $num2;
   } elseif ($op == "*") {
     echo $num1 * $num2;
   } else {
     echo "Invalid Operator";
   }


   ?>
  </body>
</html>
