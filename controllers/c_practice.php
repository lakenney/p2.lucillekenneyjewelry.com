<?php

class practice_controller extends base_controller {

	public function test1() {
	
		// Make sure code has access to my image class (temp solution)
		#require(APP_PATH.'/libraries/Image.php');
	
		#echo "You are looking at test1.";
	
		#echo APP_PATH."<br>";
		#echo DOC_ROOT."<br>";
	
		// Once we have access, we instantiate an object from that class
		// and pass the parameter to the construct
		$imageObj = new Image('http://placekitten.com/1000/1000');
	
		// Then we have access to all the methods within that object
		// and we can point to the methods in that class
		$imageObj->resize(500,500);
	
		$imageObj->display();

	}
	
	public function test2() {
	
		// Static ... didn't have to instantiate it i.e., $timeObj = new Time();
		echo Time::now();
	
	}
	
	public function test3() {
	
	# Our SQL command
	$q = "INSERT INTO users SET 
    	first_name = 'Sam', 
    	last_name = 'Seaborn',
    	email = 'seaborn@whitehouse.gov'";

	# Run the command
	echo DB::instance(DB_NAME)->query($q);
	}

	// Our Update SQL command
	public function test4() {
	$q = "UPDATE users
    	SET email = 'samseaborn@whitehouse.gov'
    	WHERE email = 'seaborn@whitehouse.gov'";

	# Run the command
	echo DB::instance(DB_NAME)->query($q);
	}
	
	// Our Delete SQL command
	public function test5() {
	$q = "DELETE FROM users
    	WHERE email = 'sam@whitehouse.gov'";

	# Run the command
	echo DB::instance(DB_NAME)->query($q);
	}

}  # eoc

