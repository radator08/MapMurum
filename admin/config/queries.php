<?php 
		
	switch ($page) {
		
		case 'pages':
			
			if(isset($_POST['submitted']) == 1) {
		
				$title = mysqli_real_escape_string($dbc, $_POST['title']);
				$label = mysqli_real_escape_string($dbc, $_POST['label']);
				$header = mysqli_real_escape_string($dbc, $_POST['header']);
				$body = mysqli_real_escape_string($dbc, $_POST['body']);
				
				if(isset($_POST['id']) != '') {
					$action = 'updated';
					$q = "UPDATE pages SET user = $_POST[user], slug = '$_POST[slug]', title = '$title', label = '$label', header = '$header', body = '$body' WHERE id = $_GET[id]";
				} else {
					$action = 'added';
					$q = "INSERT INTO pages (user, slug, title, label, header, body) VALUES ($_POST[user], '$_POST[slug]', '$title', '$label', '$header', '$body') ";
				}
				
				$r = mysqli_query($dbc, $q);
				
				
				if($r) {
							
					$message = '<p class="alert alert-success">Page was '.$action.'!</p>';
					
				} else {
					
					$message = '<p class="alert alert-danger">Page could not be '.$action.' because: '.mysqli_error($dbc).'</p>';
					$message .= '<p class="alert alert-warning">Query: '.$q.'</p>';
				
				}
			}
			
			if(isset($_GET['id'])) { $opened = data_page($dbc, $_GET['id']); }
			
		break;
		
		case 'users':
			
			if(isset($_POST['submitted']) == 1) {
		
				$first = mysqli_real_escape_string($dbc, $_POST['first']);
				$last = mysqli_real_escape_string($dbc, $_POST['last']);
				
				if ($_POST['password'] != '') {
					
					if($_POST['password'] == $_POST['passwordv']) {
						$password = " password = sha1('$_POST[password]'),";
						$verify = true;
					} else {
						
						$verify = false;
						
					}
				} else {
					
					$verify = false;
					
				}
				
				if(isset($_POST['id']) != '') {
					$action = 'updated';
					$q = "UPDATE users SET first = '$first', last = '$last', email = '$_POST[email]', $password status = $_POST[status] WHERE id = $_GET[id]";
					$r = mysqli_query($dbc, $q);
				
				} else {
					
					$action = 'added';
					
					$q = "INSERT INTO users (first, last, email, password, status) VALUES ('$first', '$last', '$_POST[email]', sha1('$_POST[password]'), '$_POST[status]') ";
					
					if($verify == true) {
						$r = mysqli_query($dbc, $q);
					}
				}
				
				
				if($r) {
							
					$message = '<p class="alert alert-success">User was '.$action.'!</p>';
					
				} else {
					
					$message = '<p class="alert alert-danger">User could not be '.$action.' because: '.mysqli_error($dbc).'</p>';
					if($verify == false) {
						$message .= '<p class="alert alert-danger">Password fields empty and/or do not match.</p>';
					}
					$message .= '<p class="alert alert-warning">Query: '.$q.'</p>';
				
				}
			}
			
			if(isset($_GET['id'])) { $opened = data_user($dbc, $_GET['id']); }
			
		break;
			
		case 'settings':
		
			if(isset($_POST['submitted']) == 1) {
		
				$label = mysqli_real_escape_string($dbc, $_POST['label']);
				$value = mysqli_real_escape_string($dbc, $_POST['value']);
				
				
				if(isset($_POST['id']) != '') {
					$action = 'updated';
					$q = "UPDATE settings SET id = '$_POST[id]', label = '$label', value = '$value' WHERE id = '$_POST[openedid]'";
					$r = mysqli_query($dbc, $q);
				
				} 
				
				if($r) {
							
					$message = '<p class="alert alert-success">Setting was '.$action.'!</p>';
					
				} else {
					
					$message = '<p class="alert alert-danger">Setting could not be '.$action.' because: '.mysqli_error($dbc).'</p>';
					$message .= '<p class="alert alert-warning">Query: '.$q.'</p>';
				
				}
			}
			
		break;
		
		case 'tiles':
		
			if(isset($_POST['submitted']) == 1) {
		
				$first = mysqli_real_escape_string($dbc, $_POST['first']);
				$middle = mysqli_real_escape_string($dbc, $_POST['middle']);
				$last = mysqli_real_escape_string($dbc, $_POST['last']);
				
				if(isset($_POST['id']) != '') {
					$action = 'updated';
					$q = "UPDATE tiles SET first = '$first', middle = '$middle', last = '$last', year = '$_POST[year]', t_section = '$_POST[t_section]', t_row = '$_POST[t_row]', t_column = '$_POST[t_column]' WHERE id = $_GET[id]";
					$r = mysqli_query($dbc, $q);
				
				} else {
					
					$action = 'added';
					
					$q = "INSERT INTO tiles (first, middle, last, year, t_section, t_row, t_column) VALUES ('$first', '$middle', '$last', '$_POST[year]', '$_POST[t_section]', '$_POST[t_row]', '$_POST[t_column]') ";
					$r = mysqli_query($dbc, $q);
					
				}
				
				
				if($r) {
							
					$message = '<p class="alert alert-success">Tile was '.$action.'!</p>';
					
				} else {
					
					$message = '<p class="alert alert-danger">Tile could not be '.$action.' because: '.mysqli_error($dbc).'</p>';
					$message .= '<p class="alert alert-warning">Query: '.$q.'</p>';
				
				}
			}
			
			if(isset($_GET['id'])) { $opened = data_tile($dbc, $_GET['id']); }
	
		break;
			
		default:
			
		break;
	}	
		
					
	
					
?>	