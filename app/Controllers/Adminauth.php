<?php

// header('Content-type: application/json');
class Adminauth extends Controller
{
    // public function __construct()
    // {
    //     if (isset($_SESSION['isLoggedIn']) && $_SESSION['type'] === 'admin') {
    //         redirect('admin/tega_dashboard', true, 303);
    //     }
    // }
    public function index()
    {
        $data = [];
        $this->view->js = ['public/assets/js/controllers/loginController.js'];
         // $this->view->js = ['controllers/loginController.js'];
       $this->view->render('Admin/tega_login', true, '');
    }
   } 