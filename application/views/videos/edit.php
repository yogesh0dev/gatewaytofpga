	<?php 
		echo $this->session->flashdata('form');
		$attributes= array('role'=>'form','class'=>'row g-3'); 
		echo form_open_multipart('videos/edit/'.$videos['id'],$attributes); 
	?>
	<div>
		<span class="text-danger">*</span><label class="form-label">Category : </label>
		<select  name="categ" class="form-select" id="select3" aria-label="Example select with button addon">
			<option value="">-- Select Trainers Name --</option>
			<?php 
			foreach($category as $c)
			{
				$selected = ($c['id'] == $videos['categ']) ? ' selected="selected"' : "";
				echo '<option '.$selected.' value="'.$c['id'].'">'.$c['category'].'</option>';
			} 
			?>
		</select>
		<span class="text-danger"><?php echo form_error('categ');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Course Name : </label>
		<select  name='course_id' class="form-select single-select" id="select1" aria-label="Example select with button addon">
			<option value="">-- Select Course Name --</option>
			<?php 
			foreach($courses as $c)
			{
				$selected = ($c['id'] ==  $videos['course_id']) ? ' selected="selected"' : "";

				echo '<option value="'.$c['id'].'" '.$selected.'>'.$c['title'].'</option>';
			} 
			?>
		</select>
		<span class="text-danger"><?php echo form_error('course_id');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Batch For : </label>
		<select  name='batch_id' class="form-select" id="select4" aria-label="Example select with button addon">
			<option value="">-- Select Topic Covered Name --</option>
			<?php 
			foreach($curriculam as $c)
			{
				$selected = ($c['id'] == $videos['batch_id']) ? ' selected="selected"' : "";
				echo '<option '.$selected.' value="'.$c['id'].'">'.$c['batch_name'].'</option>';
			} 
			?>
		</select>
		<span class="text-danger"><?php echo form_error('batch_id');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Upload Video : </label>
		<input class="form-control"placeholder='Youtube' type="text" name='youtube' value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $videos['youtube']); ?>" />
		<span class="text-danger"><?php echo form_error('youtube');?></span>
	</div>
	
	
	<button type="submit" class="btn btn-primary">Save</button>
	
	<?php echo form_close(); ?>