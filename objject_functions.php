<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>
  </title>
</head>
<body>


      <?php
       class Student{
         var $name;
         var $major;
         var $gpa;


function __construct($name,$major,$gpa){
  $this->name=$name;
  $this->major=$major;
  $this->gpa=$gpa;
}

   function hasHonors(){
     if($this-> gpa >=9){
       return "true";
     }
     return "false";
   }
}
       $student1=new student(  "Thangamani","Engineering",8.9);
       $student2=new student(  "Thangamalar","Art and science",8.7);

      echo $student1->hasHonors();
          ?>

</body>
</html>
