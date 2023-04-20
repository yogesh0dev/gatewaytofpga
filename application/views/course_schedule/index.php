<div>
	<table id="example" class="table">
		<thead class="table-light">
    <tr> 
	<th>S.No.</th>
		<th>Category</th>
	<th>Course Name</th>
		<th>Batch Name</th>
		<th>Trainers Name</th>
		<th>Batch Date</th>
		<th>Students</th>
		<th>Weekdays</th>
		<th>Weekends</th>
		
		<th>Actions</th>
    </tr>
	</thead><tbody>
	<?php $sno=0;
		foreach($course_schedule as $c){ 
		$categ=$c['categ']; 
		$categ=$this->Category_model->get_category($categ);
		$cid=$c['course_id']; 
		$cid=$this->Courses_model->get_courses($cid);
		$sid= $c['studentid']; 
		$sid=$this->Users_model->get_users($sid);
		$tid= $c['tid']; 
		$tid=$this->Users_model->get_users($tid); 
		$bid= $c['module_name']; 
		$bid=$this->Curriculam_model->get_Curriculam($bid);
	 // bdate course_id tid batch_name student 
	?>
	<tr>
		<td><?php echo $sno=$sno+1;?></td>
		<td><?php echo $categ['category']; ?></td>
		<td><?php echo $cid['title']; ?></td>
		<td><?php echo $c['batch_name']; ?></td>
		<td><?php echo $tid['first_name'].' '.$tid['last_name']; ?></td>
		<td><?php echo $c['bdate']; ?></td>
		<td><?php echo $c['student']; ?></td>
		<td><?php echo $c['weekends']; ?></td>
		<td><?php echo $c['weekdays']; ?></td>
		
		<td>
            <a data-bs-toggle="tooltip" data-bs-placement="bottom" href="<?php echo site_url('course_schedule/edit/'.$c['id']); ?>" title="Edit" class="text-warning" ><i class="bi bi-pencil-fill"></i></a> | 
            <a data-bs-toggle="tooltip" data-bs-placement="bottom" href="<?php echo site_url('course_schedule/remove/'.$c['id']); ?>" title="Delete" class="text-danger" ><i class="bi bi-trash-fill"></i></a>
        </td>
    </tr>
	<?php } ?></tbody>
</table>
		</div>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>
