<?php

function encrypto($simple_string){
	$ciphering = "AES-128-CTR";
	$options = 0;
	$encryption_iv = '1234567891011121';
	$encryption_key = "infotonicsMedia";
	return $encrypted = openssl_encrypt($simple_string, $ciphering,
				$encryption_key, $options, $encryption_iv);
} 
?>
<div>
	<table id="example" class="table">
		<thead class="table-light">
    <tr>
	<th>S.No.</th>
	<th>Course id</th>
		<th>Batch id</th>
		<th>Descr</th>
		<th>Download link</th>
		
		<th>Actions</th>
    </tr>
	</thead><tbody>
	<?php $sno=0;
		foreach($course_material as $c){ 
		$cid=$c['course_id']; 
		$cid=$this->Courses_model->get_courses($cid);
		
		$bid= $c['batch_id']; 
		$bid=$this->Curriculam_model->get_Curriculam($bid);
	?>
	
	<tr>
		<td><?php echo $sno=$sno+1;?></td>
		<td><?php echo $cid['title']; ?></td>
		<td><?php echo $bid['topic']; ?></td>
		<td><?php echo $c['descr']; ?></td>
		
		<td><?php $ty= json_decode($c['download_link']);
			$doc=0;
			if(!empty($ty)){
			foreach($ty as $d){
				$doc=$doc+1;
				$d=encrypto($d);
				$d=str_replace("-","---",$d);
				$d=str_replace(" ","-",$d);
				$d=str_replace("/","--",$d);
				$d=str_replace("+","----",$d);
				$d=str_replace("=","-----",$d);
				echo '<a href="'.site_url().'student/studentdocs/cmaterial/'.$d.'"
					onclick="return !window.open(this.href, \'Gateway To FPGA\', \'width=1000px,height=700px\')"
					target="_blank"> Document '.$doc.'</a>';
			}}
		?></td>
		
		<td>
            <a data-bs-toggle="tooltip" data-bs-placement="bottom" href="<?php echo site_url('course_material/edit/'.$c['id']); ?>" title="Edit" class="text-warning" ><i class="bi bi-pencil-fill"></i></a> | 
            <a data-bs-toggle="tooltip" data-bs-placement="bottom" href="<?php echo site_url('course_material/remove/'.$c['id']); ?>" title="Delete" class="text-danger" ><i class="bi bi-trash-fill"></i></a>
        </td>
    </tr>
	<?php } ?></tbody>
</table>
		</div>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>
