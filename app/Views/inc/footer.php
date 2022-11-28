  
  <!--========== FOOTER ==========-->
        <footer class="footer">
            <!-- Links -->
            <div class="footer-seperator">
                <div class="content-lg container">
                    <div class="row">
                        <div class="col-sm-2 sm-margin-b-50">
                             <h2 class="color-white">Explore</h2>
                            <!-- List -->
                            <ul class="list-unstyled footer-list">
                                <li class="footer-list-item"><a class="footer-list-link" href="#">Home</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">About</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">Products</a></li>
                               
                            </ul>
                            <!-- End List -->
                        </div>
                        <div class="col-sm-4 sm-margin-b-30">
                             <h2 class="color-white">Address</h2>
                             <p class="color-white">Emomel Plaza warri, Delta State</p>
                            <ul class="list-unstyled footer-list">
                                <li class="footer-list-item">
                                    <a style="display: flex; justify-content: flex-start;" href="#"><span style="font-size: 21px;color: white; font-weight: 400"><i style="width: 1.25em" class="fa fa-phone-square" aria-hidden="true"></i></span><span style="padding-left: 5px; align-self: center">+2348149150368</span></a>
                                </li>
                                <li class="footer-list-item">
                                    <a style="display: flex; justify-content: flex-start;" href="#"><span style="font-size: 21px;color: white; font-weight: 400"><i style="width: 1.25em" class="fa fa-phone-square" aria-hidden="true"></i></span><span style="padding-left: 5px; align-self: center">+2348149150368</span></a>
                                </li>
                                <li class="footer-list-item">
                                    <a style="display: flex; justify-content: flex-start;" href="#"><span style="font-size: 21px;color: white; font-weight: 400"><i style="width: 1.25em" class="fa fa-address-book" aria-hidden="true"></i></span><span style="padding-left: 5px; align-self: center">+2348149150368</span></a>
                                </li>
                                
                            </ul>
                            <!-- End List -->
                        </div>
                        <div class="col-sm-5 sm-margin-b-30" ng-controller="homeController">
                            <h2 class="color-white">Contact us</h2>
                             <ul class="list-unstyled footer-list" style="display: flex; ">
                                <li class="footer-list-item" style="padding-left: 20px">
                                    <a style="display: flex; justify-content: flex-start;" href="#"><span style="font-size: 21px;color: white; font-weight: 400"><i style="width: 1.25em" class="fab fa-facebook" aria-hidden="true"></i></span><span style="padding-left: 5px; align-self: center"></span></a>
                                </li>
                                <li class="footer-list-item" style="padding-left: 20px">
                                    <a style="" href="#"><span style="font-size: 21px;color: white; font-weight: 400"><i style="width: 1.25em" class="fab fa-twitter" ></i></span></a>
                                </li>
                                <li class="footer-list-item" style="padding-left: 20px">
                                    <a style="display: flex; justify-content: flex-start;" href="#"><span style="font-size: 21px;color: white; font-weight: 400"><i style="width: 1.25em" class="fab fa-instagram" aria-hidden="true"></i></span></a>
                                </li>
                                
                            </ul>
                            <!--
                            <input type="text" class="form-control footer-input margin-b-20" placeholder="Name" required>
                            <input type="email" class="form-control footer-input margin-b-20" placeholder="Email" required>
                            <input type="text" class="form-control footer-input margin-b-20" placeholder="Phone" required>
                            <textarea class="form-control footer-input margin-b-30" rows="6" placeholder="Message" required></textarea>
                        -->
                        <form id="newsletter_form" ng-submit="submit_news()">
                             <div class="alert alert-info result" style="display: none;"></div>
                            <input type="text" name="email" class="form-control footer-input margin-b-20" placeholder="Newsletter Subscription" required>
                            <button type="submit" class="btn-theme btn-theme-sm btn-base-bg text-uppercase">Subscribe</button>
                        </form>
                        
                        </div>
                    </div>
                    <!--// end row -->
                </div>
            </div>
            <!-- End Links -->

            <!-- Copyright -->
            <div class="content container">
                <div class="row">
                    <div class="col-xs-6">
                        <img class="footer-logo" src="<?php echo APP_URL.'/public/assets/'?>img/logo.png" alt="Asentus Logo">
                    </div>
                     <div class="col-xs-6">
                        <h4><a class="footer-list-link" href="{{dirlocation}}home/policy">Privacy Policy</a></h4>
                    </div>
                   
                </div>
                <!--// end row -->
            </div>
            <!-- End Copyright -->
        </footer>
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>