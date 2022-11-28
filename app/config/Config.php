<?php
//DB Params
define('DB_HOST', 'localhost');
define('DB_USER', 'root'); //////CHANGE TO YOUR DB NAME
define('DB_PASS', ''); //////CHANGE YOUR DB PASS
define('DB_NAME', 'tega');
define('PAYSTACK_SECRETE_KEY', 'sk_test_169769c2c9e54f64f0a4c59a30289aa8281b7247');
define('SENDINBLUE_API_KEY', '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');
//REMOTE DB
// define('DB_USER', 'tegacom_root');//////CHANGE TO YOUR DB NAME
// define('DB_PASS', 'admin99yu76');//////CHANGE YOUR DB PASS
// define('DB_NAME', 'tegacom_cart');

//app Root
define('APP_ROOT', dirname(dirname(__FILE__)));
define('APP_NAME', 'Tega');
define('APP_DESCRIPTION', 'Website design | Web &amp; Mobile app development company in Nigeria, delivering innovative, scalable web &amp; mobile app solutions for startups and business needs.');
define('APP_KEYWORD', 'tega, Market, Online Store, Shopping App Stor, Nigerian Mall, Shopping Mall, Online payment, Online Market, B2C, Seller Account');
define('UPLOAD_SIZE_PROFILE_IMG', 4);
define('UPLOAD_SIZE_PRODUCT_IMG', 5);
//URL Root
define("FOLDER", "tega");
//define('APP_URL', 'https://' . $_SERVER['HTTP_HOST']);
define('APP_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/' . FOLDER);

//site Name 
define('SITENAME', 'Tega');

//APP version
define('APP_VERSION', '1.0.0');