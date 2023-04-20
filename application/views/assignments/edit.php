	<?php 
		echo $this->session->flashdata('form');
		$attributes= array('role'=>'form','class'=>'row g-3'); 
		echo form_open_multipart('assignments/edit/'.$assignments['id'],$attributes); 
	?>
	
	<div>
		<span class="text-danger">*</span><label class="form-label">Course Name : </label>
		<select  name='course_id' class="form-select single-select" id="inputGroupSelect03" aria-label="Example select with button addon">
			<option value="">-- Select Course Name --</option>
			<?php 
			foreach($courses as $c)
			{
				$selected = ($c['id'] == $assignments['course_id']) ? ' selected="selected"' : "";

				echo '<option value="'.$c['id'].'" '.$selected.'>'.$c['title'].'</option>';
			} 
			?>
		</select>
		<span class="text-danger"><?php echo form_error('course_id');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Title : </label>
		<input class="form-control"placeholder='Title' type="text" name='title' value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $assignments['title']); ?>" />
		<span class="text-danger"><?php echo form_error('title');?></span>
	</div>
	<div>

		<span class="text-danger">*</span><label class="form-label">Description : </label>
		<textarea id="summernote"  rows="4" cols="4" class="form-control"placeholder='Description'name='description'><?php echo ($this->input->post('description') ? $this->input->post('description') : $assignments['description']); ?></textarea>
		<span class="text-danger"><?php echo form_error('description');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Docsa : </label>
		<input class="form-control"placeholder='Docsa' type="file"  id="formFileMultiple" multiple name='docsa[]' value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $assignments['docsa']); ?>" />
		<input type="hidden" value="<?=$assignments['docsa'];?>" name="oldimage"/>
		<span class="text-danger"><?php echo form_error('docsa');?></span>
	</div>
	
	
	<button type="submit" class="btn btn-primary">Save</button>
	
	<?php echo form_close(); ?>