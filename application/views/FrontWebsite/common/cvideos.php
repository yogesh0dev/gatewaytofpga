<?php
// echo '<pre>';
// var_dump($_SESSION);
	if(@$myjobpost==NULL || @$myjobpost=='0' ){
?>

    <section class="community-posts-area">
            <div class="container">
               
<?php 
if(@$jobpost==NULL || @$jobpost=='0' ){?>
	<div class="alert media message_alert alert-success fade show" role="alert">
                                <i class=" icon_check_alt2"></i>
                                <div class="media-body">
                                    <h5>No Matching Jobs Found</h5>
                                   
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <i class="icon_close"></i>
                                    </button>
                                </div>
                            </div>
	
<?php }else{?>
<?php
foreach(@$jobpost as $j){?>
                <div class="community-posts-wrapper">
                    <div class="community-post wow fadeInUp" data-wow-delay="0.5s">
                        <div class="post-content">
                            <div class="author-avatar">
                                <img src="<?=site_url();?>uiux/flags/<?=$j['cid'];?>.png" alt="community post">
                            </div>
                            <div class="entry-content">
                                <h3 class="post-title"><a href="<?=site_url();?>jobsinfo/<?=$j['id'];?>"><?=$j['title'];?></a></h3>
                                <p><?php 
						
							$industry = $this->Industry_model->get_industry($j['indus']);
							echo $industry['industry'];
					  ?>
					  <br>
					  <?php 
						
							$country = $this->Country_model->get_country($j['cid']);
							$cities = $this->City_model->get_city($j['citid']);
							$regions = $this->Region_model->get_region($j['sid']);
							
							echo $country['Country'].','.$regions['Region'].','.$cities['City'];
						?>
					  </p>
                            </div>
                        </div>
                        <div class="post-meta-wrapper">
                            <ul class="post-meta-info">
                                <li><a href="#"><i class="fas fas fa-dollar-sign"></i>30k</a></li>
                                <li><a href="#">to</a></li>
                                <li><a href="#"><i class="fas fas fa-dollar-sign"></i>50k</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.community-post -->

                </div>
                <!-- /.community-posts-wrapper -->
<?php }?>
                <!-- Pagination -->
				


              <nav class="ls-pagination">
             
				<?php echo $this->pagination->create_links(); ?>
              </nav> 
                <!-- /.button-container -->
<?php }?>
            </div>
            <!-- /.container -->
        </section>
        <!-- /.community-posts-area -->


<?php }else{?>
        <!-- /.community-posts-area -->
		 <section class="community-posts-area">
            <div class="container">
               
<?php
foreach(@$myjobpost as $t){
	
$j=$this->Jobpost_model->get_jobpost($t['jobid']);	
	
?>
                <div class="community-posts-wrapper">
                    <div class="community-post wow fadeInUp" data-wow-delay="0.5s">
                        <div class="post-content">
                            <div class="author-avatar">
                                <img src="<?=site_url();?>uiux/flags/<?=$j['cid'];?>.png" alt="community post">
                            </div>
                            <div class="entry-content">
                                <h3 class="post-title"><a href="<?=site_url();?>jobsinfo/<?=$j['id'];?>"><?=$j['title'];?></a></h3>
                                <p><?php 
						
							$industry = $this->Industry_model->get_industry($j['indus']);
							echo $industry['industry'];
					  ?>
					  <br>
					  <?php 
						
							$country = $this->Country_model->get_country($j['cid']);
							$cities = $this->City_model->get_city($j['citid']);
							$regions = $this->Region_model->get_region($j['sid']);
							
							echo $country['Country'].','.$regions['Region'].','.$cities['City'];
						?>
					  </p>
                            </div>
                        </div>
                        <div class="post-meta-wrapper">
                            <ul class="post-meta-info">
                                <li><a href="#"><i class="fas fas fa-dollar-sign"></i>30k</a></li>
                                <li><a href="#">to</a></li>
                                <li><a href="#"><i class="fas fas fa-dollar-sign"></i>50k</a></li>
								<li class="changelog_content">
								<?php
									if($t['accepted']=='N'){
										echo'<span class="improve">Not Reviewed</span>';
									}elseif($t['accepted']=='P'){
										echo'<span class="update">Under Process</span>';
									}elseif($t['accepted']=='F'){
										echo'<span class="new">Accepted</span>';
									}elseif($t['accepted']=='D'){
										echo'<span class="fixed">Rejected</span>';
									}
								
								?>
								</li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.community-post -red,new-green,improve-blue,update - yellow-->

                </div>
                <!-- /.community-posts-wrapper -->
<?php }?>
                <!-- Pagination -->
				


              <nav class="ls-pagination">
             
				<?php echo $this->pagination->create_links(); ?>
              </nav> 
                <!-- /.button-container -->
            </div>
            <!-- /.container -->
        </section>

      <?php }?>       
           