<div>
	<table id="example" class="table">
		<thead class="table-light">
    <tr>
		<th>S.No.</th>
		<th>Title</th>
		<th>Category</th>
		<th>Price</th>
		<th>Duration</th>
		<th>Image</th>
		<th>Module count</th>
		<th>Actions</th>
    </tr>
	</thead><tbody>
	<?php $sno=0;
		foreach($courses as $c){ 
			$cid= $c['categ']; 
			$cid=$this->Category_model->get_Category($cid);
			$tid= $c['tutorid']; 
			$tid=$this->Users_model->get_users($tid);
			?>
			
	<tr>
		<td><?php echo $sno=$sno+1;?></td>
		<td><?php echo $c['title']; ?></td>
		<td><?php echo $cid['category']; ?></td>
		<td><?php echo $c['price']; ?></td>
		<td><?php echo $c['duration']; ?></td>
		<td><img src="<?=site_url();?>/uploads/courses/<?=$c['img']; ?>" width="100px"/></td>

		<td><?php echo $c['module_count']; ?></td>
		
		<td>
            <a data-bs-toggle="tooltip" data-bs-placement="bottom" href="<?php echo site_url('courses/edit/'.$c['id']); ?>" title="Edit" class="text-warning" ><i class="bi bi-pencil-fill"></i></a> | 
            <a data-bs-toggle="tooltip" data-bs-placement="bottom" href="<?php echo site_url('courses/remove/'.$c['id']); ?>" title="Delete" class="text-danger" ><i class="bi bi-trash-fill"></i></a>
        </td>
    </tr>
	<?php } ?></tbody>
</table>
		</div>
<div class="pull-right">
    <?php //echo $this->pagination->create_links(); ?>    
</div>
