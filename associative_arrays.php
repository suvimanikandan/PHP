<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>
  </title>
</head>
<body>



   <form action="associative_arrays.php" method="POST">
     <input type="text" name="student">

    <input type="submit">
  </form>
        <?php
        $grades=array("swetha"=>"o+","thangamani"=>"A+","thangamalar"=>"A");

echo $grades[$_POST["student"]];

      ?>
</body>
</html>
