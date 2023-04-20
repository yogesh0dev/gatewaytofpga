	<?php 
		echo $this->session->flashdata('form');
		$attributes= array('role'=>'form','class'=>'row g-3');
		echo form_open_multipart("certifications/add",$attributes); 
	?>
	<?=@$error;?>
	<div>
		<span class="text-danger">*</span><label class="form-label">Course Name : </label>
		<select  name='course_id' class="form-select single-select course_id" id="select1" onchange="fetchvalue('course_id','common/getbatch','batch_id')">
			<option value="">-- Select Course Name --</option>
			<?php 
			foreach($courses as $c)
			{
				$selected = ($c['id'] == $this->input->post('course_id')) ? ' selected="selected"' : "";

				echo '<option value="'.$c['id'].'" '.$c.'>'.$c['title'].'</option>';
			} 
			?>
		</select>
		<span class="text-danger"><?php echo form_error('course_id');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Batch Name: </label>
		
		<select  name='batch_id' class="form-select single-select batch_id" id="select2" ></select>
		
		<span class="text-danger"><?php echo form_error('batch_id');?></span>
	</div>
	
	<div>
		<span class="text-danger">*</span><label class="form-label">Student Name: </label>
		<select  name="sid" class="form-select" id="select3" aria-label="Example select with button addon">
			<option value="">-- Select Student Name --</option>
			<?php 
			foreach($users as $c)
			{
				if($c['role']=='student'){
					$selected = ($c['id'] == $this->input->post('sid')) ? ' selected="selected"' : "";
					echo '<option '.$selected.' value="'.$c['id'].'">'.$c['first_name'].''.$c['last_name'].'</option>';
				}
			} 
			?>
		</select>
		<span class="text-danger"><?php echo form_error('sid');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Trainer Name: </label>
		<select  name="tid" class="form-select" id="select4">
			<option value="">-- Select Teaher Name --</option>
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
		<span class="text-danger">*</span><label class="form-label">Certificate issue : </label>
		<select name="cert_issue" class="form-select" >
			<option value="1">Yes</option>
			<option value="0">No</option>
		</select>
		<span class="text-danger"><?php echo form_error('cert_issue');?></span>
	</div>
	
	<div>
		<span class="text-danger">*</span><label class="form-label">Testimonial Status : </label>
		<select name="testi" class="form-select" >
			<option value="1">Yes</option>
			<option value="0">No</option>
		</select>
		<span class="text-danger"><?php echo form_error('cert_issue');?></span>
	</div>
	
	
	<button type="submit" class="btn btn-primary">Save</button>

	<?php echo form_close(); ?>