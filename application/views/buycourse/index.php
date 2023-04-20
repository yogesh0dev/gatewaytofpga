<div>
	<table id="example" class="table">
		<thead class="table-light">
    <tr>
	<th>S.No.</th>
	<th>Name</th>
		<th>Email</th>
		<th>Phn</th>
		<th>Gender</th>
		<th>Dob</th>
		<th>Caddress</th>
		<th>Paddress</th>
		<th>State</th>
		<th>Country</th>
		<th>College</th>
		<th>Degree</th>
		<th>Designation</th>
		<th>Areaofexpertise</th>
		<th>Resume</th>
		<th>Avatar</th>
		<th>Duration</th>
		<th>Otherinfo</th>
		<th>Careergoals</th>
		<th>Exp</th>
		<th>Course</th>
		<th>Message</th>
		
		<th>Actions</th>
    </tr>
	</thead><tbody>
	<?php $sno=0;
		foreach($buycourse as $c){ ?>
	
	<tr>
		<td><?php echo $sno=$sno+1;?></td>
		<td><?php echo $c['name']; ?></td>
		<td><?php echo $c['email']; ?></td>
		<td><?php echo $c['phn']; ?></td>
		<td><?php echo $c['gender']; ?></td>
		<td><?php echo $c['dob']; ?></td>
		<td><?php echo $c['caddress']; ?></td>
		<td><?php echo $c['paddress']; ?></td>
		<td><?php echo $c['state']; ?></td>
		<td><?php echo $c['country']; ?></td>
		<td><?php echo $c['college']; ?></td>
		<td><?php echo $c['degree']; ?></td>
		<td><?php echo $c['designation']; ?></td>
		<td><?php echo $c['areaofexpertise']; ?></td>
		<td><?php echo $c['resume']; ?></td>
		<td><?php echo $c['avatar']; ?></td>
		<td><?php echo $c['duration']; ?></td>
		<td><?php echo $c['otherinfo']; ?></td>
		<td><?php echo $c['careergoals']; ?></td>
		<td><?php echo $c['exp']; ?></td>
		<td><?php echo $c['course']; ?></td>
		<td><?php echo $c['message']; ?></td>
		
		<td>
            <a data-bs-toggle="tooltip" data-bs-placement="bottom" href="<?php echo site_url('buycourse/edit/'.$c['id']); ?>" title="Edit" class="text-warning" ><i class="bi bi-pencil-fill"></i></a> | 
            <a data-bs-toggle="tooltip" data-bs-placement="bottom" href="<?php echo site_url('buycourse/remove/'.$c['id']); ?>" title="Delete" class="text-danger" ><i class="bi bi-trash-fill"></i></a>
        </td>
    </tr>
	<?php } ?></tbody>
</table>
		</div>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>
