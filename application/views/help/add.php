	<?php 
		echo $this->session->flashdata('form');
		$attributes= array('role'=>'form','class'=>'row g-3');
		echo form_open_multipart("help/add",$attributes); 
	?>

	<div>
		<span class="text-danger">*</span><label class="form-label">Questions : </label>
		<input class="form-control"placeholder='Quest' type="text" name='quest' value="<?php echo $this->input->post('quest'); ?>" />
		<span class="text-danger"><?php echo form_error('quest');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Answers : </label>
		<input class="form-control"placeholder='Ans' type="text" name='ans' value="<?php echo $this->input->post('ans'); ?>" />
		<span class="text-danger"><?php echo form_error('ans');?></span>
	</div>
	
	
	<button type="submit" class="btn btn-primary">Save</button>

	<?php echo form_close(); ?>