<?php 

include 'database/connect.php';
include 'functions/site_functions.php';
include 'functions/day_function.php';
include 'header.php';



$controller = (isset($_GET['controller']) && $_GET['controller'] != '' )? $_GET['controller'] : false;


if($controller && file_exists('controllers/'.$controller.'.php')) {
	require_once('controllers/'.$controller.'.php');
} else {
	ob_clean();
	die();
}

include 'footer.php';