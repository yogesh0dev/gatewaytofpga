	<?php 
		echo $this->session->flashdata('form');
		$attributes= array('role'=>'form','class'=>'row g-3'); 
		echo form_open_multipart('category/edit/'.$category['id'],$attributes); 
	?>
	<?php if(@$error['error']){?>
<div style="width: 100%;" class="alert alert-warning alert-dismissible" role="alert">
<?=@$error['error'];?>
</div>
<?php }?>
	<div>
		<span class="text-danger">*</span><label class="form-label">Category : </label>
		<input class="form-control"placeholder='Category' type="text" name='category' value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $category['category']); ?>" />
		<span class="text-danger"><?php echo form_error('category');?></span>
	</div>
	 
	<div>
		<span class="text-danger">*</span><label class="form-label">Course Display Image : </label>
		<input class="form-control" placeholder='Course Display Image' type="file" name='imgs' value="<?php echo ($this->input->post('imgs') ? $this->input->post('imgs') : $category['imgs']); ?>" />
		<input type="hidden" value="<?=$category['imgs'];?>" name="oldimage"/>
		<span class="text-danger"><?php echo form_error('imgs');?></span>
		
		<p style="background: #eee;border-radius: 10px; margin-top: 10px;padding: 25px;">Old Used Image <br>
		<img src="<?=site_url();?>/uploads/category/<?=$category['imgs']; ?>" width="100px"/>
		</p>
	</div>
	
	
	<button type="submit" class="btn btn-primary">Save</button>
	
	<?php echo form_close(); ?>