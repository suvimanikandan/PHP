<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>
  </title>
</head>
<body>


      <?php
           class Chef {
             class  ItalianChef extends chef{
               function makePasta(){
                 echo "the chef makes pasta <br>";
             }


                function makeSpecialDish(){
                  echo "the chief makes chicken parm <br>";
                }
           }

  $chef=new Chef();
  $chef->makeSpecialDish();

  $italianChef=new ItalianChef();
    $italianChef->makeSpecialDish();





       ?>

</body>
</html>
