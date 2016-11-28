<h1>Tiles Manager</h1>

<div class="row">
	
	<div class="col-md-3">
	
		<div class="list-group">
			
			<a class="list-group-item" href="?page=tiles">
				<i class="fa fa-plus"></i> New Tiles
			</a>
			
		<!--
		
		<?php 
			
			$q = "SELECT * FROM tiles ORDER BY first ASC";
			$r = mysqli_query($dbc, $q);
			
			while($list = mysqli_fetch_assoc($r)) { 
				
				$list = data_user($dbc, $list['id']);
				//$blurb = substr(strip_tags($list['body']), 0, 100);
				
			?>
				
			<a class="list-group-item <?php selected($list['id'], $opened['id'], 'active'); ?>" href="index.php?page=tiles&id=<?php echo $list['id']; ?>">
				<h4 class="list-group-item-heading"><?php echo $list['fullname_reverse']; ?></h4>
			</a>
			
			
				
		<?php } ?>
		
		
		-->
			
		</div>
		
	</div>
	
	<div class="col-md-9">
		
		<?php if(isset($message)) { echo $message; } ?>

		
		<form action="index.php?page=tiles&id=<?php echo $opened['id']; ?>" method="post" role="form">
				
			<div class="form-group">
				
				<label for="first">First Name:</label>
				<input class="form-control" type="text" name="first" id="first" value="<?php echo $opened['first'] ;?>" placeholder="First Name" autocomplete="off" />
				
			</div>
			
			<div class="form-group">
				
				<label for="middle">Middle Name:</label>
				<input class="form-control" type="text" name="middle" id="middle" value="<?php echo $opened['middle'] ;?>" placeholder="Middle Name" autocomplete="off" />
				
			</div>
			
			<div class="form-group">
				
				<label for="last">Last Name:</label>
				<input class="form-control" type="text" name="last" id="last" value="<?php echo $opened['last'] ;?>" placeholder="Last Name" autocomplete="off"/>
				
			</div>
			
			<div class="form-group">
				
				<label for="year">Graduation Year:</label>
				<input class="form-control" type="text" name="year" id="year" value="<?php echo $opened['year'] ;?>" placeholder="Graduation Year" autocomplete="off"/>
				
			</div>
			
			
			<div class="form-group">
				
				<label for="t_section">Section:</label>
				<input class="form-control" type="text" name="t_section" id="t_section" value="<?php echo $opened['t_section'] ;?>" placeholder="Section" autocomplete="off"/>
				
			</div>
			
			<div class="form-group">
				
				<label for="t_row">Row:</label>
				<input class="form-control" type="text" name="t_row" id="t_row" value="<?php echo $opened['t_row'] ;?>" placeholder="Row" autocomplete="off"/>
				
			</div>
			
			<div class="form-group">
				
				<label for="t_column">Column:</label>
				<input class="form-control" type="text" name="t_column" id="t_column" value="<?php echo $opened['t_column'] ;?>" placeholder="Column" autocomplete="off"/>
				
			</div>
			
			<button type="submit" class="btn btn-default">Save</button>
			<input type="hidden" name="submitted" value="1">
			<?php if(isset($opened['id'])) { ?>
				<input type="hidden" name="id" value="<?php echo $opened['id'] ;?>">
			<?php } ?>
		</form>
		
	</div>
</div>