  <!-- Checkout Area -->
		<section class="checkout-area pt-100 pb-70 inner-title">
			<div class="container">
                <div class="row">
                    <div class="col-lg-8">
                      
<?php //,'onsubmit'=>'submitForm(this)'
					echo $this->session->flashdata('form');
					$attributes= array('role'=>'form','id'=>'formid');
					echo form_open_multipart("internship/add",$attributes); 
				?>
	<div class="billing-details">
		<h3 class="title">Apply for Internship</h3>
		<div class="alertz" id="alertz" ><?php if(@$error){?>
<div style="width: 100%;" class="alert alert-warning alert-dismissible" role="alert">
<?=@$error;?>
</div>
<?php }?>
</div>
		
				
	<div class="row">		
	<div class="col-lg-12 col-md-12">
		<div class="form-group">
			<label class="form-group-label"><span class="text-danger">*</span>First Name</label>
			<input  required class="form-control"placeholder='First Name' type="text" name='full_name' value="<?php echo $this->input->post('full_name'); ?>" />
			<span class="text-danger"><?php echo form_error('full_name');?></span>
		</div>
	</div>
	
	<div class="col-lg-12 col-md-12">
		<div class="form-group">
			<label class="form-group-label"><span class="text-danger">*</span>Last Name</label>
			<input  required class="form-control"placeholder='Last Name' type="text" name='last_name' value="<?php echo $this->input->post('last_name'); ?>" />
			
			<span class="text-danger"><?php echo form_error('last_name');?></span>
		</div>
	</div>
	
	
	<div class="col-lg-12 col-md-12">
		<div class="form-group">
		<label class="form-group-label"><span class="text-danger">*</span>Email</label>
		<input  required class="form-control"placeholder='Email' type="email"  name='email' value="<?php echo $this->input->post('email'); ?>" />
		<span class="text-danger"><?php echo form_error('email');?></span>
	</div> </div>
	<div class="col-lg-12 col-md-12">
		<div class="form-group">
		<label class="form-group-label"><span class="text-danger">*</span>Enter Contact No.</label>
		<input  required class="form-control" onkeydown="return event.keyCode !== 69" placeholder='Enter Contact No.' type="number" name='phn' value="<?php echo $this->input->post('phn'); ?>" />
		<span class="text-danger"><?php echo form_error('phn');?></span>
	</div> </div>
	<div class="col-lg-12 col-md-12">
		<div class="form-group">
		<label class="form-group-label"><span class="text-danger">*</span>Gender</label>
		<select name="gender" class="form-control" >
			<option value=''>-- Select Gender --</option>
			<option>Male</option>
			<option>Female</option>
			<option>Others</option>
		</select>
		<span class="text-danger"><?php echo form_error('gender');?></span>
	</div> </div>
	<div class="col-lg-12 col-md-12">
		<div class="form-group">
		<label class="form-group-label"><span class="text-danger">*</span>Date of Birth</label>
		<input  required class="form-control"placeholder='Date of Birth' type="date" name='dob' value="<?php echo $this->input->post('dob'); ?>" />
		<span class="text-danger"><?php echo form_error('dob');?></span>
	</div> </div>
	<div class="col-lg-12 col-md-12">
		<div class="form-group">
		<label class="form-group-label"><span class="text-danger">*</span>Enter Current Address</label>
		<input  required class="form-control"placeholder='Current Address' type="text" name='caddress' value="<?php echo $this->input->post('caddress'); ?>" />
		<span class="text-danger"><?php echo form_error('caddress');?></span>
	</div> </div>
	<div class="col-lg-12 col-md-12">
		<div class="form-group">
		<label class="form-group-label"><span class="text-danger">*</span>Enter Permanent Address</label>
		<input  required class="form-control"placeholder='Permanent Address' type="text" name='paddress' value="<?php echo $this->input->post('paddress'); ?>" />
		<span class="text-danger"><?php echo form_error('paddress');?></span>
	</div> </div>
	
	<div class="col-lg-12 col-md-12">
		<div class="form-group">
		<label class="form-group-label"><span class="text-danger">*</span>Country</label>
		<select  name='country' class="form-select single-select country" id="select1" aria-label="Example select with button addon" onchange="fetchvalue('country','common/getstate','state')">
		  <option value="">-- Search Country --</option>
			<?php 
			$count=$this->Common_model->get_country();
			foreach($count as $cs){?>
				<option value="<?=$cs['id'];?>"><?=$cs['name'];?></option>
				</a>
			<?php }?>  
        </select>
		<span class="text-danger"><?php echo form_error('country');?></span>
		</div>
	</div>
	<div class="col-lg-12 col-md-12">
		<div class="form-group">
		<label class="form-group-label"><span class="text-danger">*</span>State</label>
		<select  name='state' class="form-select single-select state" id="select1" aria-label="Example select with button addon" onchange="fetchvalue('state','common/getcity','city')">
		  
        </select>
		<span class="text-danger"><?php echo form_error('state');?></span>
		</div>
	</div>
	
	<div class="col-lg-12 col-md-12">
		<div class="form-group">
		<label class="form-group-label"><span class="text-danger">*</span>City</label>
		<select  name='city' class="form-select single-select city" id="select1" aria-label="Example select with button addon">
		     
        </select>
		<span class="text-danger"><?php echo form_error('country');?></span>
	</div> </div>
	
	
	<div class="col-lg-12 col-md-12">
		<div class="form-group">
		<label class="form-group-label"><span class="text-danger">*</span>College</label>
		<input  required class="form-control"placeholder='College' type="text" name='college' value="<?php echo $this->input->post('college'); ?>" />
		<span class="text-danger"><?php echo form_error('college');?></span>
	</div> </div>
	<div class="col-lg-12 col-md-12">
		<div class="form-group">
		<label class="form-group-label"><span class="text-danger">*</span>Enter Engineering Stream</label>
		<input  required class="form-control"placeholder='Enter Engineering Stream' type="text" name='degree' value="<?php echo $this->input->post('degree'); ?>" />
		<span class="text-danger"><?php echo form_error('degree');?></span>
	</div> </div>
	
	<div class="col-lg-12 col-md-12">
		<div class="form-group">
		<label class="form-group-label"><span class="text-danger">*</span>Current Profile</label>
		<input  required class="form-control"placeholder='Current Profile' type="text" name='designation' value="<?php echo $this->input->post('designation'); ?>" />
		<span class="text-danger"><?php echo form_error('designation');?></span>
	</div> </div>
	<div class="col-lg-12 col-md-12">
		<div class="form-group">
		<label class="form-group-label"><span class="text-danger">*</span>Area of expertise(If any, you can write more than one)</label>
		<input  required class="form-control"placeholder='Area of expertise' type="text" name='areaofexpertise' value="<?php echo $this->input->post('areaofexpertise'); ?>" />
		<span class="text-danger"><?php echo form_error('areaofexpertise');?></span>
	</div> </div>
	<div class="col-lg-12 col-md-12">
		<div class="form-group">
		<label class="form-group-label"><span class="text-danger">*</span>Upload Resume</label>
		<input  required class="form-control" placeholder='Resume' type="file" name='resume' value="<?php echo $this->input->post('resume'); ?>" />
		<span class="text-danger"><?php echo form_error('resume');?></span>
	</div> </div>
	<div class="col-lg-12 col-md-12">
		<div class="form-group">
		<label class="form-group-label"><span class="text-danger">*</span>Upload Image</label>
		<input  required class="form-control" placeholder='Upload Image' type="file" name='avatar' value="<?php echo $this->input->post('avatar'); ?>" />
		<span class="text-danger"><?php echo form_error('avatar');?></span>
	</div> </div>
	
	<div class="col-lg-12 col-md-12">
		<div class="form-group">
		<label class="form-group-label"><span class="text-danger">*</span>Enter the duration you want to do the Internship</label>
		<input  required class="form-control"placeholder='Duration' type="text" name='duration' value="<?php echo $this->input->post('duration'); ?>" />
		<span class="text-danger"><?php echo form_error('duration');?></span>
	</div> </div>
	<div class="col-lg-12 col-md-12">
		<div class="form-group">
		<label class="form-group-label"><span class="text-danger">*</span>
		Describe any student organizations, job experiences, additional course work (undergraduate or graduate), skills, degrees, certifications, or licenses that you have that will help you with this internship.
		</label>
		<textarea cols="6" required class="form-control" placeholder='Describe any student organizations, job experiences, additional course work (undergraduate or graduate), skills, degrees, certifications, or licenses that you have that will help you with this internship.' name='otherinfo' rows="6" style=" height: 150px; "><?php echo $this->input->post('otherinfo'); ?></textarea>
		
		<span class="text-danger"><?php echo form_error('otherinfo');?></span>
	</div> </div>
	<div class="col-lg-12 col-md-12">
		<div class="form-group">
		<label class="form-group-label"><span class="text-danger">*</span>
		Describe your career goals and how this internship will help you reach those goals. Be specific about the experiences you want to gain through this internship.
		</label>
		<textarea cols="6" required class="form-control" placeholder='Describe your career goals and how this internship will help you reach those goals. Be specific about the experiences you want to gain through this internship.' name='careergoals' rows="6" style=" height: 150px; "><?php echo $this->input->post('careergoals'); ?></textarea>
		
		<span class="text-danger"><?php echo form_error('careergoals');?></span>
	</div> </div>
	<div class="col-lg-12">
		<div class="agree-label">
			<input required name="corrections" type="checkbox" id="chb1" value="1">
			<label for="chb1">
			The information provided in this form is correct to the best of my knowledge.
			</label><span class="text-danger"><?php echo form_error('corrections');?></span>
		</div>
	</div>
	<div class="col-lg-12">
		<div class="agree-label" style=" height: 75px !important; ">
			<input required name="actions" type="checkbox" id="chb1" value="1">
			<label for="chb1" style=" position: absolute; width: 49% !important;padding-left: 5px; ">
			In case of any information furnished by me is found to be incorrect, the organization has the right to take any action it deems fit, including expulsion at anytime after admission.
			</label><span style=" margin-top: 47px; position: absolute; " class="text-danger"><?php echo form_error('actions');?></span>
		</div>
	</div>

	

	<button class="default-btn" type="submit">Save</button>

	<?php echo form_close(); ?>
                                </div>
                             </div>
                        </form>
                    </div>

                    <div class="col-lg-4">
                        <div class="billing-sildbar pl-20">
                            <div class="billing-totals">
                                <h3>Our Contact Details</h3>
                                <ul>
                                    <li>Phone <span>+91-8882510802</span></li>
                                    <li>Address <span>New Delhi, India</span></li>
                                    <li>Email <span><b>info@gatewaytofpga.com</b></span></li>
                                </ul>
                            </div>

                            
                        </div>
                    </div>
                </div>
			</div>
		</section>
		<!-- Checkout Area End -->

        <!-- Newsletter Area -->
        
        <!-- Newsletter Area End -->