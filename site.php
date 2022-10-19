<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<!-- Header component -->
    <?php include "header.html" ?>

<!-- Basic Calculator Form -->
    <form action="site.php" method="post">
  First num: <input type="number" step="0.001" name="num1"> <br>
  OP: <input type="text" name="op"> <br>
  Second num: <input type="number" step="0.001" name="num2"> <br>
    <input type="submit">
    </form>

<!-- PHP code for calculator -->
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

<!-- Including other PHP files -->
   <?php
   $title = "My First PHP page";
   $author = "Kal";
   $wordCount = 250;
   include "article-header.php"
   ?>

<!-- Using functions & variables from other PHP files -->

   <?php
   include "useful-tools.php";
   sayHi("Kal");
   echo $feetInMile;
   ?>

<!-- Creating new datatype with classes -->
   <?php
      class Book {
        var $title;
        var $author;
        var $pages;
      }

      $book1 = new Book;
      $book1->title = "Harry Potter";
      $book1->author = "JK Rowling";
      $book1->pages = 400;

      $book2 = new Book;
      $book2->title = "Lord Of The Rings";
      $book2->author = "Tolkien";
      $book2->pages = 700;

      echo $book1->title;
      echo $book2->author;
   ?>

<!-- Footer component -->
  <?php include "footer.html" ?>
  </body>
</html>
