<!-- User Area -->
        <div class="user-area pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6">
                        <div class="user-img">
                            <img src="<?=site_url();?>assets/images/faq-img.jpg" alt="faq" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="user-all-form">
						
                            <div class="contact-form">
							
                                <h3 class="user-title"> Reset Password</h3>
								<?=$html;?>
								
								<?php
								
								if($_SESSION['buyid']){
									$cname=$this->Courses_model->get_courses($_SESSION['buyid']);
									echo "You have enquired for <a href='#'>".$cname['title']."</a>. Please signup to get logged in first :).<br><br><br>";
								}
								
								
								?>
								
								
                                <?php 
    $fattr = array('class' => 'form-signin');
    echo form_open_multipart(site_url().'main/reset_password/token/'.$token, $fattr); ?>
    <div class="form-group">
      <?php echo form_password(array('name'=>'password', 'id'=> 'password', 'placeholder'=>'Password', 'class'=>'form-control', 'value' => set_value('password'))); ?>
      <?php echo form_error('password') ?>
    </div>
    <div class="form-group">
      <?php echo form_password(array('name'=>'passconf', 'id'=> 'passconf', 'placeholder'=>'Confirm Password', 'class'=>'form-control', 'value'=> set_value('passconf'))); ?>
      <?php echo form_error('passconf') ?>
    </div>
    <?php echo form_submit(array('value'=>'Reset Password', 'class'=>'btn btn-lg btn-primary btn-block')); ?>
    <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- User Area End -->

        <!-- Newsletter Area -->
        <div class="newsletter-area section-bg ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="section-title mt-rs-20">
                            <span>ARE YOU IMPRESSED FOR AMAZING SERVICES?</span>
                            <h2>Subscribe our newsletter</h2>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <form class="newsletter-form" data-toggle="validator" method="POST">
                            <input type="email" class="form-control" placeholder="Enter Your Email Address" name="EMAIL" required autocomplete="off">
                            <button class="subscribe-btn" type="submit">
                                Subscribe Now  <i class="flaticon-paper-plane"></i>
                            </button>
                            <div id="validator-newsletter" class="form-result"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter Area End -->
