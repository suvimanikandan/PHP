<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>
  </title>
</head>
<body>


    <!--  <?php
       $isMale = false;
       if($isMale){
         echo "You are Male";
       }else {
         echo"you are not male";
       }
       ?>  -->
       <?php
         $isMale = true;
         $isTall= false;
        // if($isMale|| $isTall)
        if($isMale&& $isTall)
        {
           echo "You are  tall Male";
         }
        elseif($isMale && !$isTall)
        {
           echo "you are a short male";
         }
         elseif(!$isMale && $isTall)
         {
         echo "you are not male but are tall";
       }
         else
         {
           echo "you aare not a male you are not a tall";
         }
     ?>
</body>
</html>
