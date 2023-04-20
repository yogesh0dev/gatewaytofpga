	<?php 
		echo $this->session->flashdata('form');
		$attributes= array('role'=>'form','class'=>'row g-3');
		echo form_open_multipart("course_lectures/add",$attributes); 
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
		<span class="text-danger">*</span><label class="form-label">Batch id : </label>
		<input class="form-control"placeholder='Batch id' type="text" name='batch_id' value="<?php echo $this->input->post('batch_id'); ?>" />
		<span class="text-danger"><?php echo form_error('batch_id');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Schedule Of Lectures: </label>
		<input class="form-control"placeholder='Datetimeof' type="text" name='datetimeof' value="<?php echo $this->input->post('datetimeof'); ?>" />
		<span class="text-danger"><?php echo form_error('datetimeof');?></span>
	</div>
	
	<div>
		<span class="text-danger">*</span><label class="form-label">Teacher : </label>
		<select  name="tid" class="form-select" id="select2" aria-label="Example select with button addon">
			<option value="">-- Select Teacher Name --</option>
			<?php 
			foreach($users as $c)
			{
				if($c['role']=='teacher'){
					$selected = ($c['id'] == $this->input->post('tid')) ? ' selected="selected"' : "";
					echo '<option '.$selected.' value="'.$c['id'].'">'.$c['first_name'].''.$c['last_name'].'</option>';
				}
			} 
			?>
		</select>
		<span class="text-danger"><?php echo form_error('tid');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Attendance : </label>
		<input class="form-control"placeholder='Attendance' type="text" name='attendance' value="<?php echo $this->input->post('attendance'); ?>" />
		<span class="text-danger"><?php echo form_error('attendance');?></span>
	</div>
	
	
	<button type="submit" class="btn btn-primary">Save</button>

	<?php echo form_close(); ?>