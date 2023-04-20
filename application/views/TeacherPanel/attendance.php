
	  <div class="col-xl-9 col-lg-8 col-md-12">
                     <div class="tak-instruct-group">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="settings-widget">
                                 <div class="settings-inner-blk p-0">
                                    <div class="sell-course-head student-meet-head comman-space border-0">
                                       <div class="tak-head d-flex align-items-center">
                                          <div>
                                             <h3>Attendance</h3>
                                          </div>
                                          <div class="view-icons">
                                             <a href="" class="grid-view active"><i class="feather-grid"></i></a>
                                             <a href="" class="list-view"><i class="feather-list"></i></a>
                                          </div>
                                       </div>
                                       
                                    </div>
                                 </div>
                              </div>
                           </div>
						 <div class="row">
      <div class="col-md-12">
         <div class="settings-widget">
            <div class="settings-inner-blk p-0">
               <div class="sell-course-head comman-space">
                  <h3>Your Student Lists</h3>
               </div>
               <div class="comman-space pb-0">
                  <div class="settings-tickets-blk course-instruct-blk table-responsive">
	<div class="comman-space">
         <h4>Attendance List</h4>
		 
		 <div id="alertz" >
		 
		 </div>
           <form id="formdata" action="<?=site_url();?>sattendance/<?=$pid;?>" onsubmit="submitForm(this)">  
		  <table class="table table-nowrap mb-0">
				<thead class="table-light">
				   <tr>

					  <th>Student ID</th>
					  <th>Student Names</th>
					  <th>EMail ID</th>
					  <th>Phone Number</th>
					  <th></th>
				   </tr>
				</thead><tbody>
				<input type="hidden" name="courseid" value="<?=$batches['course_id'];?>">
				<input type="hidden" name="batchid" value="<?=$batches['id'];?>">
		 <?php
			$student=$batches['student'];
			$st=explode(',',$student);
			foreach($st as $t){
			$ty=$this->Users_model->get_users($t);
			$sbcid='#'.date('ymd').$ty['id'].$batches['id'].$batches['course_id'];
			$tys=$this->Attendance_model->get_attendanceid($sbcid);
			?>
			
			   
				<tr>
					<td><?=$ty['id'];?></td>
					<td><?=$ty['first_name'].' '.$ty['last_name'];;?></td>
					<td><?=$ty['email'];?></td>
					<td><?=$ty['phone'];?></td>
					<?php if($tys){?>
					<td>
						<i class="ri-check-fill"></i>
					</td>
					<?php }else{?>
					<td>
						<input type="checkbox" checked name="st[]" value="<?=$ty['id'];?>">
					</td>
					<?php }?>
					
				</tr>
			<?php } ?></tbody></table>
		</div>
		<?php if($tys){?> 
		<div id="alertzs"><div style=" position: relative; padding: 1rem 1rem; margin-bottom: 1rem; border: 1px solid transparent; border-radius: 0.25rem; " class="alert-success">
			Attendance already marked for <?=date('M d, Y');?></div></div>
		<?php }else{?>
		<div class="submit-ticket" style="margin-bottom: 25px;">
               <button type="submit" class="btn btn-primary">Submit</button>
               <button type="reset" class="btn btn-dark">Reset</button>
            </div>
		<?php }?>
		</form>
     
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

                        </div>

                     </div>
                  </div>
              
	</div>
</div>
