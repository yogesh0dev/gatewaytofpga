	<?php 
		echo $this->session->flashdata('form');
		$attributes= array('role'=>'form','class'=>'row g-3'); 
		echo form_open_multipart('course_info/edit/'.$course_info['id'],$attributes); 
	?>
	
	<div>
		<span class="text-danger">*</span><label class="form-label">Course duration : </label>
		<input class="form-control"placeholder='Course duration' type="text" name='course_duration' value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $course_info['course_duration']); ?>" />
		<span class="text-danger"><?php echo form_error('course_duration');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Batch size : </label>
		<input class="form-control"placeholder='Batch size' type="text" name='batch_size' value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $course_info['batch_size']); ?>" />
		<span class="text-danger"><?php echo form_error('batch_size');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Weekends Timing: </label>
		<input class="form-control"  placeholder='ex: 09:00am to 01:30pm' type="text" name='class_time_end' value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $course_info['class_time_end']); ?>" />
		<span class="text-danger"><?php echo form_error('class_time_end');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Weekedays Timing : </label>
		<input class="form-control"  placeholder='ex: 09:00am to 01:30pm' type="text" name='class_time_days' value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $course_info['class_time_days']); ?>" />
		<span class="text-danger"><?php echo form_error('class_time_days');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Tools : </label>
		<input class="form-control"placeholder='Tools' type="text" name='tools' value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $course_info['tools']); ?>" />
		<span class="text-danger"><?php echo form_error('tools');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Training mode : </label>
		<input class="form-control"placeholder='Training mode' type="text" name='training_mode' value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $course_info['training_mode']); ?>" />
		<span class="text-danger"><?php echo form_error('training_mode');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Certis : </label>
		<input class="form-control"placeholder='Certis' type="text" name='certis' value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $course_info['certis']); ?>" />
		<span class="text-danger"><?php echo form_error('certis');?></span>
	</div>
	
	
	<button type="submit" class="btn btn-primary">Save</button>
	
	<?php echo form_close(); ?>