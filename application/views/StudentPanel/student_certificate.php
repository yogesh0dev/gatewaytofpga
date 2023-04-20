
<div class="col-xl-9 col-lg-8 col-md-12">
<div class="row">
<div class="col-md-12">
   <div class="settings-widget">
	  <div class="settings-inner-blk p-0">
		 <div class="sell-course-head comman-space">
			<h3>Download Your Certificate</h3>
			<p>You can search for old courses too.</p>
		 </div>
		 <div class="comman-space pb-0">
		
			<div class="settings-tickets-blk course-instruct-blk table-responsive">
			   <table class="table table-nowrap mb-0">
				  <thead class="table-light">
					 <tr>
						<th>COURSE</th>
						<th>BATCH</th>
						<th>Certificate</th>
					   
					 </tr>
				  </thead><tbody>
                                          
<?php foreach($mycourses as $m){
		$bname= $this->Course_schedule_model->get_course_schedule($m['batch_id']);
		$cids=$m['course_id'];
		$cid=$this->Courses_model->get_courses($cids);
		$ctitle=str_replace("-","---",$cid['title']);
		$ctitle=str_replace(" ","-",$ctitle);
		$ctitle=str_replace("/","--",$ctitle);
		//course_id-batch_id-sid-tid	uniqueid
		//11-33-32-5				     #1133325
	?>
	 <tr>
		<td class="instruct-orders-info">
		   <p><a href="<?php echo site_url().'/course-details/'.$ctitle;?>">
		   <?=$ctitle;?></a></p>
		</td>
		
		<td><?=$bname['batch_name'];?></td>
		<td><a target="_blank" href="<?=site_url().'myCertificate/'.$m['course_id'].$m['batch_id'].$_SESSION['id'].$bname['tid'];?>"><span class="badge info-medium">Download Certificate</span></a></td>
	 </tr>
                                             
	  <?php }?>
                                             
											 
					  </tbody>
				   </table>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
 </div>
</div>
               
	</div>
</div>
