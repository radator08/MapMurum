<?php
//Javascript:


?>
<!-- jQuery -->
<script   src="//code.jquery.com/jquery-1.10.2.min.js"> </script>

<!-- jQuery UI -->
<script   src="//code.jquery.com/ui/1.10.4/jquery-ui.js"> </script>

<!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script>
	
	$(document).ready(function() {
		
		$("#console-debug").hide();
		
		$("#btn-debug").click(function() {
		  
		  $("#console-debug").toggle();
		  
		});
		
	});
	
</script>