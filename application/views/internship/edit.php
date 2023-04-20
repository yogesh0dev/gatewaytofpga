	<?php 
		echo $this->session->flashdata('form');
		$attributes= array('role'=>'form','class'=>'row g-3'); 
		echo form_open_multipart('internship/edit/'.$internship['id'],$attributes); 
	?>
	
	<div>
		<span class="text-danger">*</span><label class="form-label">First Name : </label>
		<input class="form-control"placeholder='First Name' type="text" name='first_name' value="<?php echo ($this->input->post('first_name') ? $this->input->post('first_name') : $internship['first_name']); ?>" />
		<span class="text-danger"><?php echo form_error('first_name');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Last Name : </label>
		<input class="form-control"placeholder='Last Name' type="text" name='last_name' value="<?php echo ($this->input->post('last_name') ? $this->input->post('last_name') : $internship['last_name']); ?>" />
		<span class="text-danger"><?php echo form_error('last_name');?></span>
	</div>
	
	<div>
		<span class="text-danger">*</span><label class="form-label">Email : </label>
		<input class="form-control"placeholder='Email' type="text" name='email' value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $internship['email']); ?>" />
		<span class="text-danger"><?php echo form_error('email');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Phone Number : </label>
		<input class="form-control"placeholder='Phone Number' type="text" name='phn' value="<?php echo ($this->input->post('phn') ? $this->input->post('phn') : $internship['phn']); ?>" />
		<span class="text-danger"><?php echo form_error('phn');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Gender : </label>
		<select name="gender" class="form-control" >
			<option  value="M" <?php if($internship['gender']=='M'){echo 'selected';}?>>Male</option>
			<option  value="F" <?php if($internship['gender']=='F'){echo 'selected';}?>>Female</option>
		</select>
		
		<span class="text-danger"><?php echo form_error('gender');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">DOB : </label>
		<input class="form-control"placeholder='DOB' type="date" name='dob' value="<?php echo ($this->input->post('dob') ? $this->input->post('dob') : $internship['dob']); ?>" />
		<span class="text-danger"><?php echo form_error('dob');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Ccontact Address : </label>
		<input class="form-control"placeholder='Caddress' type="text" name='caddress' value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $internship['caddress']); ?>" />
		<span class="text-danger"><?php echo form_error('caddress');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Permanent Address : </label>
		<input class="form-control"placeholder='Paddress' type="text" name='paddress' value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $internship['paddress']); ?>" />
		<span class="text-danger"><?php echo form_error('paddress');?></span>
	</div>
	
	<div>
		<span class="text-danger">*</span><label class="form-label">College : </label>
		<input class="form-control"placeholder='College' type="text" name='college' value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $internship['college']); ?>" />
		<span class="text-danger"><?php echo form_error('college');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Degree : </label>
		<input class="form-control"placeholder='Degree' type="text" name='degree' value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $internship['degree']); ?>" />
		<span class="text-danger"><?php echo form_error('degree');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Designation : </label>
		<input class="form-control"placeholder='Designation' type="text" name='designation' value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $internship['designation']); ?>" />
		<span class="text-danger"><?php echo form_error('designation');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Area of expertise : </label>
		<input class="form-control"placeholder='Areaofexpertise' type="text" name='areaofexpertise' value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $internship['areaofexpertise']); ?>" />
		<span class="text-danger"><?php echo form_error('areaofexpertise');?></span>
	</div>
	
	
	<div>
		<span class="text-danger">*</span><label class="form-label">Duration : </label>
		<input class="form-control"placeholder='Duration' type="text" name='duration' value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $internship['duration']); ?>" />
		<span class="text-danger"><?php echo form_error('duration');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Other info : </label>
		<input class="form-control"placeholder='Otherinfo' type="text" name='otherinfo' value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $internship['otherinfo']); ?>" />
		<span class="text-danger"><?php echo form_error('otherinfo');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Career goals : </label>
		<input class="form-control"placeholder='Careergoals' type="text" name='careergoals' value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $internship['careergoals']); ?>" />
		<span class="text-danger"><?php echo form_error('careergoals');?></span>
	</div>
	
	
	<button type="submit" class="btn btn-primary">Save</button>     
	
	<?php echo form_close(); ?>