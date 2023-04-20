<div>
	<table id="example" class="table">
		<thead class="table-light">
			<tr>
				<th>S.No.</th>
				<th>Category</th>
				<th>Course id</th>
				<th>Batch id</th>
				<th>Youtube</th>
				<th>Actions</th>
			</tr>
		</thead>
	<tbody>
	<?php $sno=0;
		foreach($videos as $c){ 
			$categ=$c['categ']; 
			$categ=$this->Category_model->get_category($categ);
			$cid=$c['course_id']; 
			$cid=$this->Courses_model->get_courses($cid);
			$bid= $c['batch_id']; 
			$bid=$this->Course_schedule_model->get_course_schedule($bid);
	?>
	
	<tr>
		<td><?php echo $sno=$sno+1;?></td>
		<td><?php echo $categ['category']; ?></td>
		<td><?php echo $cid['title']; ?></td>
		<td><?php echo $bid['batch_name']; ?></td>
		<td><?php echo $c['youtube']; ?></td>
		
		<td>
            <a data-bs-toggle="tooltip" data-bs-placement="bottom" href="<?php echo site_url('Videos/edit/'.$c['id']); ?>" title="Edit" class="text-warning" ><i class="bi bi-pencil-fill"></i></a> | 
            <a data-bs-toggle="tooltip" data-bs-placement="bottom" href="<?php echo site_url('Videos/remove/'.$c['id']); ?>" title="Delete" class="text-danger" ><i class="bi bi-trash-fill"></i></a>
        </td>
    </tr>
	<?php } ?></tbody>
</table>
		</div>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>
