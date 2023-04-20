
	<div class="col-xl-9 col-lg-8 col-md-12">
  
	<div class="settings-widget">
   <div class="settings-inner-blk add-course-info new-ticket-blk p-0">
      <div class="comman-space">
         <h4>Please fill this form to get help from your instructor</h4>
		 
		 <div id="alertz" ></div>
			<form id="formdata" action="<?=site_url();?>student-helpsubmit" onsubmit="submitForm(this)">        
		<div>
            <div class="form-group">
               <label class="form-control-label">Subject</label>
               <input name="subject" id="subject" type="text" class="form-control">
            </div>
           
            <div class="form-group">
               <label class="form-label">Batch</label>
               
			   <select  name='batch_id' class="form-select single-select batch_id" id="select1" aria-label="Example select with button addon" onchange="fetchvalue('batch_id','fcourse')">
                  <option value="">-- Search Batch --</option>
                  <?php foreach($batches as $cs){?>
						<option value="<?=$cs['id'];?>"><?=$cs['batch_name'];?></option>
						</a>
					<?php }?>
                 
               </select>
              
            </div>
			<div class="form-group">
               <label class="form-control-label">Course Name</label>
               <input type="hidden" name="course_id" id="course_id" class="form-control">
			   <p id="cname"></p>
            </div>
          <div class="form-group">
               <label class="form-control-label">Your Query</label>
               <textarea name="query" class="form-control"></textarea>
              
            </div>
          
            <div class="submit-ticket">
               <button type="submit" class="btn btn-primary">Submit</button>
               <button type="reset" class="btn btn-dark">Reset</button>
            </div>
         </div>
		 </form>
      </div>
   </div>
</div>


  </div>

	</div>
</div>
