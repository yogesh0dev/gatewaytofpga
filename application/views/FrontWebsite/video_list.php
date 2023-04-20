

<!-- Courses Area -->
<div class="courses-area pt-100 pb-70">
	<div class="container">
	<div class="product-topper mb-45">
		<div class="row align-items-center">
			<div class="col-lg-8 col-md-6">
				<div class="product-title">
					<h3>We found <span> <?=count($courses);?> </span>courses available for you</h3>
				</div>
			</div>

		</div>
	</div>
		<div class="row">
			
			<div class="col-lg-12">
				<div class="row">
		<?php 
		if(count($courses)!=0){   //categ course_id batch_id youtube extns
		foreach($videos as $c){
			
			$categ=$c['categ']; 
			$categ=$this->Category_model->get_category($categ);
			$cid=$c['course_id']; 
			$cid=$this->Courses_model->get_courses($cid);
			$bid= $c['batch_id']; 
			$bid=$this->Course_schedule_model->get_course_schedule($bid);
				
			?>
		<div class="col-lg-4 col-md-4">
			<div class="courses-item">
			<h3 style="padding: 10px;"><?php echo $cid['title']; ?></h3>
		<h3 style="padding: 10px;"><?php echo $bid['batch_name']; ?></h3>
				<video controls width="100%" height="100%"  controlsList="nodownload">
			<source src="<?=site_url();?>uploads/videos/<?php echo @$c['youtube']; ?>" 
			type="video/mp4">
			<!--type="video/<?=$v['extns'];?>">-->
			Your browser does not support the video tag.
		</video>
		</div>
		</div>
		<?php }}else{
			
				echo '<div class="container" style="margin-top: 10px;"><div class="alert alert-warning alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>No Results Found.</div></div>';
		}?>
		
		 <div class="pagination-area2">
			<?php echo $this->pagination->create_links(); ?>
		</div>
				
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Courses Area End -->

<!-- Newsletter Area -->

<!-- Newsletter Area End -->
