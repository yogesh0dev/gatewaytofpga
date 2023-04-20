
	  <div class="col-xl-9 col-lg-8 col-md-12">
                     <div class="tak-instruct-group">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="settings-widget">
                                 <div class="settings-inner-blk p-0">
                                    <div class="sell-course-head student-meet-head comman-space border-0">
                                       <div class="tak-head d-flex align-items-center">
                                          <div>
                                             <h3>Test Marks for Batch Name : <br> </h3><p>
											 Course Name: <span style="
													background: #eee;
													padding: 10px;
													border-radius: 10px;
													font-size: inherit;
												"><?=$courses['title'];?></span>
											 Batch Name :
											 <span style="
													background: #eee;
													padding: 10px;
													border-radius: 10px;
													font-size: inherit;
												"><?=$batches['batch_name'];?></span>
												
												
											 </p>
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
         <h4>Student List</h4>
		 
		 <div id="alertz" ></div>
           <form id="formdata" action="<?=site_url();?>smarks/<?=$pid;?>" onsubmit="submitForm(this)">  
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
			$sbcid='#'.$ty['id'].$batches['id'].$batches['course_id'];
			$tys=$this->Marks_model->get_marksid($sbcid);
			
			?>
			 
			   
				<tr>
					<td><?=$ty['id'];?></td>
					<td><?=$ty['first_name'].' '.$ty['last_name'];;?></td>
					<td><?=$ty['email'];?></td>
					<td><?=$ty['phone'];?></td>
					<?php if($tys){?>
					<td>
						<?=$tys['marks'];?>
					</td>
					<?php }else{?>
					<td>
						<input type="number" name="m[]" value="100">
						<input type="hidden" name="st[]" value="<?=$ty['id'];?>">
					</td>
					<?php }?>
				</tr>
			<?php } ?></tbody></table>
		</div>
		<?php if($tys){?>
		<div id="alertz"><div style=" position: relative; padding: 1rem 1rem; margin-bottom: 1rem; border: 1px solid transparent; border-radius: 0.25rem; " class="alert-success">
			Marks are already given</div></div>
		<?php }else{?>
		<div class="submit-ticket">
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
