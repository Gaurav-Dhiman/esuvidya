<?php
	//pre_print($student);
?>
<link href='https://fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
<div class="container-fluid">
	<div class="row">
		<div class="span12">
			<div class="bonafide-header">
				<h5>Kalyan Education Society's</h5>
				<h2>Smt. Kantaben Chandulal Gandhi English School</h2>
				<h6>Gandhinagar, R.P. Road, Kalyan(W) - 421301. Tel: 2207745</h6>
				<h5>Secondary Section</h5>
				<h1>Bonafide Certificate</h1>
			</div>
			<div class="bonafide-content">
				<p class="certify">This is to certify that</p>
				<p>
			<?php
				if($student['gender'] == "Male"){
				 	echo "Mr ";
				}else{ 
					echo "Miss " ;
				} 
				echo $student['fname'];
				echo "&nbsp;"; 
				echo $student['lname'];
			?>  
				is/was a bonafide <br/>
				student of this school and is studying in std.
			<?php
				$std = explode("std",$student['std']);
				echo $std[1];
			?>	
				Div. 
			<?php
				$div = explode("division",$student['division']);
				echo $div[1];
			?>	
				(Reg. No. <?php echo $student['stud_id'] ; ?>)<br/>
			<?php
				if($student['gender'] == "Male"){
				 	echo "He ";
				}else{ 
					echo "She " ;
				} 
			?>
				is regular in attendance.
				</p>
				<p>As per the school General register her date of birth is 
			<?php
				echo date('d/m/Y',strtotime($student['birth_date']));
				echo "&nbsp;&nbsp;(&nbsp;";
				echo date('l jS F Y',strtotime($student['birth_date']));
				echo "&nbsp;)";
			?>	 </p>
				<p>Place of Birth: <?php if($student['birth_place']) echo $student['birth_place'] ; ?></p>
				<p>Caste: <?php if($student['caste']) echo $student['caste'] ; ?> &nbsp;&nbsp;&nbsp; &amp; Sub-Caste: <?php if($student['s_caste']) echo $student['birth_place'] ; ?></p>
				<p>To the best of my knowledge and belief 
			<?php
				if($student['gender'] == "Male"){
				 	echo "He ";
				}else{ 
					echo "She " ;
				} 
			?> 
				bears a good moral character and conduct.</p>
				<h6>Date: <?php echo date('d/m/Y') ; ?></h6>
			</div>
		</div>
	</div>
	<div class="row">
		<a href="#" class="btn blue">Print</a>
	</div>
</div>
