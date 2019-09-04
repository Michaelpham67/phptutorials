<?php  

  define('Name', 'Yoshi'); // this defines the constant Name and sets it to Yoshi

  // $name = 'Yoshi'; // string data type
  $age = 30; // integer data type

  // This would override the $name variable since the files are read from top to bottom: $name = "Mario";

  // echo $name;

?>

<!DOCTYPE html> 
<html>
<head>
	<title>PHP Tutorials</title>
</head>
<body>

	<h1>User Profile Page</h1> <!-- Embedded PHP in the HTML template -->

	<!-- <div><?php echo $name; ?></div> Can call PHP variables and output in the HTML template -->
 	<div><?php echo NAME; ?></div> <!-- this calls the constant Name and outputs it. -->
 	<div><?php echo $age; ?></div>

</body>
</html> 
