	<?php 
		echo $this->session->flashdata('form');
		$attributes= array('role'=>'form','class'=>'row g-3'); 
		echo form_open_multipart('testimony/edit/'.$testimony['id'],$attributes); 
	?>
	
	<div>
		<span class="text-danger">*</span><label class="form-label">Course Name : </label>
		<select  name='course_id' class="form-select single-select" id="inputGroupSelect03" aria-label="Example select with button addon">
			<option value="">-- Select Course Name --</option>
			<?php 
			foreach($courses as $c)
			{
				$selected = ($c['id'] == $testimony['course_id']) ? ' selected="selected"' : "";

				echo '<option value="'.$c['id'].'" '.$selected.'>'.$c['title'].'</option>';
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
					$selected = ($c['id'] == $testimony['studentid']) ? ' selected="selected"' : "";
					echo '<option '.$selected.' value="'.$c['id'].'">'.$c['first_name'].''.$c['last_name'].'</option>';
				}
			} 
			?>
		</select>
		<span class="text-danger"><?php echo form_error('studentid');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Tdate : </label>
		<input class="form-control"placeholder='Tdate' type="date" name='tdate' value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $testimony['tdate']); ?>" />
		<span class="text-danger"><?php echo form_error('tdate');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Subject : </label>
		<input class="form-control"placeholder='Subject' type="text" name='subject' value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $testimony['subject']); ?>" />
		<span class="text-danger"><?php echo form_error('subject');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Msg : </label>
		<input class="form-control"placeholder='Msg' type="text" name='msg' value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $testimony['msg']); ?>" />
		<span class="text-danger"><?php echo form_error('msg');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Star : </label>
		<input class="form-control"placeholder='Star' type="text" name='star' value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $testimony['star']); ?>" />
		<span class="text-danger"><?php echo form_error('star');?></span>
	</div>
	
	
	<button type="submit" class="btn btn-primary">Save</button>
	
	<?php echo form_close(); ?>