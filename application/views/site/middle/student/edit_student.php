<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/bootstrap-fileupload/bootstrap-fileupload.css') ; ?>" />
<div class="portlet box blue ">
	<div class="portlet-title">
		<div class="caption"></i>Edit Student</div>
		<div class="tools">
			<a href="javascript:;" class="collapse"></a>
			<a href="#portlet-config" data-toggle="modal" class="config"></a>
			<a href="javascript:;" class="reload"></a>
			<a href="javascript:;" class="remove"></a>
		</div>
	</div>
</div>
<div class="clear"></div>
<div class="container-fluid">
	<div class="new-form">
		<form action="<?php echo base_url('student/add');?>" class="form-horizontal form-bordered form-label-stripped" method="POST" enctype="multipart/form-data">
			<div class="row-fluid">
				<div class="span12">									
					<div class="span6">
						<label class="control-label">Image Upload</label>
						<div class="controls">
							<div class="fileupload fileupload-new" data-provides="fileupload">
								<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
									<img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
								</div>
								<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
								<div>
									<span class="btn btn-file"><span class="fileupload-new">Select image</span>
									<span class="fileupload-exists">Change</span>
									<input type="file" class="default" name="image" />
									<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
								</div>
							</div>							
						</div>
					</div>
					<div class="span3">
						<label class="control-label">GR No.</label>
						<input name="gr_num" type="text" placeholder="GR No." value="<?php echo $student_details['gr_num'] ; ?>" class="m-wrap span12" readonly="readonly" />
					</div>
					<div class="span3">
						<label class="control-label">Roll No</label>
						<input name="roll_num" type="text" placeholder="Roll No" value="<?php echo $student_details['roll_num'] ; ?>" class="m-wrap span12" readonly="readonly" />
					</div>					
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<div class="span3">
						<label class="control-label">Standard</label>
						<select name="std" class="m-wrap span12" required>
							<option value="">Standard</option>
							<option value="std1" <?php if ($student_details['std'] == "std1") print ' selected="selected"'; ?>>Standard 1</option>
							<option value="std2" <?php if ($student_details['std'] == "std2") print ' selected="selected"'; ?>>Standard 2</option>
							<option value="std3" <?php if ($student_details['std'] == "std3") print ' selected="selected"'; ?>>Standard 3</option>
							<option value="std4" <?php if ($student_details['std'] == "std4") print ' selected="selected"'; ?>>Standard 4</option>
							<option value="std5" <?php if ($student_details['std'] == "std5") print ' selected="selected"'; ?>>Standard 5</option>
							<option value="std6" <?php if ($student_details['std'] == "std6") print ' selected="selected"'; ?>>Standard 6</option>
							<option value="std7" <?php if ($student_details['std'] == "std7") print ' selected="selected"'; ?>>Standard 7</option>
							<option value="std8" <?php if ($student_details['std'] == "std8") print ' selected="selected"'; ?>>Standard 8</option>
							<option value="std9" <?php if ($student_details['std'] == "std9") print ' selected="selected"'; ?>>Standard 9</option>
							<option value="std10" <?php if ($student_details['std'] == "std10") print ' selected="selected"'; ?>>Standard 10</option>
							<option value="std11" <?php if ($student_details['std'] == "std11") print ' selected="selected"'; ?>>Standard 11</option>
							<option value="std12" <?php if ($student_details['std'] == "std12") print ' selected="selected"'; ?>>Standard 12</option>
						</select>
					</div>
					<div class="span3">
						<label class="control-label">Stream</label>
						<select name="stream" class="m-wrap span12">
							<option value="">Stream</option>
							<option value="science" <?php if ($student_details['stream'] == "science") print ' selected="selected"'; ?>>Science</option>
							<option value="commerce" <?php if ($student_details['stream'] == "commerce") print ' selected="selected"'; ?>>Commerce</option>
							<option value="arts" <?php if ($student_details['stream'] == "arts") print ' selected="selected"'; ?>>Arts</option>
						</select>
					</div>
					<div class="span3">
						<label class="control-label">Division</label>
						<select name="division" class="m-wrap span12">
							<option value="">Division</option>
							<option value="divisionA" <?php if ($student_details['division'] == "divisionA") print ' selected="selected"'; ?>>Division A</option>
							<option value="divisionB" <?php if ($student_details['division'] == "divisionB") print ' selected="selected"'; ?>>Division B</option>
							<option value="divisionC" <?php if ($student_details['division'] == "divisionC") print ' selected="selected"'; ?>>Division C</option>
							<option value="divisionD" <?php if ($student_details['division'] == "divisionD") print ' selected="selected"'; ?>>Division D</option>
							<option value="divisionE" <?php if ($student_details['division'] == "divisionE") print ' selected="selected"'; ?>>Division E</option>
						</select>
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<div class="span3">
						<label class="control-label">Semester</label>
						<select name="semester" class="m-wrap span12">
							<option value="">Semester</option>
							<option value="semester1" <?php if ($student_details['semester'] == "semester1") print ' selected="selected"'; ?>>Semester 1</option>
							<option value="semester2" <?php if ($student_details['semester'] == "semester2") print ' selected="selected"'; ?>>Semester 2</option>
							<option value="semester3" <?php if ($student_details['semester'] == "semester3") print ' selected="selected"'; ?>>Semester 3</option>
							<option value="semester4" <?php if ($student_details['semester'] == "semester4") print ' selected="selected"'; ?>>Semester 4</option>
							<option value="semester5" <?php if ($student_details['semester'] == "semester5") print ' selected="selected"'; ?>>Semester 5</option>
							<option value="semester6" <?php if ($student_details['semester'] == "semester6") print ' selected="selected"'; ?>>Semester 6</option>
						</select>
					</div>
					<div class="span3">
						<label class="control-label">Admit To</label>
						<select name="admit to" class="m-wrap span12">
							<option value="">Admit To</option>
							<option value="2015-16" <?php if ($student_details['admit_to'] == "std1") print ' selected="selected"'; ?>>2015-16</option>
							<option value="2016-17" <?php if ($student_details['admit_to'] == "std1") print ' selected="selected"'; ?>>2016-17</option>
						</select>
					</div>
					<div class="span3">
						<label class="control-label">Medium</label>
						<select name="medium" class="m-wrap span12">
							<option value="">Medium</option>
							<option value="english" <?php if ($student_details['medium'] == "english") print ' selected="selected"'; ?>>English</option>
							<option value="hindi" <?php if ($student_details['medium'] == "hindi") print ' selected="selected"'; ?>>Hindi</option>
							<option value="hindi" <?php if ($student_details['medium'] == "hindi") print ' selected="selected"'; ?>>Marathi</option>
							<option value="hindi" <?php if ($student_details['medium'] == "hindi") print ' selected="selected"'; ?>>Gujrati</option>
						</select>
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<div class="span3">
						<label class="control-label">Last Name</label>
						<input name="lname" type="text" placeholder="Last Name" class="m-wrap span12" value="<?php echo $student_details['lname'] ; ?>" />
					</div>
					<div class="span3">
						<label class="control-label">First Name</label>
						<input name="fname" type="text" placeholder="First Name" class="m-wrap span12" value="<?php echo $student_details['fname'] ; ?>"/>
					</div>
					<div class="span3">
						<label class="control-label">Middle Name</label>
						<input name="mname" type="text" placeholder="Middle Name" class="m-wrap span12" value="<?php echo $student_details['mname'] ; ?>"/>
					</div>					
				</div>
			</div>
			<h3 class="form-section">About Father</h3>
			<div class="row-fluid">
				<div class="span12">
					<div class="span3">
						<label class="control-label">Middle Name</label>
						<input name="father_mname" type="text" placeholder="Middle Name" class="m-wrap span12" value="<?php echo $student_details['father_mname'] ; ?>"/>
					</div>					
					<div class="span3">
						<label class="control-label">Occupation</label>
						<select name="father_occupation" class="m-wrap span12">
							<option value="">Father's Occupation</option>							
							<option value="Service"  <?php if ($student_details['father_occupation'] == "Service") print ' selected="selected"'; ?>>Service</option>
							<option value="Business"  <?php if ($student_details['father_occupation'] == "Business") print ' selected="selected"'; ?>>Business</option>
							<option value="Professional"  <?php if ($student_details['father_occupation'] == "Professional") print ' selected="selected"'; ?>>Professional</option>
							<option value="Other"  <?php if ($student_details['father_occupation'] == "Other") print ' selected="selected"'; ?>>Other</option>
						</select>
					</div>
					<div class="span3">
						<label class="control-label">Qualification</label>
						<select name="father_qualification" class="m-wrap span12">
							<option value="">Father's Qualification</option>
							<option value="non-ssc" <?php if ($student_details['father_qualification'] == "non-ssc") print ' selected="selected"'; ?>>Non-SSC</option>
							<option value="ssc" <?php if ($student_details['father_qualification'] == "ssc") print ' selected="selected"'; ?>>SSC</option>
							<option value="graduate" <?php if ($student_details['father_qualification'] == "graduate") print ' selected="selected"'; ?> >Graduate</option>
							<option value="double_graduate"<?php if ($student_details['father_qualification'] == "double_graduate") print ' selected="selected"'; ?>>Double Graduate</option>
							<option value="post_graduate" <?php if ($student_details['father_qualification'] == "post_graduate") print ' selected="selected"'; ?>>Post Graduate</option>
							<option value="doctorate" <?php if ($student_details['father_qualification'] == "doctorate") print ' selected="selected"'; ?>>Doctorate</option>							
						</select>
					</div>
					<div class="span3">
						<label class="control-label">Professional Qualification</label>
						<input name="father_pq" type="text" placeholder="Professional Qualification" class="m-wrap span12" value="<?php echo $student_details['father_pq'] ; ?>">
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<div class="span3">
						<label class="control-label">Mobile</label>
						<input name="father_mobile" type="text" placeholder="Mobile" class="m-wrap span12" value="<?php echo $student_details['father_mobile'] ; ?>"/>
					</div>					
					<div class="span3">
						<label class="control-label">Office No.</label>
						<input name="father_ofc_num" type="text" placeholder="Office No." class="m-wrap span12" value="<?php echo $student_details['father_ofc_num'] ; ?>"/>
					</div>
					<div class="span3">
						<label class="control-label">Office Name</label>
						<input name="father_ofc_name" type="text" placeholder="Office Name" class="m-wrap span12" value="<?php echo $student_details['father_ofc_name'] ; ?>"/>
					</div>
					<div class="span3">
						<label class="control-label">Office Address</label>
						<textarea name="adrs_father_ofc" class="m-wrap span12" placeholder="Office Address"><?php echo $student_details['adrs_father_ofc'] ; ?></textarea>
					</div>
										
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<div class="span3">
						<label class="control-label">Email</label>
						<input name="father_email" type="email" placeholder="Father Email Id" class="m-wrap span12" value="<?php echo $student_details['father_email'] ; ?>"/>
					</div>
					<div class="span3">
						<label class="control-label">Aadhaar No.</label>
						<input name="father_aadhar" type="text" placeholder="Aadhaar No." class="m-wrap span12" value="<?php echo $student_details['father_aadhar'] ; ?>"/>
					</div>
					<div class="span3">
						<label class="control-label">Annual Income</label>
						<input name="father_ai" type="text" placeholder="Annual Income" class="m-wrap span12" value="<?php echo $student_details['father_ai'] ; ?>"/>
					</div>
					<div class="span3">
						<label class="control-label">PAN</label>
						<input name="father_pan" type="text" placeholder="PAN" class="m-wrap span12" value="<?php echo $student_details['father_pan'] ; ?>"/>
					</div>
										
				</div>
			</div>
			<h3 class="form-section">About Mother</h3>
			<div class="row-fluid">
				<div class="span12">
					<div class="span3">
						<label class="control-label">First Name</label>
						<input name="mother_fname" type="text" placeholder="First Name" class="m-wrap span12" value="<?php echo $student_details['father_pan'] ; ?>" />
					</div>					
					<div class="span3">
						<label class="control-label">Occupation</label>
						<select name="mother_occupation" class="m-wrap span12">
							<option value="">Mother's Occupation</option>
							<option value="Housewife"  <?php if ($student_details['mother_occupation'] == "Housewife") print ' selected="selected"'; ?>>Housewife </option>
							<option value="Service"  <?php if ($student_details['mother_occupation'] == "Service") print ' selected="selected"'; ?>>Service</option>
							<option value="Business"  <?php if ($student_details['mother_occupation'] == "Business") print ' selected="selected"'; ?>>Business</option>
							<option value="Professional"  <?php if ($student_details['mother_occupation'] == "Professional") print ' selected="selected"'; ?>>Professional</option>
							<option value="Other"  <?php if ($student_details['mother_occupation'] == "Other") print ' selected="selected"'; ?>>Other</option>
						</select>
					</div> 
					<div class="span3">
						<label class="control-label">Qualification</label>
						<select name="mother_qualification" class="m-wrap span12">
							<option value="">Mother's Qualification</option>
							<option value="non-ssc" <?php if ($student_details['mother_qualification'] == "non-ssc") print ' selected="selected"'; ?>>Non-SSC</option>
							<option value="ssc" <?php if ($student_details['mother_qualification'] == "ssc") print ' selected="selected"'; ?>>SSC</option>
							<option value="graduate" <?php if ($student_details['mother_qualification'] == "graduate") print ' selected="selected"'; ?> >Graduate</option>
							<option value="double_graduate"<?php if ($student_details['mother_qualification'] == "double_graduate") print ' selected="selected"'; ?>>Double Graduate</option>
							<option value="post_graduate" <?php if ($student_details['mother_qualification'] == "post_graduate") print ' selected="selected"'; ?>>Post Graduate</option>
							<option value="doctorate" <?php if ($student_details['mother_qualification'] == "doctorate") print ' selected="selected"'; ?>>Doctorate</option>							
						</select>
					</div>
					<div class="span3">
						<label class="control-label">Professional Qualification</label>
						<input name="mother_pq" type="text" placeholder="Professional Qualification" class="m-wrap span12" value="<?php echo $student_details['mother_pq'] ; ?>" />
					</div>
										
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<div class="span3">
						<label class="control-label">Mobile</label>
						<input name="mother_mobile" type="text" placeholder="Mobile" class="m-wrap span12" value="<?php echo $student_details['mother_mobile'] ; ?>" />
					</div>					
					<div class="span3">
						<label class="control-label">Office No.</label>
						<input name="mother_ofc_num" type="text" placeholder="Office No." class="m-wrap span12" value="<?php echo $student_details['mother_ofc_num'] ; ?>" />
					</div>
					<div class="span3">
						<label class="control-label">Office Name</label>
						<input name="mother_ofc_name" type="text" placeholder="Office Name" class="m-wrap span12" value="<?php echo $student_details['mother_ofc_name'] ; ?>" />
					</div>
					<div class="span3">
						<label class="control-label">Office Address</label>
						<textarea name="adrs_mother_ofc" class="m-wrap span12" placeholder="Mother's Office Address"><?php echo $student_details['adrs_mother_ofc'] ; ?></textarea>					
					</div>
										
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<div class="span3">
						<label class="control-label">Email</label>
						<input name="mother_email" type="email" placeholder="Father Email Id" class="m-wrap span12" value="<?php echo $student_details['mother_email'] ; ?>" />
					</div>
					<div class="span3">
						<label class="control-label">Aadhaar No.</label>
						<input name="mother_aadhar" type="text" placeholder="Aadhaar No." class="m-wrap span12" value="<?php echo $student_details['mother_aadhar'] ; ?>" />
					</div>
					<div class="span3">
						<label class="control-label">Annual Income</label>
						<input name="mother_ai" type="text" placeholder="Annual Income" class="m-wrap span12" value="<?php echo $student_details['mother_ai'] ; ?>" />
					</div>
					<div class="span3">
						<label class="control-label">PAN</label>
						<input name="mother_pan" type="text" placeholder="PAN" class="m-wrap span12" value="<?php echo $student_details['mother_pan'] ; ?>" />
					</div>
										
				</div>
			</div>
			<h3 class="form-section"></h3>
			<div class="row-fluid">
				<div class="span12">
					<div class="span3">
						<label class="control-label">Is Divorced?</label>
						<select name="is_divorced" class="m-wrap span12">
							<option value="">Is Divorced?</option>
							<option value="yes"   <?php if ($student_details['is_divorced'] == "yes") print ' selected="selected"'; ?>>YES</option>
							<option value="no"  <?php if ($student_details['is_divorced'] == "no") print ' selected="selected"'; ?>>NO</option>
						</select>
					</div>
					<div class="span3">
						<label class="control-label">Is Adopted?</label>
						<select name="is_adopted" class="m-wrap span12">
							<option value="">Is Adopted?</option>
							<option value="yes" <?php if ($student_details['is_adopted'] == "yes") print ' selected="selected"'; ?>>YES</option>
							<option value="no" <?php if ($student_details['is_adopted'] == "no") print ' selected="selected"'; ?>>NO</option>
						</select>
					</div>
					<div class="span2">
						<label class="control-label">Sibbling student ID 1</label>
						<input name="sibbling1" class="m-wrap span12" placeholder="Sibbling student ID 1" value="<?php echo $student_details['sibbling1'] ; ?>" >
					</div>
					<div class="span2">
						<label class="control-label">Sibbling student ID 2</label>
						<input name="sibbling2" class="m-wrap span12" placeholder="Sibbling student ID 2" value="<?php echo $student_details['sibbling2'] ; ?>" >
					</div>
					<div class="span2">
						<label class="control-label">Sibbling student ID 3</label>
						<input name="sibbling3" class="m-wrap span12" placeholder="Sibbling student ID 3" value="<?php echo $student_details['sibbling3'] ; ?>" >
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					
					<div class="span3">
						<label class="control-label">Residence</label>
						<textarea name="adrs_residence" class="m-wrap span12" placeholder="Residence"><?php echo $student_details['adrs_residence'] ; ?></textarea>
					</div>
					<div class="span3">
						<label class="control-label">Native Place Address</label>
						<textarea name="adrs_native" class="m-wrap span12" placeholder="Native Place Address"><?php echo $student_details['adrs_native'] ; ?></textarea>
					</div>
					<div class="span2">
						<label class="control-label">City</label>
						<select name="city" class="m-wrap span12">
							<option value="">City</option>
							<option value="dehradun" <?php if ($student_details['city'] == "dehradun") print ' selected="selected"'; ?>>Dehradun</option>
							<option value="rishikesh" <?php if ($student_details['city'] == "rishikesh") print ' selected="selected"'; ?>>Rishikesh</option>
						</select>
					</div>
					<div class="span2">
						<label class="control-label">Pincode</label>
						<input name="pincode" type="text" placeholder="Pincode" class="m-wrap span12" value="<?php echo $student_details['pincode'] ; ?>"/>
					</div>
					<div class="span2">
						<label class="control-label">District</label>
						<select name="district" class="m-wrap span12">
							<option value="">District</option>
							<option value="dehradun" <?php if ($student_details['district'] == "dehradun") print ' selected="selected"'; ?>>Dehradun</option>
							<option value="haridwar" <?php if ($student_details['district'] == "haridwar") print ' selected="selected"'; ?>>Haridwar</option>
						</select>
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">					
					<div class="span3">
						<label class="control-label">Birth Place</label>
						<input name="birth_place" type="text" placeholder="Birth Place" class="m-wrap span12"  value="<?php echo $student_details['birth_place'] ; ?>"/>
					</div>
					<div class="span3">
						<label class="control-label">Tel No.</label>
						<input name="alt_phone" type="text" placeholder="Tel No." class="m-wrap span12" value="<?php echo $student_details['alt_phone'] ; ?>"/>
					</div>
					<div class="span2">
						<label class="control-label">Gender</label>						
						<select name="gender" class="m-wrap span12">
							<option value="">Gender</option>
							<option value="Male" <?php if ($student_details['gender'] == "Male") print ' selected="selected"'; ?>>Male</option>
							<option value="Female" <?php if ($student_details['gender'] == "Female") print ' selected="selected"'; ?>>Female</option>								
						</select>
					</div>
					<div class="span2">
						<label class="control-label">Religion</label>
						<select name="religion" class="m-wrap span12">
							<option value="">Religion</option>
							<option value="hindu" <?php if ($student_details['religion'] == "hindu") print ' selected="selected"'; ?> >Hindu</option>
							<option value="muslim" <?php if ($student_details['religion'] == "muslim") print ' selected="selected"'; ?> >Muslim</option>
							<option value="isminority" <?php if ($student_details['religion'] == "isminority") print ' selected="selected"'; ?>>IsMinority</option>
						</select>
					</div>
					<div class="span2">
						<label class="control-label">Caste</label>
						<select name="caste" class="m-wrap span12">
							<option value="">Caste</option>
							<option value="OPEN" <?php if ($student_details['caste'] == "OPEN") print ' selected="selected"'; ?>>OPEN</option>
							<option value="SC" <?php if ($student_details['caste'] == "SC") print ' selected="selected"'; ?>>SC</option>
							<option value="ST" <?php if ($student_details['caste'] == "ST") print ' selected="selected"'; ?>>ST</option>
							<option value="OBC" <?php if ($student_details['caste'] == "OBC") print ' selected="selected"'; ?>>OBC</option>
							<option value="SBC" <?php if ($student_details['caste'] == "SBC") print ' selected="selected"'; ?>>SBC</option>
							<option value="NT" <?php if ($student_details['caste'] == "NT") print ' selected="selected"'; ?>>NT</option>
							<option value="VJNT" <?php if ($student_details['caste'] == "VJNT") print ' selected="selected"'; ?>>VJNT</option>
						</select>
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">					
					<div class="span2">
						<label class="control-label">S-Caste</label>
						<input name="s_caste" type="text" placeholder="S-Caste" class="m-wrap span12" value="<?php echo $student_details['s_caste'] ; ?>"/>
					</div>					
					<div class="span2">
						<label class="control-label">Birth Date</label>
						<input name="birth_date" type="text" placeholder="Birth Date" class="m-wrap span12" id="ui_date_picker_change_year_month" value="<?php echo $student_details['birth_date'] ; ?>"/>
					</div>
					<div class="span2">
						<label class="control-label">Admission Date</label>
						<select name="admission_date" class="m-wrap span12">
							<option value="">Admission Date</option>
							<option value="date1" <?php if ($student_details['admission_date'] == "OPEN") print ' selected="selected"'; ?>>date1</option>
							<option value="date2" <?php if ($student_details['admission_date'] == "OPEN") print ' selected="selected"'; ?>>date2</option>
						</select>
					</div>
					<div class="span2">
						<label class="control-label">Start std.</label>
						<select name="start_std" class="m-wrap span12">
							<option value="">Start std.</option>
							<option value="std1" <?php if ($student_details['start_std'] == "OPEN") print ' selected="selected"'; ?>>std1</option>
							<option value="std2" <?php if ($student_details['start_std'] == "OPEN") print ' selected="selected"'; ?>>std2</option>
						</select>
					</div>
					<div class="span2">
						<label class="control-label">Weight</label>
						<input name="weight" type="text" placeholder="Weight" class="m-wrap span6" value="<?php echo $student_details['weight'] ; ?>"/> 
					</div>
					<div class="span2">
						<label class="control-label">Height</label>
						<input name="height" type="text" placeholder="Height" class="m-wrap span6" value="<?php echo $student_details['height'] ; ?>"/>
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<div class="span2">
						<label class="control-label">Blood Group</label>
						<select name="blood_grp" class="m-wrap span12">
							<option value="">Blood Group</option>
							<option value="A+" <?php if ($student_details['blood_grp'] == "A+") print ' selected="selected"'; ?>>A+</option>
							<option value="A-" <?php if ($student_details['blood_grp'] == "A-") print ' selected="selected"'; ?>>A-</option>
							<option value="B+" <?php if ($student_details['blood_grp'] == "B+") print ' selected="selected"'; ?>>B+</option>
							<option value="B-" <?php if ($student_details['blood_grp'] == "B-") print ' selected="selected"'; ?>>B-</option>
							<option value=" AB+" <?php if ($student_details['blood_grp'] == "AB+") print ' selected="selected"'; ?>> AB+</option>
							<option value="AB-" <?php if ($student_details['blood_grp'] == "AB-") print ' selected="selected"'; ?>>AB-</option>
							<option value=" O+" <?php if ($student_details['blood_grp'] == "O+") print ' selected="selected"'; ?>>O+</option>
							<option value="O-" <?php if ($student_details['blood_grp'] == "O-") print ' selected="selected"'; ?>>O-</option>
						</select>
					</div>					
					<div class="span2">
						<label class="control-label">Mother Tongue</label>
						<select name="mother_tongue" class="m-wrap span12">
							<option value="">Mother Tongue</option>
							<option value="marathi" <?php if ($student_details['mother_tongue'] == "marathi") print ' selected="selected"'; ?>>Marathi</option>
							<option value="gujrathi" <?php if ($student_details['mother_tongue'] == "gujrathi") print ' selected="selected"'; ?>>Gujrathi</option>
						</select>
					</div>
					<div class="span3">
						<label class="control-label">Near Railway Station</label>
						<input name="near_rly_stn" type="text" placeholder="Near Railway Station" class="m-wrap span12" value="<?php echo $student_details['near_rly_stn'] ; ?>"/>
					</div>
					<div class="span2">
						<label class="control-label">Nationality</label>
						<input name="nationality" type="text" placeholder="Nationality" class="m-wrap span12" value="<?php echo $student_details['nationality'] ; ?>"/>
					</div>
					<div class="span3">
						<label class="control-label">Fee Scheme</label>
						<input name="fee_scheme" type="text" placeholder="Fee Scheme (click here for details)" class="m-wrap span12" value="<?php echo $student_details['fee_scheme'] ; ?>"/>
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<div class="span2">
						<label class="control-label">Status</label>
						<select name="status" class="m-wrap span12">
							<option value="">Status</option>
							<option value="Current" <?php if ($student_details['status'] == "Current") print ' selected="selected"'; ?>>Current</option>
							<option value="Left" <?php if ($student_details['status'] == "Left") print ' selected="selected"'; ?>>Left</option>
							<option value="Finished" <?php if ($student_details['status'] == "Finished") print ' selected="selected"'; ?>>Finished</option>
							<option value="Long" <?php if ($student_details['status'] == "Long") print ' selected="selected"'; ?>>Long</option>
							<option value="Absent" <?php if ($student_details['status'] == "Absent") print ' selected="selected"'; ?>>Absent</option>
							<option value="on_break" <?php if ($student_details['status'] == "on_break") print ' selected="selected"'; ?>>On break</option>
						</select>
					</div>
					<div class="span2">
						<label class="control-label">Passed Out</label>
						<select name="passed_out" class="m-wrap span12">
							<option value="">Passed Out</option>
							<option value="yes"   <?php if ($student_details['passed_out'] == "yes") print ' selected="selected"'; ?>>YES</option>
							<option value="no"  <?php if ($student_details['passed_out'] == "no") print ' selected="selected"'; ?>>NO</option>
						</select>
					</div>
					<div class="span1">
						<label class="control-label">Seat No.</label>
						<input name="seat_num" type="text" placeholder="Seat No." class="m-wrap span12" value="<?php echo $student_details['seat_num'] ; ?>"/>
					</div>
					<div class="span2">
						<label class="control-label">Child No.</label>
						<input name="child_num" type="text" placeholder="Child No." class="m-wrap span12" value="<?php echo $student_details['child_num'] ; ?>"/>
					</div>					
					<div class="span1">
						<label class="control-label">Last %</label>
						<input name="last_percentage" type="text" placeholder="Last %" class="m-wrap span12" value="<?php echo $student_details['last_percentage'] ; ?>"/>
					</div>
					<div class="span2">
						<label class="control-label">Handicap?</label>						
						<select name="handicap" class="m-wrap span12">
							<option value="">Handicap?</option>
							<option value="yes"   <?php if ($student_details['handicap'] == "yes") print ' selected="selected"'; ?>>YES</option>
							<option value="no"  <?php if ($student_details['handicap'] == "no") print ' selected="selected"'; ?>>NO</option>
						</select>
					</div>
					<div class="span2">
						<label class="control-label">N.S.S.?</label>						
						<select name="nss" class="m-wrap span12">
							<option value="">N.S.S.?</option>
							<option value="yes"   <?php if ($student_details['nss'] == "yes") print ' selected="selected"'; ?>>YES</option>
							<option value="no"  <?php if ($student_details['nss'] == "no") print ' selected="selected"'; ?>>NO</option>
						</select>
					</div>
					<input name="submit" type="hidden" value="submit"/>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">					
					<div class="span12">
						<label class="control-label">Leaving Date(Leave blank if not passed out)</label>
						<input name="leaving_date" type="text" placeholder="yyyy-mm-dd" class="m-wrap span12" id="ui_date_picker_change_year_month" value="<?php echo $student_details['leaving_date'] ; ?>"/>
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<div class="span1"><button type="submit" class="btn blue span12">Save</button></div>
					<div class="span3"><button type="submit" class="btn blue span12">Quick Student Entry</button></div>
					<div class="span2"><button type="submit" class="btn blue span12">Print GR Sheets</button></div>															
					<div class="span1"><button type="button" class="btn span12">Clear</button></div>
					<div class="span1"><a href="<?php echo base_url("student/listing.htm");?>" class="btn blue">Exit</a></div>
				</div>
			</div>
		</form>
	</div>
</div>	
<script type="text/javascript" src="<?php echo base_url('assets/plugins/bootstrap-fileupload/bootstrap-fileupload.js') ; ?>"></script>
<script>
	$(document).ready(function(){		
		UIJQueryUI.init();
	});
</script>				

