<?php  

  // indexed arrays

  $peopleOne = ['shaun', 'crystal', 'ryan']; // more common way to create index arrays
  // echo $peopleOne[0];

  $peopleTwo = array('kent', 'chum');
  // echo $peopleTwo[1];

  $ages = [20, 30, 40, 50];
  // print_r($ages); //prints readable version of the integer array since it can only print strings normally

  $ages[1] = 25; // overrides the array value at index 1
  // print_r($ages);

  $ages[] = 60; // method 1 to add the value 60 to the end of the array
  // print_r($ages);

  array_push($ages, 70); // method 2 to add the value 70 to the end of the array
  // print_r($ages);

  // echo count($ages); // counts the amount of elements in the array $ages

  // $peopleThree = array_merge($peopleOne, $peopleTwo); // PHP function to merge arrays
  // print_r($peopleThree);

  // associative arrays (key & value pairs, instead of indexes)

  $ninjasOne = ['shaun'=>'black', 'mario'=>'orange', 'luigi'=>'brown']; // to access mario, just do $ninjasOne['mario'] insread of $ninjasOne[1]
  // echo $ninjasOne['mario']; // make sure to put the string 'mario' instead of just mario in the brackets when accessing the array

  // print_r($ninjasOne);

  $ninjasTwo = array('bowser'=>'green', 'peach'=>'yellow');
  // print_r($ninjasTwo);

  $ninjasTwo['toad'] = 'pink'; // adds on this new value to the array
  // print_r($ninjasTwo);

  $ninjasTwo['peach'] = 'pink'; //overrides the array element value of 'peach' to 'pink'

  // echo count($ninjasOne); counts the amount of elements in the array $ages
  $ninjasThree = array_merge($ninjasOne, $ninjasTwo); // PHP function to merge arrays
   print_r($ninjasThree);


?>

<!DOCTYPE html> 
<html>
<head>
	<title>PHP Tutorials</title>
</head>
<body>


</body>
</html> 
