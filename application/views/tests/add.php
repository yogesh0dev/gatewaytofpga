	<?php 
		echo $this->session->flashdata('form');
		$attributes= array('role'=>'form','class'=>'row g-3');
		echo form_open_multipart("tests/add",$attributes); 
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
		<span class="text-danger">*</span><label class="form-label">Title : </label>
		<input class="form-control"placeholder='Title' type="text" name='title' value="<?php echo $this->input->post('title'); ?>" />
		<span class="text-danger"><?php echo form_error('title');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Description : </label>
		<input class="form-control"placeholder='Description' type="text" name='description' value="<?php echo $this->input->post('description'); ?>" />
		<span class="text-danger"><?php echo form_error('description');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Docsa : </label>
		<input class="form-control"placeholder='Docsa' type="text" name='docsa' value="<?php echo $this->input->post('docsa'); ?>" />
		<span class="text-danger"><?php echo form_error('docsa');?></span>
	</div>
	
	
	<button type="submit" class="btn btn-primary">Save</button>

	<?php echo form_close(); ?>