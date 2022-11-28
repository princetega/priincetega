<!-- ./wrapper -->
	<!-- jQuery 3 -->
	<script src="<?php echo APP_URL; ?>/public/admin-assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>
	
	<!-- fullscreen -->
	<script src="<?php echo APP_URL; ?>/public/admin-assets/vendor_components/screenfull/screenfull.js"></script>

	<!-- jQuery ui -->
	<script src="<?php echo APP_URL; ?>/public/admin-assets/vendor_components/jquery-ui/jquery-ui.js"></script>
	
	<!-- popper -->
	<script src="<?php echo APP_URL; ?>/public/admin-assets/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="<?php echo APP_URL; ?>/public/admin-assets/vendor_components/bootstrap/dist/js/bootstrap.js"></script>	
	<!-- Bootstrap Select -->
	<script src="<?php echo APP_URL; ?>/public/admin-assets/vendor_components/bootstrap-select/dist/js/bootstrap-select.js"></script>
	
	<!-- Bootstrap tagsinput -->
	<script src="<?php echo APP_URL; ?>/public/admin-assets/vendor_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.js"></script>
	
	<!-- Bootstrap touchspin -->
	<script src="<?php echo APP_URL; ?>/public/admin-assets/vendor_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
	<!-- InputMask -->
	<script src="<?php echo APP_URL; ?>/public/admin-assets/vendor_plugins/input-mask/jquery.inputmask.js"></script>
	<script src="<?php echo APP_URL; ?>/public/admin-assets/vendor_plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
	<script src="<?php echo APP_URL; ?>/public/admin-assets/vendor_plugins/input-mask/jquery.inputmask.extensions.js"></script>
	<!-- date-range-picker -->
	<script src="<?php echo APP_URL; ?>/public/admin-assets/vendor_components/moment/min/moment.min.js"></script>
	<script src="<?php echo APP_URL; ?>/public/admin-assets/vendor_components/bootstrap-daterangepicker/daterangepicker.js"></script>
	
	<!-- bootstrap datepicker -->
	<script src="<?php echo APP_URL; ?>/public/admin-assets/vendor_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
	
	<!-- bootstrap color picker -->
	<script src="<?php echo APP_URL; ?>/public/admin-assets/vendor_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
	
	<!-- bootstrap time picker -->
	<script src="<?php echo APP_URL; ?>/public/admin-assets/vendor_plugins/timepicker/bootstrap-timepicker.min.js"></script>
	
	<!-- Select2 -->
	<script src="<?php echo APP_URL; ?>/public/admin-assets/vendor_components/select2/dist/js/select2.full.js"></script>
	
	<!-- Slimscroll -->
	<script src="<?php echo APP_URL; ?>/public/admin-assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js"></script>
	<!-- iCheck 1.0.1 -->
	<script src="<?php echo APP_URL; ?>/public/admin-assets/vendor_plugins/iCheck/icheck.min.js"></script>
	
	<!-- FastClick -->
	<script src="<?php echo APP_URL; ?>/public/admin-assets/vendor_components/fastclick/lib/fastclick.js"></script>
	
	<!-- peity -->
	<script src="<?php echo APP_URL; ?>/public/admin-assets/vendor_components/jquery.peity/jquery.peity.js"></script>
	
	<!-- Sparkline -->
	<script src="<?php echo APP_URL; ?>/public/admin-assets/vendor_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
	

		
	

 
    <!-- This is data table -->
    <script src="<?php echo APP_URL; ?>/public/admin-assets/vendor_components/datatable/datatables.min.js"></script>
	
	<!-- Sweet-Alert  -->
    <script src="<?php echo APP_URL; ?>/public/admin-assets/vendor_components/sweetalert/sweetalert.min.js"></script>
    <script src="<?php echo APP_URL; ?>/public/admin-assets/vendor_components/sweetalert/jquery.sweet-alert.custom.js"></script>

    <script src="<?php echo APP_URL; ?>/public/admin-assets/main/js/pages/advanced-form-element.js"></script>
     <!-- Bankio admin for Data Table -->
	<script src="<?php echo APP_URL; ?>/public/admin-assets/main/js/pages/data-table.js"></script>
	<script src="<?php echo APP_URL; ?>/public/admin-assets/main/js/pages/project-table.js"></script>
<!-- Bankio admin App -->
	<script src="<?php echo APP_URL; ?>/public/admin-assets/main/js/template.js"></script>
	 <!-- Form validator JavaScript -->
    <script src="<?php echo APP_URL; ?>/public/admin-assets/main/js/pages/validation.js"></script>
    <script src="<?php echo APP_URL; ?>/public/admin-assets/main/js/pages/form-validation.js"></script>
  	
	
	

	
	<script src="<?php echo APP_URL; ?>/public/admin-assets/main/js/pages/validation.js"></script>
    <script src="<?php echo APP_URL; ?>/public/admin-assets/main/js/pages/form-validation.js"></script>
	
	<!-- steps  -->
	<script src="<?php echo APP_URL; ?>/public/admin-assets/vendor_components/jquery-steps-master/build/jquery.steps.js"></script>
   
   <!-- validate  -->
    <script src="<?php echo APP_URL; ?>/public/admin-assets/vendor_components/jquery-validation-1.17.0/dist/jquery.validate.min.js"></script>
      <script src="<?php echo APP_URL; ?>/public/admin-assets/validate-password/js/jquery.passwordRequirements.min.js"></script>
	
	<!-- Sweet-Alert  -->
    <script src="<?php echo APP_URL; ?>/public/admin-assets/vendor_components/sweetalert/sweetalert.min.js"></script>
    
   


      <script src="<?php echo APP_URL; ?>/public/assets/js/angular/angular.js"></script>
    <script src="<?php echo APP_URL; ?>/public/assets/js/angular/angular-route.js"></script>
    <script src="<?php echo APP_URL; ?>/public/assets/js/dirPagination.js"></script>
    <script src="<?php echo APP_URL; ?>/public/assets/js/angular/angular-sanitize.js"></script>
    <script src="<?php echo APP_URL; ?>/public/assets/js/angular/angular-cookies.js"></script>
    <script src="<?php echo APP_URL; ?>/public/assets/js/angular/ngStorage.min.js"></script>
    <!-- MODULE -->
    <script src="<?php echo APP_URL.'/public/assets/js/controllers/module.js';?>"></script>
    <script src="<?php echo APP_URL . '/public/assets/js/controllers/admindashboard/headerController.js'; ?>"></script>
<script src="<?php echo APP_URL; ?>/public/assets/js/controllers/dashboardapp.js"></script>

  <?php
  if (isset($js)) {
    foreach ($js as $jsfile) {
      echo "<script src=".APP_URL."/".$jsfile."></script>";
    }
  }
//////EXTERNAL JAVASCRIPT
  if (isset($external_js)) {
    foreach ($external_js as $external_jsfile) {
      echo "<script type='text/javascript' src=".$external_jsfile."></script>";
    }
  }
?>

<script src="<?php echo APP_URL.'/public/assets/js/controllers/directives.js';?>"></script>
</body>

</html>