<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>
  </title>
</head>
<body>



   <form action="switch_statement.php" method="POST">
     What was your grade?
     <input type="text" name="grade">

    <input type="submit">
  </form>
        <?php
        $grade=$_POST["grade"];
          switch($grade){
      case "A":
        echo "you did  amazing!";
      break;
     case "B":
     echo "you did  pretty good!";
     break;
        case "C":
       echo "you did  poorly!";
     break;
      case "D":
      echo "you did  very bad!";
     break;
     case "F":
        echo "you Fail!";
   break;
      default:
   echo "Invalid grade";
}

      ?>
</body>
</html>
