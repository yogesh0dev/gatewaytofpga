	<?php 
		echo $this->session->flashdata('form');
		$attributes= array('role'=>'form','class'=>'row g-3');
		echo form_open_multipart("testimony/add",$attributes); 
	?>

	<div>
		<span class="text-danger">*</span><label class="form-label">Course id : </label>
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
		<span class="text-danger">*</span><label class="form-label">Testimony Date : </label>
		<input class="form-control"placeholder='Tdate' type="Date" name='tdate' value="<?php echo $this->input->post('tdate'); ?>" />
		<span class="text-danger"><?php echo form_error('tdate');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Subject : </label>
		<input class="form-control"placeholder='Subject' type="text" name='subject' value="<?php echo $this->input->post('subject'); ?>" />
		<span class="text-danger"><?php echo form_error('subject');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Msg : </label>
		<input class="form-control"placeholder='Msg' type="text" name='msg' value="<?php echo $this->input->post('msg'); ?>" />
		<span class="text-danger"><?php echo form_error('msg');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Star : </label>
		<input class="form-control"placeholder='Star' type="text" name='star' value="<?php echo $this->input->post('star'); ?>" />
		<span class="text-danger"><?php echo form_error('star');?></span>
	</div>
	
	
	<button type="submit" class="btn btn-primary">Save</button>

	<?php echo form_close(); ?>