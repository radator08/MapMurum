<?php 

#Start the session:
session_start();

if(!isset($_SESSION['username'])) {
	header('Location: login.php');
}


?>

<?php include('config/setup.php'); ?>

<!DOCTYPE html>
<html>

	<head>
	
		<!--<?php echo $page['title'].' | '.$site_title; ?>--> 
		<title> Admin Panel | MapMurum</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	
		<?php include('config/css.php'); ?>
		
		<?php include('config/js.php'); ?>
		
	</head>
	
	<body>
	
		<div id="wrap">
	
			<?php include(D_TEMPLATE.'/navigation.php'); //Main Navigation ?>