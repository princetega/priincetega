<?php


class Home extends Controller{
   

    function __construct() {
        parent::__construct();
		Session::init();
	}
    
    public function index(){
        $data = [];
        $this->view->render('Home/index',false,'');
    }
    /*
     public function blogcat(){
        $data = [];
        $this->view->render('Home/Views/blogcat',false,'');
    }
    */
}