<!-- partial -->
<div class="container-fluid page-body-wrapper" ng-controller="headerController">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">

            <li class="nav-item" ng-class="{'active': menu_active == '1'}" ng-click="menu_active='1'; hide_sidebar()">
                <a class="nav-link" href="{{dirlocation}}admindashboard">
                    <span class="menu-title">Dashboard</span>
                    <i class="mdi mdi-home menu-icon"></i>
                </a>
            </li>

            <li class="nav-item" ng-class="{'active': menu_active == '2'}" ng-click="menu_active='2';  hide_sidebar()">
                <a class="nav-link" href="{{dirlocation}}admindashboard/listings">
                    <span class="menu-title">Listings/Ads</span>
                    <i class="mdi mdi-presentation menu-icon"></i>
                </a>
            </li>
            <li class="nav-item" ng-class="{'active': menu_active == '3'}" ng-click="menu_active='3';  hide_sidebar()">
                <a class="nav-link" href="{{dirlocation}}admindashboard/categories">
                    <span class="menu-title">Categories</span>
                    <i class="mdi mdi-sitemap menu-icon"></i>
                </a>
            </li>
            <li class="nav-item" ng-class="{'active': menu_active == '4'}" ng-click="menu_active='4';  hide_sidebar()">
                <a class="nav-link" href="{{dirlocation}}admindashboard/users">
                    <span class="menu-title">All Users</span>
                    <i class="mdi mdi-account-multiple menu-icon"></i>
                </a>
            </li>
            <li class="nav-item" ng-class="{'active': menu_active == '5'}" ng-click="menu_active='5';  hide_sidebar()">
                <a class="nav-link" href="{{dirlocation}}admindashboard/account_types">
                    <span class="menu-title">Account Types</span>
                    <i class="mdi mdi-ticket-account menu-icon"></i>
                </a>
            </li>
            <li class="nav-item" ng-class="{'active': menu_active == '6'}" ng-click="menu_active='6';  hide_sidebar()">
                <a class="nav-link" href="{{dirlocation}}admindashboard/transactions">
                    <span class="menu-title">Transactions</span>
                    <i class="mdi mdi-cash-multiple menu-icon"></i>
                </a>
            </li>
            <li class="nav-item" ng-class="{'active': menu_active == '7'}" ng-click="menu_active='7';  hide_sidebar()">
                <a class="nav-link" href="{{dirlocation}}admindashboard/banners">
                    <span class="menu-title">Banners</span>
                    <i class="mdi mdi-flag menu-icon"></i>
                </a>
            </li>
            <li class="nav-item" ng-if="user_data.privilege == '3'" ng-class="{'active': menu_active == '8'}" ng-click="menu_active='8';  hide_sidebar()">
                <a class="nav-link" href="{{dirlocation}}admindashboard/admins">
                    <span class="menu-title">Admins</span>
                    <i class="mdi mdi-pencil-lock menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{dirlocation}}logout">
                    <span class="menu-title">Logout</span>
                    <i class="mdi mdi-power menu-icon"></i>
                </a>
            </li>

        </ul>
    </nav>
    <!-- partial -->