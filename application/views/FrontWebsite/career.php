  <!-- Checkout Area -->
		<section class="checkout-area pt-100 pb-70 inner-title">
			<div class="container">
                <div class="row">
                    <div class="col-lg-8">
                      
<?php //,'onsubmit'=>'submitForm(this)'
					echo $this->session->flashdata('form');
					$attributes= array('role'=>'form','id'=>'formid');
					echo form_open_multipart("career/add",$attributes); 
				?>
	<div class="billing-details">
		<h3 class="title">Apply for Job</h3>
		<div class="alertz" id="alertz" ><?php if(@$error){?>
<div style="width: 100%;" class="alert alert-warning alert-dismissible" role="alert">
<?=$error;?>
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
		<input  required class="form-control"placeholder='Email' type="text" name='email' value="<?php echo $this->input->post('email'); ?>" />
		<span class="text-danger"><?php echo form_error('email');?></span>
	</div> </div>
	<div class="col-lg-12 col-md-12">
		<div class="form-group">
		<label class="form-group-label"><span class="text-danger">*</span>Phone Number</label>
		<input  required class="form-control"placeholder='Phone Number' type="number" onkeydown="return event.keyCode !== 69" name='phn' value="<?php echo $this->input->post('phn'); ?>" />
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
		<label class="form-group-label"><span class="text-danger">*</span>Enter Contact Address</label>
		<input  required class="form-control"placeholder='Contact Address' type="text" name='caddress' value="<?php echo $this->input->post('caddress'); ?>" />
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
		<label class="form-group-label"><span class="text-danger">*</span>Resume</label>
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
		<label class="form-group-label"><span class="text-danger">*</span>Area of expertise(If any, you can write more than one)</label>
		<textarea cols="6" required class="form-control" placeholder='Area of expertise(If any, you can write more than one).' name='areaofexpertise' rows="6" style=" height: 150px; "><?php echo $this->input->post('areaofexpertise'); ?></textarea>
		
		<span class="text-danger"><?php echo form_error('areaofexpertise');?></span>
	</div> </div>
	
	<div class="col-lg-12 col-md-12">
		<div class="form-group">
		<label class="form-group-label"><span class="text-danger">*</span>Experience</label>
		<input  required class="form-control"placeholder='Experience' type="text" name='exp' value="<?php echo $this->input->post('exp'); ?>" />
		<span class="text-danger"><?php echo form_error('exp');?></span>
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
			<input required name="actions" type="checkbox" id="chb2" value="1">
			<label for="chb2" style=" position: absolute; width: 49% !important;padding-left: 5px; ">
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