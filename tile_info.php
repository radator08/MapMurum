<?php

	#Database Connection:
	include('config/connection.php');
	
 
	 	$q = "SELECT * FROM tiles WHERE t_section = '$_GET[t_section]' AND t_row = $_GET[t_row] AND t_column = $_GET[t_column]";
	    $r = mysqli_query($dbc, $q);
		$list = mysqli_fetch_assoc($r);
		
	echo $list['first'].' '.$list['middle'].' '.$list['last'];
	echo "<br>";
	echo $list['year'];
		

?>