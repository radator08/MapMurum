<?php

	#Database Connection:
	include('config/connection.php');
	
 
	 	$q = "SELECT * FROM tiles WHERE t_section = '$_GET[t_section]' AND t_row = $_GET[t_row] AND t_column = $_GET[t_column]";
	    $r = mysqli_query($dbc, $q);
		$list = mysqli_fetch_assoc($r);
		 
		

?>

<div class="image">

      <img src="images/Huella_vacia.jpg" alt="" width="340" height="340"/>

      <h1 class="a"><font color="#FFFBFB"><?php echo substr($list['year'], 0,-3);?></font></h1>
      <h1 class="b"><font color="#FFFBFB"><?php echo substr($list['year'], 1,-2);?></font></h1>
      <h1 class="c"><font color="#FFFBFB"><?php echo substr($list['year'], 2,-1);?></font></h1>
      <h1 class="d"><font color="#FFFBFB"><?php echo substr($list['year'], 3,3);?></font></h1>
      
      <h3 class="e"><font color="#FFFBFB"><?php echo $list['first']." ".$list['middle'];?></font></h3>
      <h3 class="f"><font color="#FFFBFB"><?php echo $list['last'];?></font></h3>

</div>

<div class="image2">
	
	<img src="images/seccion_<?php echo $list['t_section']?>.jpg" alt="" height="280"/>
	
</div>


<div class="location">
	
	<h1><b><u>Tile location</u></b></h1>
	<h1>Section: <?php echo $list['t_section'];?></h1>
	<h1>Row: <?php echo $list['t_row'];?></h1>
	<h1>Column: <?php echo $list['t_column'];?></h1>
	
</div>


<div class="button1">
   	
   		<button type="button" class="btn btn-default" onclick="location.href = 'index.php'">Go Back</button>
   	
</div>

<style>

.button1 { 
   position: absolute; 
   width: 100%; /* for IE 6 */
   left: 580px;
   top: 550px;
}


.location { 
   position: absolute; 
   width: 100%; /* for IE 6 */
   left: 950px;
   top: 100px;
   color: #3e7444;
}

.image2 { 
   position: absolute; 
   width: 100%; /* for IE 6 */
   left: 50px;
   top: 100px;
}



.image { 
   position: relative; 
   width: 100%; /* for IE 6 */
   left: 450px;
   top: 100px;
}

.a { 
   position: absolute; 
   font-size: 50px;
   top: 100px; 
   left: 45px; 
   width: 100%; 
}

.b { 
   position: absolute; 
   font-size: 50px;
   top: 20px; 
   left: 115px; 
   width: 100%;
 }
 
 .c { 
   position: absolute; 
   font-size: 50px;
   top: 20px; 
   left: 210px; 
   width: 100%;
 }
 
 .d { 
   position: absolute;
   font-size: 50px; 
   top: 110px; 
   left: 280px; 
   width: 100%;
 }
 
 .e { 
   position: absolute; 
   top: 210px; 
   left: 105px; 
   width: 100%;
 }
 
 .f { 
   position: absolute; 
   top: 240px; 
   left: 85px; 
   width: 100%;
 }
</style>