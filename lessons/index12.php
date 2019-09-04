<?php  

  // functions 

  function sayHello($name = 'shaun', $time = 'morning'){ // function that has $name and $time as arguments, these variables are hard-coded for demonstration purposes. 
    echo "good $time $name"; // since this is double quotes "", we can directly output the variable $name
  }

  // sayHello('mario, '); // invokes (calls) the function with the parameter
  // sayHello('yoshi', 'night'); // overrides the passed arguments in the sayHello function

  function formatProduct($product){
    // echo "{$product['name']} costs £{$product['price']} to buy <br />"; // wrap curly braces around this since we are echoing a variable and so that PHP understands this. 
    return "{$product['name']} costs £{$product['price']} to buy <br />";
  }

  // $formatted = formatProduct(['name'=>'gold star', 'price'=> 20]);
  // echo $formatted;

?>

<!DOCTYPE html> 
<html>
<head>
  <title>PHP Tutorials</title>
</head>
<body>


</body>
</html> 
