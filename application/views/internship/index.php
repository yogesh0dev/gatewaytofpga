<div class="table-responsive"> 
	<table id="example" class="table">
		<thead class="table-light">
    <tr>
	<th>S.No.</th>
	<th>Status</th>
	<th>Name</th>
		<th>Resume</th>
		<th>Email</th>
		<th>Phone No</th>
		<th>Gender</th>
		<th>Dob</th>
		<th>Current  address</th>
		<th>Permanent address</th>
		<th>City</th>
		<th>State</th>
		<th>Country</th>
		<th>College</th>
		<th>Degree</th>
		<th>Designation</th>
		<th>Area of expertise</th>
		<th>Duration</th>
		<th>Other info</th>
		<th>Career goals</th>
		
		<th>Actions</th>
    </tr>
	</thead><tbody>
	<?php $sno=0;
		foreach($internship as $c){
			$country=$this->Common_model->get_country($c['country'],'1');
			$state=$this->Common_model->get_state($c['state'],'1');
			$city=$this->Common_model->get_city($c['city'],'1');
			?>
	
	<tr>
		<td><?php echo $sno=$sno+1;?></td>
		<td><?php $tyr=$c['status']; 
		// Accepted Rejected Under Review
		if($tyr=='Y'){
			echo '<span class="badge bg-light-success text-success w-100">Accepted</span>';
		}elseif($tyr=='N'){
			echo '<span class="badge bg-light-danger text-danger w-100">Rejected</span>';
		}elseif($tyr=='U'){
			echo '<span class="badge bg-light-info text-info w-100">Under Review</span>';
		}
		
		?></td>
		<td><?php echo $c['first_name']; ?> <?php echo $c['last_name']; ?></td>
		<td><a target="_blank" href="<?=site_url().'uploads/resume/'.$c['resume'];?>"><span class="badge bg-success">Download Resume</span></a></td>
		<td><?php echo $c['email']; ?></td>
		<td><?php echo $c['phn']; ?></td>
		<td><?php echo $c['gender']; ?></td>
		<td><?php echo $c['dob']; ?></td>
		<td><?php echo $c['caddress']; ?></td>
		<td><?php echo $c['paddress']; ?></td>
		<td><?php echo $city['name']; ?></td>
		<td><?php echo $state['name']; ?></td>
		<td><?php echo $country[0]['name']; ?></td>
		<td><?php echo $c['college']; ?></td>
		<td><?php echo $c['degree']; ?></td>
		<td><?php echo $c['designation']; ?></td>
		<td><?php echo $c['areaofexpertise']; ?></td>
		
		<td><?php echo $c['duration']; ?></td>
		<td><?php echo $c['otherinfo']; ?></td>
		<td><?php echo $c['careergoals']; ?></td>
		
		<td>
			<div class="btn-group">
			  <a type="button" href="<?php echo site_url('internship/edit/'.$c['id']); ?>" class="btn btn-primary"><i class="bi bi-pencil-fill"></i> Edit</a>
			  <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">	<span class="visually-hidden">Toggle Dropdown</span>
			  </button>
			  <ul class="dropdown-menu">
				<li><a class="dropdown-item" href="<?php echo site_url('internship/status/N/'.$c['id']); ?>">Rejected</a>
				</li>
				<li><a class="dropdown-item" href="<?php echo site_url('internship/status/Y/'.$c['id']); ?>">Accepted</a>
				
				
				<li>
				  <hr class="dropdown-divider">
				</li>
				
				<li><a class="dropdown-item" href="<?php echo site_url('internship/status/U/'.$c['id']); ?>">Under Review</a>
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
