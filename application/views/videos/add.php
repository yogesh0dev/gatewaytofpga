	<?php 
		echo $this->session->flashdata('form');
		$attributes= array('role'=>'form','class'=>'row g-3');
		echo form_open_multipart("videos/add",$attributes); 
	?>
	<?php if(@$error['error']){?>
<div style="width: 100%;" class="alert alert-warning alert-dismissible" role="alert">
<?=@$error['error'];?>
<?=@$error;?>
</div>
<?php }?>
	<div>
		<span class="text-danger">*</span><label class="form-label">Category : </label>
		<select  name="categ" class="form-select" id="select2" aria-label="Example select with button addon">
			<option value="">-- Select Category Name --</option>
			<?php 
			foreach($category as $c)
			{
				$selected = ($c['id'] == $this->input->post('categ')) ? ' selected="selected"' : "";
				echo '<option '.$selected.' value="'.$c['id'].'">'.$c['category'].'</option>';
			} 
			?>
		</select>
		<span class="text-danger"><?php echo form_error('categ');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Course Name : </label>
		<select  name='course_id' class="form-select single-select course_id" id="select1" onchange="fetchvalue('course_id','common/getbatch','batch_id')">
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
		<span class="text-danger">*</span><label class="form-label">Batch Name: </label>
		
		<select  name='batch_id' class="form-select single-select batch_id" id="select1" ></select>
		
		<span class="text-danger"><?php echo form_error('batch_id');?></span>
	</div>
	
	
	<div>
		<span class="text-danger">*</span><label class="form-label">Upload Video : </label>
		<input class="form-control" type="file" name='youtube'/>
		<span class="text-danger"><?php echo form_error('youtube');?></span>
	</div>
	
	
	<button type="submit" class="btn btn-primary">Save</button>

	<?php echo form_close(); ?>