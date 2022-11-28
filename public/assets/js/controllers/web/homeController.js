///////////// THIS IS THE INDEXPAGE CONTROLLER///////
///// THIS CONTROLS EVERY ACTIVITY ON THE INDEX PAGE
/////////////////////////

module.controller("homeController", [
  "$scope",
  "$filter",
  "$sce",
  "$http",
  "infogathering",
  "$routeParams",
  "$localStorage",
  "$sessionStorage",
  function (
    $scope,
    $filter,
    $sce,
    $http,
    datagrab,
    $routeParams,
    $localStorage,
    $sessionStorage
  ) {
   
    var url = window.location.href;
     alert(window.location.href.split("#"));
    if (url.indexOf("#") > 1) {
      var page = window.location.href.split("#");
      var pager = page[1].split("=").pop();
       //alert(pager);

      if (
        pager == "" ||
        pager == "undefined" ||
        pager == null ||
        pager == "0"
      ) {
        pager = "1";
      }
    } else {
      pager = "1";
    }

    $scope.dirlocation = datagrab.completeUrlLocation;

    $scope.currentPage = pager;
    $scope.pageSize = 12;
  
    $scope.user_data = $localStorage.user_data;
    $scope.user_token = $localStorage.user_token;
  
    // $('#butn').click(function(event) {
    // event.preventDefault();
    // var up_id = $('#up_courseid').val();
    //    var sub = $('#cat').val();
    //    //alert(sub);
    //    if (sub != '') {
    //      $localStorage.valueToShares = sub;
    //  window.location.assign(
    //                 'CategoryList');
    //    }

    //  })

    
    var url = window.location.href;
    if (url.indexOf("home") > 1) {
      menu_active='1';
    }
    else if (url.indexOf("privacypolicy") > 1) {
      menu_active='2';
    };
    $scope.loadPersonalTemplate = false;
$scope.loadEducationTemplate = false;
$scope.loadExtraTemplate = false;
$scope.loadTemplate1 = function() {
$scope.loadPersonalTemplate = true;
$scope.templateUrl1 = "app/Views/Home/Views/includes/what-is-web-design.html";
};
$scope.loadTemplate2 = function() {
$scope.loadEducationTemplate = true;
$scope.templateUrl2 = "about.html";
};
$scope.loadTemplate3 = function() {
$scope.loadExtraTemplate = true;
$scope.templateUrl3 = "ExtraDetail.html";
};

    //alert("op");
    $scope.submit_news = function(){
     // alert("lope");
      
      $(".loader").show();
      var formData = new FormData($("#newsletter_form")[0]);
      $.ajax({
        url: $scope.dirlocation + "api/submit_newsletter",
        type: "POST",
        headers: { "tega-authenticate": "tega-web" },
        data: formData,
        async: true,
        cache: false,
        contentType: false,
        enctype: "multipart/form-data",
        crossDomain: true,
        processData: false,
        success: function (answer) {
          //alert(JSON.stringify(answer));
          var response = JSON.stringify(answer);
          var parsed = JSON.parse(response);
          var msg = angular.fromJson(parsed);
          $(".loader").hide();
          if (msg.status == "1") {
            $(".loader").hide();
            $(".result").html(msg.msg);
            $(".result").show("500");
             setTimeout(() => {
              $(".result").hide("500");
             document.getElementById("newsletter_form").reset();
            }, 3000);
            
          } else {
            $(".loader").hide();
            $(".result").html(msg.msg);
            $(".result").show("500");
             setTimeout(() => {
              $(".result").hide("500");
            }, 3000);;
          }
        },

      });
      
    }

     $scope.contact_form = function(){
      $("#loader").show();
      var formData = new FormData($("#contact_form")[0]);
      $.ajax({
        url: $scope.dirlocation + "api/contact_form",
        type: "POST",
        data: formData,
        async: true,
        cache: false,
         headers: { "tega-authenticate": "tega-web" },
        contentType: false,
        crossDomain: true,
        processData: false,
        success: function (answer) {
          alert(JSON.stringify(answer));
          var response = JSON.stringify(answer);
          var parsed = JSON.parse(response);
          var msg = angular.fromJson(parsed);
          $(".loader").hide();
          if (msg.status == "1") {
             document.getElementById("contact_form").reset();
            $("#loader").hide();
            $(".result").html(msg.message);
            $(".result").show("500");
             setTimeout(() => {
              $(".result").hide("500");
             
            }, 3000);
            //$("#save_product_review")[0].reset();
            
          } else {
            $("#loader").hide();
            $(".result").html(msg.message);
            $(".result").show("500");
            setTimeout(() => {
              $(".result").hide("500");
             
            }, 3000);
            alert(msg.message);
          }
        },
      });
    }
    
    $scope.register_trainee = function(){
      $("#loader").show();
      var formData = new FormData($("#register_trainee")[0]);
      $.ajax({
        url: $scope.dirlocation + "api/register_trainee",
        type: "POST",
        data: formData,
        async: true,
        cache: false,
         headers: { "tega-authenticate": "tega-web" },
        contentType: false,
        crossDomain: true,
        processData: false,
        success: function (answer) {
         // alert(answer);
          var response = JSON.stringify(answer);
          var parsed = JSON.parse(response);
          var msg = angular.fromJson(parsed);
          $(".loader").hide();
          if (msg.status == "1") {
            $("#loader").hide();
            $(".result").html(msg.message);
            $(".result").show("500");
             setTimeout(() => {
              $(".result").hide("500");
              document.getElementById("register_trainee").reset();
            }, 3000);
            //$("#save_product_review")[0].reset();
            
          } else {
            $("#loader").hide();
            $(".result").html(msg.message);
            $(".result").show("500");
            setTimeout(() => {
              $(".result").hide("500");
             
            }, 3000);
            alert(msg.message);
          }
        },
      });
    }

    $scope.send_project = function(){
      $(".loader").show();
      var formData = new FormData($("#send_project")[0]);
      $.ajax({
        url: $scope.dirlocation + "api/send_project",
        type: "POST",
        data: formData,
        async: true,
        cache: false,
         headers: { "tega-authenticate": "tega-web" },
        contentType: false,
        crossDomain: true,
        processData: false,
        success: function (answer) {
         // alert(answer);
          var response = JSON.stringify(answer);
          var parsed = JSON.parse(response);
          var msg = angular.fromJson(parsed);
          $(".loader").hide();
          if (msg.status == "1") {
            $(".loader").hide();
            $(".result").html(msg.message);
            $(".result").show("500");
              setTimeout(() => {
              $(".result").hide("500");
              document.getElementById("send_project").reset();
            }, 3000)
            //$("#save_product_review")[0].reset();
            
          } else {
            $(".loader").hide();
            $(".result").html(msg.message);
            $(".result").show("500");
            setTimeout(() => {
              $(".result").hide("500");
            }, 3000)
          }
        },
      });
    }
    
    $scope.fetch_single_blog = function () {
      $scope.sid = $routeParams.sid.substring(1);
     // alert($scope.sid)
      $.ajax({
        url: $scope.dirlocation + "api/fetch_single_blog?id=" +$scope.sid,
        type: "GET",
        //data: JSON.stringify({'user_email':'mike98989@gmail.com'}),
        async: true,
        cache: false,
        contentType: "application/json",
        headers: { "tega-authenticate": "tega-web" },
        processData: false,
        success: function (result2) {
         // alert(JSON.stringify(result2));
          var response2 = JSON.stringify(result2);
          var parsed2 = JSON.parse(response2);
          var msg2 = angular.fromJson(parsed2);
         
          //$(".products_loader").hide();
          if (msg2.status == "1") {
            $scope.sblog = msg2.data;
               $scope.ct = msg2.data.category.split(',');
           // alert($scope.ct);
               //console.log(msg2.data['title']);
            //alert(JSON.stringify($scope.trending_products));
              $scope.fetch_related_blogs();
            $scope.$apply();
         

            //alert(JSON.stringify($scope.categories));
          }
        },
      });
    };
     $scope.fetch_related_blogs = function () {
      //alert( $scope.sblog.category);
      $.ajax({
        url:
          $scope.dirlocation +
          "api/fetch_related_blogs?cat=" +
          $scope.sblog.category +
          "&p_c=" +$scope.sblog.product_code
         ,
        type: "GET",
        cache: false,
        contentType: false,
        headers: { "tega-authenticate": "tega-web" },
        processData: false,
        success: function (result7) {
         //alert(result7);
          var response7 = JSON.stringify(result7);
          var parsed7 = JSON.parse(response7);
          var msg7 = angular.fromJson(parsed7);
          $(".loader").hide();
          if (msg7.status == "1") {
            $scope.relatedBlog = msg7.data;

            $scope.$apply();
            //alert(JSON.stringify($scope.categories));
          }
        },
      });
    };
 $scope.fetch_all_blogs = function () {
      $.ajax({
        url: $scope.dirlocation + "api/fetch_all_blogs",
        type: "GET",
        async: true,
        cache: false,
        contentType: "application/json",
        headers: { "tega-authenticate": "tega-web" },
        processData: false,
        success: function (result2) {
          //alert(result2);
          var response2 = JSON.stringify(result2);
          var parsed2 = JSON.parse(response2);
          var msg2 = angular.fromJson(parsed2);
         
          $(".loader").hide();
          if (msg2.status == "1") {
            $scope.all_blogs = msg2.data;
            $scope.$apply();
          }
        },
      });
    };
     $scope.fetch_all_project = function () {
     // alert("kl");
    // $scope.catid = $routeParams.id.substring(1);
      $.ajax({
        url: $scope.dirlocation + "api/fetch_all_project",
        type: "GET",
        //data: JSON.stringify({'user_email':'mike98989@gmail.com'}),
        async: true,
        cache: false,
        contentType: "application/json",
        headers: { "tega-authenticate": "tega-web" },
        processData: false,
        success: function (result2) {
          //alert(result2);
          var response2 = JSON.stringify(result2);
          var parsed2 = JSON.parse(response2);
          var msg2 = angular.fromJson(parsed2);
         
          //$(".products_loader").hide();
          if (msg2.status == "1") {
            $scope.all_projects = msg2.data;
            //alert(JSON.stringify($scope.trending_products));
            $scope.$apply();

            //alert(JSON.stringify($scope.categories));
          }
        },
      });
    };

     $scope.fetch_all_training = function () {
     // alert("kl");
    // $scope.catid = $routeParams.id.substring(1);
      $.ajax({
        url: $scope.dirlocation + "api/fetch_all_training",
        type: "GET",
        //data: JSON.stringify({'user_email':'mike98989@gmail.com'}),
        async: true,
        cache: false,
        contentType: "application/json",
        headers: { "tega-authenticate": "tega-web" },
        processData: false,
        success: function (result2) {
          //alert(result2);
          var response2 = JSON.stringify(result2);
          var parsed2 = JSON.parse(response2);
          var msg2 = angular.fromJson(parsed2);
         
          //$(".products_loader").hide();
          if (msg2.status == "1") {
            $scope.all_training = msg2.data;
            //alert(JSON.stringify($scope.trending_products));
            $scope.$apply();

            //alert(JSON.stringify($scope.categories));
          }
        },
      });
    };

     $scope.fetch_single_training = function () {
      $scope.tid = $routeParams.tid.substring(1);
      $.ajax({
        url:
          $scope.dirlocation +
          "api/fetch_single_training?id=" +$scope.tid,
        method: "GET",
        cache: false,
        contentType: false,
        headers: { "tega-authenticate": "tega-web" },
        processData: false,
        success: function (response) {
         // alert(response);
          var string_res = JSON.stringify(response);
          var parsed = JSON.parse(string_res);
          var data = angular.fromJson(parsed);
          console.log(data);
          $(".loader").hide();
          
            $scope.singleTraining = data.data;
            $scope.$apply();
            //alert(JSON.stringify($scope.categories));
          
        },
      });
    };

     $scope.fetch_single_project = function () {
      $scope.tid = $routeParams.pid.substring(1);
      $.ajax({
        url:
          $scope.dirlocation +
          "api/fetch_single_project?id=" +$scope.tid,
        method: "GET",
        cache: false,
        contentType: false,
        headers: { "tega-authenticate": "tega-web" },
        processData: false,
        success: function (response) {
          //alert(response);
          var string_res = JSON.stringify(response);
          var parsed = JSON.parse(string_res);
          var data = angular.fromJson(parsed);
          console.log(data);
          $(".loader").hide();
          
            $scope.singleProject = data.data;
            $scope.$apply();
            //alert(JSON.stringify($scope.categories));
          
        },
      });
    };


     $scope.fetch_all_cat = function () {
     // alert("kl");
    // $scope.catid = $routeParams.id.substring(1);
      $.ajax({
        url: $scope.dirlocation + "api/fetch_all_category",
        type: "GET",
        //data: JSON.stringify({'user_email':'mike98989@gmail.com'}),
        async: true,
        cache: false,
        contentType: "application/json",
        headers: { "tega-authenticate": "tega-web" },
        processData: false,
        success: function (result2) {
          //alert(result2);
          var response2 = JSON.stringify(result2);
          var parsed2 = JSON.parse(response2);
          var msg2 = angular.fromJson(parsed2);
         
          //$(".products_loader").hide();
          if (msg2.status == "1") {
            $scope.all_category = msg2.data;
            //alert(JSON.stringify($scope.trending_products));
            $scope.$apply();

            //alert(JSON.stringify($scope.categories));
          }
        },
      });
    };

        $scope.fetch_latest_blog = function () {
      $.ajax({
        url: $scope.dirlocation + "api/fetch_latest_blog",
        type: "GET",
        //data: JSON.stringify({'user_email':'mike98989@gmail.com'}),
        async: true,
        cache: false,
        contentType: "application/json",
        headers: { "tega-authenticate": "tega-web" },
        processData: false,
        success: function (result2) {
          //alert(result2);
          var response2 = JSON.stringify(result2);
          var parsed2 = JSON.parse(response2);
          var msg2 = angular.fromJson(parsed2);
          console.log(msg2);

          $(".products_loader").hide();
          if (msg2.status == "1") {
            $scope.latest_blog = msg2.data;
            //alert(JSON.stringify($scope.products));
            $scope.$apply();

            //alert(JSON.stringify($scope.categories));
          }
        },
      });
    };
    
    $scope.fetch_single_agent = function () {
      $scope.aid = $routeParams.aid.substring(1);;
      $.ajax({
        url:
          $scope.dirlocation +
          "api/fetch_single_agent?id=" +$scope.aid,
        method: "GET",
        cache: false,
        contentType: false,
        headers: { "tega-authenticate": "tega-web" },
        processData: false,
        success: function (response) {
          //alert(response);
          var string_res = JSON.stringify(response);
          var parsed = JSON.parse(string_res);
          var data = angular.fromJson(parsed);
          console.log(data);
          $(".loader").hide();
          
            $scope.singleCat = data.data;
            $scope.$apply();
            //alert(JSON.stringify($scope.categories));
          
        },
      });
    };

       $scope.fetch_single_category = function () {
      $scope.catid = $routeParams.id.substring(1);
      $.ajax({
        url:
          $scope.dirlocation +
          "api/fetch_single_category?id=" +$scope.catid,
        method: "GET",
        cache: false,
        contentType: false,
        headers: { "tega-authenticate": "tega-web" },
        processData: false,
        success: function (response) {
          //alert(response);
          var string_res = JSON.stringify(response);
          var parsed = JSON.parse(string_res);
          var data = angular.fromJson(parsed);
          console.log(data);
          $(".loader").hide();
          
            $scope.singleCat = data.data;
            $scope.$apply();
            //alert(JSON.stringify($scope.categories));
          
        },
      });
    };

       $scope.fetch_all_blog_category = function () {
      $scope.catid = $routeParams.id.substring(1);
      $.ajax({
        url:
          $scope.dirlocation +
          "api/fetch_all_blog_category?id=" +$scope.catid,
        method: "GET",
        cache: false,
        contentType: false,
        headers: { "tega-authenticate": "tega-web" },
        processData: false,
        success: function (response) {
          //alert(response);
          var string_res = JSON.stringify(response);
          var parsed = JSON.parse(string_res);
          var data = angular.fromJson(parsed);
          console.log(data);
          $(".loader").hide();
          
            $scope.allCatBlogs = data.data;
            $scope.$apply();
            //alert(JSON.stringify($scope.categories));
          
        },
      });
    };
       $scope.fetch_all_blog_agent = function () {
      $scope.aid = $routeParams.aid.substring(1);
      $.ajax({
        url:
          $scope.dirlocation +
          "api/fetch_all_blog_agent?id=" +$scope.aid,
        method: "GET",
        cache: false,
        contentType: false,
        headers: { "tega-authenticate": "tega-web" },
        processData: false,
        success: function (response) {
         // alert(response);
          var string_res = JSON.stringify(response);
          var parsed = JSON.parse(string_res);
          var data = angular.fromJson(parsed);
          console.log(data);
          $(".loader").hide();
          
            $scope.allCatBlogs = data.data;
            $scope.$apply();
            //alert(JSON.stringify($scope.categories));
          
        },
      });
    };
  


    $scope.fetch_all_banners = function(){
      $.ajax({
        url: $scope.dirlocation + "api/fetch_all_banners",
        type: "GET",
        //data: JSON.stringify({'user_email':'mike98989@gmail.com'}),
        async: true,
        cache: false,
        contentType: "application/json",
        headers: { "tega-authenticate": "tega-web" },
        processData: false,
        success: function (result) {
          //alert(result);
          var response = JSON.stringify(result);
          var parsed = JSON.parse(response);
          var msg = angular.fromJson(parsed);
          $(".loader").hide();
          if (msg.status == "1") {
            $scope.banners = msg.data;
            $scope.$apply();
            //alert(JSON.stringify($scope.categories));
          }
        },
      });
    }

    $scope.split_image = function (images) {
      return images.split(",");
    };

    $scope.init_facebook_login = function(){
      window.fbAsyncInit = function() {
        FB.init({
        appId      : '337212501249692',
        cookie     : true,
        xfbml      : true,
        version    : 'v11.0'
        });
        
        FB.AppEvents.logPageView();   
        
      };
      
      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "https://connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
       
    }

    //////////////CHECK THE LOGIN STATE
    $scope.checkLoginState = function(){
      $('.loader_fb_check').show();
      FB.getLoginStatus(function(response) {
        console.log(response.status);
        if(response.status==='connected'){
        //console.log(response.authResponse.accessToken);
        FB.api('/me', function(response) {
          console.log(JSON.stringify(response));
        });
    
        FB.api(
          '/'+response.authResponse.userID+'/?fields=id,name,email',
          'GET',
          {},
          function(response) {
           if(response){
           $scope.get_email_existence(response.name,response.email,response.id);  
            console.log(response);
           }
          
            //loginViaEmail(email);

          }
        );
    
        }else{
        FB.login();
        }
        //statusChangeCallback(response);
      });
    }

    $scope.fetch_report_reasons = function(){
      $.ajax({
        url: $scope.dirlocation+'api/fetch_report_reasons',
        type: 'GET',
        cache: false,
        contentType: false,
        headers:{'tega-authenticate':'tega-web'}, 
        processData: false,
        success: function (result) {
        //alert(JSON.stringify(result));
       var response=JSON.stringify(result);
       var parsed = JSON.parse(response);
       var msg=angular.fromJson(parsed);
       $('.loader').hide(); 
       if(msg.status=='1'){  
       $scope.report_reasons = msg.data;
       $scope.$apply();
       //alert(JSON.stringify($scope.categories));
       }
        }
      });
    }


    $scope.get_product_reviews = function(product_id){
      //alert(product_id);
      $.ajax({
        url: $scope.dirlocation + "api/get_product_reviews?id="+product_id,
        type: "GET",
        async: true,
        cache: false,
        contentType: "application/json",
        headers: { "tega-authenticate": "tega-web" },
        processData: false,
        success: function (result) {
          var response = JSON.stringify(result);
          var parsed = JSON.parse(response);
          var msg = angular.fromJson(parsed);
          if(msg.status=='1'){
            $scope.product_reviews= msg.data;
            $scope.calculate_average_reviews(msg.data);
            $scope.$apply();
          }
          //alert($localStorage.fb_data);return
        },
      });
    }

    $scope.calculate_average_reviews = function (data){
      //alert(data[0].rating);
      var review_star=0;
      for(var a=0;a<data.length;a++){
        review_star=(review_star*1)+(data[a].rating*1);
        //alert(review_star);
      }
      $scope.average_review_rate = Math.round(review_star/data.length);
      //alert($scope.average_review_rate);
    }

    $scope.open_image_modal = function(index){
      //alert(index);
     // var modalImg = document.getElementById("img01");
      //modalImg.src = $scope.dirlocation+'public/assets/images/uploads/products/'+image;
      $scope.image_index = index;
      $('#productImageModal').modal('show');
    }

    // $scope.get_category_details = function(){
    //   const params = new URLSearchParams(window.location)
    //   alert(JSON.stringify(params));
    // }
    $scope.fetch_top_rated_products = function(){
      $.ajax({
        url: $scope.dirlocation+'api/fetch_top_rated_products',
        type: 'GET',
        cache: false,
        contentType: false,
        headers:{'tega-authenticate':'tega-web'}, 
        processData: false,
        success: function (result7) {
        //alert(result7);
       var response7=JSON.stringify(result7);
       var parsed7 = JSON.parse(response7);
       var msg7=angular.fromJson(parsed7);
       $('.loader').hide(); 
       if(msg7.status=='1'){  
       $scope.topRatedProducts = msg7.data;
       $scope.$apply();
       //alert(JSON.stringify($scope.categories));
       }
        }
      });
    }

    $scope.report_abuse = function(){
      $(".loader").show();
      var formData = new FormData($("#report_abuse")[0]);
      $.ajax({
        url: $scope.dirlocation + "api/report_abuse",
        type: "POST",
        headers:{'tega-authenticate':$scope.user_token}, 
        data: formData,
        async: true,
        cache: false,
        contentType: false,
        enctype: "multipart/form-data",
        crossDomain: true,
        processData: false,
        success: function (answer) {
          alert(answer);
          var response = JSON.stringify(answer);
          var parsed = JSON.parse(response);
          var msg = angular.fromJson(parsed);
          $(".loader").hide();
          if (msg.status == "1") {
            $(".loader").hide();
            $(".result").html(msg.message);
            $(".result").show();
            //$("#save_product_review")[0].reset();
            document.getElementById("report_abuse").reset();
          } else {
            $(".loader").hide();
            $(".result").html(msg.message);
            $(".result").show();
            alert(msg.message);
          }
        },
      });
    }

    $scope.save_product_review = function(){
      var rating = $('.rating').val();
      //alert(rating);return;
      if(rating=='0'){
        alert("Please Rate this product");
        $(".result").html("Please Rate this product");
        $(".result").show();
        return;
      }
      $(".loader").show();
      var formData = new FormData($("#save_product_review")[0]);
      $.ajax({
        url: $scope.dirlocation + "api/save_product_review",
        type: "POST",
        headers: { "tega-authenticate": "tega-web" },
        data: formData,
        async: true,
        cache: false,
        contentType: false,
        enctype: "multipart/form-data",
        crossDomain: true,
        processData: false,
        success: function (answer) {
          //alert(answer);
          var response = JSON.stringify(answer);
          var parsed = JSON.parse(response);
          var msg = angular.fromJson(parsed);
          $(".loader").hide();
          if (msg.status == "1") {
            $(".loader").hide();
            $(".result").html(msg.message);
            $(".result").show();
            //$("#save_product_review")[0].reset();
            document.getElementById("save_product_review").reset();
          } else {
            $(".loader").hide();
            $(".result").html(msg.message);
            $(".result").show();
            alert(msg.message);
          }
        },
      });
    }


    $scope.message_product_seller = function () {
      $(".loader").show();
      var formData = new FormData($("#message_product_seller")[0]);
      $.ajax({
        url: $scope.dirlocation + "api/message_product_seller",
        type: "POST",
        headers: { "tega-authenticate": "tega-web" },
        data: formData,
        async: true,
        cache: false,
        contentType: false,
        enctype: "multipart/form-data",
        crossDomain: true,
        processData: false,
        success: function (answer) {
          //alert(answer);
          var response = JSON.stringify(answer);
          var parsed = JSON.parse(response);
          var msg = angular.fromJson(parsed);
          $(".loader").hide();
          if (msg.status == "1") {
            $(".loader").hide();
            $(".result").html(msg.message);
            $(".result").show();
          } else {
            $(".loader").hide();
            $(".result").html(msg.message);
            $(".result").show();
            alert(msg.message);
          }
        },
      });
    };

    $scope.fetch_all_categories_and_sub_categories = function () {
      $.ajax({
        url: $scope.dirlocation + "api/fetch_all_categories_and_sub_categories",
        type: "GET",
        //data: JSON.stringify({'user_email':'mike98989@gmail.com'}),
        async: true,
        cache: false,
        contentType: "application/json",
        headers: { "tega-authenticate": "tega-web" },
        processData: false,
        success: function (result) {
          //alert(result);
          var response = JSON.stringify(result);
          var parsed = JSON.parse(response);
          var msg = angular.fromJson(response);

          console.log(msg);

          $(".loader").hide();
          if (msg.status == "1") {
            $scope.catSubs = msg.data;
            $scope.$apply();
            //alert(JSON.stringify($scope.categories));
          }
        },
      });
    };

    //alert($scope.dirlocation);

    $scope.get_email_existence = function (name,email,user_id) {
      $.ajax({
        url: $scope.dirlocation + "api/find_user_by_email?email="+email,
        type: "GET",
        async: true,
        cache: false,
        contentType: "application/json",
        headers: { "tega-authenticate": "tega-web" },
        processData: false,
        success: function (result) {
          //alert(result);return;
          var response = JSON.stringify(result);
          var parsed = JSON.parse(response);
          var msg = angular.fromJson(parsed);
          //$(".loader_fb_check").hide();
          let fb_data = {};
          fb_data['email'] = email;
          fb_data['id'] = user_id;
          fb_data['name'] = name;
          $localStorage.fb_data = fb_data;
          //alert($localStorage.fb_data);return;
          if (msg.id) {
           //////////INITIATE FACEBOOK LOOKING
          $scope.user_login_from_facebook();
          }else{
          window.location.href=$scope.dirlocation+'signup';
          }
        },
      });
    };

    $scope.user_login_from_facebook = function(){
      var formData = new FormData();
      formData.append('email',$localStorage.fb_data.email);
      formData.append('id',$localStorage.fb_data.id);
      formData.append('source','browser');
      $.ajax({
        url: $scope.dirlocation + "api/user_login_from_facebook",
        type: "POST",
        headers: { "tega-authenticate": "tega-web" },
        data: formData,
        async: true,
        cache: false,
        contentType: false,
        enctype: "multipart/form-data",
        processData: false,
        success: function (result) {
          //alert(result);return;
          var response = JSON.stringify(result);
          var parsed = JSON.parse(response);
          var msg = angular.fromJson(parsed);
          //console.log(msg);
          $(".loader_fb_check").hide();
          if (msg.status == "1") {
            $localStorage["user_data"] = msg.data;
            $localStorage["user_token"] = msg.token;
            window.location.href =
              datagrab.completeUrlLocation + "dashboard/update_password";
          }
        },
      });
    }
    $scope.signout_from_google = function(){
        var auth2 = gapi.auth2.getAuthInstance();
        auth2.signOut().then(function () {
          console.log('User signed out.');
        });
    }

    $scope.localStorage_get = function(key){
      $scope[key] = $localStorage[key];
      //$scope.$apply();
  }

  $scope.localStorage_save = function(key,value,url){
      $localStorage[key] = value;
      //$scope[key] = $localStorage[key];
      //alert(JSON.stringify(value));
      if(url!=''){
          $scope.go_to_url(url);
      }
  }

  $scope.go_to_url = function (url){
      //alert($scope.dirlocation+'admindashboard/'+url);
      window.location.href=$scope.dirlocation+url;
  }
/*
  $scope.fetch_all_category = function () {
      $.ajax({
        url: $scope.dirlocation + "api/fetch_all_category",
        type: "GET",
        //data: JSON.stringify({'user_email':'mike98989@gmail.com'}),
        async: true,
        cache: false,
        contentType: "application/json",
        headers: { "tega-authenticate": "tega-web" },
        processData: false,
        success: function (result) {
          //alert(result);
          var response = JSON.stringify(result);
          var parsed = JSON.parse(response);
          var msg = angular.fromJson(response);
          $(".loader").hide();
          if (msg.status == "1") {
            $scope.categories = msg.data;
            $scope.$apply();
            //alert(JSON.stringify($scope.categories));
          }
        },
      });
    };
*/
    $scope.fetch_all_subcategory = function () {
      $.ajax({
        url: $scope.dirlocation + "api/fetch_all_subcategory",
        type: "GET",
        //data: JSON.stringify({'user_email':'mike98989@gmail.com'}),
        async: true,
        cache: false,
        contentType: "application/json",
        headers: { "tega-authenticate": "tega-web" },
        processData: false,
        success: function (result1) {
          //alert(result1);
          var response1 = JSON.stringify(result1);
          var parsed1 = JSON.parse(response1);
          var msg1 = angular.fromJson(response1);

          console.log(msg1);
          $(".loader").hide();
          if (msg1.status == "1") {
            $scope.subcategories = msg1.data;
            $scope.$apply();
            //alert(JSON.stringify($scope.categories));
          }
        },
      });
    };



    $scope.fetch_trending_product = function () {
      $.ajax({
        url: $scope.dirlocation + "api/fetch_trending_product",
        type: "GET",
        //data: JSON.stringify({'user_email':'mike98989@gmail.com'}),
        async: true,
        cache: false,
        contentType: "application/json",
        headers: { "tega-authenticate": "tega-web" },
        processData: false,
        success: function (result2) {
          //alert(result2);
          var response2 = JSON.stringify(result2);
          var parsed2 = JSON.parse(response2);
          var msg2 = angular.fromJson(parsed2);
         
          //$(".products_loader").hide();
          if (msg2.status == "1") {
            $scope.trending_products = msg2.data;
            //alert(JSON.stringify($scope.trending_products));
            $scope.$apply();

            //alert(JSON.stringify($scope.categories));
          }
        },
      });
    };

    $scope.fetch_product_by_term = function (query,sub_category) {
      //var formData = new FormData($("#fetch_product_by_term")[0]);
      $.ajax({
        url: $scope.dirlocation + "api/fetch_product_by_term?query="+query+'&sub_category='+sub_category,
        type: "GET",
        headers: { "tega-authenticate": "tega-web" },
        //data: formData,
        async: true,
        cache: false,
        contentType: false,
        transformRequest: angular.identity,
        //enctype: "multipart/form-data",
        processData: false,
        success: function (result) {
          //alert(JSON.stringify(result));
          var response = JSON.stringify(result);
          var parsed = JSON.parse(response);
          var msg = angular.fromJson(parsed);
          
          $(".products_loader").hide();
          //if (msg.status == "1") {
            $scope.products = msg.data;
            $scope.$apply();
            //alert(JSON.stringify($scope.categories));
          //}
        },
      });
    };

    $scope.fetch_single_product = function () {
      var url = window.location.href;
      var split_url = url.split("/").pop();
      if (split_url) {
        $.ajax({
          url: $scope.dirlocation + "api/fetch_single_product?id=" + split_url,
          type: "GET",
          async: true,
          cache: false,
          contentType: false,
          headers: { "tega-authenticate": "tega-web" },
          processData: false,
          success: function (result3) {
            //alert(result3);
            var response3 = JSON.stringify(result3);
            var parsed3 = JSON.parse(response3);
            var msg3 = angular.fromJson(parsed3);

            $(".loader").hide();
            if (msg3.status == "1") {
              $scope.product = msg3.data;
              //$scope.product_image = $scope.split_image($scope.product.image);
              //setTimeout(function(){ 
                //alert('got here');
                $scope.product_image = $scope.split_image($scope.product.image);
                
               //}, 5000);
              $scope.fetch_related_products();
              $scope.$apply();
            }
          },
        });
      }
    };

    $scope.fetch_related_products = function () {
      $.ajax({
        url:
          $scope.dirlocation +
          "api/fetch_related_products?sub_cat_id=" +
          $scope.product.sub_category +
          "&brand=" +
          $scope.product.brand +
          "&product_code=" +
          $scope.product.product_code,
        type: "GET",
        cache: false,
        contentType: false,
        headers: { "tega-authenticate": "tega-web" },
        processData: false,
        success: function (result7) {
          var response7 = JSON.stringify(result7);
          var parsed7 = JSON.parse(response7);
          var msg7 = angular.fromJson(parsed7);
          $(".loader").hide();
          if (msg7.status == "1") {
            $scope.relatedProducts = msg7.data;
            $scope.$apply();
            //alert(JSON.stringify($scope.categories));
          }
        },
      });
    };

    $scope.fetch_all_product_sub_category = function (id) {
      $.ajax({
        url:
          $scope.dirlocation +
          "api/fetch_all_product_sub_category?id=" +id,
        method: "GET",
        cache: false,
        contentType: false,
        headers: { "tega-authenticate": "tega-web" },
        processData: false,
        success: function (result7) {
          //alert(result7);
          var response7 = JSON.stringify(result7); 
          var parsed7 = JSON.parse(response7);
          var msg7 = angular.fromJson(parsed7);
          console.log(msg7);
          //alert(msg7);
          $(".loader").hide();
          
            $scope.allSubProducts = msg7.data;
            $scope.$apply();
            
        },
      });
    };

 

    $scope.fetch_all_sub_category = function () {
      $.ajax({
        url:
          $scope.dirlocation +
          "api/fetch_all_sub_category?id=" +
          $localStorage.valueToShares,
        type: "GET",
        cache: false,
        contentType: false,
        headers: { "tega-authenticate": "tega-web" },
        processData: false,
        success: function (response7) {
          // alert(response7);
          var responses7 = JSON.stringify(response7);
          var parsed7 = JSON.parse(responses7);
          var data7 = angular.fromJson(parsed7);
          console.log(data7);
          $(".loader").hide();
          if (data7.status == "1") {
            $scope.allSubs = data7.data;
            $scope.$apply();
            //alert(JSON.stringify($scope.categories));
          }
        },
      });
    };


    $scope.fetch_all_sub_category_from_parent = function (id) {
      $.ajax({
        url:
          $scope.dirlocation +
          "api/fetch_all_sub_category_from_parent?parent_id=" +id,
        type: "GET", 
        cache: false,
        contentType: false,
        headers: { "tega-authenticate": "tega-web" },
        processData: false,
        success: function (response7) {
          //alert(JSON.stringify(response7));
          var responses7 = JSON.stringify(response7);
          var parsed7 = JSON.parse(responses7);
          var data7 = angular.fromJson(parsed7);
          console.log(data7);
          $(".loader").hide();
          if (data7.status == "1") {
            $scope.allSubs = data7.data;
            $scope.$apply();
            //alert(JSON.stringify($scope.categories));
          }
        },
      });
    };

    $scope.fetch_required_table = function () {
      $.ajax({
        url: $scope.dirlocation + "api/fetch_required_table",
        type: "GET",
        //data: JSON.stringify({'user_email':'mike98989@gmail.com'}),

        async: true,
        cache: false,
        contentType: false,
        enctype: "multipart/form-data",
        headers: { "tega-authenticate": "tega-web" },
        crossDomain: true,
        processData: false,
        success: function (answer) {
          //alert(answer);
          var response = JSON.stringify(answer);
          var parsed = JSON.parse(response);
          var msg = angular.fromJson(response);

          if (msg.status == "1") {
            $scope.save_json();
            console.log(msg.data);
            $scope.requiredState = msg.data.states;
            $scope.requiredPhone = msg.data.phone_makes;
            $scope.requiredCar = msg.data.car_makes;
            $scope.requiredProperty = msg.data.property_types;
            $scope.requiredCondition = msg.data.conditions;

            $scope.$apply();
            //alert(JSON.stringify($scope.categories));
          }
        },
      });
    };
  },
]);
