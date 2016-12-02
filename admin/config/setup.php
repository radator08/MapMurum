<?php
//Setup File:

error_reporting(0);

#Database Connection:
include('../config/connection.php');

#Constants:
DEFINE('D_TEMPLATE', 'template');

#Functions:
include('functions/data.php');
include('functions/template.php');
include('functions/sandbox.php');

#Site Setup:
$debug = data_setting_value($dbc, 'debug-status');

$site_title = 'MapMurum';

if(isset($_GET['page'])) { #We use $_GET function to change the query dynamically through the browser

	$page = $_GET['page']; //Set $pageid to equal the value given in the url
	
} else {

	$page = 'tiles'; //Set $pageid equal to 1 or the Home Page

}


#Page Setup:
include('config/queries.php');



#User Setup:
$user = data_user($dbc, $_SESSION['username']);

?>