<style>
.rev-info {
  font-size: 14px;
  font-style: italic;
  background: #f5f5f5;
  padding: 10px;
  border-radius: 10px;
}
</style>
	<div class="col-xl-9 col-lg-8 col-md-12">
  
	<div class="settings-widget">
   <div class="settings-inner-blk add-course-info new-ticket-blk p-0">
      <div class="comman-space">
         <h4>Please fill this form to get help from your instructor</h4>
		 
		 <div id="alertz" ></div>
			<form id="formdata" action="<?=site_url();?>help/myedit/<?=$pid;?>" onsubmit="submitForm(this)">        
		<div>
            <div class="form-group">
               <label class="form-control-label">Subject</label>
               <p class="rev-info"><?=$help['subject'];?><p>
            </div>
           
            <div class="form-group">
               <label class="form-label">Batch</label>
               <p class="rev-info"><?php $bd=$help['batch_id'];
				$try=$this->Course_schedule_model->get_course_schedule($bd);
				
				echo $try['batch_name']
			   ?><p>
			  
              
            </div>
			
          <div class="form-group">
               <label class="form-control-label">Your Query</label>
			   <p class="rev-info"><?=$help['quest'];?><p> 
            </div>
			
		<div class="form-group">
			<?php if($help['answer']==''){?>
               <label class="form-control-label">Add your Answer</label>
			<?php }else{?>
			   <p class="rev-info"><b>Your Old Answer</b><br><br><?=$help['answer'];?>
			   <input type="hidden" name="oldans" value="<?=$help['answer'];?>"/>
			   <p>
			   <hr>
               <label class="form-control-label">Update your Answer</label>
			<?php }?>
               <textarea name="answer" class="form-control"></textarea>
              
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
