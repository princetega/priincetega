<?php
// header('Access-Control-Allow-Origin: *');

class Adminapi extends Controller
{
    public function index()
    {
        // $data = [];
        // $this->view->js = ['public/assets/js/controllers/admindashboard/homeController.js', 'public/assets/js/controllers/admindashboard/usersController.js'];
        // $this->view->render('Admin/gnice_dashboard', false, '');
    }

    public function home_statistics()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $result = $this->model('Admintasks')->homeStatistics();
            header('Content-Type: application/json');
            print_r(json_encode($result));
        } else {
            echo "invalid request";
            exit;
        }
    }
    public function fetch_all_banners()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $result = $this->model('Admintasks')->fetchAllBanner();
            header('Content-Type: application/json');
            print_r(json_encode($result));
        } else {
            echo "invalid request";
            exit;
        }
    }

    public function fetch_banner_types()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $result = $this->model('Admintasks')->fetchBannerTypes();
            header('Content-Type: application/json');
            print_r(json_encode($result));
        } else {
            echo "invalid request";
            exit;
        }
    }
    public function create_new_admin()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $result = $this->model('Admintasks')->createAdminAccount($_POST);
            header('Content-Type: application/json');
            print_r(json_encode($result));
        } else {
            echo 'invalid request';
            exit;
        }
    }
    
    public function create_new_banner()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            // print_r($_FILES);
            // die;
            $result = $this->model('Admintasks')->createNewBanner();
            header('Content-Type: application/json');
            print_r(json_encode($result));
        } else {
            echo "invalid request";
            exit;
        }
    }
    public function get_all_users()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            // echo 'mhere';
            $result = $this->model('Admintasks')->getAllUsers();
            header('Content-Type: application/json');
            print_r(json_encode($result));
        } else {
            echo "invalid request";
            exit;
        }
    }
    public function get_all_admins()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $result = $this->model('Admintasks')->getAllAdminAccounts();
            header('Content-Type: application/json');
            print_r(json_encode($result));
        } else {
            echo "invalid request";
            exit;
        }
    }
    public function get_all_cat_and_sub_cat()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $result = $this->model('Admintasks')->getAllCategoriesAndSubCategories();
            header('Content-Type: application/json');
            print_r(json_encode($result));
        } else {
            echo "invalid request";
            exit;
        }
    }
     public function get_all_training()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $result = $this->model('Admintasks')->getAllTrainings();
            header('Content-Type: application/json');
            print_r(json_encode($result));
        } else {
            echo "invalid request";
            exit;
        }
    }
     public function get_all_project()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $result = $this->model('Admintasks')->getAllProjects();
            header('Content-Type: application/json');
            print_r(json_encode($result));
        } else {
            echo "invalid request";
            exit;
        }
    }
    public function get_all_blogs()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $result = $this->model('Admintasks')->getAllBlogs();
            header('Content-Type: application/json');
            print_r(json_encode($result));
        } else {
            echo "invalid request";
            exit;
        }
    }

       public function delete_training()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $result = $this->model('Admintasks')->deleteTraining();
            header('Content-Type: application/json');
            print_r(json_encode($result));
        } else {
            echo 'invalid request api';
            exit();
        }
    }

       public function delete_project()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $result = $this->model('Admintasks')->deleteProject();
            header('Content-Type: application/json');
            print_r(json_encode($result));
        } else {
            echo 'invalid request api';
            exit();
        }
    }


       public function delete_blog()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $result = $this->model('Admintasks')->deleteBlog();
            header('Content-Type: application/json');
            print_r(json_encode($result));
        } else {
            echo 'invalid request api';
            exit();
        }
    }
  
     public function add_blog()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $token = filter_var($header['tega-authenticate']);
            $result = $this->model('Admintasks')->verifyToken($token,'admin');
            if($result){
            $result = $this->model('Admintasks')->addBlog($_POST);
            }else{
            $result['status']='0';
            $result['msg']='Invalid token';
            }
            print_r(json_encode($result));
        } else {
            echo 'invalid response';
            exit();
        }
    }

       public function add_project()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $token = filter_var($header['tega-authenticate']);
            $result = $this->model('Admintasks')->verifyToken($token,'admin');
            if($result){
            $result = $this->model('Admintasks')->addProject($_POST);
            }else{
            $result['status']='0';
            $result['msg']='Invalid token';
            }
            print_r(json_encode($result));
        } else {
            echo 'invalid response';
            exit();
        }
    }

       public function add_training()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $token = filter_var($header['tega-authenticate']);
            $result = $this->model('Admintasks')->verifyToken($token,'admin');
            if($result){
            $result = $this->model('Admintasks')->addTraining($_POST);
            }else{
            $result['status']='0';
            $result['msg']='Invalid token';
            }
            print_r(json_encode($result));
        } else {
            echo 'invalid response';
            exit();
        }
    }
        public function update_training()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $token = filter_var($header['tega-authenticate']);
            $result = $this->model('Admintasks')->verifyToken($token,'admin');
            if($result){
            $result = $this->model('Admintasks')->updateTraining($_POST);
            }else{
            $result['status']='0';
            $result['msg']='Invalid token';
            }
            print_r(json_encode($result));
        } else {
            echo 'invalid response';
            exit();
        }
    }

     public function update_project()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $token = filter_var($header['tega-authenticate']);
            $result = $this->model('Admintasks')->verifyToken($token,'admin');
            if($result){
            $result = $this->model('Admintasks')->updateProject($_POST);
            }else{
            $result['status']='0';
            $result['msg']='Invalid token';
            }
            print_r(json_encode($result));
        } else {
            echo 'invalid response';
            exit();
        }
    }
       public function update_blog()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $token = filter_var($header['tega-authenticate']);
            $result = $this->model('Admintasks')->verifyToken($token,'admin');
            if($result){
            $result = $this->model('Admintasks')->updateBlog($_POST);
            }else{
            $result['status']='0';
            $result['msg']='Invalid token';
            }
            print_r(json_encode($result));
        } else {
            echo 'invalid response';
            exit();
        }
    }
        public function delete_cat()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $result = $this->model('Admintasks')->deleteCat();
            header('Content-Type: application/json');
            print_r(json_encode($result));
        } else {
            echo 'invalid request api';
            exit();
        }
    }
    public function add_category()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $result = $this->model('Admintasks')->addCategory($_POST);
            header('Content-Type: application/json');
            print_r(json_encode($result));
        } else {
            echo "invalid request";
            exit;
        }
    }
    public function add_sub_category()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $result = $this->model('Admintasks')->addSubCategory($_POST);
            header('Content-Type: application/json');
            print_r(json_encode($result));
        } else {
            echo "invalid request";
            exit;
        }
    }
    public function update_category()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {

            $result = $this->model('Admintasks')->updateCategory($_POST);

            header('Content-Type: application/json');

            print_r(json_encode($result));
        } else {
            echo "invalid request";
            exit;
        }
    }
    public function update_banner()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $result = $this->model('Admintasks')->updateBanner($_POST);
            header('Content-Type: application/json');

            print_r(json_encode($result));
        } else {
            echo "invalid request";
            exit;
        }
    }
    public function disable_enable_account()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $result = $this->model('Admintasks')->disableEnableUser($_POST);
            header('Content-Type: application/json');
            print_r(json_encode($result));
        } else {
            echo "invalid request";
            exit;
        }
    }

    public function disable_enable_admin_account()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $result = $this->model('Admintasks')->disableEnableAdmin($_POST);
            header('Content-Type: application/json');
            print_r(json_encode($result));
        } else {
            echo "invalid request";
            exit;
        }
    }
    public function disable_enable_banner()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $result = $this->model('Admintasks')->disableEnableBanner($_POST);
            header('Content-Type: application/json');
            print_r(json_encode($result));
        } else {
            echo "invalid request";
            exit;
        }
    }
    public function toggle_package_status()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $result = $this->model('Admintasks')->togglePackageStatus($_POST);
            header('Content-Type: application/json');
            print_r(json_encode($result));
        } else {
            echo "invalid request";
            exit;
        }
    }
    public function toggle_package_content_status()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $result = $this->model('Admintasks')->togglePackageContentStatus($_POST);
            header('Content-Type: application/json');
            print_r(json_encode($result));
        } else {
            echo "invalid request";
            exit;
        }
    }
    public function disable_enable_category()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $result = $this->model('Admintasks')->disableEnableCategory($_POST);
            header('Content-Type: application/json');
            print_r(json_encode($result));
        } else {
            echo "invalid request";
            exit;
        }
    }
    public function disable_enable_ads()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
             $token = filter_var($header['tega-authenticate']);
            $result = $this->model('Admintasks')->verifyPrivilege($token);
            if($result){
            $result = $this->model('Admintasks')->disableEnableAds($_POST);
            header('Content-Type: application/json');
        } else {
            //$result = "Can't carry dis action";
            $result = $token;
        }
            print_r(json_encode($result));
        
        } else {
            echo "invalid request";
            exit;
        }
    }
     public function disable_enable_training()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
             $token = filter_var($header['tega-authenticate']);
            $result = $this->model('Admintasks')->verifyPrivilege($token);
            if($result){
            $result = $this->model('Admintasks')->disableEnableTraining($_POST);
            header('Content-Type: application/json');
        } else {
            //$result = "Can't carry dis action";
            $result = $token;
        }
            print_r(json_encode($result));
        
        } else {
            echo "invalid request";
            exit;
        }
    }
       public function disable_enable_project()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
             $token = filter_var($header['tega-authenticate']);
            $result = $this->model('Admintasks')->verifyPrivilege($token);
            if($result){
            $result = $this->model('Admintasks')->disableEnableProject($_POST);
            header('Content-Type: application/json');
        } else {
            //$result = "Can't carry dis action";
            $result = $token;
        }
            print_r(json_encode($result));
        
        } else {
            echo "invalid request";
            exit;
        }
    }
    public function fetch_all_product_of_seller()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $result = $this->model('Admintasks')->getAllProductOfASeller($_GET['seller_id']);
            header('Content-Type: application/json');
            print_r(json_encode($result));
        } else {
            echo 'invalid request';
            exit();
        }
    }
    // public function add_category()
    // {
    //     $header = apache_request_headers();
      //  $header = array_change_key_case($header,CASE_LOWER);
    //     if (isset($header['tega-authenticate'])) {
    //         $result = $this->model('category')->addCategory();
    //         header('Content-Type: application/json');
    //         print_r(json_encode($result));
    //     } else {
    //         echo 'invalid response';
    //         exit;
    //     }
    // }


    public function update_sub_category()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            // print_r($_POST);
            // die();
            $result = $this->model('Admintasks')->updateSubCategory();
            header('Content-Type: application/json');
            print_r(json_encode($result));
        } else {
            echo 'invalid response';
            exit;
        }
    }
    public function update_package_content()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $result = $this->model('Admintasks')->updatePackageContents();
            header('Content-Type: application/json');
            print_r(json_encode($result));
        } else {
            echo 'invalid response';
            exit;
        }
    }
    public function update_admin_privilege()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $result = $this->model('Admintasks')->updateAdminPrivilege();
            header('Content-Type: application/json');
            print_r(json_encode($result));
        } else {
            echo 'invalid response';
            exit;
        }
    }
    public function update_package()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {

            // print_r(json_encode("got"));
            // die();
            $result = $this->model('Admintasks')->updatePackage($_POST);
            header('Content-Type: application/json');
            print_r(json_encode($result));
        } else {
            echo 'invalid response';
            exit;
        }
    }


    public function deletesubCategory()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $result = $this->model('category')->deletesubCategory($_GET['id']);
            header('Content-Type: application/json');
            print_r(json_encode($result));
        } else {
            echo 'invalid request';
            exit();
        }
    }
    public function get_account_packages()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
            $result = $this->model('Admintasks')->getAccountPackages();
            print_r(json_encode($result));
        } else {
            echo 'invalid request';
            exit();
        }
    }
    public function fetch_all_transactions()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $result = $this->model('Admintasks')->getAllTransactions();
            header('Content-Type: application/json');
            print_r(json_encode($result));
        } else {
            echo 'invalid request';
            exit();
        }
    }
    public function fetch_all_abuse_reports()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $result = $this->model('Admintasks')->getAllAbuseReports();
            header('Content-Type: application/json');
            print_r(json_encode($result));
        } else {
            echo 'invalid request';
            exit();
        }
    }
    
    
    public function delete_user_account_and_ads()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $result = $this->model('Admintasks')->deleteUserAccount();
            header('Content-Type: application/json');
            print_r(json_encode($result));
        } else {
            echo 'invalid request api';
            exit();
        }
    }
}