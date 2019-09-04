<?php 
	// ternary operators vs if and else statements
	include('templates/header.php');
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
	// echo $_SERVER['SERVER_NAME'] . '<br />';
	// Server super global, echoes out the request method type (GET)
	// echo $_SERVER['REQUEST_METHOD'] . '<br />'; 
	// Server super global, echoes out the directory of this PHP script
	// echo $_SERVER['SCRIPT_FILENAME'] . '<br />'; 
	// Server super global, echoes out the path of the current file relative to the server (localhost) 
	// echo $_SERVER['PHP_SELF'] . '<br />'; 

	// PHP SELF (great for use in the action field of forms, to redirect to the current page) notes here: http://form.guide/php-form/php-form-action-self.html

	// sessions (store and saves information that is inputted as long as the browser is open) i.e. forms, reservations, etc. 

	// if a user submits a form, the session will start
	if(isset($_POST['submit'])){

		session_start(); 
		// storing that in a session variable called 'name'
		$_SESSION['name'] = $_POST['name'];

		// echos out the what the user inputs in the submit form
		// echo $_SESSION['name']; 

		// redirects the user to the index.php homepage after they submitted the button on the sandbox.php page
		header('Location: index.php'); 

	}



?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Tutorials</title>
</head>
<body>
	<h5 class ="submit-name grey-text text-darken-1">Enter your name below:</h5><br>
	<!-- <p><?php echo $score > 40 ? 'high score!' : 'low score :('; ?></p> -->
	<form class="submit-name" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
		<input type="text" name="name">
		<input type="submit" name="submit" value="submit" class="btn brand-btn z-depth-0">
	</form>

	<?php include('templates/footer.php'); ?>
</body>
</html>