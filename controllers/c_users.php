<?php
class users_controller extends base_controller {

    public function __construct() {
        parent::__construct();
        #echo "users_controller construct called<br><br>";
    } 

    public function index() {
        echo "This is the index page";
    }

    public function signup() {
    
        # Setup view
            $this->template->content = View::instance('v_users_signup');
            $this->template->title   = "Sign Up";

        # Render template
            echo $this->template;
    }
    
    public function p_signup() {

        // Dump out the results of POST to see what the form submitted
        #echo '<pre>';
        #print_r($_POST);
        #echo '</pre>';
        
        // More data we want stored with the user
    	$_POST['created']  = Time::now();
    	$_POST['modified'] = Time::now();
    	
    	// Encrypt the password  
    	$_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);
    	
    	// Create an encrypted token via their email address and a random string
    	$_POST['token'] = sha1(TOKEN_SALT.$_POST['email'].Utils::generate_random_string());  
        
        // Insert this user into the database
    	$user_id = DB::instance(DB_NAME)->insert('users', $_POST);

    	// For now, just confirm they've signed up - 
    	// You should eventually make a proper View for this
    	echo 'You\'re signed up';          
    }

    public function login() {
        echo "This is the login page";
    }

    public function logout() {
        echo "This is the logout page";
    }

    public function profile($user_name = NULL) {
    
    	// Don't have to do this because it's already in the base_controller
    	#$template = View::instance('_v_template');
    	
    	// Pass our view fragment to the master template content
    	// Set up the View (see Cheat Sheet)
    	$this->template->content = View::instance('v_users_profile');
    	$this->template->title = "Profile";
    	
    	// Method inside the utilities library to help with this
    	$client_files_head = Array(
    		'/css/profile.css', 
    		'/css/master.css'
    		);
    	
    	$this->template->client_files_head = Utils::load_client_files($client_files_head);
    
        // Method inside the utilities library to help with this
    	$client_files_body = Array(
    		'/js/profile.js', 
    		);
    	
    	$this->template->client_files_body = Utils::load_client_files($client_files_body);

    
    
    	
    	// Pass the data to the view
    	$this->template->content->user_name = $user_name;
    	
    	// Or
    	// In class suggestion of creating a variable to pass data
    	#$content = View::instance('v_users_profile');
    	#$content->user_name = $user_name;
    	#$this->template->content = $content;
    	
    	// We just need to access it
    	// Display the view
    	echo $this->template;
    
    	// Below is the isolated view fragment ... 
    	// Above, we recreated this view and  passed it to the master template
    	#$view = View::instance('v_users_profile');	
    	// On the fly pass it a variable
    	#$view->user_name = $user_name;
    	//$view->color = "red";
    	
    	// You should only ever have one echo in you controllers 
    	// and that is to echo at the end of the file
    	#echo $view;

        #if($user_name == NULL) {
        #    echo "No user specified";
        #}
        #else {
        #    echo "This is the profile for ".$user_name;
        #}
    }

} # end of the class