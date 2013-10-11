<?php
class posts_controller extends base_controller {

    public function __construct() {
        parent::__construct();
        echo "posts_controller construct called<br><br>";
    } 

    public function index() {
        echo "This is the index page";
    }

    public function new() {
        echo "This is the new post page";
    }

    public function edit() {
        echo "This is the edit post page";
    }

    public function delete() {
        echo "This is the delete post page";
    }

    public function profile($user_name = NULL) {

        if($user_name == NULL) {
            echo "No user specified";
        }
        else {
            echo "This is the profile for ".$user_name;
        }
    }

} # end of the class