<?php
class View {
	  public $data = [];

    function __construct()
    {
        //error_reporting( E_ERROR | E_PARSE | E_CORE_ERROR | E_CORE_WARNING | E_COMPILE_ERROR | E_COMPILE_WARNING );
        Session::init();
        $this->view = new \stdClass();
        $this->view->logged = Session::get('loggedIn');
        $this->view->loggedType = Session::get('loggedType');
    }
    public function render($name, $noInclude, $message)
    {
        
        if ($noInclude == true) {
            $js = null;
            $external_js = null;
            if (!empty($this->js)) {
                $js = $this->js;
            }
            if (!empty($this->external_js)) {
                $external_js = $this->external_js;
            }

            extract($this->data);
            if ($name == 'Admin/tega_login') {
             require('./app/Views/Admin/inc/adminheaderref.php');
            require "./app/Views/" . $name . ".html";
           // require('./app/Views/Admin/inc/adminfooterref.php');
            } else {
            require('./app/Views/inc/header_type.php');
            require "./app/Views/" . $name . ".html";
            require('./app/Views/inc/footer1.php');
            //include_once "./views/index/404.html";
            //require('./views/inc/footerref.php');
        }
        } else {
            extract($this->data);
            $url = explode('/', $_SERVER['REQUEST_URI']);

            if ($url[1] == 'tega') {
                array_splice($url, 1, 1);
            }

            ////IF THE USER IS AN ADMIN
            if (($this->view->loggedType == 'admin') && ($url[1] == 'admindashboard')) {
                /////ASSIGN JAVASCRIPT  
                $js = null;
                $external_js = null;
                if (!empty($this->js)) {
                    $js = $this->js;
                }
                if (!empty($this->external_js)) {
                    $external_js = $this->external_js;
                }

                require('./app/Views/inc/adminheaderref.php');
                require('./app/Views/inc/adminheader.php');
                require('./app/Views/inc/sidenav.php');
                require_once './app/Views/' . $name . '.html';
                require('./app/Views/inc/adminfooterref.php');
            }

            ////ELSE IF THE USER IS FULLY INTEGRATED
            elseif (($this->view->loggedType == 'user') && ($url[1] == 'dashboard')) {
                /////ASSIGN JAVASCRIPT   
                $js = null;
                $external_js = null;
                if (!empty($this->js)) {
                    $js = $this->js;
                }
                if (!empty($this->external_js)) {
                    $external_js = $this->external_js;
                }

                require('./app/Views/User/Inc/headerref.php');
                require './app/Views/User/Inc/header.php';
                require './app/Views/' . $name . '.html';
                require './app/Views/User/Inc/footer.php';
            }


            ////ELSE IT IS A VISITOR PAGE
            else {
                /////ASSIGN JAVASCRIPT 
                $js = null;
                $external_js = null;
                if (!empty($this->js)) {
                    $js = $this->js;
                }
                if (!empty($this->external_js)) {
                    $external_js = $this->external_js;
                }
                require('./app/Views/inc/header_type.php');
                //require('./app/Views/inc/header.php');
                require('./app/Views/inc/navbar.php');
                require "./app/Views/" . $name . ".html";
                require('./app/Views/inc/footer.php');
                require('./app/Views/inc/footer1.php');
            }
        }
    }
}