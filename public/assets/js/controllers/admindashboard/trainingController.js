///////////// THIS IS THE LISTING CONTROLLER///////
///// THIS CONTROLS EVERY ACTIVITY ON THE LISTING PAGE
/////////////////////////

module.controller("trainingController", [
  "$scope",
  "$sce",
  "$http",
  "infogathering",
  "$routeParams",
  "$localStorage",
  "$sessionStorage",
  function (
    $scope,
    $sce,
    $http,
    datagrab,
    $routeParams,
    $localStorage,
    $sessionStorage
  ) {
    $scope.fieldcounter = 1;
    //$('.loader').show();
    var url = window.location.href;
    if (url.indexOf("#") > 1) {
      var page = window.location.href.split("#");
      var pager = page[1].split("=").pop();

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
    $scope.pageSize = 10;
    $scope.admin_data = $localStorage.user_data;
    $scope.admin_token = $localStorage.user_token;
     $scope.normal = 1;
    $scope.advance = 2;
    $scope.ultra = 3
    setTimeout(function () {
      $scope.$apply();
    }, 0);

    //! Starts

    // $scope.loader_control = function(e){
    //   $(e).hide(500);
    // };


            $scope.add_training = function () {
      $("#add_cat_loader").show(500);
      var formData = new FormData($("#addTraining")[0]);
      $.ajax({
        url: $scope.dirlocation + "adminapi/add_training",
        type: "POST",
       headers: { "tega-authenticate": $scope.admin_token },
        data: formData,
        async: true,
        cache: false,
        contentType: false,
        processData: false,
        success: function (answer) {
          alert(JSON.stringify(answer));
          var response = JSON.stringify(answer);
          var parsed = JSON.parse(response);
          var msg = angular.fromJson(parsed);
          $(".loader").hide();
          if (msg.status == "1") {
            $(".loader").hide();
            $(".result").html(msg.message);
            $(".result").show();
            $("#addTraining")[0].reset();
            //alert(msg.message);
            //window.location.assign('Advert');
          } else {
            $(".loader").hide();
            $(".result").html(msg.message);
            $(".result").show();
            //alert(msg.message);
          }
        },
      });
    };

 $scope.agent_blogs = function () {
      $(".result").hide();
      $('#listing_loader').show(500);
      $.ajax({
        url: 
         $scope.dirlocation +
          "api/fetch_all_blog_agent1?id=" +$scope.admin_data.email,
        type: "GET",
        async: true,
        cache: false,
        contentType: false,
        headers: {
          "tega-authenticate":
            $scope.admin_token + ":email:" + $scope.admin_data.email,
        },
        processData: false,
        success: function (result) {
          //alert(JSON.stringify(result));
          console.log(result);
          var response = JSON.stringify(result);
          var parsed = JSON.parse(response);
          var msg = angular.fromJson(parsed);

          $('#listing_loader').hide(500);
          // console.table(JSON.stringify(msg));
          if (msg.status == "1") {
            // $scope.loader_control('#listing_loader');
            $scope.all_listings = msg.data;
            $scope.notification = msg.msg;
            $scope.status == msg.status;
            $scope.$apply();
            $(".result").show();
          } else {
            // $scope.loader_control('#' + listing.id);
            $(".result").html(msg.message);
            $(".result").show();
          }
        },
      });
    }

    $scope.get_training = function () {
      $(".result").hide();
      $('#listing_loader').show(500);
      $.ajax({
        url: $scope.dirlocation + "adminapi/get_all_training",
        type: "GET",
        async: true,
        cache: false,
        contentType: false,
        headers: {
          "tega-authenticate":
            $scope.admin_token + ":email:" + $scope.admin_data.email,
        },
        processData: false,
        success: function (result) {
         // alert(JSON.stringify(result));
          console.log(result);
          var response = JSON.stringify(result);
          var parsed = JSON.parse(response);
          var msg = angular.fromJson(parsed);

          $('#listing_loader').hide(500);
          // console.table(JSON.stringify(msg));
          if (msg.status == "1") {
            // $scope.loader_control('#listing_loader');
            $scope.all_trainings = msg.data;
           // $scope.notification = msg.msg;
            $scope.status == msg.status;
            $scope.$apply();
            $(".result").show();
          } else {
            // $scope.loader_control('#' + listing.id);
            $(".result").html(msg.message);
            $(".result").show();
          }
        },
      });  
    };

         $scope.update_training = function (id) {
          //alert("d");
      $(".edit_" + id).show(500);
      $(".icon_edit_" + id).hide();

      var formData = new FormData($("#updateTraining")[0]);
      $.ajax({
        url: $scope.dirlocation + "adminapi/update_training",
        type: "POST",
        data: formData,
        async: true,
        cache: false,
        contentType: false,
        headers: { "tega-authenticate": $scope.admin_token },
        processData: false,
        success: function (answer) {
          //console.log(answer);
         // alert(JSON.stringify(answer));
          var response = JSON.stringify(answer);
          var parsed = JSON.parse(response);
          var msg = angular.fromJson(parsed);

          $(".edit_" + id).hide(500);
          $(".icon_edit_" + id).show();

          if (msg.status == "1") {
           // $scope.get_blog();
            $(".result-c").html(msg.message);
            $(".result-c").show();
            //alert(msg.message);
            
           // $scope.$apply();

           // $("#updateBlog")[0].reset();
          } else {
            $(".result-c").html(msg.message);
            $(".result-c").show();
          }
        },
      });
    };
        $scope.delete_training = function (id) {
         // alert(product_code);
      // alert($scope.admin_token);
      // return;
      $.ajax({
        url:
          $scope.dirlocation +
          "adminapi/delete_training?id=" +
          id,
        type: "GET",
        async: true,
        cache: false,
        contentType: false,
        headers: { "tega-authenticate": $scope.admin_token },
        processData: false,
        success: function (result) {
          console.log(result);
          //alert(JSON.stringify(result));
          var response = JSON.stringify(result);
          var parsed = JSON.parse(response);
          var msg = angular.fromJson(parsed);
          // alert(msg);
          // alert(msg.status);
          $(".loader").hide();
             if (msg.status == "1") {
            
            //listing.status = code;
            //$scope.$apply();
            $(".result").html(msg.message);
            $(".result").addClass("alert alert-info");
            $(".result").show(500);

            setTimeout(() => {
              $(".result").hide("500");
              $(".result").removeClass("alert alert-info");
              $scope.get_training();
            $scope.$apply();
            }, 3000);
          } else {
            $(".result").html(msg.message);
            $(".result").addClass("alert alert-info");
            $(".result").show(500);

            setTimeout(() => {
              $(".result").hide("500");
              $(".result").removeClass("alert alert-info");
            }, 3000);
          }
      
        },
      });
    };

   

    $scope.enable_or_disable_training = function (code, listing, index) {
     // alert('got here');
      var formData = new FormData();
      formData.append("token", $scope.admin_token);
      formData.append("status", code);
      formData.append("id", listing.id);
      $('.loader_listing_'+listing.id).show();
      $('.icon_listing_'+listing.id).hide();
      $.ajax({
        url: $scope.dirlocation + "adminapi/disable_enable_training",
        data: formData,
        type: "POST",
        async: true,
        cache: false,
        contentType: false,
        headers: { "tega-authenticate": $scope.admin_token },
        processData: false,
        success: function (result) {
          console.log(result);
         // alert(result);
          var response = JSON.stringify(result);
          var parsed = JSON.parse(response);
          var msg = angular.fromJson(parsed);

          $('.loader_listing_'+listing.id).hide(500);
          $('.icon_listing_'+listing.id).show();
          if (msg.status == "1") {
            
            listing.status = code;
            $scope.$apply();
            $(".result").html(msg.message);
            $(".result").addClass("alert alert-info");
            $(".result").show(500);

            setTimeout(() => {
              $(".result").hide("500");
              $(".result").removeClass("alert alert-info");
            }, 3000);
          } else {
            $(".result").html(msg.message);
            $(".result").addClass("alert alert-info");
            $(".result").show(500);

            setTimeout(() => {
              $(".result").hide("500");
              $(".result").removeClass("alert alert-info");
            }, 3000);
          }
        },
      });
    };

    $scope.append_modal_value = function (value) {
      $scope.listingValue = value;
    };
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
  },
]);
