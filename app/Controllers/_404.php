<?php
class _404 extends Controller{
	 public function index(){
        $data = [];
        $js = [];
        $this->view->render('404',true,'');
    }

}
