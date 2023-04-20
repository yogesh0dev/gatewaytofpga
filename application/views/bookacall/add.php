	<?php 
		echo $this->session->flashdata('form');
		$attributes= array('role'=>'form','class'=>'row g-3');
		echo form_open_multipart("bookacall/add",$attributes); 
	?>

	<div>
		<span class="text-danger">*</span><label class="form-label">Name : </label>
		<input class="form-control"placeholder='Name' type="text" name='name' value="<?php echo $this->input->post('name'); ?>" />
		<span class="text-danger"><?php echo form_error('name');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Email : </label>
		<input class="form-control"placeholder='Email' type="text" name='email' value="<?php echo $this->input->post('email'); ?>" />
		<span class="text-danger"><?php echo form_error('email');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Phn : </label>
		<input class="form-control"placeholder='Phn' type="text" name='phn' value="<?php echo $this->input->post('phn'); ?>" />
		<span class="text-danger"><?php echo form_error('phn');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Gender : </label>
		<input class="form-control"placeholder='Gender' type="text" name='gender' value="<?php echo $this->input->post('gender'); ?>" />
		<span class="text-danger"><?php echo form_error('gender');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Dob : </label>
		<input class="form-control"placeholder='Dob' type="text" name='dob' value="<?php echo $this->input->post('dob'); ?>" />
		<span class="text-danger"><?php echo form_error('dob');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Caddress : </label>
		<input class="form-control"placeholder='Caddress' type="text" name='caddress' value="<?php echo $this->input->post('caddress'); ?>" />
		<span class="text-danger"><?php echo form_error('caddress');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Paddress : </label>
		<input class="form-control"placeholder='Paddress' type="text" name='paddress' value="<?php echo $this->input->post('paddress'); ?>" />
		<span class="text-danger"><?php echo form_error('paddress');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">State : </label>
		<input class="form-control"placeholder='State' type="text" name='state' value="<?php echo $this->input->post('state'); ?>" />
		<span class="text-danger"><?php echo form_error('state');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Country : </label>
		<input class="form-control"placeholder='Country' type="text" name='country' value="<?php echo $this->input->post('country'); ?>" />
		<span class="text-danger"><?php echo form_error('country');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">College : </label>
		<input class="form-control"placeholder='College' type="text" name='college' value="<?php echo $this->input->post('college'); ?>" />
		<span class="text-danger"><?php echo form_error('college');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Degree : </label>
		<input class="form-control"placeholder='Degree' type="text" name='degree' value="<?php echo $this->input->post('degree'); ?>" />
		<span class="text-danger"><?php echo form_error('degree');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Designation : </label>
		<input class="form-control"placeholder='Designation' type="text" name='designation' value="<?php echo $this->input->post('designation'); ?>" />
		<span class="text-danger"><?php echo form_error('designation');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Areaofexpertise : </label>
		<input class="form-control"placeholder='Areaofexpertise' type="text" name='areaofexpertise' value="<?php echo $this->input->post('areaofexpertise'); ?>" />
		<span class="text-danger"><?php echo form_error('areaofexpertise');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Resume : </label>
		<input class="form-control"placeholder='Resume' type="text" name='resume' value="<?php echo $this->input->post('resume'); ?>" />
		<span class="text-danger"><?php echo form_error('resume');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Avatar : </label>
		<input class="form-control"placeholder='Avatar' type="text" name='avatar' value="<?php echo $this->input->post('avatar'); ?>" />
		<span class="text-danger"><?php echo form_error('avatar');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Duration : </label>
		<input class="form-control"placeholder='Duration' type="text" name='duration' value="<?php echo $this->input->post('duration'); ?>" />
		<span class="text-danger"><?php echo form_error('duration');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Otherinfo : </label>
		<input class="form-control"placeholder='Otherinfo' type="text" name='otherinfo' value="<?php echo $this->input->post('otherinfo'); ?>" />
		<span class="text-danger"><?php echo form_error('otherinfo');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Careergoals : </label>
		<input class="form-control"placeholder='Careergoals' type="text" name='careergoals' value="<?php echo $this->input->post('careergoals'); ?>" />
		<span class="text-danger"><?php echo form_error('careergoals');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Exp : </label>
		<input class="form-control"placeholder='Exp' type="text" name='exp' value="<?php echo $this->input->post('exp'); ?>" />
		<span class="text-danger"><?php echo form_error('exp');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Course Name : </label>
		<select  name='course' class="form-select single-select" id="select1">
			<option value="">-- Select Course Name --</option>
			<?php 
			foreach($courses as $c)
			{
				$selected = ($c['id'] == $course_details['course']) ? ' selected="selected"' : "";

				echo '<option value="'.$c['id'].'" '.$selected.'>'.$c['title'].'</option>';
			} 
			?>
		</select>
	
		<span class="text-danger"><?php echo form_error('course');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Message : </label>
		<textarea class="form-control"placeholder='Message' type="text" name='message'><?php echo $this->input->post('message'); ?></textarea>
		<span class="text-danger"><?php echo form_error('message');?></span>
	</div>
	
	
	<button type="submit" class="btn btn-primary">Save</button>

	<?php echo form_close(); ?>