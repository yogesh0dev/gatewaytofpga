  <!-- Checkout Area -->
		<section class="checkout-area pt-100 pb-70">
			<div class="container">
                <div class="row">
                    <div class="col-lg-8">
                      
                      
                            <div class="billing-details">
                                <h3 class="title">Ask For Demo </h3>
                                <div class="alertz" id="alertz" ></div>
                                <div class="row">
	
	<?php //
		echo $this->session->flashdata('form');
		$attributes= array('role'=>'form','id'=>'formid','onsubmit'=>'submitForm(this)');
		echo form_open_multipart("Bookacall/add",$attributes); 
	?>
										
	<div class="col-lg-12 col-md-12">
		<div class="form-group">
		<label class="form-group-label"><span class="text-danger">*</span>Full Name</label>
		<input  required class="form-control"placeholder='Name' type="text" name='name' value="<?php echo $this->input->post('name'); ?>" />
		<span class="text-danger"><?php echo form_error('name');?></span>
	</div> </div>
	<div class="col-lg-12 col-md-12">
		<div class="form-group">
		<label class="form-group-label"><span class="text-danger">*</span>Email ID</label>
		<input  required class="form-control"placeholder='Email' type="text" name='email' value="<?php echo $this->input->post('email'); ?>" />
		<span class="text-danger"><?php echo form_error('email');?></span>
	</div> </div>
	<div class="col-lg-12 col-md-12">
		<div class="form-group">
		<label class="form-group-label"><span class="text-danger">*</span>Phone Number</label>
		<input  required class="form-control"placeholder='Phone Number' type="text" name='phn' value="<?php echo $this->input->post('phn'); ?>" />
		<span class="text-danger"><?php echo form_error('phn');?></span>
	</div> </div>
	
	<div class="col-lg-12 col-md-12">
		<div class="form-group">
		<label class="form-group-label"><span class="text-danger">*</span>Course</label>
			<select  name='Course' class="form-select single-select" id="select1" aria-label="Example select with button addon">
			  <option value="">-- Search Course --</option>
			  <?php foreach($courses as $cs){?>
					<option value="<?=$cs['id'];?>"><?=$cs['title'];?></option>
					</a>
				<?php }?>
			 
		   </select>
		
		<span class="text-danger"><?php echo form_error('course');?></span>
	</div> </div>
	<div class="col-lg-12 col-md-12">
		<div class="form-group">
		<label class="form-group-label"><span class="text-danger">*</span>Message</label>
		<textarea  rows="4" cols="4"  class="form-control"placeholder='Message' type="text" name='message'><?php echo $this->input->post('message'); ?></textarea>
		<span class="text-danger"><?php echo form_error('message');?></span>
	</div> </div>
	

	<button class="default-btn" type="submit">Save</button>

	<?php echo form_close(); ?>
                                </div>
                             </div>
                     
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