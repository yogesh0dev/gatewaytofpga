
	<div class="col-xl-9 col-lg-8 col-md-12">
  
	<div class="settings-widget">
   <div class="settings-inner-blk add-course-info new-ticket-blk p-0">
      <div class="comman-space">
         <h4>Please fill this form to get help from your instructor</h4>
		 
		 <div id="alertz"><?=$html;?></div>
	<?php 
		echo $this->session->flashdata('form');
		$attributes= array('role'=>'form','class'=>'row g-3');
		echo form_open_multipart("tests/add",$attributes); 
	?>

	<div class="form-group">
               <label class="form-label">Batch</label>
               
			   <select  name='batch_id' class="form-select single-select batch_id" id="select1" aria-label="Example select with button addon" onchange="fetchvalue('batch_id','fcourse')">
                  <option value="">-- Search Batch --</option>
                  <?php foreach($batches as $cs){?>
						<option value="<?=$cs['id'];?>"><?=$cs['batch_name'];?></option>
						</a>
					<?php }?>
                 
               </select>
              <span class="text-danger"><?php echo form_error('batch_id');?></span>
            </div>
			<div class="form-group">
               <label class="form-control-label">Course Name</label>
               <input type="hidden" name="course_id" id="course_id" class="form-control">
			   <p id="cname"></p>
			   <span class="text-danger"><?php echo form_error('course_id');?></span>
            </div>

	<div>
		<span class="text-danger">*</span><label class="form-label">Title : </label>
		<input class="form-control"placeholder='Title' type="text" name='title' value="<?php echo $this->input->post('title'); ?>" />
		<span class="text-danger"><?php echo form_error('title');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Description : </label>
		<textarea id="summernote"  rows="4" cols="4" class="form-control"placeholder='Description'name='description'><?php echo ($this->input->post('description') ? $this->input->post('description') : $assignments['description']); ?></textarea>
		<span class="text-danger"><?php echo form_error('description');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Docsa : </label>
		<input class="form-control" placeholder='Docsa' type="file"  id="formFileMultiple" multiple name='docsa[]' value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $assignments['docsa']); ?>" />
		<span class="text-danger"><?php echo form_error('docsa');?></span>
	</div>
	
	
	<button type="submit" class="btn btn-primary">Save</button>

	<?php echo form_close(); ?>
      </div>
   </div>
</div>


  </div>

	</div>
</div>
