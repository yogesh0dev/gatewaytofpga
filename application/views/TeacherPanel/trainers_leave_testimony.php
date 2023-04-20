
	<div class="col-xl-9 col-lg-8 col-md-12">
  
	<div class="settings-widget">
   <div class="settings-inner-blk add-course-info new-ticket-blk p-0">
      <div class="comman-space">
         <h4>Please Leave Your Testimony For Other Students</h4>
         <div>
            <div class="form-group">
               <label class="form-control-label">Subject</label>
               <input type="text" class="form-control">
            </div>
			
			 <div class="form-group">
               <label class="form-label">Select Course</label>
               <select class="form-select select country-select select2-hidden-accessible" name="sellist1" data-select2-id="4" tabindex="-1" aria-hidden="true">
                  <option data-select2-id="6">Choose Course</option>
                  <?php foreach($mycourses as $cst){
						$cs = $this->Courses_model->get_courses_all_byid($cst['course_id']);
						?>
						
						 
						 <option value="<?=$cs['course_id'];?>"><?=$cs['title'];?></option>
						
						</a>
					<?php }?>
                 
               </select>
               
            </div>
           
			
          <div class="form-group">
               <label class="form-control-label">Your Testimony</label>
               <textarea class="form-control"></textarea>
              
            </div>
          
            <div class="submit-ticket">
               <button type="button" class="btn btn-primary">Submit</button>
               <button type="button" class="btn btn-dark">Back</button>
            </div>
         </div>
      </div>
   </div>
</div>


  </div>

	</div>
</div>
