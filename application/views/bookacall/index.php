<div>
	<table id="example" class="table">
		<thead class="table-light">
    <tr>
		<th>S.No.</th>
		<th>Status</th>
		<th>Name</th>
		<th>Course</th>
		<th>Message</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Validation</th>
		
		<th width="15%">Actions</th>
    </tr>
	</thead><tbody>
	<?php $sno=0;
		foreach($bookacall as $c){ 
		$cs = $this->Courses_model->get_courses_id($c['course']);
		?>
	
	<tr>
		<td><?php echo $sno=$sno+1;?></td>
		<td><?php $tyr=$c['status']; 
		// Not Interested=N Called=C FollowUp=F Converted=V
		if($tyr=='N'){
			echo '<span class="badge bg-light-danger text-danger w-100">Not-Interested</span>';
		}elseif($tyr=='C'){
			echo '<span class="badge bg-light-warning text-warning w-100">Called</span>';
		}elseif($tyr=='F'){
			echo '<span class="badge bg-light-info text-info w-100">Demo Pending</span>';
		}elseif($tyr=='Y'){
			echo '<span class="badge bg-light-success text-success w-100">Demo Done</span>';
		}
		
		?></td>
		<td><?php echo $c['name']; ?></td>
		<td><?php echo $cs['title']; ?></td>
		<td><?php echo $c['message']; ?></td>
		<td><?php echo $c['email']; ?></td>
		<td><?php echo $c['phn']; ?></td>
		<td><?php $rtye=$c['isvalidated']; 
			if($rtye=='1'){
				echo '<span class="badge bg-light-success text-success w-100">Validated</span>';
			}else{
				echo '<span class="badge bg-light-danger text-danger w-100">Not Validated</span>';
			}
		?></td>
		
		<td style="text-align:center">
		
			<div class="btn-group">
			  <a type="button" href="<?php echo site_url('bookacall/edit/'.$c['id']); ?>" class="btn btn-primary"><i class="bi bi-pencil-fill"></i> Edit</a>
			  <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">	<span class="visually-hidden">Toggle Dropdown</span>
			  </button>
			  <ul class="dropdown-menu">
				<li><a class="dropdown-item" href="<?php echo site_url('bookacall/status/N/'.$c['id']); ?>">Not Interested</a>
				</li>
				<li><a class="dropdown-item" href="<?php echo site_url('bookacall/status/C/'.$c['id']); ?>">Confirmed</a>
				</li>
				
				<li>
				  <hr class="dropdown-divider">
				</li>
				<li><a class="dropdown-item" href="<?php echo site_url('bookacall/status/F/'.$c['id']); ?>">Demo Pending </a>
				</li>
				<li><a class="dropdown-item" href="<?php echo site_url('bookacall/status/Y/'.$c['id']); ?>">Demo Done
</a>
				</li>
				
			  </ul>
			</div>
			
            
        </td>
    </tr>
	<?php } ?></tbody>
</table>
		</div>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>
