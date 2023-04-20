	<?php 
		echo $this->session->flashdata('form');
		$attributes= array('role'=>'form','class'=>'row g-3');
		echo form_open_multipart("course_schedule/add",$attributes); 
	?> 
	<div>
		<span class="text-danger">*</span><label class="form-label">Category : </label>
		<select  name="categ" class="form-select" id="select2" aria-label="Example select with button addon">
			<option value="">-- Select Category Name --</option>
			<?php 
			foreach($category as $c)
			{
				$selected = ($c['id'] == $this->input->post('categ')) ? ' selected="selected"' : "";
				echo '<option '.$selected.' value="'.$c['id'].'">'.$c['category'].'</option>';
			} 
			?>
		</select>
		<span class="text-danger"><?php echo form_error('categ');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Batch Name : </label>
		<input class="form-control" placeholder='Batch Name' type="text" name='batch_name' value="<?php echo $this->input->post('batch_name'); ?>" />
		<span class="text-danger"><?php echo form_error('batch_name');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Course Name : </label>
		<select  name='course_id' class="form-select" id="select1">
			<option value="">-- Select Course Name --</option>
			<?php 
			foreach($courses as $c)
			{
				$selected = ($c['id'] == $this->input->post('course_id')) ? ' selected="selected"' : "1";
				echo '<option '.$selected.' value="'.$c['id'].'">'.$c['title'].'</option>';
			}
			?>
		</select>
		<span class="text-danger"><?php echo form_error('course_id');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Trainers : </label>
		<select  name="tid" class="form-select" id="select2" aria-label="Example select with button addon">
			<option value="">-- Select Trainers Name --</option>
			<?php 
			foreach($users as $c)
			{
				if($c['role']=='teacher'){
					echo '<option value="'.$c['id'].'">
					'.$c['first_name'].' '.$c['last_name'].'('.$c['phone'].')</option>';
				}
			} 
			?>
		</select>
		<span class="text-danger"><?php echo form_error('tid');?></span>
	</div>
	
	<div class="col-xl-2">
		<span class="text-danger">*</span><label class="form-label">Batch Date : </label>
		<input  class="form-control " placeholder='Batch Date' type="date" name='bdate' value="<?php echo $this->input->post('bdate'); ?>" />
		<span class="text-danger"><?php echo form_error('bdate');?></span>
	</div>
	
	<div class="col-xl-2">
		<span class="text-danger">*</span><label class="form-label">Weekdays Timing : </label>
		<input  class="form-control " placeholder='ex: 09:00am to 01:30pm' type="text" name='weekdays' value="<?php echo $this->input->post('weekdays'); ?>" />
		<span class="text-danger"><?php echo form_error('weekdays');?></span>
	</div>
	
	<div class="col-xl-2">
		<span class="text-danger">*</span><label class="form-label">Weekends Timing : </label>
		<input  class="form-control " placeholder='ex: 09:00am to 01:30pm' type="text" name='weekends' value="<?php echo $this->input->post('weekends'); ?>" />
		<span class="text-danger"><?php echo form_error('weekends');?></span>
	</div>
	
	
	<div>
		<span class="text-danger">*</span><label class="form-label">Students : </label>
		<select name="students[]" class="multiple-select" data-placeholder="Choose anything" multiple="multiple">
		<option value="">-- Select Topic Covered Name --</option>
			<?php 
			foreach($users as $c)
			{
				if($c['role']=='student'){
					echo '<option value="'.$c['id'].'">
					'.$c['first_name'].' '.$c['last_name'].'('.$c['phone'].')</option>';
				}
			} 
			?>
		</select>
		<span class="text-danger"><?php echo form_error('students');?></span>
	</div>
	
	<button type="submit" class="btn btn-primary">Save</button>

	<?php echo form_close(); ?>