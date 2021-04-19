<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>
  </title>
</head>
<body>

  <form action="better_calculator.php" method="POST">
      First Num:<input type="number" name="num1"><br>
      OP: <input type="textbox"   name="op"> <br>
      Second Num:<input type="number" name="num2"><br>
      <input type="submit">
  </form>
<?php
$num1-$POST["num1"];
$num2=$_POST["num2"];
$op=$_POST["op"];

if($op == "+")
{
  echo $num1 + $num2;

}if($op == "-")
{
  echo $num1 - $num2;

}if($op == "*")
{
  echo $num1 * $num2;

}if($op == "/")
{
  echo $num1 / $num2;

}
else{
  echo "Invalid operator";

}
 ?>


</body>
</html>
