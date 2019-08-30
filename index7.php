<?php  

  // multi-dimensional arrays (all index arrays) 

  $blogs = [
  	 ['mario party', 'mario', 'lorem', 30],
  	 ['mario kart cheats', 'toad', 'lorem', 25],
  	 ['zelda chests', 'link', 'lorem', 50]
   ];

   print_r($blogs[1][1]); // prints 'toad' [1][1] accesses the 2nd element array row and then the 2nd element of that array

  // associative arrays stored within an index array (still uses indexes to access elements)

  $blogs = [
   ['title'=>'mario party', 'author'=>'mario', 'content'=>'lorem', 'likes'=>30],
   ['title'=>'mario kart', 'author'=>'toad', 'content'=>'lorem', 'likes'=>25],
   ['title'=>'zelda chests', 'author'=>'link', 'content'=>'lorem', 'likes'=>50]
  ];

   echo $blogs[2]['author']; // prints 'link' [2][2] accesses the 2nd element array row and then the element associated with author

   echo count ($blogs);

   $blogs[] = ['title'=>'castle party', 'author'=>'peach', 'content'=>'lorem', 'likes'=>100] // adds elements to the end of the array (use the empty bracket [] as seen in this line here.)

   // print_r($blogs);
   // $popped = array_pop($blogs); // removes the last element in the array and stores it in the variable $popped
   // print_r($popped);


?>

<!DOCTYPE html> 
<html>
<head>
	<title>PHP Tutorials</title>
</head>
<body>


</body>
</html> 
