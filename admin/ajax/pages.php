<?php 

include('../../config/connection.php');

$id = $_GET['id'];

$q = "DELETE FROM pages WHERE id = $id";
$r = mysqli_query($dbc, $q);

if($r) {
	
	echo 'Page Deleted';
	
} else {
	
	echo 'There was an error...<br>';
	echo $q.'<br>';
	echo mysql_error($dbc);
	
}



?>