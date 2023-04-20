<?php
	$main=$this->router->fetch_class();
	$sub=$this->router->fetch_method();
	$try=$main.$sub;
?>
<!doctype html>
<html lang="zxx">
    <head>
        <!-- Required Meta Tags -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link type="text/css" rel="stylesheet" href="<?=site_url();?>assets/css/bootstrap.min.css">
		<link type="text/css" rel="stylesheet" href="<?=site_url();?>assets/css/meanmenu.min.css">
		<link type="text/css" rel="stylesheet" href="<?=site_url();?>assets/css/magnific-popup.min.css">
		<link type="text/css" rel="stylesheet" href="<?=site_url();?>assets/css/owl.carousel.min.css">
		<link type="text/css" rel="stylesheet" href="<?=site_url();?>assets/css/owl.theme.default.min.css">
		<link type="text/css" rel="stylesheet" href="<?=site_url();?>assets/css/odometer.min.css">
		<!--<link type="text/css" rel="stylesheet" href="<?=site_url();?>assets/css/aos.css">
        Plugins CSS -->
		<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="<?=site_url();?>assets/css/plugins.css">
        <!-- Icon Plugins CSS -->
        <link type="text/css" rel="stylesheet" href="<?=site_url();?>assets/css/iconplugins.css">
        <!-- Style CSS -->
        <link type="text/css" rel="stylesheet" href="<?=site_url();?>assets/css/style.css">
        <link type="text/css" rel="stylesheet" href="<?=site_url();?>assets/css/my.css">
        <link type="text/css" rel="stylesheet" href="<?=site_url();?>assets/css/dashboard.css">
        <!-- Responsive CSS -->
        <link type="text/css" rel="stylesheet" href="<?=site_url();?>assets/css/responsive.css">
        <!-- Theme Dark CSS -->
        <link type="text/css" rel="stylesheet" href="<?=site_url();?>assets/css/theme-dark.css">
        <link type="text/css" rel="stylesheet" href="<?=site_url();?>assets/line-awesome/css/line-awesome.min.css">
        <link href="<?=site_url();?>/assets/admin/plugins/select2/css/select2.min.css" rel="stylesheet" />
	<link href="<?=site_url();?>/assets/admin/plugins/select2/css/select2-bootstrap4.css" rel="stylesheet" />
		
	
        <!-- Title -->
        <title>gatewaytofpga</title>

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="<?=site_url();?>assets/images/favicon.png">
    </head>
    <body>
        <!-- Pre Loader -->
        <div id="preloader" style="display:none">
            <div id="preloader-area">
                <div class="spinner"></div>
                <div class="spinner"></div>
                <div class="spinner"></div>
                <div class="spinner"></div>
                <div class="spinner"></div>
                <div class="spinner"></div>
                <div class="spinner"></div>
                <div class="spinner"></div>
            </div>
            <div class="preloader-section preloader-left"></div>
            <div class="preloader-section preloader-right"></div>
        </div>
        <!-- End Pre Loader -->
<?php
if($page!='main'){?>
 <header class="top-header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-md-8">
                        <div class="header-left">
                            <ul>
                                <li>
                                    <i class="ri-phone-fill"></i>
                                    <a href="tel:0918588833754">+91 8588833754</a>
                                </li>
                                <li>
                                    <i class="ri-mail-fill"></i>
                                    <a href="mailto:info@gatewaytofpga.com">info@gatewaytofpga.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="header-right">
                            <div class="header-language dropdown language-option"> 
                                
                            </div>

                            <ul class="social-list">
                                <li>
                                    <a href="https://www.facebook.com/gateway2fpga" target="_blank">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/gateway2fpga" target="_blank">
                                        <i class="ri-twitter-fill"></i>
                                    </a>
                                </li>
								<li>
                                    <a href="https://www.instagram.com/gateway2fpga/" target="_blank">
                                        <i class="ri-instagram-fill"></i>
                                    </a>
                                </li>
								
                                <li>
                                    <a href="https://www.linkedin.com/company/gatewaytofpga/" target="_blank">
                                        <i class="ri-linkedin-line"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
<?php }?>
		 <!-- Start Navbar Area -->
        <div class="navbar-area">
            <div class="mobile-responsive-nav">
                <div class="container">
                   <div class="mobile-responsive-menu">
                        <div class="logo">
                            <a href="<?=site_url();?>">
                                <img src="<?=site_url();?>assets/images/logos/logo-small.png" class="logo-one" alt="logo">
                                <img src="<?=site_url();?>assets/images/logos/logo-small-white.png" class="logo-two" alt="logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Menu For Desktop Device -->
            <div class="desktop-nav nav-area">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-md navbar-light ">
                        <a class="navbar-brand" href="<?=site_url();?>">
                            <img src="<?=site_url();?>assets/images/logos/logo.png" class="logo-one" alt="Logo">
                            <img src="<?=site_url();?>assets/images/logos/logo-2.png" class="logo-two" alt="Logo">
                        </a>
<!--
                        <div class="nav-widget-form">
                            <form method="post" class="search-form search-form-bg2" action="<?=site_url();?>search">
                                <input  requiredname="search" type="search" class="form-control" placeholder="Search courses">
                                <button type="submit">
                                    <i class="ri-search-line"></i>
                                </button>
                            </form>
                        </div>

                        <div class="navbar-category">
                            <div class="dropdown category-list-dropdown">
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButtoncategory" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class='flaticon-list'></i>
                                    Categories
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButtoncategory">
								
								<?php foreach($rcateg as $categ){
									$category=str_replace("-","---",$categ['category']);
									$category=str_replace(" ","-",$category);
									$category=str_replace("/","--",$category);
									?>
                                    <a href="<?php echo site_url().'/categoryinfo/'.$category;?>" class="nav-link-item">
                                        <?=$categ['icons'];?>
                                        <?=$categ['category'];?>
                                    </a>
                                <?php }?>
                                </div>
                            </div>
                        </div>
-->
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                 <li class="nav-item">
                                    <a href="<?=site_url();?>" class="nav-link">
                                        Home
                                    </a>
                                </li>
								<li class="nav-item">
                                    <a href="<?=site_url();?>aboutus" class="nav-link">
                                        About Us
                                    </a>
                                </li>
								
								 <li class="nav-item <?php if($try=='frontendcourse_list'){?> active<?php }?>">
                                    <a href="<?=site_url();?>course-details" class="nav-link">
                                        All Courses
                                    </a>
                                </li>
								<?php 
								$data = $_SESSION['role'];
								if(!$data){?>
								 <li class="nav-item <?php if($try=='trainersall_courses'){?> active<?php }?>">
                                   <a href="#" class="nav-link dropdown-toggle">
                                        Training Services
                                    </a>
                                    <ul class="dropdown-menu">
                                       
                                        <li class="nav-item">
											<a href="<?=site_url();?>freshers-training">
												Freshers Training
											</a>
										</li> 
										<li class="nav-item">
											<a href="<?=site_url();?>121-training">
												1:1 Training
											</a>
										</li> 
										<li class="nav-item">
											<a href="<?=site_url();?>professional-training">
												Professional Training
											</a>
										</li> 
										<li class="nav-item">
											<a href="<?=site_url();?>corporate-training">
												Corporate Training
											</a>
										</li> 
										<li class="nav-item">
											<a href="<?=site_url();?>on-demand-training">
												On-Demand Training
											</a>
										</li> 
										<li class="nav-item">
											<a href="<?=site_url();?>summer-training">
												Summer Training
											</a>
										</li> 
                                    </ul>
                                </li>
								
								
								
								
                                <li class="nav-item <?php if($try=='trainersall_courses'){?> active<?php }?>">
                                   <a href="#" class="nav-link dropdown-toggle">
                                        Join Us 
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item <?php if($try=='trainersall_courses'){?> active<?php }?>">
                                            <a href="<?=site_url();?>internships" class="nav-link">
                                                Internship
                                            </a>
                                        </li>
                                        <li class="nav-item <?php if($try=='trainersall_courses'){?> active<?php }?>">
                                            <a href="<?=site_url();?>careers" class="nav-link">
                                                Career
                                            </a>
                                        </li>
                                    </ul>
                                </li>
								
                               
                                <li class="nav-item <?php if($try=='frontendfaq'){?> active<?php }?>">
                                    <a href="<?=site_url();?>faq" class="nav-link">
                                        FAQ
                                    </a>
                                </li><li class="nav-item <?php if($try=='frontendcontactus'){?> active<?php }?>">
                                    <a href="<?=site_url();?>contact-us" class="nav-link">
                                        Contact Us
                                    </a>
                                </li>
								<?php }else{?>
								<li class="nav-item <?php if($try=='trainersall_courses'){?> active<?php }?>">
								<div class="optional-item">
									<a href="<?=site_url();?>main" style="color: #2c3e50;"> Welcome, <?php
									echo $_SESSION['first_name'].' '.
                                    $_SESSION['last_name'];
									?></a>
								</div>
								
                                   
                                </li>
								<?php }?>
                            </ul>
						<?php 
						$data = $_SESSION['role'];
						if($data){
							?>
						<div class="others-options d-flex align-items-center" style="padding-right: 10px;">
                                <div class="optional-item">
                                    <a href="<?=site_url();?>main/logout" class="default-btn two border-radius-5">Logout</a>
                                </div>
						</div>
						<div class="optional-item">
							<a href="<?=site_url();?>main" class="default-btn three border-radius-5">Dashboard</a>
						</div>
							 
						<?php }else{ ?>
						 <div class="others-options d-flex align-items-center" style="padding-right: 10px;">
                                <div class="optional-item">
                                    <a href="<?=site_url();?>login" class="default-btn one border-radius-5">Login</a>
                                </div>
                        </div> 
						<div class="others-options d-flex align-items-center">
							<div class="optional-item">
								<a href="<?=site_url();?>signup" class="default-btn two border-radius-5">Sign Up</a>
							</div>
						</div> 
							
						
						<?php }?>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="side-nav-responsive">
                <div class="container">
                    <div class="dot-menu">
                        <div class="circle-inner">
                            <div class="circle circle-one"></div>
                            <div class="circle circle-two"></div>
                            <div class="circle circle-three"></div>
                        </div>
                    </div>
                    
                    <div class="container">
                        <div class="side-nav-inner">
                            <div class="side-nav justify-content-center align-items-center">
                                <div class="side-item">
                                    <form class="search-form">
                                        <input  required type="search" class="form-control" placeholder="Search courses">
                                        <button type="submit">
                                            <i class="ri-search-line"></i>
                                        </button>
                                    </form>
                                </div>

                                <div class="side-item">
                                    <a href="signup" class="default-btn two">Sign Up</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->

<?php
if($page=='main'){?>
<div class="hero-slider-area">
   <div class="hero-slider owl-carousel owl-theme">
     
      <div class="hero-item">
         <div class="container-fluid">
            <div class="row align-items-center">
               <div class="col-lg-6" style="padding-left: 50px;">
                  <div class="hero-content banner-content">
                            <span data-aos="fade-up" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">FOR A BETTER FUTURE</span>
                            <h1 data-aos="fade-down" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">100% Job Oriented Courses </h1>
                            <p data-aos="fade-up" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true"> All course modules are designed as per the industry-level requirements for your
						career growth.</p>
                            <div class="banner-form-area" data-aos="fade-down" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">
                                <form method="post" class="banner-form search-form search-form-bg2" action="<?=site_url();?>search" data-toggle="validator" method="POST">
                                    <input  required type="search" class="form-control" placeholder="Search your courses" name="search" required autocomplete="off">
                                    <button class="default-btn" type="submit">
                                        <i class="ri-search-line"></i> Search now
                                    </button>
                                </form>
                            </div>
                            <div class="row">
                                
                            </div>
                        
                  </div>
				</div>
               <div class="col-lg-6">
                  
					<div class="hero-img banner-img-two aos-init aos-animate" data-aos="fade-up" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true" style="float: right;">
						<img src="<?=site_url();?>assets/images/home-two/home-two.png" alt="Man" />
						
					</div>
               </div>
            </div>
         
			
		 
		 </div>
      </div>
	  
	   <div class="hero-item">
         <div class="container-fluid">
           <div class="row align-items-center">
               <div class="col-lg-6" style="padding-left: 50px;">
                  <div class="hero-content banner-content">
                            <span data-aos="fade-up" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">FOR A BETTER FUTURE</span>
                            <h1 data-aos="fade-down" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">100% Placement Assistance </h1>
                            <p data-aos="fade-up" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true"> Gateway to FPGA provides job assistance to all our students and gives lifetime
support for their career growth opportunities.</p>
                            <div class="banner-form-area" data-aos="fade-down" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">
                                <form method="post" class="banner-form search-form search-form-bg2" action="<?=site_url();?>search" data-toggle="validator" method="POST">
                                    <input  required type="search" class="form-control" placeholder="Search your courses" name="search" required autocomplete="off">
                                    <button class="default-btn" type="submit">
                                        <i class="ri-search-line"></i> Search now
                                    </button>
                                </form>
                            </div>
                            <div class="row">
                                
                            </div>
                        
                  </div>
				</div>
               <div class="col-lg-6">
                  
					<div class="hero-img banner-img-two aos-init aos-animate" data-aos="fade-up" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true" style="float: right;">
						<img src="<?=site_url();?>assets/images/home-two/assistance.png" alt="Man" />
						
					</div>
               </div>
            </div>
      
		 
		 </div>
      </div>
	  
	  
	   <div class="hero-item">
         <div class="container-fluid">
            
			
		 <div class="row align-items-center">
               <div class="col-lg-6" style="padding-left: 50px;">
                  <div class="hero-content banner-content">
                            <span data-aos="fade-up" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">FOR A BETTER FUTURE</span>
                            <h1 data-aos="fade-down" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">100% Fees Refund in 10 Days </h1>
                            <p data-aos="fade-up" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">Gateway to FPGA provides a 100% fee refund chance if the course will not be
suitable for a candidate. No questions will be asked then.</p>
                            <div class="banner-form-area" data-aos="fade-down" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">
                                <form method="post" class="banner-form search-form search-form-bg2" action="<?=site_url();?>search" data-toggle="validator" method="POST">
                                    <input  required type="search" class="form-control" placeholder="Search your courses" name="search" required autocomplete="off">
                                    <button class="default-btn" type="submit">
                                        <i class="ri-search-line"></i> Search now
                                    </button>
                                </form>
                            </div>
                            <div class="row">
                                
                            </div>
                        
                  </div>
				</div>
               <div class="col-lg-6">
                  
					<div class="hero-img banner-img-two aos-init aos-animate" data-aos="fade-down" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true" style="float: right;">
						<img src="<?=site_url();?>assets/images/home-two/refund.png" alt="Man" />
						
					</div>
               </div>
            </div>
         
		 </div>
      </div>
	  
	  
    
	</div>
   <div class="hero-shape">
      <div class="shape1">
         <img src="assets/images/home-three/shape.png" alt="Shape" />
      </div>
      <div class="shape2">
         <img src="assets/images/home-three/shape2.png" alt="Shape" />
      </div>
   </div>
</div>
	
		
	
	   
	</div>   
	<!-- Banner Area End -->
        <!-- Top Header End -->
<?php }elseif($page=="student"){?>
 <!-- Inner Banner -->
        <div class="inner-banner inner-banner-bg2">
            <div class="container" style="max-width: 100% !important;">
                <div class="inner-title" style="padding: 25px !important;margin-bottom: 2%;text-align: center;">
						<h3>Student Dashboard</h3>		
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->
<div class="container" style="max-width: 95% !important;">
   <div class="row">
      <div class="col-xl-3 col-lg-4 col-md-12 theiaStickySidebar">
         <div class="settings-widget dash-profile">
            <div class="settings-menu p-0">
               <div class="profile-bg">
                  <h5>Student</h5>
                  <img src="<?=site_url();?>assets/img/instructor-profile-bg.jpg" alt="">
                  <div class="profile-img">
                     <a href="#"><img src="<?=site_url().'uploads/avatar/'.$_SESSION['simg'];?>" alt=""></a>
                  </div>
               </div>
               <div class="profile-group">
                  <div class="profile-name text-center">
                     <h4><a href="student-edit-profile">
					 <?=$_SESSION['first_name'].' '.$_SESSION['last_name']?>
					 </a></h4>
                  
                  </div>
               
               </div>
            </div>
         </div>
         <div class="settings-widget account-settings">
            <div class="settings-menu">
               <h3>DASHBOARD</h3>
			   
               <ul>
                  <li class="nav-item <?php if($try=='studentdashboard'){?> active<?php }?>">
                     <a href="<?=site_url();?>student-dashboard" class="nav-link">
                     <i class="feather-home"></i> My Dashboard
                     </a>
                  </li>
                  <li class="nav-item <?php if($try=='studentall_courses'){?> active<?php }?>">
                     <a href="<?=site_url();?>student-all-courses" class="nav-link">
                     <i class="feather-book"></i> All Courses
                     </a>
                  </li> 
				  
				 <li class="nav-item <?php if($try=='studentstudent_testimonials'){?> active<?php }?>">
                     <a href="<?=site_url();?>student-testimonials" class="nav-link">
                     <i class="feather-pie-chart"></i> Testimonials
                     </a>
                  </li>
                  <li class="nav-item <?php if($try=='studentstudent_help'){?> active<?php }?>">
                     <a href="<?=site_url();?>student-help" class="nav-link">
                     <i class="feather-star"></i> Ask For Help
                     </a>
                  </li>
				<li class="nav-item <?php if($try=='studentgethelplist'){?> active<?php }?>">
                     <a href="<?=site_url();?>student-gethelp" class="nav-link">
                     <i class="feather-star"></i> Help Q &amp; A
                     </a>
                  </li>
                  
				  <li class="nav-item <?php if($try=='studentstudent_payment'){?> active<?php }?>">
                     <a href="<?=site_url();?>student-payment" class="nav-link">
                     <i class="feather-pie-chart"></i> Payments
                     </a>
                  </li>
				  
				  <li class="nav-item <?php if($try=='studentstudent_edit_profile'){?> active<?php }?>">
                     <a href="<?=site_url();?>student-edit-profile" class="nav-link ">
                     <i class="feather-settings"></i> Edit Profile
                     </a>
                  </li>
               </ul>
			   <?php if(!empty($_SESSION['role'])){
	
				$myid = $this->Mycourses_model->ifpurchased($_SESSION['id']);
			
				if($myid[0]['purchased']==1){?>
               <div class="instructor-title">
                  <h3>Student Study Panel</h3>
               </div>
               <ul>
                  <li class="nav-item <?php if($try=='studentstudent_courses'){?> active<?php }?>">
                     <a href="<?=site_url();?>student-courses" class="nav-link ">
                     <i class="feather-settings"></i>My Courses 	
                     </a>
                  </li>
                  <li class="nav-item <?php if($try=='studentstudent_trainer'){?> active<?php }?>">
                     <a href="<?=site_url();?>student-trainer" class="nav-link">
                     <i class="feather-user"></i> My Trainer

                     </a>
                  </li>
                  <li class="nav-item <?php if($try=='studentstudent_material'){?> active<?php }?>">
                     <a href="<?=site_url();?>student-material" class="nav-link">
                     <i class="feather-refresh-cw"></i> Course Material

                     </a>
                  </li>
                  <li class="nav-item <?php if($try=='studentstudent_assignments'){?> active<?php }?>">
                     <a href="<?=site_url();?>student-assignments" class="nav-link">
                     <i class="feather-bell"></i> Assignments

                     </a>
                  </li>
                  <li class="nav-item <?php if($try=='studentstudent_test'){?> active<?php }?>">
                     <a href="<?=site_url();?>student-test" class="nav-link">
                     <i class="feather-lock"></i> Test
 
                     </a>
                  </li>
                  <li class="nav-item <?php if($try=='studentsrcard'){?> active<?php }?>">
                     <a href="<?=site_url();?>srcard" class="nav-link">
                     <i class="feather-trash-2"></i> Report

                     </a>
                  </li>
                  <li class="nav-item <?php if($try=='studentstudent_leave_testimony'){?> active<?php }?>">
                     <a href="<?=site_url();?>student-leave-testimony" class="nav-link">
                     <i class="feather-user"></i> Leave Testimony

                     </a>
                  </li>
				  
				  
				  <li class="nav-item <?php if($try=='studentstudent_certificate'){?> active<?php }?>">
                     <a href="<?=site_url();?>student-certificate" class="nav-link">
                     <i class="feather-user"></i> Certificate

                     </a>
                  </li>
				  
			
				  
                  <li class="nav-item <?php if($try=='trainersall_courses'){?> active<?php }?>">
                     <a href="main/logout" class="nav-link">
                     <i class="feather-power"></i> Sign Out
                     </a>
                  </li>
               </ul>
			   <?php }}?>
            </div>
         </div>
      </div>

<?php }elseif($page=="trainers"){?>
<div class="inner-banner inner-banner-bg2">
            <div class="container" style="max-width: 100% !important;">
                <div class="inner-title" style="padding: 25px !important;margin-bottom: 2%;text-align: center;">
						<h3>Trainers Dashboard</h3>                    
                </div>
            </div>
        </div>
		
        <!-- Inner Banner End -->
<div class="container">
   <div class="row">
      <div class="col-xl-3 col-lg-4 col-md-12 theiaStickySidebar">
         <div class="settings-widget dash-profile">
            <div class="settings-menu p-0">
               <div class="profile-bg">
                  <h5>Trainers</h5>
                  <img src="<?=site_url();?>assets/img/instructor-profile-bg.jpg" alt="">
                  <div class="profile-img">
                     <a href=""><img src="<?=site_url().'uploads/avatar/'.$_SESSION['simg'];?>" alt=""></a>
                  </div>
               </div>
               <div class="profile-group">
                  <div class="profile-name text-center">
                     <h4><a href="#">Welcome,
					 <?=$_SESSION['first_name'].' '.$_SESSION['last_name'];?>
					 </a></h4>
                  
                  </div>
               
               </div>
            </div>
         </div>
         <div class="settings-widget account-settings">
            <div class="settings-menu">
               <h3>DASHBOARD</h3>
               <ul>
                  <li class="nav-item 
					 <?php if($try=='trainersdashboard'){?> active<?php }?>
					 ">
                     <a href="<?=site_url();?>trainers-dashboard" class="nav-link">
                     <i class="feather-home"></i> My Dashboard
                     </a>
                  </li>
                  
                 <li class="nav-item <?php if($try=='trainerstrainers_help'){?> active<?php }?>">
                     <a href="<?=site_url();?>trainers-help" class="nav-link">
                     <i class="feather-star"></i> Student Queries
                     </a>
                  </li>
                 
<!--
				 <li class="nav-item <?php if($try=='trainerstrainers_testimonials'){?> active<?php }?>">
                     <a href="<?=site_url();?>trainers-testimonials" class="nav-link">
                     <i class="feather-pie-chart"></i> Testimonials
                     </a>
                  </li>
	-->			 	 
				 
				 
				  <li class="nav-item <?php if($try=='trainerstrainers_edit_profile'){?> active<?php }?>">
                     <a href="<?=site_url();?>trainers-edit-profile" class="nav-link ">
                     <i class="feather-settings"></i> Edit Profile
                     </a>
                  </li>
               </ul>
               <div class="instructor-title">
                  <h3>Trainers Teaching Panel</h3>
               </div>
               <ul>
                  <li class="nav-item <?php if($try=='trainerstrainers_courses'){?> active<?php }?>">
                     <a href="<?=site_url();?>trainers-courses" class="nav-link ">
                     <i class="feather-settings"></i>My Courses 	
                     </a>
                  </li>
                
                  <li class="nav-item <?php if($try=='trainerstrainers_material'){?> active<?php }?>">
                     <a href="<?=site_url();?>trainers-material" class="nav-link">
                     <i class="feather-refresh-cw"></i> Course Material

                     </a>
                  </li>
                  <li class="nav-item <?php if($try=='trainerstrainers_assignments'){?> active<?php }?>">
                     <a href="<?=site_url();?>trainers-assignments" class="nav-link">
                     <i class="feather-bell"></i> Assignments

                     </a>
                  </li>
                  <li class="nav-item <?php if($try=='trainerstrainers_test'){?> active<?php }?>">
                     <a href="<?=site_url();?>trainers-test" class="nav-link">
                     <i class="feather-lock"></i> Test
 
                     </a>
                  </li>
                  <li class="nav-item <?php if($try=='trcard'){?> active<?php }?>">
                     <a href="<?=site_url();?>trcard" class="nav-link">
                     <i class="feather-trash-2"></i> Report

                     </a>
                  </li>
            
               </ul>
            </div>
         </div>
      </div>
<?php }else{
		
		if($page=='register'){
		}elseif($page=='login'){
		}elseif($page=='course_details'){
		}else{
		
		?>
   <!-- Inner Banner -->
        <div class="inner-banner inner-banner-bg2">
            <div class="container">
                <div class="inner-title text-center">
		<?php if($sub=='training_121'){?>
                    <h3>1:1 Training</h3>
					<ul>
                        <li>
                            <a href="<?=site_url();?>">Home</a>
                        </li>
                        <li>1:1 Training</li>
                    </ul>
        <?php }else{?>
					<h3><?php echo ucwords(str_replace("_"," ",$sub));?> </h3>
					<ul>
                        <li>
                            <a href="<?=site_url();?>">Home</a>
                        </li>
                        <li><?php echo ucfirst(str_replace("_"," ",$sub));?></li>
                    </ul>
        <?php }?>
					
                    
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->
<?php }}?>
			<?php
							
			if($_SESSION['buyid']){//get_cidsid
			$Rteye='#'.$_SESSION['buyid'].$_SESSION['id'];
				$mcr = $this->Mycourses_model->get_cidsid($Rteye);
				if(!$mcr){
					if($_SESSION['role']=='student'){
					$cname=$this->Courses_model->get_courses($_SESSION['buyid']);
					echo "<div style=\"position: absolute;top: 30%;left: 30%;z-index: 1;width: 60%;\" class='alert alert-warning alert-dismissible' role='alert'>
					You have enquired for <a href='".site_url()."purchase/".$_SESSION['buyid']."'>".$cname['title']."</a>. <br>Please Please click above link to finish the purchase or <a href='".site_url()."removebuy'>click here</a> to remove it from purchase list.
					</div>";
					}
				}
			}


			?>
<style>			
.containerz{
	z-index:10;
}
</style>			
				<?php
        //for warning -> flash_message
        //for info -> success_message
        
        $arr = $this->session->flashdata();
        if(!empty($arr['flash_message'])){
            $html = '<div class="containerz" style="margin-top: 10px;width: 80%;">';
            $html .= '<div class="alert alert-warning alert-dismissible" role="alert">';
            // $html .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
            $html .= $arr['flash_message'];
            $html .= '</div>';
            $html .= '</div>';
        }else if (!empty($arr['success_message'])){
            $html = '<div class="containerz" style="margin-top: 10px;width: 80%;">';
            $html .= '<div class="alert alert-info alert-dismissible" role="alert">';
            // $html .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
            $html .= $arr['success_message'];
            $html .= '</div>';
            $html .= '</div>';
        }else if (!empty($arr['danger_message'])){
            $html = '<div class="containerz" style="margin-top: 10px;width: 80%;">';
            $html .= '<div class="alert alert-danger alert-dismissible" role="alert">';
            // $html .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
            $html .= $arr['danger_message'];
            $html .= '</div>';
            $html .= '</div>';
        }
		if(@$html!=''){
			echo $html;
		}
    ?>
						
			<?php                    
			if(isset($_view) && $_view)
				$this->load->view($_view);
			?>
			<?php if($page=='student'){}
					elseif($page=='teacher'){}
					else{
						?>
						
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
                            <input  required type="email" class="form-control" placeholder="Enter Your Email Address" name="EMAIL" required autocomplete="off">
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

					<?php }?>
<!-- Footer Area -->
        <footer class="footer-area">
            <div class="container pt-100 pb-70">
                 <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="index">
                                    <img src="<?=site_url();?>assets/images/logos/logo.png" alt="Images">
                                </a>
                            </div>
                            <p>
                                Gateway to FPGA is a distinguished training division for higher learning in FPGA System Design and Embedded System Design and VLSI Technologies.
                            </p>
                            <ul class="social-link">
                                <li class="social-title">Follow Us:</li>
							</ul>
							<ul class="social-link">
                                <li>
                                    <a href="https://www.facebook.com/gateway2fpga" target="_blank">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/gateway2fpga" target="_blank">
                                        <i class="ri-twitter-line"></i>
                                    </a>
                                </li>
								<li>
                                    <a href="https://www.instagram.com/gateway2fpga/" target="_blank">
                                        <i class="ri-instagram-line"></i>
                                    </a>
                                </li>
								
                                <li>
                                    <a href="https://www.youtube.com/channel/UCmE-ZXLytXxdiZIBQvS4Cxw" target="_blank">
                                        <i class="ri-youtube-line"></i>
                                    </a>
                                </li>
								
								<li>
                                    <a href="https://www.linkedin.com/company/gatewaytofpga/" target="_blank">
                                        <i class="ri-linkedin-line"></i>
                                    </a>
                                </li>
								
								
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget ps-5">
                            <h3>About us</h3>
                            <ul class="footer-list">
                                <li>
                                    <a href="<?=site_url();?>aboutus">
                                        About GTF
                                    </a>
                                </li> 
                                <li>
                                    <a href="<?=site_url();?>news-blogs">
                                        Blogs
                                    </a>
                                </li> 
                                <li>
                                    <a href="<?=site_url();?>course-details">
                                        All Coureses
                                    </a>
                                </li> 
                                <li>
                                    <a href="<?=site_url();?>freshers-training">
                                        Freshers Training
                                    </a>
                                </li> 
                                <li>
                                    <a href="<?=site_url();?>121-training">
                                        1:1 Training
                                    </a>
                                </li> 
								<li>
                                    <a href="<?=site_url();?>professional-training">
                                        Professional Training
                                    </a>
                                </li> 
								<li>
                                    <a href="<?=site_url();?>corporate-training">
                                        Corporate Training
                                    </a>
                                </li> 
								<li>
                                    <a href="<?=site_url();?>on-demand-training">
                                        On-Demand Training
                                    </a>
                                </li> 
								<li>
                                    <a href="<?=site_url();?>summer-training">
                                        Summer Training
                                    </a>
                                </li> 
								
								
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget ps-5">
                            <h3>Resources</h3>
                            <ul class="footer-list">
                                <li>
                                    <a href="<?=site_url();?>internships">
                                        Internship 
                                    </a>
                                </li> 
                                <li>
                                    <a href="<?=site_url();?>careers" >
                                        Career
                                    </a>
                                </li> 
                                <li>
                                    <a href="<?=site_url();?>askfordemo">
                                        Book a Demo
                                    </a>
                                </li> 
                                <li>
                                    <a href="<?=site_url();?>signup">
                                        Registration
                                    </a>
                                </li> 
                                <li>
                                    <a href="<?=site_url();?>terms-conditions">
                                        Terms and Conditions
                                    </a>
                                </li> 
								<li>
                                    <a href="<?=site_url();?>privacy-policy">
                                        Privacy Policy
                                    </a>
                                </li> 
								
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget ps-5">
                            <h3>Official Info</h3>
                            <ul class="footer-contact">
                                <li>
                                    <i class="ri-map-pin-2-fill"></i>
                                    <div class="content">
                                        <h4>Location:</h4>
                                        <span>New Delhi</span>
                                    </div>
                                </li>
                                <li>
                                    <i class="ri-mail-fill"></i>
                                    <div class="content">
                                        <h4>Email:</h4>
                                        <span><a href="mailto:info@gatewaytofpga.com">info@gatewaytofpga.com</a></span>
                                    </div>
                                </li>
                                <li>
                                    <i class="ri-phone-fill"></i>
                                    <div class="content">
                                        <h4>Phone:</h4>
                                        <span><a href="tel:+918588833754">+91 85888 33754</a></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-area">
                <div class="container">
                    <div class="copy-right-text text-center">
                        <p>
                            Copyright @<script>document.write(new Date().getFullYear())</script> <b>GatewayToFpga</b> All Rights Reserved 
                            <a href="https://infotonicsmedia.com/" target="_blank">Powered by InfotonicsMedia</a> 
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End -->

        <!-- Jquery Min JS -->
        <script src="<?=site_url();?>assets/js/jquery.min.js"></script>
        <!-- Plugins JS -->
        <script src="<?=site_url();?>assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>
		<script src="<?=site_url();?>assets/js/meanmenu.min.js" type="text/javascript"></script>
		<script src="<?=site_url();?>assets/js/ajaxchimp.min.js" type="text/javascript"></script>
		<script src="<?=site_url();?>assets/js/form-validator.min.js" type="text/javascript"></script>
		<script src="<?=site_url();?>assets/js/contact-form-script.js" type="text/javascript"></script>
		<script src="<?=site_url();?>assets/js/owl.carousel.min.js" type="text/javascript"></script>
		<script src="<?=site_url();?>assets/js/magnific-popup.min.js" type="text/javascript"></script>
		<script src="<?=site_url();?>assets/js/aos.js" type="text/javascript"></script>
		<script src="<?=site_url();?>assets/js/odometer.min.js" type="text/javascript"></script>
		<script src="<?=site_url();?>assets/js/appear.min.js" type="text/javascript"></script>
		<script src="<?=site_url();?>assets/js/tweenMax.min.js" type="text/javascript"></script>
        <!-- Custom  JS -->
        <script src="<?=site_url();?>assets/js/custom.js"></script>
		 <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
		 <script src="<?=site_url();?>/assets/admin/plugins/select2/js/select2.min.js"></script>
		<script src="<?=site_url();?>/assets/admin/js/form-select2.js"></script>
		
		<script>
		
		$(document).ready(function() {
				// show the alert
				setTimeout(function() {
					$(".alert").alert('close');
				}, 5000);
			});
		
		$(document).ready(function() {
		  $('#summernote').summernote();
		  $('#summernote1').summernote();
		  $('#summernote2').summernote();
		  $('#summernote3').summernote();
		  $('#summernote4').summernote();
		});
	</script>
		<script>
		// function fetchvalue(info,urlz){
		function fetchvalue(info,urlz,newid){
			var infoz=$('.'+info).find(':selected').val();
			var urlz='<?=site_url();?>'+urlz+'/'+infoz;
			$.ajax({
			  type: 'GET',
			  url:urlz,
				}).done(function(res) {
					var data = res;
					var jdata = null;
					try
					{
						jdata = $.parseJSON(data);  
					}catch(e)
					{}
					if(jdata)
					{
						json = JSON.parse(res);
						$('#course_id').val(json.id);
						$('#cname').html(json.title);	
					}else
					{
						$('.'+newid).html(res);
					}
					
					
					
				});

		}			//accepts form as parameter
		function submitForm(form){ //accepts form as parameter
		event.preventDefault();
		$("#alertz").html('');
			var formData = $(form).serialize(); //serialize this particular form
			$.ajax({
					  type: 'POST',
					  url: $(form).attr('action'), //get value from forms action attrbute
					  data: formData,
					  enctype: 'multipart/form-data',
						// processData: false,
						// contentType: false,
						// cache: false,
						// timeout: 600000
			}).done(function(response) {
					if(response!='1'){
						$("#alertz").html("<div style=\"width: 100%;\" class='alert alert-warning alert-dismissible' role='alert'>"+response+"</div>");
						var scrollPos =  $(".inner-title").offset().top;
						$(window).scrollTop(scrollPos);
					}else{
						$("#alertz").html("<div style=\"width: 100%;\" class='alert alert-success alert-dismissible' role='alert'>Your Information Has been Shared Successfully. </div>");
						var scrollPos =  $(".inner-title").offset().top;
						$(window).scrollTop(scrollPos);
						form.reset();
						//history.go(-1);

					}
			});
			
		}
		</script>
		<script>
			$(document).ready(function(){
				// $(document).bind("contextmenu",function(e){
				  // return false;
				// });
			});
			</script>
    </body>
</html>