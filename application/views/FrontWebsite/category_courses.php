  <!-- Inner Banner -->
        <div class="inner-banner inner-banner-bg">
            <div class="container">
                <div class="inner-title text-center">
                    <h3>Courses List</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Courses List</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Events Area -->
        <div class="event-area pt-100 pb-100">
            <div class="container">
                <div class="product-topper mb-45">
                    <div class="row align-items-center">
                        <div class="col-lg-8 col-md-6">
                            <div class="product-title">
                                <h3>We found  <span> <?=$tlist;?> </span>courses available for you</h3>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="product-list">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Default Price</option>
                                    <option value="1">Price High To Low</option>
                                    <option value="2">Price Low To High</option>
                                </select>
                                <i class="ri-arrow-down-s-line"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
				
				<?php 
				if(count($courses)!=0){
				foreach($courses as $cr){
						$ctitle=str_replace("-","---",$cr['title']);
						$ctitle=str_replace(" ","-",$ctitle);
						$ctitle=str_replace("/","--",$ctitle);
					
					?>
                    <div class="col-lg-6">
                        <div class="event-item box-shadow">
                            <div class="event-img">
                                <a href="<?=site_url().'/course-details/'.$ctitle;?>">
                                    <img src="<?=site_url().'uploads/courses/'.$cr['img'];?>" alt="Events" />
                                </a>
                            </div>
                            <div class="event-content">
                                <ul class="event-list">
                                    <li><i class="ri-time-fill"></i> 18 hr 07 min</li>
                                    <li><i class="ri-vidicon-fill"></i> 17 lectures</li>
                                </ul>
                                <h3><a href="<?=site_url().'/course-details/'.$ctitle;?>">
								<?=$cr['title'];?>
								</a></h3>
                                <p><?=substr($cr['summary'], 0, 100);?></p>
                            </div>
                        </div>
                    </div>
				<?php }}else{
					
						echo '<div class="container" style="margin-top: 10px;"><div class="alert alert-warning alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>No Results Found.</div></div>';
				}?>
				
				 <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div> 
                  
                    
                <!--    <div class="col-lg-12 col-md-12 text-center">
                        <div class="pagination-area">
							<a href="blog.html" class="prev page-numbers">
								<i class="flaticon-left-arrow"></i>
							</a>

							<span class="page-numbers current" aria-current="page">1</span>
							<a href="blog.html" class="page-numbers">2</a>
							<a href="blog.html" class="page-numbers">3</a>
							
							<a href="blog.html" class="next page-numbers">
								<i class="flaticon-chevron"></i>
							</a>
						</div>
                    </div>-->
                </div>
            </div>
        </div>
        <!-- Events Area End -->

        <!-- Newsletter Area -->
        
        <!-- Newsletter Area End -->