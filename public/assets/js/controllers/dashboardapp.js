module.config(function ($routeProvider, $locationProvider) {
  $routeProvider
    .when("/admindashboard", {
      templateUrl: "app/Views/Admin/Views/home.html",
      //template:"<h4>This is home page</h4>",
      controller: "homeController",
    })
    .when("/admindashboard/categories", {
      templateUrl: "app/Views/Admin/Views/categories.html",
      controller: "categoryController",
    })
    .when("/admindashboard/sub_category", {
      templateUrl: "app/Views/Admin/Views/sub_category.html",
      controller: "categoryController",
    })
    .when("/admindashboard/complaints", {
      templateUrl: "app/Views/Admin/Views/complaints.html",
      controller: "homeController",
    })
    // .when("/edit_sub", {
    //   templateUrl: "../app/views/Admin/views/edit_sub_category.html",
    //   controller: "categoryController",
    // })
    .when("/admindashboard/listings", {
      templateUrl: "app/Views/Admin/Views/listings.html",
      controller: "listingController",
    })
    .when("/admindashboard/users", {
      templateUrl: "app/Views/Admin/Views/users.html",
      controller: "usersController",
    })
    .when("/admindashboard/profile", {
      templateUrl: "app/Views/Admin/Views/profile.html",
      controller: "usersController",
    })
    .when("/admindashboard/single_listing", {
      templateUrl: "app/Views/Admin/Views/single_listing.html",
      controller: "listingController",
    })
     .when("/admindashboard/edit_listing", {
      templateUrl: "app/Views/Admin/Views/edit_listing.html",
      controller: "listingController",
    })
      .when("/admindashboard/add_listing", {
      templateUrl: "app/Views/Admin/Views/add_listing.html",
      controller: "listingController",
    })
        .when("/admindashboard/training", {
      templateUrl: "app/Views/Admin/Views/training.html",
      controller: "trainingController",
    })
      .when("/admindashboard/single_training", {
      templateUrl: "app/Views/Admin/Views/single_training.html",
      controller: "trainingController",
    })
     .when("/admindashboard/edit_training", {
      templateUrl: "app/Views/Admin/Views/edit_training.html",
      controller: "trainingController",
    })
      .when("/admindashboard/add_training", {
      templateUrl: "app/Views/Admin/Views/add_training.html",
      controller: "trainingController",
    })  
       .when("/admindashboard/project", {
      templateUrl: "app/Views/Admin/Views/project.html",
      controller: "projectController",
    })
      .when("/admindashboard/single_project", {
      templateUrl: "app/Views/Admin/Views/single_project.html",
      controller: "projectController",
    })
     .when("/admindashboard/edit_project", {
      templateUrl: "app/Views/Admin/Views/edit_project.html",
      controller: "projectController",
    })
      .when("/admindashboard/add_project", {
      templateUrl: "app/Views/Admin/Views/add_project.html",
      controller: "projectController",
    })    
    .when("/admindashboard/account_types", {
      templateUrl: "../app/Views/Admin/Views/account_types.html",
      controller: "packagesController",
    })
    // .when("/edit_packages", {
    //   templateUrl: "../app/views/Admin/views/edit_packages.html",
    //   controller: "packagesController",
    // })
    .when("/admindashboard/banners", {
      templateUrl: "app/Views/Admin/Views/banners.html",
      controller: "bannerController",
    })
    .when("/admindashboard/transactions", {
      templateUrl: "app/Views/Admin/Views/transactions.html",
      controller: "transactionController",
    })
    .when("/admindashboard/admins", {
      templateUrl: "app/Views/Admin/Views/admins.html",
      controller: "adminController",
    })
    .otherwise({
      redirectTo: "/admindashboard",
    });
  $locationProvider.html5Mode(true);
});
