<div>
	<table id="example" class="table">
		<thead class="table-light">
    <tr>
		<th>S.No.</th>
		<th>Purchase Date</th>
		<th>Transaction ID</th>
		<th>Student</th>
		<th>Course</th>
		<th>Batch</th>
		<th>Discount</th>
		<th>Transaction Status</th>
		<th>Actions</th>
    </tr>
	</thead><tbody>
	<?php $sno=0;
		foreach($transactions as $c){
			
			$cid=$c['course_id']; 
			$cid=$this->Courses_model->get_courses($cid);
			$sid= $c['sid']; 
			$sid=$this->Users_model->get_users($sid);
			
			$bid= $c['batch_id']; 
			$bid=$this->Course_schedule_model->get_course_schedule($bid);
		
		?>
	
	<tr>
		<td><?php echo $sno=$sno+1;?></td>
		<td><?php echo $c['pdate']; ?></td>
		<td><?php echo $c['tid']; ?></td>
		<td><?php echo $sid['first_name'].' '.$sid['last_name']; ?></td>
		<td><?php echo $cid['title']; ?></td>
		<td><?php echo $bid['batch_name']; ?></td>
		<td><?php echo $c['disc']; ?></td>
		<td><?php echo $c['tstatus']; ?></td>
		
		<td>
            <a data-bs-toggle="tooltip" data-bs-placement="bottom" href="<?php echo site_url('transactions/edit/'.$c['id']); ?>" title="Edit" class="text-warning" ><i class="bi bi-pencil-fill"></i></a> | 
            <a data-bs-toggle="tooltip" data-bs-placement="bottom" href="<?php echo site_url('transactions/remove/'.$c['id']); ?>" title="Delete" class="text-danger" ><i class="bi bi-trash-fill"></i></a>
        </td>
    </tr>
	<?php } ?></tbody>
</table>
		</div>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>
