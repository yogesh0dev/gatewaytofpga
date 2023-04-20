	<?php 
		echo $this->session->flashdata('form');
		$attributes= array('role'=>'form','class'=>'row g-3');
		echo form_open_multipart("curriculam/add",$attributes); 
	?>
<?php if(@$error['error']){?>
<div style="width: 100%;" class="alert alert-warning alert-dismissible" role="alert">
<?=@$error['error'];?>
</div>
<?php }?>
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
		<span class="text-danger">*</span><label class="form-label">Topic : </label>
		<input class="form-control"placeholder='Topic' type="text" name='topic' value="<?php echo $this->input->post('topic'); ?>" />
		<span class="text-danger"><?php echo form_error('topic');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Description : </label>
		<textarea id="summernote"  rows="4" cols="4" class="form-control"placeholder='Description'name='description'><?php echo ($this->input->post('description') ? $this->input->post('description') : $assignments['description']); ?></textarea>
		<span class="text-danger"><?php echo form_error('description');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Timeline : </label>
		<input class="form-control"placeholder='Timeline' type="text" name='timeline' value="<?php echo $this->input->post('timeline'); ?>" />
		<span class="text-danger"><?php echo form_error('timeline');?></span>
	</div>
	
	
	<button type="submit" class="btn btn-primary">Save</button>

	<?php echo form_close(); ?>