<?php 

	// classes
	// class names start with capital letters

	class User {
		// class properties (think Java OOP)
		// preferably, properties should be private and not public (so that they can't be updated anywhere)
		// public $email;
		// public $name;

		private $email;
		private $name;

		// constructor function
		public function __construct($name, $email){
			// the initial email value with any object created with this class
			// $this->email = 'mario@b.com';
			// $this->name = 'mario'; 

			// created pointers to point to these properties
			$this->email = $email;
			$this->name = $name; 
		}

		// own function
		public function login(){
			// echo 'the user logged in';
			echo $this->name . ' logged in'; 
		}

		// public function that returns the $name property 
		public function getName(){

			return $this->name; 
		}

		// public function to update/set the name | param is the function we want to set it to
		public function setName($name){
			//checks if the passed name is a string with a length of at least 2 characters long
			if(is_string($name) && strlen($name) > 1){

				// updates the name
				$this->name = $name; 
				return "name has been updated to $name"; 
			} else {

				return 'not a valid name'; 
			}
		}

	}
	// instantiating a class
	// $userOne = new User();
	
	// arrow operator to access the class properties
	// $userOne->login(); 
	// echo $userOne->email; 

	$userTwo = new User('yoshi', 'yoshi@b.com');

	// since the name property is public, it can be easily overrided (not ideal)
	// $userTwo->name='mario'; 
	
	// echo $userTwo->name;
	// echo $userTwo->email; 

	// $userTwo->login(); 

	// gets the $name property from userTwo and echoes it
	// echo $userTwo->getName();

	// sets the name to whatever is passed in the param and echoes it 
	// echo $userTwo->setName(50); 
	echo $userTwo->setName('Mike');

	// returns the new name value 'Mike' and echoes it out
	echo $userTwo->getName(); 

?>