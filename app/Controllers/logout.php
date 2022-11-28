<?php
class Logout extends Controller {

function __construct(){
		Session::init();
        if(Session::get('loggedType')=='admin'){
            $whole_URL='./adminauth';
        }else{
            $whole_URL= './login';
        }
		Session::destroy();
		die(header('location:'.$whole_URL));
		exit;
	}

}