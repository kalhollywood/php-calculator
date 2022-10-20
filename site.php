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

        function __construct($aTitle, $aAuthor, $aPages){
          $this->title = $aTitle;
          $this->author = $aAuthor;
          $this->pages = $aPages;
        }

        function bigBook() {
          if($this->pages >=500){
            return "true";
          }
          return "false";
        }
      }

      $book1 = new Book("Harry Potter", "JK Rowling", 400);
      $book2 = new Book("Lord Of The Rings", "Tolkien", 700);

      echo $book1->title;
      echo $book2->author;
      echo $book1->bigBook();
   ?>

   <?php
   class LibraryBook extends Book {
     // inheritance
   }
    ?>

<!-- Footer component -->
  <?php include "footer.html" ?>
  </body>
</html>
