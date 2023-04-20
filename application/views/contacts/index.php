<div>
	<table id="example" class="table">
		<thead class="table-light">
    <tr>
	<th>S.No.</th>
		<th>Status</th>
	<th>Name</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Subject</th>
		<th>Message</th>
		<th>Validation</th>
		
		<th>Actions</th>
    </tr>
	</thead><tbody>
	<?php $sno=0;
		foreach($contacts as $c){ ?>
	<tr>
		<td><?php echo $sno=$sno+1;?></td>
		<td><?php $tyr=$c['status']; 
		// Not Interested=N Called=C FollowUp=F Converted=V
		if($tyr=='N'){
			echo '<span class="badge bg-light-danger text-danger w-100">Not-Interested</span>';
		}elseif($tyr=='C'){
			echo '<span class="badge bg-light-warning text-warning w-100">Called</span>';
		}elseif($tyr=='F'){
			echo '<span class="badge bg-light-info text-info w-100">FollowUp</span>';
		}elseif($tyr=='Y'){
			echo '<span class="badge bg-light-success text-success w-100">Converted</span>';
		}elseif($tyr=='R'){
			echo '<span class="badge bg-light-danger text-danger w-100">Rejected</span>';
		}
		
		?></td>
		<td><?php echo $c['name']; ?></td>
		<td><?php echo $c['email']; ?></td>
		<td><?php echo $c['phn']; ?></td>
		<td><?php echo $c['subject']; ?></td>
		<td><?php echo $c['message']; ?></td>
		<td><?php $rtye=$c['isvalidated']; 
			if($rtye=='1'){
				echo '<span class="badge bg-light-success text-success w-100">Validated</span>';
			}else{
				echo '<span class="badge bg-light-danger text-danger w-100">Not Validated</span>';
			}
		?></td>
		<td>
            <div class="btn-group">
			  <a type="button" href="<?php echo site_url('contacts/edit/'.$c['id']); ?>" class="btn btn-primary"><i class="bi bi-pencil-fill"></i> Edit</a>
			  <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">	<span class="visually-hidden">Toggle Dropdown</span>
			  </button>
			  <ul class="dropdown-menu">
				<li><a class="dropdown-item" href="<?php echo site_url('contacts/status/N/'.$c['id']); ?>">Not Interested</a>
				</li>
				<li><a class="dropdown-item" href="<?php echo site_url('contacts/status/C/'.$c['id']); ?>">Called</a>
				</li>
				<li><a class="dropdown-item" href="<?php echo site_url('contacts/status/F/'.$c['id']); ?>">Follow Up</a>
				</li>
				<li>
				  <hr class="dropdown-divider">
				</li>
				<li><a class="dropdown-item" href="<?php echo site_url('contacts/status/Y/'.$c['id']); ?>">Converted</a>
				</li>
				
				<li><a class="dropdown-item" href="<?php echo site_url('contacts/status/R/'.$c['id']); ?>">Rejected</a>
				</li>
			  </ul>
			</div>
			
			
			
        </td>
    </tr>
	<?php } ?></tbody>
</table>
		</div>
