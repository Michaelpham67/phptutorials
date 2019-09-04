<?php 
	// ternary operators vs if and else statements

	$score = 20;

	// if($score > 40){
	//  echo 'high score!';
	// } else {
	//   echo 'low score :(';
	// }

	// Ternary Operator (if, then else) can't echo it out in the same statement, set it to a variable and then echo it out 
	// $val = $score > 40 ? 'high score!' : 'low score :('; 
	// echo $val; 

	// Alternative to echoing the value from the ternary operator: (condition, value to return if true, and value to return if false)
	// echo $score > 40 ? 'high score!' : 'low score :('; 

	// super globals

	// $_GET['name'], $_POST['name']
	// Server super global, echoes out the server name
	echo $_SERVER['SERVER_NAME'] . '<br />';
	// Server super global, echoes out the request method type (GET)
	echo $_SERVER['REQUEST_METHOD'] . '<br />'; 
	// Server super global, echoes out the directory of this PHP script
	echo $_SERVER['SCRIPT_FILENAME'] . '<br />'; 
	// Server super global, echoes out the path of the current file relative to the server (localhost) 
	echo $_SERVER['PHP_SELF'] . '<br />'; 

	// PHP SELF (great for use in the action field of forms) notes here: http://form.guide/php-form/php-form-action-self.html

?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Tutorials</title>
</head>
<body>

	<!-- <p><?php echo $score > 40 ? 'high score!' : 'low score :('; ?></p> -->

</body>
</html>