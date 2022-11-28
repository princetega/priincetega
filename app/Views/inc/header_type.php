<?php 
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

         <title><?php echo APP_NAME;?> | A Web &amp; Mobile App Development Company In Nigeria</title>

    <meta name="keywords" content="<?php echo APP_KEYWORD;?>" />
    <meta name="description" content="<?php echo APP_DESCRIPTION;?>" />
   <link rel='stylesheet' id='google-fonts-1-css'  href='https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CCabin+Sketch%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;ver=5.4.10' type='text/css' media='all' />


    <!-- Favicon -->
    <!--
    <link
      rel="icon"
      type="image/x-icon"
      href="<?php echo APP_URL;?>/public/assets/images/tega_logo.png"/>
    -->

    <script type="text/javascript">
      WebFontConfig = {
        google: {
          families: [
            "Open+Sans:300,400,600,700,800",
            "Poppins:300,400,500,600,700",
            "Shadows+Into+Light:400",
          ],
        },
      };
      (function (d) {
        var wf = d.createElement("script"),
          s = d.scripts[0];
        wf.src = "<?php echo APP_URL;?>/public/assets/js/webfont.js";
        wf.async = true;
        s.parentNode.insertBefore(wf, s);
      })(document);
    </script>

        <!-- GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="<?php echo APP_URL; ?>/public/user-admin/vendor_components/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo APP_URL;?>/public/assets/vendor/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo APP_URL;?>/public/assets/vendor/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
          <link href="<?php echo APP_URL;?>/public/assets/vendor/owl.carousel.min.css" rel="stylesheet" type="text/css"/>
           <link href="<?php echo APP_URL;?>/public/assets/vendor/owl.theme.default.min.css" rel="stylesheet" type="text/css"/>
          

        <!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="<?php echo APP_URL;?>/public/assets/css/animate.css" rel="stylesheet">
        <link href="<?php echo APP_URL;?>/public/assets/vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css"/>

        <!-- THEME STYLES -->
        <link href="<?php echo APP_URL;?>/public/assets/css/layout.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" href="<?php echo APP_URL;?>/public/assets/img/strategy/32x32.png" sizes="32x32" />
<link rel="icon" href="<?php echo APP_URL;?>/public/assets/img/strategy/192x192.png" sizes="192x192" />
<link rel="apple-touch-icon" href="<?php echo APP_URL;?>/public/assets/img/strategy/180x180.png" />
<meta name="msapplication-TileImage" content="<?php echo APP_URL;?>/public/assets/img/strategy/270x270.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
        <style type="text/css">
          .parallax {
  background: url(<?php echo APP_URL;?>/public/assets/img/1920x1080/01.jpg) no-repeat;
  background-size: cover;
  background-position: center center;
   min-height: 500px;
   background-attachment: fixed;
}
          .parallaxs:before {
 content: '';
  background-color: rgba(0, 0, 0, 0.7);
  position: absolute;
  height: 500px;
  width: 100%;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
}
       .parallaxss:before {
 content: '';
  background-color: rgba(63, 152, 171, 0.9);
  position: absolute;
  height: 600px;
  width: 100%;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
}
.parallax-content h3, h4, p {
  position: relative;
z-index: 10;
}
        
          .parallax-mirror{
            z-index: 1000000;
          }
          /* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.5);
z-index: 200000000;
}

/* Links inside the dropdown */
.dropdown-content a {
  z-index: 20000000000;
  position: relative;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  font-size: 14px;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block; width: 200px;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41; width: 200px; }


        </style>
    </head>
    <!-- END HEAD -->

    <!-- BODY -->
   <body ng-app="tega">
<base href="<?php echo APP_URL?>/">
