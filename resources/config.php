<?php


ob_start();

session_start();
// session_destroy();

defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);


defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT", __DIR__ . DS . "templates/front");

defined("TEMPLATE_BACK") ? null : define("TEMPLATE_BACK", __DIR__ . DS . "templates/back");


defined("UPLOAD_DIRECTORY") ? null : define("UPLOAD_DIRECTORY", "../resources/uploads");


defined("DB_HOST") ? null : define("DB_HOST", "188.166.227.90");

defined("DB_USER") ? null : define("DB_USER","connection");


defined("DB_PASS") ? null : define("DB_PASS", "123456");

defined("DB_NAME") ? null : define("DB_NAME",  "test-ecom");



$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

require_once("functions.php");
require_once("cart.php");



 ?>
