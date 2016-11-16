<?php
//Setup File:

error_reporting(0);

#Database Connection:
include('config/connection.php');

#Constants:
DEFINE('D_TEMPLATE', 'template');

#Functions:
include('functions/sandbox.php');
include('functions/data.php');
include('functions/template.php');

#Site Setup:
$debug = data_setting_value($dbc, 'debug-status');

$path = get_path();

$site_title = 'MapMurum';

if(isset($_GET['page'])) { #We use $_GET function to change the query dynamically through the browser

	$pageid = $_GET['page']; //Set $pageid to equal the value given in the url
	
} else {

	$pageid = 'home'; //Set $pageid equal to 1 or the Home Page

}


#Page Setup
$page = data_page($dbc, $pageid);




?>