<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>
  </title>
</head>
<body>



     <form action="using_checkboxes.php" method="POST">

Apples:<input type="checkbox"name="fruits[]" value="Apples"><br>
Oranges:<input type="checkbox"name="fruits[]" value="Oranges"><br>
Pears:<input type="checkbox"name="fruits[]" value="Pears"><br>
       <input type="submit">
     </form>
        <?php
   $fruits=$_POST["fruits"];
   echo $fruits[1];
        ?>






</body>
</html>
