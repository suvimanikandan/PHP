<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>
  </title>
</head>
<body>



       <form action="getting_user_input.php" method="get">
       Name: <input type="text" name="username">
       <br>
       Age: <input type="number"  name="age">
       <br>

       <input type="submit">
       </form>
       <br>
    your name is   <?php echo $_GET["username"]?>
    <br>
    your age is   <?php echo $_GET["age"]?>



</body>
</html>
