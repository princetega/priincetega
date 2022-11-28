<?php
class Controller {
	
    function __construct()
    {
        $url = $_SERVER['REQUEST_URI'];
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        $this->url = $url;
        $this->view = new View();
    }
//load model
    public function model($model)
    {
        // require model file
        require_once './app/Models/' . $model . '.php';
        // Instantiate model
        return new $model();
    }
}