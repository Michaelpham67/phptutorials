<?php  

  // variable scope

  // local vars

  function myFunc(){
    $price = 10; // $price variable has local scope within myFunc
    echo $price;
  }

  // myFunc();
  // echo $price;


  function myFuncTwo($age){
    echo $age;
  }

  // myFuncTwo(25);

  // global variables

  $name = 'mario';

  // function sayHello(){
    // global $name;
    // $name = 'yoshi'; // overrides mario for the variable $name since we set global $name locally in this function
    // echo "hello $name";
  // }

  // sayHello();
  // echo $name; // yoshi overrides mario and echos yoshi as per the global $name; statement in the local sayHello function. 

  function sayBye($name){ // to pass $name by reference, put a '&' in front of it i.e. &$name 
    $name = 'wario'; // local variable not global since we have not set global $name; for this particular function. 
    echo "bye $name";
  }

  sayBye($name);
  echo $name; // mario is still outputted instead of wario since the global variable hasn't been overriden. Unless we pass sayBye(&$name) by reference, wario will override mario in this case. 
   
?>

<!DOCTYPE html> 
<html>
<head>
  <title>PHP Tutorials</title>
</head>
<body>


</body>
</html> 
