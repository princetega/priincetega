<?php
class AdminDashboard extends Controller
{

    function __construct()
    {
        parent::__construct();
        Session::init();
        //print_r($_SESSION);exit;
        if (!Session::get('loggedIn')) {
            Session::destroy();
            header('location:Adminauth');
            exit;
        }
    }


    public function index()
    {
        $data = [];
        $this->view->js = ['public/assets/js/controllers/admindashboard/homeController.js', 'public/assets/js/controllers/admindashboard/usersController.js','public/assets/js/controllers/admindashboard/trainingController.js', 'public/assets/js/controllers/admindashboard/projectController.js', 'public/assets/js/controllers/admindashboard/listingController.js', 'public/assets/js/controllers/admindashboard/categoryController.js', 'public/assets/js/controllers/admindashboard/packagesController.js', 'public/assets/js/controllers/admindashboard/transactionController.js', 'public/assets/js/controllers/admindashboard/adminController.js', 'public/assets/js/controllers/admindashboard/bannerController.js'];
       $this->view->render('Admin/tega_dashboard', false, '');
    }
   } 