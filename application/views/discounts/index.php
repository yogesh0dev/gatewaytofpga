<div>
	<table id="example" class="table">
		<thead class="table-light">
    <tr>
	<th>S.No.</th>
	<th>Course id</th>
		<th>Discs</th>
		
		<th>Actions</th>
    </tr>
	</thead><tbody>
	<?php $sno=0;
		foreach($discounts as $c){ 
		$cid=$c['course_id']; 
		$cid=$this->Courses_model->get_courses($cid);
	
	?>
	
	<tr>
		<td><?php echo $sno=$sno+1;?></td>
		<td><?php echo $cid['title']; ?></td>
		<td><?php echo $c['discs']; ?></td>
		
		<td>
            <a data-bs-toggle="tooltip" data-bs-placement="bottom" href="<?php echo site_url('discounts/edit/'.$c['id']); ?>" title="Edit" class="text-warning" ><i class="bi bi-pencil-fill"></i></a> | 
            <a data-bs-toggle="tooltip" data-bs-placement="bottom" href="<?php echo site_url('discounts/remove/'.$c['id']); ?>" title="Delete" class="text-danger" ><i class="bi bi-trash-fill"></i></a>
        </td>
    </tr>
	<?php } ?></tbody>
</table>
		</div>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>
