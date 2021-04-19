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
             function makeChicken(){
               echo "The chef makes Chicken<br>";
             }
             function makeSalad(){
               echo "the chef makes salad <br>";
                }
                function makeSpecialDish(){
                  echo "the chief makes bbq ribs <br>";
                }
           }

  $chef=new Chef();
  $chef->makeChicken();




       ?>

</body>
</html>
