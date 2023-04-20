	<?php 
		echo $this->session->flashdata('form');
		$attributes= array('role'=>'form','class'=>'row g-3');
		echo form_open_multipart("blogs/edit/".$blogs['id'],$attributes); 
	?>
<?php if(@$error['error']){?>
<div style="width: 100%;" class="alert alert-warning alert-dismissible" role="alert">
<?=@$error['error'];?>
<?=@$error;?>
</div>
<?php }?>

	<div>
		<span class="text-danger">*</span><label class="form-label">Title : </label>
		<input class="form-control" placeholder='Title' type="text" name='title' value="<?php echo ($this->input->post('title') ? $this->input->post('title') : $blogs['title']); ?>" />
		<span class="text-danger"><?php echo form_error('title');?></span>
	</div>
	
	<div>
		<span class="text-danger">*</span><label class="form-label">Slug : </label>
		<input class="form-control" placeholder='Slug' type="text" name='slug' value="<?php echo ($this->input->post('slug') ? $this->input->post('slug') : $blogs['slug']); ?>" />
		<span class="text-danger"><?php echo form_error('slug');?></span>
	</div>
	
	
	
	<div>
		
		<span class="text-danger">*</span><label class="form-label">Description : </label>
		<textarea id="summernote"  rows="4" cols="4" class="form-control"placeholder='Description'name='description'><?php echo ($this->input->post('description') ? $this->input->post('description') : $blogs['description']); ?></textarea>
		<span class="text-danger"><?php echo form_error('description');?></span>
	</div>
	
	<div>
		<span class="text-danger">*</span><label class="form-label">Image : </label>
		<input class="form-control" placeholder='Image' type="file" name='image' value="<?php echo $this->input->post('image'); ?>" />
		<input type="hidden" value="<?=$blogs['image'];?>" name="oldimage"/>
		<p style="background: #eee;border-radius: 10px; margin-top: 10px;padding: 25px;">Old Used Image <br>
		<img src="<?=site_url();?>/uploads/blogs/<?=$blogs['image']; ?>" width="100px"/>
		</p>
		<span class="text-danger"><?php echo form_error('image');?></span>
	</div>
	</div>
	
	<div>
	<span class="text-danger">*</span><label class="form-label">Category : </label>
		<select  name="categ" class="form-select" id="select3" aria-label="Example select with button addon">
			<option value="">-- Select Teachers Name --</option>
			<?php 
			foreach($category as $c)
			{
				$selected = ($c['id'] == $blogs['categ']) ? ' selected="selected"' : "";
				echo '<option '.$selected.' value="'.$c['id'].'">'.$c['category'].'</option>';
			} 
			?>
		</select>
		<span class="text-danger"><?php echo form_error('categ');?></span>
	</div>
	
	<div>
	<span class="text-danger">*</span><label class="form-label">Select Blog / Page : </label>
		<select  name="types" class="form-select" id="select2" aria-label="Example select with button addon">
			<option value="">-- Select Page Type --</option>
			<option  <?php if($blogs['types']=='1'){ echo 'selected="selected"';}?> value="1">Blog</option>
			<option  <?php if($blogs['types']=='2'){ echo 'selected="selected"';}?> value="2">Page</option>
			
		</select>
		<span class="text-danger"><?php echo form_error('types');?></span>
	</div>
	
	
	<button type="submit" class="btn btn-primary">Save</button>

	<?php echo form_close(); ?>

	