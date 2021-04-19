<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>
  </title>
</head>
<body>
<!--  <form action="post_vs_get.php" method="GET">
  password: <input type="password" name="password">
    <br>


    <input type="submit">
  </form>
     <?php echo $_GET["password"]?>-->



     <form action="post_vs_get.php" method="POST">
     password: <input type="password" name="password">
       <br>


       <input type="submit">
     </form>
        <?php echo $_POST["password"]?>






</body>
</html>
