<?=$html;?>
 <div class="user-area pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6">
                        <div class="user-all-form">
                            <div class="contact-form">
                                <h3 class="user-title"> Institute Registration Form </h3>
                                <?php if(@$error['error']){?>
									<div style="width: 100%;" class="alert alert-warning alert-dismissible" role="alert">
										<?php
										echo @$error;
										?>
									</div>
								<?php }?>
								<?php
								
								if($_SESSION['buyid']){
									$cname=$this->Courses_model->get_courses($_SESSION['buyid']);
									echo "You have enquired for <a href='#'>".$cname['title']."</a>. Please signup to get registered first :).<br><br><br>";
								}
								
								
								?>
                                    <div class="row">
                                        <?php 
        $fattr = array('class' => 'form-signin');
        echo form_open_multipart('/main/register', $fattr);
    ?>
    <div class="form-group">
		<label class="form-group-label"><span class="text-danger">*</span>First Name</label>
      <?php echo form_input(array('name'=>'firstname', 'id'=> 'firstname', 'placeholder'=>'First Name', 'class'=>'form-control', 'value' => set_value('firstname'))); ?>
      <?php echo form_error('firstname');?>
    </div>
    <div class="form-group">
		<label class="form-group-label"><span class="text-danger">*</span>Last Name</label>
      <?php echo form_input(array('name'=>'lastname', 'id'=> 'lastname', 'placeholder'=>'Last Name', 'class'=>'form-control', 'value'=> set_value('lastname'))); ?>
      <?php echo form_error('lastname');?>
    </div>
    <div class="form-group">
		<label class="form-group-label"><span class="text-danger">*</span>Email</label>
      <?php echo form_input(array('name'=>'email', 'id'=> 'email', 'placeholder'=>'Email', 'class'=>'form-control', 'value'=> set_value('email'))); ?>
      <?php echo form_error('email');?>
    </div>
<div class="col-lg-12 col-md-12">
		<div class="form-group">
		<label class="form-group-label"><span class="text-danger">*</span>Enter Contact No.</label>
		<input  required class="form-control" onkeydown="return event.keyCode !== 69" placeholder='Enter Contact No.'  type="number" name='phn' value="<?php echo $this->input->post('phn'); ?>" />
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
		<label class="form-group-label"><span class="text-danger">*</span>Upload Image</label>
		<input  required class="form-control" placeholder='Upload Image' type="file" name='avatar' value="<?php echo $this->input->post('avatar'); ?>" />
		<span class="text-danger"><?php echo form_error('avatar');?></span>
	</div> </div>
	
	
	<div class="col-lg-12 col-md-12">
		<div class="form-group">
		<label class="form-group-label"><span class="text-danger">*</span>
		Any Message
		</label>
		<textarea cols="6" required class="form-control" placeholder='Any Message' name='message' rows="6" style=" height: 150px; "><?php echo $this->input->post('message'); ?></textarea>
		
		<span class="text-danger"><?php echo form_error('message');?></span>
	</div> </div>
    <?php if($recaptcha == 'yes'){ ?>
    <div style="text-align:center;" class="form-group">
        <div style="display: inline-block;"><?php echo $this->recaptcha->render(); ?></div>
    </div>
    <?php
    }
    echo form_submit(array('value'=>'Sign up', 'class'=>'btn btn-lg btn-primary btn-block')); ?>
    <?php echo form_close(); ?>
    <br>
    <p>Registered? <a href="<?php echo site_url();?>main/login">Login</a></p>
                                    </div>
                              
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="user-img" style=" height: 1500px !important; ">
                            <img src="<?=site_url();?>assets/images/faq-img.jpg" alt="faq" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- User Area End -->

       