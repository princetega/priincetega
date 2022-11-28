<?php
/**
 * 
 */
class Api extends Controller
{
	  public function admin_login()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $login = $this->model('Authenticate')->loginAdmin();
            print_r(json_encode($login));
        } else {
            echo "invalid request";
            exit;
        }
    }
     public function submit_newsletter()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $result = $this->model('Home')->saveNewsletter();
            print_r(json_encode($result));
        } else {
            echo "invalid request";
            exit;
        }
    }
      public function contact_form()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $result = $this->model('Home')->contact_form();
            print_r(json_encode($result));
        } else {
            echo "invalid request";
            exit;
        }
    }
	
      public function register_trainee()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $register_trainee = $this->model('Home')->register_trainee();
            print_r(json_encode($register_trainee));
        } else {
            echo "invalid request";
            exit;
        }
    }
    
	  public function send_project()
    {
       
              $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $send_project = $this->model('Home')->send_project();
            print_r(json_encode($send_project));
        } else {
            echo "invalid request";
            exit;
        }
       

    }
          public function upload()
    {
       
           
// Only these origins are allowed to upload images 
$accepted_origins = array("http://localhost", "https://www.codexworld.com", "http://192.168.1.1", "http://example.com"); 
 
// Set the upload folder 
$imageFolder = "public/assets/images/uploads/tinymce/"; 
 
if (isset($_SERVER['HTTP_ORIGIN'])) { 
    // same-origin requests won't set an origin. If the origin is set, it must be valid. 
    if (in_array($_SERVER['HTTP_ORIGIN'], $accepted_origins)) { 
        header('Access-Control-Allow-Origin: ' . $_SERVER['HTTP_ORIGIN']); 
    } else { 
        header("HTTP/1.1 403 Origin Denied"); 
        return; 
    } 
} 
 
// Don't attempt to process the upload on an OPTIONS request 
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') { 
    header("Access-Control-Allow-Methods: POST, OPTIONS"); 
    return; 
} 
 
reset ($_FILES); 
$temp = current($_FILES); 
if (is_uploaded_file($temp['tmp_name'])){ 
    /* 
      If your script needs to receive cookies, set images_upload_credentials : true in 
      the configuration and enable the following two headers. 
    */ 
    // header('Access-Control-Allow-Credentials: true'); 
    // header('P3P: CP="There is no P3P policy."'); 
 
    // Sanitize input 
    if (preg_match("/([^\w\s\d\-_~,;:\[\]\(\).])|([\.]{2,})/", $temp['name'])) { 
        header("HTTP/1.1 400 Invalid file name."); 
        return; 
    } 
 
    // Verify extension 
    if (!in_array(strtolower(pathinfo($temp['name'], PATHINFO_EXTENSION)), array("gif", "jpg", "jpeg", "png"))) { 
        header("HTTP/1.1 400 Invalid extension."); 
        return; 
    } 
 
    // Accept upload if there was no origin, or if it is an accepted origin 
    $filetowrite = $imageFolder . $temp['name']; 
    if(move_uploaded_file($temp['tmp_name'], $filetowrite)){ 
        // Determine the base URL 
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on' ? "https://" : "http://"; 
        $baseurl = $protocol . $_SERVER["HTTP_HOST"] . rtrim(dirname($_SERVER['REQUEST_URI']), "/") . "/"; 
     
        // Respond to the successful upload with JSON. 
        // Use a location key to specify the path to the saved image resource. 
        // { location : '/your/uploaded/image/file'} 
        echo json_encode(array('file_path' => APP_URL."/". $filetowrite)); 
    }else{ 
        header("HTTP/1.1 400 Upload failed."); 
        return; 
    } 
} else { 
    // Notify editor that the upload failed 
    header("HTTP/1.1 500 Server Error"); 
} 
 

    }


      public function fetch_all_project()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $result = $this->model('Home')->getAllProject();
            print_r(json_encode($result));
        } else {
            echo "invalid request";
            exit;
        }
    }
      public function fetch_all_training()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $result = $this->model('Home')->getAllTraining();
            print_r(json_encode($result));
        } else {
            echo "invalid request";
            exit;
        }
    }
     public function fetch_single_blog()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $result = $this->model('Home')->getSingleBlog($_GET['id']);
            print_r(json_encode($result));
        } else {
            echo "invalid request";
            exit;
        }
    }
      public function fetch_related_blogs()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $result = $this->model('Home')->getRelatedBlog($_GET['cat'],$_GET['p_c']);
            print_r(json_encode($result));
        } else {
            echo "invalid request";
            exit;
        }
    }
    public function fetch_all_blogs()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $result = $this->model('Home')->getAllBlogs();
            print_r(json_encode($result));
        } else {
            echo "invalid request";
            exit;
        }
    }
      public function fetch_latest_blog()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $result = $this->model('Home')->getLatestBlog();
            print_r(json_encode($result));
        } else {
            echo "invalid request";
            exit;
        }
    }
      public function fetch_all_category()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $result = $this->model('Home')->getAllCategory();
            print_r(json_encode($result));
        } else {
            echo "invalid request";
            exit;
        }
    }
    
         public function fetch_single_agent()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $result = $this->model('Home')->getAgent($_GET['id']);
            print_r(json_encode($result));
        } else {
            echo "invalid request";
            exit;
        }
    }
         public function fetch_single_training()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $result = $this->model('Home')->getSingleTraining($_GET['id']);
            print_r(json_encode($result));
        } else {
            echo "invalid request";
            exit;
        }
    }

           public function fetch_single_project()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $result = $this->model('Home')->getSingleProject($_GET['id']);
            print_r(json_encode($result));
        } else {
            echo "invalid request";
            exit;
        }
    }
         public function fetch_single_category()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $result = $this->model('Home')->getSingleCategory($_GET['id']);
            print_r(json_encode($result));
        } else {
            echo "invalid request";
            exit;
        }
    }
      public function fetch_all_blog_category()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $result = $this->model('Home')->getAllBlogOfaCategory($_GET['id']);
            print_r(json_encode($result));
        } else {
            echo "invalid request";
            exit;
        }
    }
       public function fetch_all_blog_agent()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $result = $this->model('Home')->getAllBlogOfAgent($_GET['id']);
            print_r(json_encode($result));
        } else {
            echo "invalid request";
            exit;
        }
    }
         public function fetch_all_blog_agent1()
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $result = $this->model('Home')->getAllBlogOfAgent1($_GET['id']);
            print_r(json_encode($result));
        } else {
            echo "invalid request";
            exit;
        }
    }



}