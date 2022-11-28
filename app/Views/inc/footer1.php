
<!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        <script src="<?php echo APP_URL; ?>/public/assets/vendor/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo APP_URL; ?>/public/assets/vendor/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="<?php echo APP_URL; ?>/public/assets/vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL PLUGINS -->
        <script src="<?php echo APP_URL; ?>/public/assets/vendor/jquery.easing.js" type="text/javascript"></script>
        <script src="<?php echo APP_URL; ?>/public/assets/vendor/jquery.back-to-top.js" type="text/javascript"></script>
        <script src="<?php echo APP_URL; ?>/public/assets/vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
       
        <script src="<?php echo APP_URL; ?>/public/assets/vendor/jquery.wow.min.js" type="text/javascript"></script>

        <script src="<?php echo APP_URL; ?>/public/assets/vendor/owl.carousel.min.js" type="text/javascript"></script>
       

       
        <!--
         <script src="<?php echo APP_URL; ?>/public/assets/vendor/jquery.parallax.min.js" type="text/javascript"></script>
       -->
       <script src="<?php echo APP_URL; ?>/public/assets/vendor/superfish/hoverIntent.js"></script>
  <script src="<?php echo APP_URL; ?>/public/assets/vendor/superfish/superfish.min.js"></script>
        <script src="<?php echo APP_URL; ?>/public/assets/vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo APP_URL; ?>/public/assets/vendor/masonry/jquery.masonry.pkgd.min.js" type="text/javascript"></script>
        <script src="<?php echo APP_URL; ?>/public/assets/vendor/masonry/imagesloaded.pkgd.min.js" type="text/javascript"></script>
          <script src="<?php echo APP_URL; ?>/public/assets/js/parallax.min.js" type="text/javascript"></script> 
        <!-- PAGE LEVEL SCRIPTS -->
        <script src="<?php echo APP_URL; ?>/public/assets/js/layout.js" type="text/javascript"></script>
        <!--
        <script src="<?php echo APP_URL; ?>/public/assets/js/components/wow.min.js" type="text/javascript"></script>
      -->
    

        <script src="<?php echo APP_URL; ?>/public/assets/js/components/swiper.min.js" type="text/javascript"></script>
        <script src="<?php echo APP_URL; ?>/public/assets/js/components/masonry.min.js" type="text/javascript"></script>
          <script src="<?php echo APP_URL; ?>/public/assets/js/wow.min.js" type="text/javascript"></script>
          <script src="<?php echo APP_URL; ?>/public/assets/js/components/wow.js" type="text/javascript"></script>
        
       
    <script src="<?php echo APP_URL; ?>/public/assets/js/angular/angular.js"></script>
    <script src="<?php echo APP_URL; ?>/public/assets/js/angular/angular-route.js"></script>
    <script src="<?php echo APP_URL; ?>/public/assets/js/dirPagination.js"></script>
    <script src="<?php echo APP_URL; ?>/public/assets/js/angular/angular-sanitize.js"></script>
    <script src="<?php echo APP_URL; ?>/public/assets/js/angular/angular-cookies.js"></script>
    <script src="<?php echo APP_URL; ?>/public/assets/js/angular/ngStorage.min.js"></script>
    <script src="<?php echo APP_URL; ?>/public/assets/js/angular/angular-ui-tinymce.js"></script>
    <!-- MODULE -->
    <script src="<?php echo APP_URL.'/public/assets/js/controllers/module.js';?>"></script>

  <?php
  if (isset($js)) {
    foreach ($js as $jsfile) {
      echo "<script src=".APP_URL."/public/assets/js/".$jsfile."></script>";
    }
  }
//////EXTERNAL JAVASCRIPT
  if (isset($external_js)) {
    foreach ($external_js as $external_jsfile) {
      echo "<script type='text/javascript' src=".$external_jsfile."></script>";
    }
  }
?>
<script src="<?php echo APP_URL.'/public/assets/js/controllers/web/headerController.js';?>"></script>
<script src="<?php echo APP_URL.'/public/assets/js/controllers/web/productController.js';?>"></script>
<script src="<?php echo APP_URL.'/public/assets/js/controllers/web/homeController.js';?>"></script>
<script src="<?php echo APP_URL.'/public/assets/js/controllers/web/messageController.js';?>"></script>
<script src="<?php echo APP_URL.'/public/assets/js/controllers/web/profileController.js';?>"></script>
<script src="<?php echo APP_URL.'/public/assets/js/controllers/web/packageController.js';?>"></script>
<script src="<?php echo APP_URL.'/public/assets/js/controllers/webapp.js';?>"></script>
<script src="<?php echo APP_URL.'/public/assets/js/controllers/directives.js';?>"></script>


  </body>
</html>