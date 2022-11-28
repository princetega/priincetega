w<style>
    .modal-backdrop {
        z-index: 1020;
    }
</style>

<div class="container-scroller" ng-controller="headerController">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="" ><img src="{{dirlocation}}/public/assets/images/tega_logo.png" alt="tega logo" style="width:50px;"></a>
            <!-- <a class="navbar-brand brand-logo" href="index.html"><img src="assets/images/logo.svg" alt="logo" /></a> -->
            <!-- <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a> -->
            <!-- <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{dirlocation}}/public/assets/images/tega_logo.png" style="width:70px;"></a> -->
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav navbar-nav-right">

                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                        <div class="nav-profile-img">
                            <img src="{{dirlocation}}public/assets/images/uploads/profile/{{user_data.image}}" alt="{{user_data.fullname}}">
                            <span class="availability-status online"></span>
                        </div>
                        <div class="nav-profile-text">
                            <p class="mb-1 text-black"> Welcome ,{{user_data.fullname}}</p>
                        </div>
                    </a>
                    <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                        <button class="dropdown-item" data-toggle="modal" data-target=".profile-modal" ng-click="append_modal_info(user_data)">
                            <i class=" mdi mdi-account mr-2 text-success"></i>Profile
                        </button>

                    </div>
                </li>
                <br />

                <li class="nav-item nav-logout d-none d-lg-block">
                    <a class="nav-link" href="" ng-click="logout()">
                        <i class="mdi mdi-power"></i>
                    </a>
                </li>


            </ul>

            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>


        </div>

        <!--  -->

        <!-- profile modal -->
        <div class="modal fade profile-modal " id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="card">

                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <section>
                                <div class="d-flex justify-content-center align-items-center mb-2">
                                    <div class="spinner-border text-info spinner-border-sm header_loader" role="status" style="display: none;">
                                        <span class="sr-only">...loading</span>
                                    </div>
                                </div>
                                <!-- <div class="loader" style="text-align: center">
                                    <img src="{{dirlocation}}public/assets/images/spinner.gif" style="width: 30px" />
                                </div> -->
                                <figure class="d-flex justify-content-center align-items-center">
                                    <img src="{{dirlocation}}public/assets/images/uploads/profile/{{info.image}}" class="card-img-top w-25 " alt="{{ info.fullname }}" loading="lazy">
                                </figure>
                                <h4 class="card-title" style="text-align: center;">{{ info.fullname | uppercase }}</h4>
                                <p class="result" style="display:none;"></p>
                                <div class="password_form_inverse">
                                    <div class=" px-3 d-flex flex-row justify-content-start">
                                        <div class="pr-5">
                                            
                                            <p class="card-text"><span>Email: </span> <span>{{ info.email }}</span>
                                            </p>
                                            <p class="card-text"><span>Phone: </span> <span>{{ info.phone}}</span></p>
                                        </div>
                                        <div class="pl-5">
                                            <p class="card-text"><span>Privilege: </span>
                                                <span ng-switch="info.privilege">
                                                    <span ng-switch-when="1">
                                                        <i class="mdi mdi-star text-success"></i>
                                                    </span>
                                                    <span ng-switch-when="2">
                                                        <i class="mdi mdi-star text-success"></i>
                                                        <i class="mdi mdi-star text-success"></i>
                                                    </span>
                                                    <span ng-switch-when="3">
                                                        <i class="mdi mdi-star text-success"></i>
                                                        <i class="mdi mdi-star text-success"></i>
                                                        <i class="mdi mdi-star text-success"></i>
                                                    </span>
                                                    <span ng-switch-default>
                                                        none
                                                    </span>
                                                </span>
                                            </p>
                                            <p class="card-text"><span>Activated: </span>
                                                <span ng-switch="info.activated">
                                                    <span ng-switch-when="1">
                                                        <i class="mdi mdi-shield text-success"></i>
                                                    </span>
                                                    <span ng-switch-when="0">
                                                        <i class="mdi mdi-shield-outline text-danger"></i>
                                                    </span>
                                                    <span ng-switch-default>
                                                        none
                                                    </span>
                                                </span>
                                            </p>
                                            <p class="card-text">
                                                <span>Status: </span>
                                                <span ng-switch="info.status">
                                                    <span ng-switch-when="1">
                                                        <i class="mdi mdi-lock-open text-success"></i>
                                                    </span>
                                                    <span ng-switch-when="0">
                                                        <i class="mdi mdi mdi-lock text-warning"></i>
                                                    </span>
                                                    <span ng-switch-default>
                                                        none
                                                    </span>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="password_form px-5 mt-4" style="display: none;">
                                    <h4 class=" mb-3">Change your account password</h4>
                                    <form ng-submit="change_admin_password()" id="change_password">
                                        <input type="text" name="verify_email" hidden value="{{info.email}}" id="verify_email" required>
                                        <div class="form-group">
                                            <label for="new_password">New password:</label>
                                            <input type="password" class="form-control " placeholder="new password" name="new_password" id="new_password" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="confirm_new_password">Confirm new password</label>
                                            <input type="password" class="form-control " placeholder="confirm new password" name="confirm_new_password" id="confirm_new_password" required>
                                        </div>
                                        <button class="btn btn-sm btn-info m-1 " type="submit">
                                        <div class="spinner-border text-light spinner-border-sm header_loader" role="status" style="display: none;">
                                        <span class="sr-only">...loading</span>
                                    </div>  Reset
                                            Password</button>
                                        <a class="btn btn-sm btn-light m-1 " ng-click="toggle_password_form()">

                                            <i class="mdi mdi-cancel mr-1"></i>Cancel</a>
                                    </form>

                                </div>
                            </section>
                        </div>
                        <div class="modal-footer d-flex justify-content-between px-4">

                            <button class="btn btn-sm btn-danger m-1 password_form_inverse" ng-click="toggle_password_form()"><i class="mdi mdi-adjust mr-1"></i>Change
                                Password
                            </button>


                            <button type="button" class="btn btn-light btn-sm password_form_inverse" data-dismiss="modal"><i class="mdi mdi-cancel mr-1"></i>Cancel
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->


    </nav>