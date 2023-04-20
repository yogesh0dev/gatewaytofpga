<?php 
		echo $this->session->flashdata('form');
		$attributes= array('role'=>'form','class'=>'row g-3');
		echo form_open_multipart("course_details/add",$attributes); 
	?>
	
	<div>
		<span class="text-danger">*</span><label class="form-label">Course Name : </label>
		<select  name='course_id' class="form-select single-select" id="select2" aria-label="Example select with button addon">
			<option value="">-- Select Course Name --</option>
			<?php 
			foreach($courses as $c)
			{
				$selected = ($c['id'] == $course_details['course_id']) ? ' selected="selected"' : "";

				echo '<option value="'.$c['id'].'" '.$selected.'>'.$c['title'].'</option>';
			} 
			?>
		</select>
		<span class="text-danger"><?php echo form_error('course_id');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Description : </label>
		<textarea id="summernote"  rows="4" cols="4" class="form-control"placeholder='Description'name='description'><?php echo ($this->input->post('description') ? $this->input->post('description') : $course_details['description']); ?></textarea>
		<span class="text-danger"><?php echo form_error('description');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Whoattend : </label>
		<textarea id="summernote1"  rows="4" cols="4" class="form-control"placeholder='Description'name='whoattend'><?php echo ($this->input->post('whoattend') ? $this->input->post('whoattend') : $course_details['whoattend']); ?></textarea>
		<span class="text-danger"><?php echo form_error('whoattend');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Prerequ : </label>
		<textarea id="summernote2"  rows="4" cols="4" class="form-control"placeholder='Description'name='prerequ'><?php echo ($this->input->post('prerequ') ? $this->input->post('prerequ') : $course_details['prerequ']); ?></textarea>
		<span class="text-danger"><?php echo form_error('prerequ');?></span>
	</div> 
	<div>
		<span class="text-danger">*</span><label class="form-label">Skills : </label>
		<textarea id="summernote3"  rows="4" cols="4" class="form-control"placeholder='skills'name='skills'><?php echo ($this->input->post('skills') ? $this->input->post('skills') : $course_details['skills']); ?></textarea>
		<span class="text-danger"><?php echo form_error('skills');?></span>
	</div>
	
	<div>
		<span class="text-danger">*</span><label class="form-label">Course Syllabus : </label>
		<textarea id="summernote4"  rows="4" cols="4" class="form-control"placeholder='Course Syllabus'name='course_syl'><?php echo ($this->input->post('course_syl') ? $this->input->post('course_syl') : $course_details['course_syl']); ?></textarea>
		<span class="text-danger"><?php echo form_error('course_syl');?></span>
	</div>
	
	
	<button type="submit" class="btn btn-primary">Save</button>
	
	<?php echo form_close(); ?>