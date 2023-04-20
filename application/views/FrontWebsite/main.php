 <!-- Featured Area-->
        <div class="featured-area featured-area-mt pb-70">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-6">
                        <div class="featured-item">
							<a href="<?=site_url();?>courseschedule">
						   <i class="ri-calendar-2-line"></i>
                            <h3>Course Schedule</h3>
							<p>View details of all course schedules and upcoming courses here Register yourself and start your journey.</p>
							</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="featured-item">
						<a href="<?=site_url();?>signup">
                            <i class="ri-calendar-check-line"></i>
                            <h3>Course Registration</h3>
							<p>You can apply here with the name of course you are interested in. Our team will reach out to you with complete information on the best suitable courses.</p>
						</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="featured-item">
						<a href="<?=site_url();?>internships">
                          <i class="ri-briefcase-line"></i>
						   
                            <h3>Internship</h3>
							<p>Start your FPGA Design career with Gateway To FPGA Internship. Choose the right internship for you and get hands-on experience.</p>
							</a>
                        </div>
                    </div>
					<div class="col-lg-3 col-6">
                        <div class="featured-item">
							<a href="<?=site_url();?>videos">
                            <i class="ri-video-line"></i>
                            <h3>Our Videos</h3>
							<p>Watch Programmes Intro and demo session videos and links for various courses offered.</p>
							</a>
                        </div>
                    </div>
					
                </div>
            </div>
        </div>
        <!-- Featured Area End -->



        <!-- Courses Area -->
        <div class="courses-area courses-area-rs pb-70">
            <div class="container">
                <div class="section-title mb-45">
                    <h2>Find popular <b>courses</b></h2>
                </div>
                <div class="course-slider owl-carousel owl-theme">
				<?php foreach($courses as $cors){
						$tyu=$this->Category_model->get_category($cors['categ']);
						$ctitle=str_replace("-","---",$cors['title']);
						$ctitle=str_replace(" ","-",$ctitle);
						$ctitle=str_replace("/","--",$ctitle);
					?>
                    <div class="courses-item">
                        <a href="<?php echo site_url().'/course-details/'.$ctitle;?>">
                            <img style="height: 168px;" src="<?=site_url().'uploads/courses/'.$cors['img'];?>" alt="Courses" />
                        </a>
                        <div class="content">
                            
                            <a href="<?php echo site_url().'/categoryinfo/'.str_replace(" ","-",$tyu['category']);?>" class="tag-btn">
								<?=$tyu['category'];?>
							</a>
                            <h3><a href="<?php echo site_url().'/course-details/'.$ctitle;?>">
							<?=$cors['title'];?>
							</a></h3>
                            <ul class="course-list">
                                <li><i class="ri-time-fill"></i><?=$cors['duration'];?> Hr</li>
                                <li><i class="ri-vidicon-fill"></i><?=$cors['module_count'];?> Lectures</li>
                            </ul>
                            <div class="bottom-content">
                                <div class="rating2">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    5 (30+ rating)
                                </div>
                                <div class="bottom-price">&#8377; <?=$cors['price'];?></div>
                            </div>
                        </div>
                    </div>
				<?php }?>
                </div>
            </div>
        </div>
        <!-- Courses Area End -->
        <!-- Categories Area -- >
        <div class="categories-area pb-70">
            <div class="container">
                <div class="section-title mb-45">
                    <h2>Explore top featured <b>categories</b></h2>
                </div>
                <div class="categories-slider owl-carousel owl-theme">
                   
				<?php foreach($catregr as $categ){
						$category=str_replace("-","---",$categ['category']);
						$category=str_replace(" ","-",$category);
						$category=str_replace("/","--",$category);
					?>
				   <div class="categories-item">
                        <a href="<?php echo site_url().'/categoryinfo/'.$category;?>">
                            <img src="<?php echo site_url().'/uploads/category/'.$categ['imgs'];?>" alt="Categories">
                        </a>
                        <div class="content">
                            <a href="<?php echo site_url().'/categoryinfo/'.str_replace(" ","-",$categ['category']);?>">
                                <?=$categ['icons'];?>
                                <h3><?=$categ['category'];?></h3>
                            </a>
                        </div>
                    </div>
				<?php }?> 
                </div>
            </div>
        </div>
        < !-- Categories Area End -->

        <!-- Enrolled Area -->
        <div class="enrolled-area pt-100 pb-70 section-bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="enrolled-img-two mb-30" data-speed="0.05" data-revert="true">
                            <img src="assets/images/enrolled/enrolled-img2.png" alt="Enrolled">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="enrolled-content mb-30">
                            <div class="section-title">
                                <h2>Why you should choose Gateway to FPGA ?</h2>
                                <p>
                                   
                                </p>
                            </div>
                            
							 <div class="courses-details-tab-content">
                                            <div class="courses-details-accordion">
                                                <ul class="accordion">

                                                    <li class="accordion-item">
                                                        <a class="accordion-title" href="javascript:void(0)">
                                                            <i class="ri-add-fill"></i>
															Lifetime Support
                                                        </a>
                                                        <div class="accordion-content">
                                                            <div class="accordion-content-list">
                                                                <div class="accordion-content-left">
                                                                    <i class="ri-file-text-line"></i>
                                                                    We are delivering an enhanced learning experience with the right blend of training methodology, a rich mix of technical, aptitude and soft skills, industry-relevant curriculum and student project work.
                                                                </div>
                                                                
                                                            </div>
                                                           
                                                        </div>
                                                    </li>
	
                                                    
													
													
													<li class="accordion-item">
                                                        <a class="accordion-title" href="javascript:void(0)">
                                                            <i class="ri-add-fill"></i>
															Industry Experienced Trainers
                                                        </a>
                                                        <div class="accordion-content">
                                                            <div class="accordion-content-list">
                                                                <div class="accordion-content-left">
                                                                    <i class="ri-file-text-line"></i>
                                                                    
													Industry-experienced trainers with hands-on experience in the latest tools and technologies taking the role of mentors and career counsellors to advise, inspire and help students achieve personal and professional goals.
												
                                                                </div>
                                                                
                                                            </div>
                                                           
                                                        </div>
                                                    </li>
	
                                                    <li class="accordion-item">
                                                        <a class="accordion-title" href="javascript:void(0)">
                                                            <i class="ri-add-fill"></i>
															100% Job Assistance
                                                        </a>
                                                        <div class="accordion-content">
                                                            <div class="accordion-content-list">
                                                                <div class="accordion-content-left">
                                                                    <i class="ri-file-text-line"></i>
                                                                    
													Gateway to FPGA provides job placements to our certified students. Gateway to FPGA has a devoted Placement wing which has an authentic record of placing students in the best VLSI companies in India.
												
                                                                </div>
                                                                
                                                            </div>
                                                           
                                                        </div>
                                                    </li>
	
                                                    
													<li class="accordion-item">
                                                        <a class="accordion-title" href="javascript:void(0)">
                                                            <i class="ri-add-fill"></i>
															1:1 Query Discussion 
                                                        </a>
                                                        <div class="accordion-content">
                                                            <div class="accordion-content-list">
                                                                <div class="accordion-content-left">
                                                                    <i class="ri-file-text-line"></i>
                                                                    
													Gateway to FPGA provides job placements to our certified students. Gateway to FPGA has a devoted Placement wing which has an authentic record of placing students in the best VLSI companies in India.
												
                                                                </div>
                                                                
                                                            </div>
                                                           
                                                        </div>
                                                    </li>
	
                                                    
													
													
													
                                                </ul>
                                            </div>
                                        </div>
                                    
							
							<a href="<?=site_url();?>signup" class="default-btn">Register Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Enrolled Area End -->

       
		 <div class="featured-area featured-area-mt pb-70  " style="margin-top: 100px;">
            <div class="container">
<div class="section-title mb-45">
                    <h2>Let's Make Your Journey  <b>Easier</b></h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-6">
                        <div class="featured-item">
                            <img src="<?=site_url();?>assets/images/career_advisor.png" 
							style="height: 320px !important;"/>
                            <h3>Talk To Career Advisor</h3>
							<p>Get to understand that to learn and how it will help you.</p>
							<br>
							<br>
							<a href="http://localhost/lms/signup" class="default-btn">Register Now</a>
							<br>
							<br>

                        </div>
						
                    </div>
                    <div class="col-lg-4 col-6">
                        <div class="featured-item">
                            <img src="<?=site_url();?>assets/images/demo_session.png" 
							style="height: 320px !important;"/>
                            <h3>Attend A Demo Session</h3>
							<p>Experience a live online learning environment with our experts.</p>
							<br>
							<br>
							<a href="http://localhost/lms/signup" class="default-btn">Register Now</a>
							<br>
							<br>
                        </div>
                    </div>



                    <div class="col-lg-4 col-6">
                        <div class="featured-item">
                         
						   <img src="<?=site_url();?>assets/images/apply_now.png" 
							style="height: 320px !important;"/>
                            <h3>Apply Now</h3>
							<p>We will serve you more details and guidance to get started.</p>
							<br>
							<br>
							<a href="http://localhost/lms/signup" class="default-btn">Register Now</a>
							<br>
							<br>
                        </div>
					
                    </div>
					
                </div>
            </div>
        </div>
       


        <!-- Testimonials Area -->
        <div class="testimonials-area ptb-100 section-bg">
            <div class="container">
                <div class="section-title mb-45 text-center">
                    <h2>What people say <b>about us</b></h2>
                </div>
                <div class="testimonials-slider owl-carousel owl-theme">
				<?php foreach($testimoney as $testm){
					
					$users=$this->Users_model->get_users($testm['studentid']);
					?>
                    <div class="testimonials-card">
                        <div class="content">
                            <img src="<?=site_url().'uploads/avatar/'.$users['simg'];?>" />
                            <h3><?=$users['first_name'];?></h3>
                            <span>Student</span>
                        </div>
                        <div class="quote"> <i class="flaticon-quote"></i></div>
                        <p>“<?=$testm['msg'];?>”</p>
                        <div class="">
						<?php 
							$td=$testm['tdate'];
							$td = strtotime($td);
							echo date('d-m-Y', $td);   
							
							?><br>
						<?php
							// if($tc!=0){
							$star=$testm['star'];
							for($k=0;$k<$star;$k++){
								echo '<i class="ri-star-fill"></i>';
								// echo "<i class="ri-star-half-fill"></i>";
							}
							// }
							
							?>
                            
                        </div>
                    </div>
				<?php }?>
                </div>
            </div>
        </div>
        <!-- Testimonials Area End -->

     

        <!-- Blog Area -->
        <div class="blog-area pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center mb-45">
                    <h2>Latest from our <b>blogs</b></h2>
                </div>
                <div class="row justify-content-center">
				<?php foreach($blogs as $b){
						$ctitle=str_replace("-","---",$b['title']);
						$ctitle=str_replace(" ","-",$ctitle);
						$ctitle=str_replace("/","--",$ctitle);
					$tyu=$this->Category_model->get_category($b['categ'])
					?>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card">
                            <a href="<?=site_url().'blogs-details/'.$ctitle;?>"  style="display: flex;justify-content: center;">
                                <img src="<?=site_url().'uploads/blogs/'.$b['image'];?>" alt="Blog">
                            </a>
                            <div class="content">
                                <ul>
                                    <li><i class="ri-calendar-todo-fill"></i> <?=$b['bdate'];?> </li>
                                    <li><i class="ri-price-tag-3-fill"></i> 
									<a href="#"><?=$tyu['category'];?></a></li>
                                </ul>
                                <h3><a href="<?=site_url().'blogs-details/'.$ctitle;?>"><?=$b['title'];?></a></h3>
                                <p><?=substr($b['description'], 0, 100);?>.</p>
                                <a href="<?=site_url().'blogs-details/'.$ctitle;?>" class="read-btn">Read More</a>
                            </div>
                        </div>
                    </div>
				<?php }?>
                </div>
            </div>
        </div>
        <!-- Blog Area End -->