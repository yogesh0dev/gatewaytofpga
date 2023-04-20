<style>
.content {
  text-align: center;
}
.content h1 {
  font-family: 'Sansita', sans-serif;
  letter-spacing: 1px;
  font-size: 50px;
  color: #282828;
  margin-bottom: 10px;
}
.content  i {
  color: #FFC107;
}
.content span {
  position: relative;
  display: inline-block;
}
.content  span:before, .content  span:after {
  position: absolute;
  content: "";
  background-color: #282828;
  width: 40px;
  height: 2px;
  top: 40%;
}
.content  span:before {
  left: -45px;
}
.content  span:after {
  right: -45px;
}
.content p {
  font-family: 'Open Sans', sans-serif;
  font-size: 18px;
  letter-spacing: 1px;
}
.wrapper {
  position: relative;
  display: inline-block;
  border: none;
  font-size: 14px;
  margin: 50px auto;
  left: 50%;
  transform: translateX(-50%);
}

.wrapper input {
  border: 0;
  width: 1px;
  height: 1px;
  overflow: hidden;
  position: absolute !important;
  clip: rect(1px 1px 1px 1px);
  clip: rect(1px, 1px, 1px, 1px);
  opacity: 0;
}

.wrapper label {
  position: relative;
  float: right;
  color: #C8C8C8;
}

.wrapper label:before {
  margin: 5px;
  content: "\f186";
  font-family: 'remixicon' !important;
  display: inline-block;
  font-size: 1.5em;
  color: #ccc;
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
}

.wrapper input:checked ~ label:before {
  color: #FFC107;
}

.wrapper label:hover ~ label:before {
  color: #ffdb70;
}

.wrapper label:hover:before {
  color: #FFC107;
}
</style>
	<div class="col-xl-9 col-lg-8 col-md-12">
  
	<div class="settings-widget">
   <div class="settings-inner-blk add-course-info new-ticket-blk p-0">
      <div class="comman-space">
         <h4>Please Leave Your Testimony For Other Students</h4>
		 <div id="alertz" ></div>
		 <form id="formdata" action="<?=site_url();?>testimony/sadd" onsubmit="submitForm(this)"> 
         <div>
            <div class="form-group">
               <label class="form-control-label">Subject</label>
               <input name="subject" type="text" class="form-control">
            </div>
			
			 <div class="form-group">
               <label class="form-label">Batch</label>
               
			   <select  name='batch_id' class="form-select single-select batch_id" id="select1" aria-label="Example select with button addon" onchange="fetchvalue('batch_id','fcourse')">
                  <option value="">-- Search Batch --</option>
                  <?php foreach($mycourses as $cs){
						$bid=$this->Course_schedule_model->get_course_schedule($cs['batch_id']);
						
					  ?>
						<option value="<?=$bid['id'];?>"><?=$bid['batch_name'];?></option>
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
               <label class="form-control-label">Your Testimony</label>
               <textarea name="msg" class="form-control"></textarea>
              
            </div>
          <div class="form-group">
         
				<div class="wrapper">
				  <input name="star" type="checkbox" id="st1" value="1" />
				  <label for="st1"></label>
				  <input name="star" type="checkbox" id="st2" value="2" />
				  <label for="st2"></label>
				  <input name="star" type="checkbox" id="st3" value="3" />
				  <label for="st3"></label>
				  <input name="star" type="checkbox" id="st4" value="4" />
				  <label for="st4"></label>
				  <input name="star" type="checkbox" id="st5" value="5" />
				  <label for="st5"></label>
				</div>
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
