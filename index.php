<!DOCTYPE HTML>
<html>
  <head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="./styl.css">
  <title>Ajťák Roku</title> 
  </head>
  <body>
   <div id="container">
   <?php
   if (isset($_GET['a'])){
   $a=$_GET['a'];
   }else{
   $a=0  ;
   }  
   switch ($a){
   case 1:
   include "./obsah.php";
   break;
   case 2:
   include "./bobrik.php";
   break;
   case 3:
   include "./mop.php";
   break;
   case 4:
   include "./noc.php";
   break;
   case 5:
   include "./olymp.php";
   break ;
   case 6:
   include "./soc.php";
   break;
   case 7:
   include "./program.php";
   break;
   case 8:
   include "./web.php";
   break;
   case 9:
   include "./itjunior.php";
   break;
   case 10:
   include "./netrider.php";
   break;
   case 11:
   include "./vysledky.php";
   break;
   case 12:
   include "./zaver.php";
   break;
   default :
   include "./uvod.php";
   }  
   ?>
   </div>
  </body>
</html>
