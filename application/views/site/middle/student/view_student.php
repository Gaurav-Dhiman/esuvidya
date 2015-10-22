<?php //pre_print($student_details) ; ?>

<div class="portlet box blue ">
	<div class="portlet-title">
		<div class="caption"><i class="icon-reorder"></i>Student Details</div>
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
		<form action="<?php echo base_url('student/edit'.$student_details['stud_id']);?>" class="form-horizontal form-bordered form-label-stripped" method="POST">
			<div class="row-fluid">
				<div class="span12">
					<!-- <div class="span3"><input name="idno" type="text" placeholder="ID No." class="m-wrap span12" /></div> -->
					<div class="span3"><label class="control-label">GR No.</label><input name="gr_num" type="text" placeholder="GR No." value="<?php echo $student_details['gr_num'] ; ?>" class="m-wrap span12" readonly="readonly" /></div>
					<div class="span3"><label class="control-label">Roll No</label><input name="roll_num" type="text" placeholder="Roll No" value="<?php echo $student_details['roll_num'] ; ?>" class="m-wrap span12" readonly="readonly" /></div>
					<div class="span3"><label class="control-label">Add Photo</label><input name="image" type="file" placeholder="Add Photo" value="<?php //echo $student_details['image'] ; ?>" class="m-wrap" readonly="readonly" /><div class="preview pull-right">Photo</div></div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<div class="span3">
						<label class="control-label">std</label>
						<select name="std" class="m-wrap span12">
							<option value="">std</option>
							<option value="std1" <?php if ($student_details['std'] == "std1") print ' selected="selected"'; ?>>std1</option>
							<option value="std2" <?php if ($student_details['std'] == "std2") print ' selected="selected"'; ?>>std2</option>
						</select>
					</div>
					<div class="span3">
						<label class="control-label">Stream</label>
						<select name="stream" class="m-wrap span12">
							<option value="">Stream</option>
							<option value="stream1" <?php if ($student_details['stream'] == "std1") print ' selected="selected"'; ?>>stream1</option>
							<option value="stream2" <?php if ($student_details['stream'] == "std1") print ' selected="selected"'; ?>>stream2</option>
						</select>
					</div>
					<div class="span3">
						<label class="control-label">Division</label>
						<select name="division" class="m-wrap span12">
							<option value="">Division</option>
							<option value="division1" <?php if ($student_details['division'] == "std1") print ' selected="selected"'; ?>>div1</option>
							<option value="division2" <?php if ($student_details['division'] == "std1") print ' selected="selected"'; ?>>div2</option>
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
							<option value="semester1" <?php if ($student_details['semester'] == "std1") print ' selected="selected"'; ?>>semester1</option>
							<option value="semester2" <?php if ($student_details['semester'] == "std1") print ' selected="selected"'; ?>>semester2</option>
						</select>
					</div>
					<div class="span3">
						<label class="control-label">Admit To</label>
						<select name="admit to" class="m-wrap span12">
							<option value="">Admit To</option>
							<option value="2015-16" <?php if ($student_details['admit_to'] == "std1") print ' selected="selected"'; ?>>2015-16</option>
							<option value="2015-16" <?php if ($student_details['admit_to'] == "std1") print ' selected="selected"'; ?>>2015-16</option>
						</select>
					</div>
					<div class="span3">
						<label class="control-label">Medium</label>
						<select name="medium" class="m-wrap span12">
							<option value="">Medium</option>
							<option value="english" <?php if ($student_details['medium'] == "english") print ' selected="selected"'; ?>>English</option>
							<option value="hindi" <?php if ($student_details['medium'] == "hindi") print ' selected="selected"'; ?>>Hindi</option>
						</select>
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<div class="span3"><label class="control-label">Last Name</label><input name="lname" type="text" placeholder="Last Name" value="<?php echo $student_details['lname'] ; ?>" class="m-wrap span12" readonly="readonly" /></div>
					<div class="span3"><label class="control-label">First Name</label><input name="fname" type="text" placeholder="First Name" value="<?php echo $student_details['fname'] ; ?>" class="m-wrap span12" readonly="readonly" /></div>
					<div class="span3"><label class="control-label">Middle Name</label><input name="mname" type="text" placeholder="Middle Name" value="<?php echo $student_details['mname'] ; ?>" class="m-wrap span12" readonly="readonly" /></div>
					<div class="span3"><label class="control-label">Mother's Name</label><input name="mother_name" type="text" placeholder="Mother's Name" value="<?php echo $student_details['mother_name'] ; ?>" class="m-wrap span12" readonly="readonly" /></div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<div class="span3"><label class="control-label">Residence</label><textarea name="adrs_residence" class="m-wrap span12" placeholder="Residence"><?php echo $student_details['adrs_residence'] ; ?></textarea></div>
					<div class="span3"><label class="control-label">Father's Office Address</label><textarea name="adrs_father_ofc" class="m-wrap span12" placeholder="Father's Office Address"><?php echo $student_details['adrs_father_ofc'] ; ?></textarea></div>
					<div class="span3"><label class="control-label">Mother's Office Address</label><textarea name="adrs_mother_ofc" class="m-wrap span12" placeholder="Mother's Office Address"><?php echo $student_details['adrs_mother_ofc'] ; ?></textarea></div>
					<div class="span3"><label class="control-label">Native Place Address</label><textarea name="adrs_native" class="m-wrap span12" placeholder="Native Place Address"><?php echo $student_details['adrs_native'] ; ?></textarea></div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<div class="span3">
						<label class="control-label">City</label>
						<select name="city" class="m-wrap span12">
							<option value="">City</option>
							<option value="dehradun" <?php if ($student_details['city'] == "dehradun") print ' selected="selected"'; ?>>Dehradun</option>
							<option value="rishikesh" <?php if ($student_details['city'] == "rishikesh") print ' selected="selected"'; ?>>Rishikesh</option>
						</select>
					</div>
					<div class="span3"><label class="control-label">Pincode</label><input name="pincode" type="text" placeholder="Pincode" value="<?php echo $student_details['pincode'] ; ?>" class="m-wrap span12" readonly="readonly" /></div>
					<div class="span3">
						<label class="control-label">District</label>
						<select name="district" class="m-wrap span12">
							<option value="">District</option>
							<option value="dehradun" <?php if ($student_details['district'] == "dehradun") print ' selected="selected"'; ?>>Dehradun</option>
							<option value="haridwar" <?php if ($student_details['district'] == "haridwar") print ' selected="selected"'; ?>>Haridwar</option>
						</select>
					</div>
					<div class="span3"><label class="control-label">Birth Place</label><input name="birth_place" type="text" placeholder="Birth Place" value="<?php echo $student_details['birth_place'] ; ?>" class="m-wrap span12" readonly="readonly" /></div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<div class="span3"><label class="control-label">Tel No.</label><input name="phone" type="text" placeholder="Tel No." value="<?php echo $student_details['phone'] ; ?>" class="m-wrap span12" readonly="readonly" /></div>
					<div class="span3"><label class="control-label">Tel No.</label><input name="mobile" type="text" placeholder="Tel No." value="<?php echo $student_details['mobile'] ; ?>" class="m-wrap span12" readonly="readonly" /></div>
					<div class="span3"><label class="control-label">Tel No.</label><input name="alt_phone" type="text" placeholder="Tel No." value="<?php echo $student_details['alt_phone'] ; ?>" class="m-wrap span12" readonly="readonly" /></div>
					<div class="span3"><label class="control-label">Gender</label><input name="gender" type="text" placeholder="Gender" value="<?php echo $student_details['gender'] ; ?>" class="m-wrap span12" readonly="readonly" /></div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<div class="span3">
						<label class="control-label">Religion</label>
						<select name="religion" class="m-wrap span12">
							<option value="">Religion</option>
							<option value="hindu" <?php if ($student_details['religion'] == "hindu") print ' selected="selected"'; ?>>Hindu</option>
							<option value="muslim" <?php if ($student_details['religion'] == "muslim") print ' selected="selected"'; ?>>Muslim</option>
						</select>
					</div>
					<div class="span3">
						<label class="control-label">Caste</label>
						<select name="caste" class="m-wrap span12">
							<option value="">Caste</option>
							<option value="caste1" <?php if ($student_details['caste'] == "caste1") print ' selected="selected"'; ?>>Caste1</option>
							<option value="caste2" <?php if ($student_details['caste'] == "caste2") print ' selected="selected"'; ?>>Caste2</option>
						</select>
					</div>
					<div class="span3"><label class="control-label">S-Caste</label><input name="s_caste" type="text" placeholder="S-Caste" value="<?php echo $student_details['s_caste'] ; ?>" class="m-wrap span12" readonly="readonly" /></div>
					<div class="span3">
						<label class="control-label">Weight</label>
						<input name="weight" type="text" placeholder="Weight" class="m-wrap span6" readonly="readonly" />
						<label class="control-label">Height</label> 
						<input name="height" type="text" placeholder="Height" class="m-wrap span6" readonly="readonly" />
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<div class="span3">
						<label class="control-label">Birth Date</label>
						<select name="birth_date" class="m-wrap span12">
							<option value="">Birth Date</option>
							<option value="Female" <?php if ($student_details['birth_date'] == "Female") print ' selected="selected"'; ?>>sem</option>
						</select>
					</div>
					<div class="span3">
						<label class="control-label">Admission Date</label>
						<select name="admission_date" class="m-wrap span12">
							<option value="">Admission Date</option>
							<option value="date1" <?php if ($student_details['admission_date'] == "date1") print ' selected="selected"'; ?>>date1</option>
							<option value="date2" <?php if ($student_details['admission_date'] == "date2") print ' selected="selected"'; ?>>date2</option>
						</select>
					</div>
					<div class="span3"><label class="control-label">Fee Scheme</label><input name="fee_scheme" type="text" placeholder="Fee Scheme (click here for details)" value="<?php echo $student_details['fee_scheme'] ; ?>" class="m-wrap span12" readonly="readonly" /></div>
					<div class="span3">
						<label class="control-label">Start std.</label>
						<select name="start_std" class="m-wrap span12">
							<option value="">Start std.</option>
							<option value="std1" <?php if ($student_details['start_std'] == "std1") print ' selected="selected"'; ?>>std1</option>
							<option value="std2" <?php if ($student_details['start_std'] == "std1") print ' selected="selected"'; ?>>std2</option>
						</select>
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<div class="span3">
						<label class="control-label">House</label>
						<select name="house" class="m-wrap span12">
							<option value="">House</option>
							<option value="House1" <?php if ($student_details['house'] == "House1") print ' selected="selected"'; ?>>House1</option>
							<option value="House2" <?php if ($student_details['house'] == "House2") print ' selected="selected"'; ?>>House2</option>
						</select>
					</div>
					<div class="span3">
						<label class="control-label">Blood Group</label>
						<select name="blood_grp" class="m-wrap span12">
							<option value="">Blood Group</option>
							<option value="grp1" <?php if ($student_details['blood_grp'] == "grp1") print ' selected="selected"'; ?>>grp1</option>
							<option value="grp2" <?php if ($student_details['blood_grp'] == "grp2") print ' selected="selected"'; ?>>grp2</option>
						</select>
					</div>
					<div class="span3">
						<label class="control-label">Status</label>
						<select name="status" class="m-wrap span12">
							<option value="">Status</option>
							<option value="status1" <?php if ($student_details['status'] == "status1") print ' selected="selected"'; ?>>status1</option>
							<option value="status2" <?php if ($student_details['status'] == "status2") print ' selected="selected"'; ?>>status2</option>
						</select>
					</div>
					<div class="span3"><label class="control-label">Repeater</label><input name="repeater" type="text" placeholder="Repeater" value="<?php echo $student_details['repeater'] ; ?>" class="m-wrap span12" readonly="readonly" /></div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<div class="span3">
						<label class="control-label">Father Occupation</label>
						<select name="father_occupation" class="m-wrap span12">
							<option value="">Father Occupation</option>
							<option value="service1" <?php if ($student_details['father_occupation'] == "service1") print ' selected="selected"'; ?>>Service1</option>
							<option value="service2" <?php if ($student_details['father_occupation'] == "service2") print ' selected="selected"'; ?>>Service2</option>
						</select>
					</div>
					<div class="span3">
						<label class="control-label">Mother Occupation</label>
						<select name="mother_occupation" class="m-wrap span12">
							<option value="">Mother Occupation</option>
							<option value="service1" <?php if ($student_details['mother_occupation'] == "service1") print ' selected="selected"'; ?>>Service1</option>
							<option value="service2" <?php if ($student_details['mother_occupation'] == "service2") print ' selected="selected"'; ?>>Service2</option>
						</select>
					</div>
					<div class="span3">
						<label class="control-label">Mother Tongue</label>
						<select name="mother_tongue" class="m-wrap span12">
							<option value="">Mother Tongue</option>
							<option value="marathi" <?php if ($student_details['mother_tongue'] == "marathi") print ' selected="selected"'; ?>>Marathi</option>
							<option value="gujrathi" <?php if ($student_details['mother_tongue'] == "gujrathi") print ' selected="selected"'; ?>>Gujrathi</option>
						</select>
					</div>
					<div class="span3"><label class="control-label">Nationality</label><input name="nationality" type="text" placeholder="Nationality" value="<?php echo $student_details['nationality'] ; ?>" class="m-wrap span12" readonly="readonly" /></div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<div class="span3"><label class="control-label">Computer</label><input name="computer" type="text" placeholder="Computer" value="<?php echo $student_details['computer'] ; ?>" class="m-wrap span12" readonly="readonly" /></div>
					<div class="span3"><label class="control-label">Books Allowed</label><input name="books_allowed" type="text" placeholder="Books Allowed" value="<?php echo $student_details['books_allowed'] ; ?>" class="m-wrap span12" readonly="readonly" /></div>
					<div class="span3"><label class="control-label">Near Railway Station</label><input name="near_rly_stn" type="text" placeholder="Near Railway Station" value="<?php echo $student_details['near_rly_stn'] ; ?>" class="m-wrap span12" readonly="readonly" /></div>
					<div class="span3"><label class="control-label">Seat No.</label><input name="seat_num" type="text" placeholder="Seat No." value="<?php echo $student_details['seat_num'] ; ?>" class="m-wrap span12" readonly="readonly" /></div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<div class="span3">
						<label class="control-label">Bus</label>
						<select name="bus" class="m-wrap span12">
							<option value="">Bus</option>
							<option value="YES" <?php if ($student_details['std'] == "YES") print ' selected="selected"'; ?>>Yes</option>
							<option value="NO" <?php if ($student_details['std'] == "NO") print ' selected="selected"'; ?>>No</option>
						</select>
					</div>
					<div class="span3">
						<label class="control-label">Bus No.</label>
						<select name="bus_num" class="m-wrap span12">
							<option value="">Bus No.</option>
							<option value="bus1" <?php if ($student_details['bus'] == "bus1") print ' selected="selected"'; ?>>Bus1</option>
							<option value="bus2" <?php if ($student_details['bus'] == "bus2") print ' selected="selected"'; ?>>Bus2</option>
						</select>
					</div>
					<div class="span3">
						<label class="control-label">Bus Route</label>
						<select name="bus_route" class="m-wrap span12">
							<option value="">Bus Route</option>
							<option value="Route1" <?php if ($student_details['bus_route'] == "Route1") print ' selected="selected"'; ?>>Route1</option>
							<option value="Route2" <?php if ($student_details['bus_route'] == "Route2") print ' selected="selected"'; ?>>Route2</option>
						</select>
					</div>
					<div class="span3"><label class="control-label">Full Name</label><input name="child_num" type="text" placeholder="Child No." value="<?php echo $student_details['child_num'] ; ?>" class="m-wrap span12" readonly="readonly" /></div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<div class="span9">
						<label class="control-label">Passed Out</label>
						<select name="passed_out" class="m-wrap span12">
							<option value="">Passed Out</option>
							<option value="Year1" <?php if ($student_details['passed_out'] == "Year1") print ' selected="selected"'; ?>>Year1</option>
							<option value="Year2" <?php if ($student_details['passed_out'] == "Year2") print ' selected="selected"'; ?>>Year2</option>
						</select>
					</div>
					<div class="span3"><label class="control-label">Last %</label><input name="last_percentage" type="text" placeholder="Last %" value="<?php echo $student_details['last_percentage'] ; ?>" class="m-wrap span12" readonly="readonly" /></div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<div class="span3"><label class="control-label">Handicap?</label><input name="handicap" type="text" placeholder="Handicap?" value="<?php echo $student_details['handicap'] ; ?>" class="m-wrap span12" readonly="readonly" /></div>
					<div class="span3"><label class="control-label">N.S.S.?</label><input name="nss" type="text" placeholder="N.S.S.?" value="<?php echo $student_details['nss'] ; ?>" class="m-wrap span12" readonly="readonly" /></div>
					<input name="submit" type="hidden" value="submit"/>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<div class="span1"><button type="submit" class="btn blue span12">Save (F5)</button></div>
					<div class="span2"><button type="submit" class="btn blue span12">Quick Student Entry</button></div>
					<div class="span2"><button type="submit" class="btn blue span12">Print GR Sheets</button></div>
					<div class="span2"><button type="submit" class="btn blue span12">Create new Record</button></div>
					<div class="span2"><button type="submit" class="btn blue span12">Admission Form</button></div>
					<div class="span1"><button type="button" class="btn span12">Delete</button></div>
					<div class="span1"><button type="button" class="btn span12">Clear</button></div>
					<div class="span1"><button type="button" class="btn span12">Exit</button></div>
				</div>
			</div>
		</form>
	</div>
</div>	
				
	