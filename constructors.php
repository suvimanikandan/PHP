<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>
  </title>
</head>
<body>


      <?php
       class Book{
         var $title;
         var $authoor;
         var $pages;


function __construct($name){
  echo $name;
}
       }

       $book1=new Book("mike");
       $book1->title="Harry Potter";
        $book1->author="JK Rowlin";
         $book1->pages=400;


         $book2=new Book("Tom");
         $book2->title="Lord of the Rings";
          $book2->author="Tolkien";
           $book2->pages=700;

                ?>

</body>
</html>
