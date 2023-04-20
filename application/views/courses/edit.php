	<?php 
		echo $this->session->flashdata('form');
		$attributes= array('role'=>'form','class'=>'row g-3'); 
		echo form_open_multipart('courses/edit/'.$courses['id'],$attributes); 
	?>
	
	<div>
		<span class="text-danger">*</span><label class="form-label">Category : </label>
		<select  name="categ" class="form-select" id="select3" aria-label="Example select with button addon">
			<option value="">-- Select Category Name --</option>
			<?php 
			foreach($category as $c)
			{
				$selected = ($c['id'] == $courses['categ']) ? ' selected="selected"' : "";
				echo '<option '.$selected.' value="'.$c['id'].'">'.$c['category'].'</option>';
			} 
			?>
		</select>
		<span class="text-danger"><?php echo form_error('categ');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Title : </label>
		<input class="form-control"placeholder='Title' type="text" name='title' value="<?php echo ($this->input->post('title') ? $this->input->post('title') : $courses['title']); ?>" />
		<span class="text-danger"><?php echo form_error('title');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Price : </label>
		<input class="form-control"placeholder='Price' type="text" name='price' value="<?php echo ($this->input->post('price') ? $this->input->post('price') : $courses['price']); ?>" />
		<span class="text-danger"><?php echo form_error('price');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Duration : </label>
		<input class="form-control"placeholder='Duration' type="text" name='duration' value="<?php echo ($this->input->post('duration') ? $this->input->post('duration') : $courses['duration']); ?>" />
		<span class="text-danger"><?php echo form_error('duration');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Course Display Image : </label>
		<input class="form-control" placeholder='Course Display Image' type="file" name='img' value="<?php echo ($this->input->post('img') ? $this->input->post('img') : $courses['img']); ?>" />
		<input type="hidden" value="<?=$courses['img'];?>" name="oldimage"/>
		
		<p style="background: #eee;border-radius: 10px; margin-top: 10px;padding: 25px;">Old Used Image <br>
		<img src="<?=site_url();?>/uploads/courses/<?=$courses['img']; ?>" width="100px"/>
		</p>
		<span class="text-danger"><?php echo form_error('img');?></span>
	</div>
	<div>
		<span class="text-danger">*</span><label class="form-label">Module count : </label>
		<input class="form-control"placeholder='Module count' type="text" name='module_count' value="<?php echo ($this->input->post('module_count') ? $this->input->post('module_count') : $courses['module_count']); ?>" />
		<span class="text-danger"><?php echo form_error('module_count');?></span>
	</div>
	
	
	<button type="submit" class="btn btn-primary">Save</button>
	
	<?php echo form_close(); ?>