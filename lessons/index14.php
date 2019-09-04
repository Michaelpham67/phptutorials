<?php  

  // include and require

   // include('ninjas.php'); // includes ninjas.php (external .php file) in the same directory
   // require('ninjas.php'); // same as include but does not carry on with the code if an error occurs. 

   include 'ninjas.php'; // can write it this way as well (without the parenthesis)
   require 'ninjas.php';
   // include('ninjass.php'); // intentional error, it carries on with the code i.e. it still echos 'end of php'
   // require('ninjass.php'); // intentional error, does not carry on with the code i.e. it does not echo 'end of php'

   echo 'end of php';

?>

<!DOCTYPE html> 
<html>
<head>
  <title>PHP Tutorials</title>
</head>
<body>

  <?php include('content.php'); ?>
  <?php include('ninjas.php'); ?>

</body>
</html> 
