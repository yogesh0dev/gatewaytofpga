<?php

function encrypto($simple_string){
	$ciphering = "AES-128-CTR";
	$options = 0;
	$encryption_iv = '1234567891011121';
	$encryption_key = "infotonicsMedia";
	return $encrypted = openssl_encrypt($simple_string, $ciphering,
				$encryption_key, $options, $encryption_iv);
}
?>
	<div class="col-xl-9 col-lg-8 col-md-12">
    <style>
	.sell-tabel-info .course-info {
		margin: 7px 0px;
		width: 525px;
	}
	.settings-inner-blk table tr {
		vertical-align: middle;
		text-align: center;
	}
  </style>
   <div class="row">
      <div class="col-md-12">
         <div class="settings-widget">
            <div class="settings-inner-blk p-0">
               <div class="sell-course-head comman-space">
                  <h3>Study Assignments</h3>
               </div>
               <div class="comman-space pb-0">

                  <div class="settings-tickets-blk course-instruct-blk table-responsive">
                     
						<table class="table table-nowrap mb-2">
   <thead class="table-light"> 
      <tr>
         <th>S.No.</th>
         <th>Course Name</th>
         <th>Batch Name</th>
		 <th>Attendance</th>
         <th>Assignments Marks</th>
         <th>Test Marks</th>
      </tr>
   </thead><tbody>
   
  <?php 
  $sno=0;
  foreach($mycourses as $m){
		$bname= $this->Course_schedule_model->get_course_schedule($m['batch_id']);
		$cids=$m['course_id'];
		$cid=$this->Courses_model->get_courses($cids);
		$ctitle=str_replace("-","---",$cid['title']);
		$ctitle=str_replace(" ","-",$ctitle);
		$ctitle=str_replace("/","--",$ctitle);
	 
		$at=$this->Attendance_model->get_attotal($m['batch_id']);
		$marks=$this->Marks_model->get_amarks($m['batch_id']);
		$ast=$this->Assign_model->get_aassing($m['batch_id']);
	?>
      <tr>
         <td>
            <?php echo $sno=$sno+1;?>
         </td>
		 <td>
            <?=$ctitle;?>
         </td>
		 <td>
            <?=$bname['batch_name'];?>
         </td>
		 
         <td><span class="badge info-inter">
            <?=$at[0]['attendence'];?></span>
         </td>
         <td><span class="badge sinfo-inter">
            <?=$ast['assignments']?></span>
         </td>
         <td><span class="badge sinfo-inter">
            <?=$marks['marks'];?></span>
		</td>
        
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
