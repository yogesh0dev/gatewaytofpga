	<?php 
		echo $this->session->flashdata('form');
		$attributes= array('role'=>'form','class'=>'row g-3'); 
		echo form_open_multipart('discounts/edit/'.$discounts['id'],$attributes); 
	?>
	
	<div>
		<span class="text-danger">*</span><label class="form-label">Course Name : </label>
		<select  name='course_id' class="form-select single-select" id="inputGroupSelect03" aria-label="Example select with button addon">
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
		<span class="text-danger">*</span><label class="form-label">Discs : </label>
		<input class="form-control"placeholder='Discs' type="text" name='discs' value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $discounts['discs']); ?>" />
		<span class="text-danger"><?php echo form_error('discs');?></span>
	</div>
	
	
	<button type="submit" class="btn btn-primary">Save</button>
	
	<?php echo form_close(); ?>