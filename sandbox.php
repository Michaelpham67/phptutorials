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

?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Tutorials</title>
</head>
<body>

	<p><?php echo $score > 40 ? 'high score!' : 'low score :('; ?></p>

</body>
</html>