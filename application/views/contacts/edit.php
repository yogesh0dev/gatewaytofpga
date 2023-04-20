	<?php 
		echo $this->session->flashdata('form');
		$attributes= array('role'=>'form','class'=>'row g-3'); 
		echo form_open_multipart('contacts/edit/'.$contacts['id'],$attributes); 
	?>
	
	<div>
		<span class="text-danger">*</span><label class="form-label">Name : </label>
		<input class="form-control"placeholder='Name' type="text" name='name' value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $contacts['name']); ?>" />
		<span class="text-danger"><?php echo form_error('name');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Email : </label>
		<input class="form-control"placeholder='Email' type="text" name='email' value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $contacts['email']); ?>" />
		<span class="text-danger"><?php echo form_error('email');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Phone Number : </label>
		<input class="form-control"placeholder='Phone Number' type="text" name='phn' value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $contacts['phn']); ?>" />
		<span class="text-danger"><?php echo form_error('phn');?></span>
	</div>
	
	
	<div>
		<span class="text-danger">*</span><label class="form-label">Subject : </label>
		<input class="form-control"placeholder='Subject' type="text" name='subject' value="<?php echo ($this->input->post('status') ? $this->input->post('subject') : $contacts['subject']); ?>" />
		<span class="text-danger"><?php echo form_error('subject');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Message : </label>
		<textarea class="form-control"placeholder='Message' type="text" name='message'><?php echo ($this->input->post('status') ? $this->input->post('status') : 
		$contacts['message']); ?></textarea>
		<span class="text-danger"><?php echo form_error('message');?></span>
	</div>
	
	
	<button type="submit" class="btn btn-primary">Save</button>
	
	<?php echo form_close(); ?>