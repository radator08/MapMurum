<?php

	#Database Connection:
	include('config/connection.php');
	
	
?>
	
<html>
	<head>
    	<title>Search results</title>
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    	<link rel="stylesheet" type="text/css" href="style.css"/>
	</head>
	<body>
	<?php
	    $query = $_GET['query']; 
	    // gets value sent over search form
	     
	    $min_length = 3;
	   
	     
	    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
	         
	       // $query = htmlspecialchars($dbc, $query); 
	        // changes characters used in html to their equivalents, for example: < to &gt;
	         
	        $query = mysqli_real_escape_string($dbc, $query);
	        // makes sure nobody uses SQL injection
	        
	        $q = "SELECT * FROM tiles WHERE (`first` LIKE '%".$query."%') OR (`middle` LIKE '%".$query."%') OR 
	        ((`last` LIKE '%".$query."%')) OR (`year` LIKE '%".$query."%') OR (CONCAT(first ,' ', last) LIKE '%".$query."%')
	        OR (CONCAT(first ,' ', middle) LIKE '%".$query."%') OR (CONCAT(middle ,' ', last) LIKE '%".$query."%') 
	        OR (CONCAT(first ,' ', year) LIKE '%".$query."%') OR (CONCAT(first ,' ', middle, ' ', last) LIKE '%".$query."%')
	        OR (CONCAT(last ,' ', first) LIKE '%".$query."%') OR (CONCAT(first ,' ', last, ' ', year) LIKE '%".$query."%')";
			
	         
	         
	        $r = mysqli_query($dbc, $q) or die(mysql_error());
		
	             
	         
	        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
	        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
	        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
	         
	        if(mysqli_num_rows($r) > 0){ // if one or more rows are returned do following
	          ?>
	             
	            <div class="message1">
   	
   					<h1><font color="#3e7444"><i>Search Results:</i></font></h1>
   	
   				</div> 
   				
   				<div style="margin-top:75px; margin-left:430px;">
   				 <?php
   				
	            while($results = mysqli_fetch_array($r)){
	            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
	             
	             ?>
	             <div class="list1";>
	            	<a class="list-group-item" href="tile_info.php?t_section=<?php echo $results['t_section']; ?>&t_row=<?php echo $results['t_row']; ?>&t_column=<?php echo $results['t_column']; ?>">
						<h4 class="list-group-item-heading">Name: <?php echo $results['first']." ".$results['middle']." ".$results['last']."  (Year: ".$results['year'].")"; ?></h4>
					<!--<p class="list-group-item-text"><?php //echo $blurb; ?></p> -->
					</a>
				</div>
				
	          <?php  } ?>
	          
	          </div>
	          
	          <?php
	             
	        }
	        else{ // if there is no matching rows do following
	            echo "No results";
	        }
	         
	    }
	    else{ // if query length is less than minimum
	        echo "Minimum length is ".$min_length;
	    }
	?>
	
	<div class="button1">
   	
   		<button type="button" class="btn btn-default" onclick="location.href = 'index.php'">Go Back</button>
   	
   </div>
   
</body>
<html/>

<style>
	
.message1 { 
   position: absolute; 
   width: 100%; /* for IE 6 */
   left: 500px;
   top: -20px;
}


.button1 { 
   position: absolute; 
   width: 100%; /* for IE 6 */
   left: 1200px;
   top: 5px;
}

	
</style>
