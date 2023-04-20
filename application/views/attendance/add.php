	<?php 
		echo $this->session->flashdata('form');
		$attributes= array('role'=>'form','class'=>'row g-3');
		echo form_open_multipart("attendance/add",$attributes); 
	?>

	<div>
		<span class="text-danger">*</span><label class="form-label">Course Name : </label>
		<select  name='course_id' class="form-select" id="select1" aria-label="Example select with button addon">
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
		<span class="text-danger">*</span><label class="form-label">Student Name : </label>
		<select  name="studentid" class="form-select" id="select2" aria-label="Example select with button addon">
			<option value="">-- Select Student Name --</option>
			<?php 
			foreach($users as $c)
			{
				if($c['role']=='student'){
					$selected = ($c['id'] == $this->input->post('studentid')) ? ' selected="selected"' : "";
					echo '<option '.$selected.' value="'.$c['id'].'">'.$c['first_name'].''.$c['last_name'].'</option>';
				}
			} 
			?>
		</select>
	
		<span class="text-danger"><?php echo form_error('studentid');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Teachers Name : </label>
		<select  name="trainerid" class="form-select" id="select3" aria-label="Example select with button addon">
			<option value="">-- Select Teachers Name --</option>
			<?php 
			foreach($users as $c)
			{
				if($c['role']=='teacher'){
					$selected = ($c['id'] == $this->input->post('trainerid')) ? ' selected="selected"' : "";
					echo '<option '.$selected.' value="'.$c['id'].'">'.$c['first_name'].''.$c['last_name'].'</option>';
				}
			} 
			?>
		</select>
		
		<span class="text-danger"><?php echo form_error('trainerid');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Batch : </label>
		<select  name='batch' class="form-select" id="select4" aria-label="Example select with button addon">
			<option value="">-- Select Topic Covered Name --</option>
			<?php 
			foreach($curriculam as $c)
			{
				$selected = ($c['id'] == $this->input->post('batch')) ? ' selected="selected"' : "";
				echo '<option '.$selected.' value="'.$c['id'].'">'.$c['topic'].'</option>';
			} 
			?>
		</select>
		<span class="text-danger"><?php echo form_error('batch');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Day : </label>
		<select  name='day' class="form-select" id="select5" aria-label="Example select with button addon">
			<option value="">-- Select Day --</option>
			<option>Monday</option>
			<option>Tuesday</option>
			<option>Wednesday</option>
			<option>Thursday</option>
			<option>Friday</option>
			<option>Saturday</option>
			<option>Sunday</option>
			
		</select>
		
		<span class="text-danger"><?php echo form_error('day');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Attendance Date : </label>
		<input class="form-control"placeholder='Adate' type="date" name='adate' value="<?php echo $this->input->post('adate'); ?>" />
		<span class="text-danger"><?php echo form_error('adate');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Attendence Status : </label>
		
		<select  name='attendence' class="form-select" id="select6" aria-label="Example select with button addon">
			<option value="Y">Yes</option>
			<option value="N">No</option>
			
		</select>
		
		
		<span class="text-danger"><?php echo form_error('attendence');?></span>
	</div>
	
	
	<button type="submit" class="btn btn-primary">Save</button>

	<?php echo form_close(); ?>