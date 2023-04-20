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
							
                                <h3 class="user-title"> Sign in</h3>
								<?php if(@$error){?>
								<div style="width: 100%;" class="alert alert-warning alert-dismissible" role="alert">
								<?=@$error['error'];?>
								<?=@$error;?>
								</div>
								<?php }?>
								<style>			
.containerz{
	z-index:10;
	position: revert !important;
}

</style>			
				<?php
        //for warning -> flash_message
        //for info -> success_message
        
        $arr = $this->session->flashdata();
        if(!empty($arr['flash_message'])){
            $html = '<div class="containerz" style="margin-top: 10px;">';
            $html .= '<div class="alert alert-warning alert-dismissible" role="alert">';
            $html .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
            $html .= $arr['flash_message'];
            $html .= '</div>';
            $html .= '</div>';
        }else if (!empty($arr['success_message'])){
            $html = '<div class="containerz" style="margin-top: 10px;">';
            $html .= '<div class="alert alert-info alert-dismissible" role="alert">';
            $html .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
            $html .= $arr['success_message'];
            $html .= '</div>';
            $html .= '</div>';
        }else if (!empty($arr['danger_message'])){
            $html = '<div class="containerz" style="margin-top: 10px;">';
            $html .= '<div class="alert alert-danger alert-dismissible" role="alert">';
            $html .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
            $html .= $arr['danger_message'];
            $html .= '</div>';
            $html .= '</div>';
        }
		echo $html;
    ?>
								
								<?php
								
								if($_SESSION['buyid']){
									$cname=$this->Courses_model->get_courses($_SESSION['buyid']);
									echo "You have enquired for <a href='#'>".$cname['title']."</a>. Please signup to get logged in first :).<br><br><br>";
								}
								
								
								?>
								
								
                                <form method="post" action="<?=site_url();?>main/login">
                                    <div class="row">
                                        <div class="col-lg-12 ">
                                            <div class="form-group">
                                                <input  type="text" name="email" id="email" class="form-control" required data-error="Username Or Email Address*" placeholder="Username Or Email Address*">
												 <?php echo form_error('email') ?>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <input  class="form-control" type="password" name="password" placeholder="Password*">
												 <?php echo form_error('password') ?>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 form-condition">
                                            <div class="agree-label">
                                               <!-- <input type="checkbox" id="chb1">-->
                                                <label for="chb1">
                                                    <a class="forget" href="<?=site_url();?>forgot">Forgot Password?</a>
                                                </label>
                                            </div>
                                        </div>
        
                                        <div class="col-lg-12 col-md-12">
                                            <input  required type="submit" class="default-btn" value="Login Now">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- User Area End -->
