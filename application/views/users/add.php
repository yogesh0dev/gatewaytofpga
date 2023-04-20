	<?php 
		echo $this->session->flashdata('form');
		$attributes= array('role'=>'form','class'=>'row g-3');
		echo form_open_multipart("users/add",$attributes); 
	?>
<?php if(@$error['error']){?>
<div style="width: 100%;" class="alert alert-warning alert-dismissible" role="alert">
<?=@$error['error'];?>
</div>
<?php }?>
	<div>
		<span class="text-danger">*</span><label class="form-label">Email : </label>
		<input class="form-control"placeholder='Email' type="text" name='email' value="<?php echo $this->input->post('email'); ?>" />
		<span class="text-danger"><?php echo form_error('email');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">First name : </label>
		<input class="form-control"placeholder='First name' type="text" name='first_name' value="<?php echo $this->input->post('first_name'); ?>" />
		<span class="text-danger"><?php echo form_error('first_name');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Last name : </label>
		<input class="form-control"placeholder='Last name' type="text" name='last_name' value="<?php echo $this->input->post('last_name'); ?>" />
		<span class="text-danger"><?php echo form_error('last_name');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Role : </label>
		<select  name="role" class="form-select" id="select2" aria-label="Example select with button addon">
			<option value="">-- Role --</option>
			<option value="admin">Admin</option>
			<option value="teacher">Teacher</option>
			<option value="student">Student</option>
			
		</select>
		<span class="text-danger"><?php echo form_error('role');?></span>
	</div>
	
	
	<div>
		<span class="text-danger">*</span><label class="form-label">Profile Pic : </label>
		<input class="form-control"placeholder='Student Image' type="file"  id="simg" multiple name='simg' value="<?php echo ($this->input->post('simg') ? $this->input->post('simg') : $assignments['simg']); ?>" />
		<span class="text-danger"><?php echo form_error('simg');?></span>
	</div>
	
	
	<button type="submit" class="btn btn-primary">Save</button>

	<?php echo form_close(); ?>