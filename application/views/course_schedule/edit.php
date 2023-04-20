<?php 
		echo $this->session->flashdata('form');
		$attributes= array('role'=>'form','class'=>'row g-3'); 
		echo form_open_multipart('course_schedule/edit/'.$course_schedule['id'],$attributes); 
	?> 
	<div>
		<span class="text-danger">*</span><label class="form-label">Category : </label>
		<select  name="categ" class="form-select" id="select3" aria-label="Example select with button addon">
			<option value="">-- Select Trainers Name --</option>
			<?php 
			foreach($category as $c)
			{
				$selected = ($c['id'] == $course_schedule['categ']) ? ' selected="selected"' : "";
				echo '<option '.$selected.' value="'.$c['id'].'">'.$c['category'].'</option>';
			} 
			?>
		</select>
		<span class="text-danger"><?php echo form_error('categ');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Batch Name : </label>
		<input class="form-control" placeholder='Batch Name' type="text" name='batch_name' value="<?php echo ($this->input->post('batch_name') ? $this->input->post('batch_name') : $course_schedule['batch_name']); ?>" />
		<span class="text-danger"><?php echo form_error('batch_name');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Course Name : </label>
		<select  name='course_id' class="form-select" id="select1">
			<option value="">-- Select Course Name --</option>
			<?php 
			foreach($courses as $c)
			{
				$selected = ($c['id'] == $course_schedule['course_id']) ? ' selected="selected"' : "";

				echo '<option value="'.$c['id'].'" '.$selected.'>'.$c['title'].'</option>';
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
					$selected = ($c['id'] == $course_schedule['tid']) ? ' selected="selected"' : "";
					echo '<option '.$selected.' value="'.$c['id'].'">'.$c['first_name'].''.$c['last_name'].'</option>';
				}
			} 
			?>
		</select>
		<span class="text-danger"><?php echo form_error('tid');?></span>
	</div>
	
	<div class="col-xl-2">
		<span class="text-danger">*</span><label class="form-label">Batch Date : </label>
		<input class="form-control"placeholder='Batch Date' type="date" name='bdate' 
		value="<?php echo ($this->input->post('bdate') ? $this->input->post('bdate') : $course_schedule['bdate']); ?>" />
		<span class="text-danger"><?php echo form_error('bdate');?></span>
	</div>
	
	
	<div class="col-xl-2">
		<span class="text-danger">*</span><label class="form-label">Weekdays Timing : </label>
		<input  class="form-control " placeholder='ex: 09:00am to 01:30pm' type="text" name='weekdays' 
		value="<?php echo ($this->input->post('weekdays') ? $this->input->post('weekdays') : $course_schedule['weekdays']); ?>" />
		<span class="text-danger"><?php echo form_error('weekdays');?></span>
	</div>
	
	<div class="col-xl-2">
		<span class="text-danger">*</span><label class="form-label">Weekends Timing : </label>
		<input  class="form-control " placeholder='ex: 09:00am to 01:30pm' type="text" name='weekends' 
		value="<?php echo ($this->input->post('weekends') ? $this->input->post('weekends') : $course_schedule['weekends']); ?>" />
		<span class="text-danger"><?php echo form_error('weekends');?></span>
	</div>
	
	
	<div>
		<span class="text-danger">*</span><label class="form-label">Students : 
		
		</label>
		<select name="students[]" class="multiple-select" data-placeholder="Choose anything" multiple="multiple">
		<option value="">-- Select Students Name --</option>
			<?php 
			foreach($users as $c)
			{
				$selected="";
				if($c['role']=='student'){
					$rty=explode(',',$course_schedule['student']);
					if (in_array($c['id'], $rty)){
						$selected = 'selected="selected"';
					}else{
						$selected = "";
					}
				}
				echo '<option '.$selected.' value="'.$c['id'].'">'.$c['first_name'].''.$c['last_name'].'</option>';
			} 
			?>
		</select>
		
		
		<span class="text-danger"><?php echo form_error('student');?></span>
	</div>
	
	<button type="submit" class="btn btn-primary">Save</button>

	<?php echo form_close(); ?>

	
	
	