	<?php 
		echo $this->session->flashdata('form');
		$attributes= array('role'=>'form','class'=>'row g-3');
		echo form_open_multipart("course_material/add",$attributes); 
	?>
<?php if(@$_REQUEST['error']){?>
<div style="width: 100%;" class="alert alert-warning alert-dismissible" role="alert">
<?=@$_REQUEST['error'];?>
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
		<span class="text-danger">*</span><label class="form-label">Batch Name: </label>
		<select  name='batch_id' class="form-select" id="select4" aria-label="Example select with button addon">
			<option value="">-- Select Batch Name --</option>
			<?php 
			foreach($curriculam as $c)
			{
				$selected = ($c['id'] == $this->input->post('batch_id')) ? ' selected="selected"' : "";
				echo '<option '.$selected.' value="'.$c['id'].'">'.$c['batch_name'].'</option>';
			} 
			?>
		</select>
		<span class="text-danger"><?php echo form_error('batch_id');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Description : </label>
		<textarea id="summernote"  rows="4" cols="4" class="form-control"placeholder='Description'name='descr'><?php echo $this->input->post('descr'); ?></textarea>
		<span class="text-danger"><?php echo form_error('descr');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Download link : </label>
		<input class="form-control"placeholder='download_link' type="file"  id="formFileMultiple" multiple name='download_link[]' value="<?php echo ($this->input->post('download_link') ? $this->input->post('download_link') : $assignments['download_link']); ?>" />
		<span class="text-danger"><?php echo form_error('download_link');?></span>
	</div>
	
	
	<button type="submit" class="btn btn-primary">Save</button>

	<?php echo form_close(); ?>