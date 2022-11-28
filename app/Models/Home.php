<?php
/**
 * 
 */
class Home extends Model
{

        public function contact_form()
    {
         $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $_POST = filter_input_array(INPUT_POST);
            $_POST['date_added'] = date('Y-m-d H:i:s');
           
            $data = filter_var_array($_POST);
            $data = array_map('trim', array_filter($data));
            // print_r($data);
            // exit();
            foreach (array_keys($data) as $key) {
             
                    $fields[] = $key;
                    $key_fields[] = ':' . $key;
                    $fields_imploded = implode(',', $fields);
                    $keys_imploded = implode(',', $key_fields);
      
            }
            $this->db->query(
                'INSERT INTO contact (' .
                    $fields_imploded .
                    ') VALUES (' .
                    $keys_imploded .
                    ')'
            );
            foreach (array_keys($data) as $key) {
               
                    $this->db->bind(':' . $key, $data[$key]);
                
            }
            if ($this->db->execute()) {
                $result['rowCount'] = $this->db->rowCount();
                $result['message'] = 'Your request has been sent to our customer care. You wll be contacted shortly.';
                $result['status'] = 1;
            } else {
                $result['message'] = 'Message failed';
                $result['status'] = 0;
                // return false;
            }
      
        return $result;
    }
    }


      public function register_trainee()
    {
         $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $_POST = filter_input_array(INPUT_POST);
            $_POST['date_added'] = date('Y-m-d H:i:s');
           
            $data = filter_var_array($_POST);
            $data = array_map('trim', array_filter($data));
            // print_r($data);
            // exit();
            foreach (array_keys($data) as $key) {
             
                    $fields[] = $key;
                    $key_fields[] = ':' . $key;
                    $fields_imploded = implode(',', $fields);
                    $keys_imploded = implode(',', $key_fields);
      
            }
            $this->db->query(
                'INSERT INTO trainee (' .
                    $fields_imploded .
                    ') VALUES (' .
                    $keys_imploded .
                    ')'
            );
            foreach (array_keys($data) as $key) {
               
                    $this->db->bind(':' . $key, $data[$key]);
                
            }
            if ($this->db->execute()) {
                $result['rowCount'] = $this->db->rowCount();
                $result['message'] = 'Your request has been sent to our customer care. You wll be contacted shortly.';
                $result['status'] = 1;
            } else {
                $result['message'] = 'Category failed';
                $result['status'] = 0;
                // return false;
            }
      
        return $result;
    }
    }
  
	    public function saveNewsletter()
    {
        $email = filter_var($_POST['email'], );
       $date = date('Y-m-d H:i:s');
        $this->db->query("SELECT email FROM newsletter WHERE email=:email");
        $this->db->bind(':email', $email);
        $row = $this->db->singleResult();
        $count = $this->db->rowCount();
        if ($count != 0) {
            $rows['msg'] = 'Email already exist.';
            $rows['status'] = '0';   
        }else{
        $this->db->query('INSERT INTO newsletter (email, date) VALUES (:email, :date)');
            $this->db->bind(':email', $email);
            $this->db->bind(':date', $date);
            if ($this->db->execute()) {
            $rows['msg'] = 'Your email have been saved! We will keep you updated.';
            $rows['status'] = '1';   
            }   
            
        }

        return $rows;
    }
	  public function send_project()
    {
         $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $_POST = filter_input_array(INPUT_POST);
            $_POST['date_added'] = date('Y-m-d H:i:s');
              $checkbox1=$_POST['sender_services'];  
              $ch = "";    
           foreach($checkbox1 as $chk1)   
             {   
             $ch .= $chk1.",";   
              }
              $_POST['sender_services'] = $ch;
            $data = filter_var_array($_POST);
            $data = array_map('trim', array_filter($data));
            // print_r($data);
            // exit();
            foreach (array_keys($data) as $key) {
             
                    $fields[] = $key;
                    $key_fields[] = ':' . $key;
                    $fields_imploded = implode(',', $fields);
                    $keys_imploded = implode(',', $key_fields);
      
            }
            $this->db->query(
                'INSERT INTO send_project (' .
                    $fields_imploded .
                    ') VALUES (' .
                    $keys_imploded .
                    ')'
            );
            foreach (array_keys($data) as $key) {
               
                    $this->db->bind(':' . $key, $data[$key]);
                
            }
            if ($this->db->execute()) {
                $result['rowCount'] = $this->db->rowCount();
                $result['message'] = 'Your request has been sent successfully. Our top developer wll get in touch with you shortly.';
                $result['status'] = 1;
            } else {
                $result['message'] = 'Submit failed';
                $result['status'] = 0;
                // return false;
            }
      
        return $result;
    }
    }
  
    public function getAllProject()
    {
        //edited the end
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $this->db
                ->query("SELECT *
                        FROM projects
                       
                         where status = 1 ORDER BY id DESC");

            if ($this->db->resultSet()) {
                $result['rowCounts'] = $this->db->rowCount();
                $result['data'] = $this->db->resultSet();
                $result['status'] = '1';
            } else {
                $result['data'] = [];
                $result['status'] = '0';
            }
            return $result;
        }
    }
     public function getAllTraining()
    {
        //edited the end
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $this->db
                ->query("SELECT *
                        FROM training
                       
                         where status = 1 ORDER BY id DESC");

            if ($this->db->resultSet()) {
                $result['rowCounts'] = $this->db->rowCount();
                $result['data'] = $this->db->resultSet();
                $result['status'] = '1';
            } else {
                $result['data'] = [];
                $result['status'] = '0';
            }
            return $result;
        }
    }

     public function getAllBlogs()
    {
        //edited the end
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $this->db
                ->query("SELECT blogs.*,admin.fullname as fullname
                        FROM blogs
                       
                        LEFT JOIN admin ON admin.email = blogs.admin_id where blogs.status = 1 ORDER BY blogs.id DESC");

            if ($this->db->resultSet()) {
                $result['rowCounts'] = $this->db->rowCount();
                $result['data'] = $this->db->resultSet();
                $result['status'] = '1';
            } else {
                $result['data'] = [];
                $result['status'] = '0';
            }
            return $result;
        }
    }
     public function getLatestBlog()
    {
        //edited the end
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $this->db
                ->query("SELECT blogs.*,admin.fullname as fullname
                        FROM blogs
                       
                        LEFT JOIN admin ON admin.email = blogs.admin_id where blogs.status = 1 ORDER BY blogs.id DESC LIMIT 50");

            if ($this->db->resultSet()) {
                $result['rowCounts'] = $this->db->rowCount();
                $result['data'] = $this->db->resultSet();
                $result['status'] = '1';
            } else {
                $result['data'] = [];
                $result['status'] = '0';
            }
            return $result;
        }
    }

     public function getAllCategory()
    {
        //edited the end
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
            $this->db
                ->query("SELECT *
                        FROM category
                       where status = 1 ORDER BY id DESC");

            if ($this->db->resultSet()) {
                $result['rowCounts'] = $this->db->rowCount();
                $result['data'] = $this->db->resultSet();
                $result['status'] = '1';
            } else {
                $result['data'] = [];
                $result['status'] = '0';
            }
            return $result;
        }
    }
    
     public function getAgent($category_id)
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
              $this->db->query("SELECT *
                        FROM admin where email = :category_id");
          ;
            $this->db->bind(':category_id', $category_id);
            

           if ($this->db->singleResult()) {
                $result['rowCount'] = $this->db->rowCount();
                $result['data'] = $this->db->singleResult();
                $result['status'] = '1';
            } else {
                $result['data'] = [];
                $result['status'] = '0';
            }
            return $result;
        }
    }
    
           public function getSingleTraining($id)
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
              $this->db->query("SELECT *
                        FROM training where id = :id");
          ;
            $this->db->bind(':id', $id);
            

           if ($this->db->singleResult()) {
                $result['rowCount'] = $this->db->rowCount();
                $result['data'] = $this->db->singleResult();
                $result['status'] = '1';
            } else {
                $result['data'] = [];
                $result['status'] = '0';
            }
            return $result;
        }
    }

             public function getSingleProject($id)
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
              $this->db->query("SELECT *
                        FROM projects where id = :id");
          ;
            $this->db->bind(':id', $id);
            

           if ($this->db->singleResult()) {
                $result['rowCount'] = $this->db->rowCount();
                $result['data'] = $this->db->singleResult();
                $result['status'] = '1';
            } else {
                $result['data'] = [];
                $result['status'] = '0';
            }
            return $result;
        }
    }


        public function getSingleCategory($category_id)
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
              $this->db->query("SELECT *
                        FROM category where title = :category_id");
          ;
            $this->db->bind(':category_id', $category_id);
            

           if ($this->db->singleResult()) {
                $result['rowCount'] = $this->db->rowCount();
                $result['data'] = $this->db->singleResult();
                $result['status'] = '1';
            } else {
                $result['data'] = [];
                $result['status'] = '0';
            }
            return $result;
        }
    }

    public function getAllBlogOfaCategory($category_id)
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
              $this->db->query("SELECT blogs.*,admin.fullname as fullname
                        FROM blogs
                       
                        LEFT JOIN admin ON admin.email = blogs.admin_id where blogs.category like :category_id  and blogs.status = 1 ORDER BY blogs.id DESC");
          ;
            $this->db->bind(':category_id', '%'.$category_id.'%');
            

            if ($this->db->resultSet()) {
                $result['rowCount'] = $this->db->rowCount();
                $result['data'] = $this->db->resultSet();
                $result['status'] = '1';
            } else {
                $result['data'] = [];
                $result['status'] = '0';
            }
            return $result;
        }
    }
        public function getAllBlogOfAgent($category_id)
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
              $this->db->query("SELECT blogs.*,admin.fullname as fullname
                        FROM blogs
                       
                        LEFT JOIN admin ON admin.email = blogs.admin_id where blogs.admin_id = :category_id  and blogs.status = 1 ORDER BY blogs.id DESC");
          ;
            $this->db->bind(':category_id', $category_id);
            

            if ($this->db->resultSet()) {
                $result['rowCount'] = $this->db->rowCount();
                $result['data'] = $this->db->resultSet();
                $result['status'] = '1';
            } else {
                $result['data'] = [];
                $result['status'] = '0';
            }
            return $result;
        }
    }
           public function getAllBlogOfAgent1($category_id)
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
              $this->db->query("SELECT blogs.*,admin.fullname as fullname
                        FROM blogs
                       
                        LEFT JOIN admin ON admin.email = blogs.admin_id where blogs.admin_id = :category_id  ORDER BY blogs.id DESC");
          ;
            $this->db->bind(':category_id', $category_id);
            

            if ($this->db->resultSet()) {
                $result['rowCount'] = $this->db->rowCount();
                $result['data'] = $this->db->resultSet();
                $result['status'] = '1';
            } else {
                $result['data'] = [];
                $result['status'] = '0';
            }
            return $result;
        }
    }
     
        public function getSingleBlog($product_code)
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
              $this->db->query("SELECT blogs.*,admin.fullname as fullname
                        FROM blogs
                       
                        LEFT JOIN admin ON admin.email = blogs.admin_id where blogs.product_code = :product_code  and blogs.status = 1 ORDER BY blogs.id DESC");
          ;
            $this->db->bind(':product_code', $product_code);
            

           
            if ($this->db->singleResult()) {
                $result['rowCount'] = $this->db->rowCount();
                $result['data'] = $this->db->singleResult();
                $result['status'] = '1';
            } else {
                $result['data'] = [];
                $result['status'] = '0';
            }
            return $result;
        }
    }
     public function getRelatedBlog($category_id,$product_code)
    {
        $header = apache_request_headers();
        $header = array_change_key_case($header,CASE_LOWER);
        if (isset($header['tega-authenticate'])) {
              $this->db->query("SELECT blogs.*,admin.fullname as fullname
                        FROM blogs
                       
                        LEFT JOIN admin ON admin.email = blogs.admin_id where blogs.category like :category_id  and blogs.status = 1 and blogs.product_code != :product_code ORDER BY blogs.id DESC");
          ;
            $this->db->bind(':category_id', '%'.$category_id.'%');
            $this->db->bind(':product_code', $product_code);
            

            if ($this->db->resultSet()) {
                $result['rowCount'] = $this->db->rowCount();
                $result['data'] = $this->db->resultSet();
                $result['status'] = '1';
            } else {
                $result['data'] = [];
                $result['status'] = '0';
            }
            return $result;
        }
    }
}
