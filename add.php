<?php 

	include('config/db_connect.php');

	$email = $title = $ingredients = '';// initializing all the variables to an empty string so that when the user first visits the page, the form fields are blank, and when they input and submit the fields, the variables are updated with their inputs. 

	$errors = array('email'=>'', 'title'=>'', 'ingredients'=>''); 
	// storing the error messages when the user inputs an invalid email, title, or ingredient. Set to empty values so when errors do occur, it is updated in the array.

	// if(isset($_GET['submit'])){ 
	// if the form is submitted, then the function will run this code to echo the email, title, and ingredients that the user inputted in the form. 

	// Globals: $_(name of variable in captial letters) i.e. $_GET
		// echo htmlspecialchars($_POST['email']) . 'br />'; prevents XSS attacks; it looks at the data and turns the special HTML characters like brackets into HTML entities (aka safe string version codes of characters)
		// echo htmlspecialchars($_POST['title']) . 'br />';
		// echo htmlspecialchars($_POST['ingredients']) . 'br />';
	// }
	// the GET request will show in the url bar the data that the user inputs 

	if(isset($_POST['submit'])){ 
	// if the form is submitted, then the function will run this code to echo the email, title, and ingredients that the user inputted in the form. 

	// Globals: $_(name of variable in captial letters) i.e. $_GET // the POST request will not show in the url bar the data that the user inputs 
		// echo htmlspecialchars($_POST['email']) . 'br />';
		// echo htmlspecialchars($_POST['title']) . 'br />';
		// echo htmlspecialchars($_POST['ingredients']) . 'br />';
	// } 

	// checks if email, title, and ingredients are entered (if it went through server-side)
	if(empty($_POST['email'])){
		$errors['email'] ='An email is required <br />';
	} else {
		$email = $_POST['email']; // Assigns the variable $email to the email that the user sends
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){ // PHP's built-in email validator that takes the $email variable and FILTER_VALIDATE_EMAIL as its 2 parameters
		// The ! negation operator to return the statement as false if the validation does not pass in order to execute the following code: 
		$errors['email'] = 'Email must be a valid email address <br />';

		}
	}

	if(empty($_POST['title'])){
		$errors['title'] = 'A title is required <br />';
	} else {
		$title = $_POST['title']; //the regex is any lower-case or upper-case letter with any amount of spaces "\s" for any length of the whole string
		if(!preg_match('/^[a-zA-Z\s]+$/', $title)){ // function to match something to regex, the 1st parameter is the regex you want to match it with and the 2nd parameter is the $title variable that the user enters. 
		// added a ! operator just like the function above to check the user's inputted email. 
			$errors['title'] = 'Title must be letters and spaces only <br />';
		}
	}

	if(empty($_POST['ingredients'])){
		$errors['ingredients'] = 'At least 1 ingredient is required <br />';
	} else {
		$ingredients = $_POST['ingredients'];
		if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){ // looks for a comma separated list that contains only letters and spaces and compares it to the user's inputted ingredients
			$errors['ingredients'] = 'Ingredients must be a comma separated list <br />';
	}
	}// end of POST check

	if(array_filter($errors)){ // PHP built-in function. If there are no errors in the array, it will return false | returns true for errors in the array
		// echo 'There are errors in the form';
	}else {

		// mysqli_real_escape_string protects the database from any SQL injections (similiar to that of XSS attacks) the $conn variable in the parameter is referenced from the included file at the top when connecting to the db
		$email = mysqli_real_escape_string($conn, $_POST['email']); 
		$title = mysqli_real_escape_string($conn, $_POST['title']);
		$ingredients = mysqli_real_escape_string($conn, $_POST['ingredients']);

		// Create SQL
		$sql = "INSERT INTO pizzas(title,email,ingredients) VALUES('$title', '$email', '$ingredients')";

		// save to db and check
		if(mysqli_query($conn, $sql)){
		  // success
		} else {
			// error
			echo 'query error: ' . mysqli_error($conn);
		}

		// echo 'Form is valid';
		header('Location: index.php'); // PHP built-in function. redirects the user to the index page if there are no errors in the submitted form. 
	}

}// end of POST submit 
?>

<!DOCTYPE html>
<html>
	
	<?php include('templates/header.php'); ?>  <!-- includes the external header.php file in the templates directory -->

	<section class="container grey-text">
		<h4 class="center">Add a Pizza</h4>
		<form class="white" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST"> <!-- the action attribute will store the data to add.php and the method can be either GET or POST-->

			<label>Your Email</label>
			<input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>" required> <!-- The "required" attribute for HTML5 fields so that the form field(s) can't be blank -->
			<div class="red-text"><?php echo $errors['email']; ?></div>
			<label>Pizza Title</label>

			<input type="text" name="title" value="<?php echo htmlspecialchars($title) ?>" required> <!-- enclosing the variables that the user inputs in the form field in htmlspecialchars to prevent XSS attacks -->
			<div class="red-text"><?php echo $errors['title']; ?></div>

			<label>Ingredients (comma separated)</label>
			<input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients) ?>" required>
			<div class="red-text"><?php echo $errors['ingredients']; ?></div>

			<div class="center">
				<input type="submit" name="submit" value="Submit" class="btn brand-btn z-depth-0">
			</div>

		</form>
	</section>

	<?php include('templates/footer.php'); ?> <!-- includes the external footer.php file in the templates directory -->

</html>