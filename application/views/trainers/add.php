	<?php 
		echo $this->session->flashdata('form');
		$attributes= array('role'=>'form','class'=>'row g-3');
		echo form_open_multipart("trainers/add",$attributes); 
	?>

	
	
	
	<button type="submit" class="btn btn-primary">Save</button>

	<?php echo form_close(); ?>