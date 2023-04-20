	<?php 
		echo $this->session->flashdata('form');
		$attributes= array('role'=>'form');
		echo form_open_multipart("allcourseinfo/add",$attributes); 
	?>

	<div>
		<span class="text-danger">*</span>Categ : </label>
		<input placeholder='Categ' type="text" name='categ' value="<?php echo $this->input->post('categ'); ?>" />
		<span class="text-danger"><?php echo form_error('categ');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Title : </label>
		<input placeholder='Title' type="text" name='title' value="<?php echo $this->input->post('title'); ?>" />
		<span class="text-danger"><?php echo form_error('title');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Price : </label>
		<input placeholder='Price' type="text" name='price' value="<?php echo $this->input->post('price'); ?>" />
		<span class="text-danger"><?php echo form_error('price');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Duration : </label>
		<input placeholder='Duration' type="text" name='duration' value="<?php echo $this->input->post('duration'); ?>" />
		<span class="text-danger"><?php echo form_error('duration');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Img : </label>
		<input placeholder='Img' type="text" name='img' value="<?php echo $this->input->post('img'); ?>" />
		<span class="text-danger"><?php echo form_error('img');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Tutorid : </label>
		<input placeholder='Tutorid' type="text" name='tutorid' value="<?php echo $this->input->post('tutorid'); ?>" />
		<span class="text-danger"><?php echo form_error('tutorid');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Module count : </label>
		<input placeholder='Module count' type="text" name='module_count' value="<?php echo $this->input->post('module_count'); ?>" />
		<span class="text-danger"><?php echo form_error('module_count');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Course id : </label>
		<input placeholder='Course id' type="text" name='course_id' value="<?php echo $this->input->post('course_id'); ?>" />
		<span class="text-danger"><?php echo form_error('course_id');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Description : </label>
		<input placeholder='Description' type="text" name='description' value="<?php echo $this->input->post('description'); ?>" />
		<span class="text-danger"><?php echo form_error('description');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Whoattend : </label>
		<input placeholder='Whoattend' type="text" name='whoattend' value="<?php echo $this->input->post('whoattend'); ?>" />
		<span class="text-danger"><?php echo form_error('whoattend');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Prerequ : </label>
		<input placeholder='Prerequ' type="text" name='prerequ' value="<?php echo $this->input->post('prerequ'); ?>" />
		<span class="text-danger"><?php echo form_error('prerequ');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Skills : </label>
		<input placeholder='Skills' type="text" name='skills' value="<?php echo $this->input->post('skills'); ?>" />
		<span class="text-danger"><?php echo form_error('skills');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Course duration : </label>
		<input placeholder='Course duration' type="text" name='course_duration' value="<?php echo $this->input->post('course_duration'); ?>" />
		<span class="text-danger"><?php echo form_error('course_duration');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Batch size : </label>
		<input placeholder='Batch size' type="text" name='batch_size' value="<?php echo $this->input->post('batch_size'); ?>" />
		<span class="text-danger"><?php echo form_error('batch_size');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Class time end : </label>
		<input placeholder='Class time end' type="text" name='class_time_end' value="<?php echo $this->input->post('class_time_end'); ?>" />
		<span class="text-danger"><?php echo form_error('class_time_end');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Class time days : </label>
		<input placeholder='Class time days' type="text" name='class_time_days' value="<?php echo $this->input->post('class_time_days'); ?>" />
		<span class="text-danger"><?php echo form_error('class_time_days');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Tools : </label>
		<input placeholder='Tools' type="text" name='tools' value="<?php echo $this->input->post('tools'); ?>" />
		<span class="text-danger"><?php echo form_error('tools');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Training mode : </label>
		<input placeholder='Training mode' type="text" name='training_mode' value="<?php echo $this->input->post('training_mode'); ?>" />
		<span class="text-danger"><?php echo form_error('training_mode');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Certis : </label>
		<input placeholder='Certis' type="text" name='certis' value="<?php echo $this->input->post('certis'); ?>" />
		<span class="text-danger"><?php echo form_error('certis');?></span>
	</div>
	
	
	<button type="submit">Save</button>

	<?php echo form_close(); ?>