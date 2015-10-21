<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/bootstrap-fileupload/bootstrap-fileupload.css') ; ?>" />
<div class="portlet box blue ">
	<div class="portlet-title">
		<div class="caption"><i class="icon-reorder"></i>Add Student</div>
		<div class="tools">
			<a href="javascript:;" class="reload"></a>
		</div>
	</div>
</div>
<div class="clear"></div>
<div class="container-fluid">
	<div class="new-form">
		<form id="add_student_frm" action="<?php echo base_url('student/add');?>" class="form-horizontal form-bordered form-label-stripped" method="POST" enctype="multipart/form-data">
			<div class="row-fluid">
				<div class="span12">
					<!-- <div class="span3"><input name="idno" type="text" placeholder="ID No." class="m-wrap span12" /></div> -->

					<div class="span12">
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
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<div class="span3">
						<label class="control-label">Standard</label>
						<select name="std" class="m-wrap span12" id="std"  >
							<?php 
								foreach($standards as $standard) {
									echo "<option value='". $standard['std_id'] ."'>". $standard['std_name'] ."</option>";
								} 
							?>
						</select>
					</div>
					<div class="span3">
						<label class="control-label">Stream</label>
						<select name="streams" class="m-wrap span12" id="streams" disabled="">
							<?php foreach($streams as $stream) {
								echo "<option value='". $stream['stream_id'] ."' data-std-code='". $stream['std_code']
									."'>". $stream['stream_name']."</option>";
							} ?>
						</select>
					</div>
					<div class="span3">
						<label class="control-label">Division</label>
						<select name="divisions" class="m-wrap span12" id="divisions" disabled="">
							<?php foreach($divisions as $division) {
								echo "<option value='". $division['div_id'] ."' data-std-code='".
									$division['stream_code']
									."'>". $division['division_name']."</option>";
							} ?>
						</select>
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<div class="span3">
						<label class="control-label">Semester</label>
						<select name="semester" class="m-wrap span12">
							<option value="semester1">Semester 1</option>
							<option value="semester2">Semester 2</option>
							<option value="semester3">Semester 3</option>
							<option value="semester4">Semester 4</option>
							<option value="semester5">Semester 5</option>
							<option value="semester6">Semester 6</option>
						</select>
					</div>
					<div class="span3">
						<label class="control-label">Admit To</label>
						<select name="admit to" class="m-wrap span12"  >
							<option value="2015-16">2015-16</option>
							<option value="2015-16">2016-17</option>
						</select>
					</div>
					<div class="span3">
						<label class="control-label">Medium</label>
						<select name="medium" class="m-wrap span12"  >
							<option value="english">English</option>
							<option value="hindi">Hindi</option>
							<option value="marathi">Marathi</option>
							<option value="gujrati">Gujrati</option>
						</select>
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<div class="span3">
						<label class="control-label">First Name</label>
						<input name="fname" type="text" placeholder="First Name" class="m-wrap span12"  required="required"/>
					</div>
					<div class="span3">
						<label class="control-label">Middle Name</label>
						<input name="mname" type="text" placeholder="Middle Name" class="m-wrap span12"/>
					</div>
					<div class="span3">
						<label class="control-label">Last Name</label>
						<input name="lname" type="text" placeholder="Last Name" class="m-wrap span12"  required="required"/>
					</div>
				</div>
			</div>
			<h3 class="form-section father"><i class="icon-plus"></i>About Father</h3>
			<div class="father_data">				
				<div class="row-fluid">
					<div class="span12">
						<div class="span3">
							<label class="control-label">Middle Name</label>
							<input name="father_mname" type="text" placeholder="Middle Name" class="m-wrap span12"/>
						</div>
						<div class="span3">
							<label class="control-label">Occupation</label>
							<select name="father_occupation" class="m-wrap span12">
								<option value="Service">Service</option>
								<option value="Business">Business</option>
								<option value="Professional">Professional</option>
								<option value="Other">Other</option>
							</select>
						</div>
						<div class="span3">
							<label class="control-label">Qualification</label>
							<select name="father_qualification" class="m-wrap span12">
								<option value="non-ssc">Non-SSC</option>
								<option value="ssc">SSC</option>
								<option value="graduate">Graduate</option>
								<option value="double_graduate">Double Graduate</option>
								<option value="post_graduate">Post Graduate</option>
								<option value="doctorate">Doctorate</option>
							</select>
						</div>
						<div class="span3">
							<label class="control-label">Professional Qualification</label>
							<input name="father_pq" type="text" placeholder="Professional Qualification" class="m-wrap span12" />
						</div>
	
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<div class="span3">
							<label class="control-label">Mobile</label>
							<input name="father_mobile" type="text" placeholder="Mobile" class="m-wrap span12" />
						</div>
						<div class="span3">
							<label class="control-label">Office No.</label>
							<input name="father_ofc_num" type="text" placeholder="Office No." class="m-wrap span12" />
						</div>
						<div class="span3">
							<label class="control-label">Office Name</label>
							<input name="father_ofc_name" type="text" placeholder="Office Name" class="m-wrap span12" />
						</div>
						<div class="span3">
							<label class="control-label">Office Address</label>
							<textarea name="adrs_father_ofc" class="m-wrap span12" placeholder="Office Address"></textarea>
						</div>
	
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<div class="span3">
							<label class="control-label">Email</label>
							<input name="father_email" type="email" placeholder="Father Email Id" class="m-wrap span12" />
						</div>
						<div class="span3">
							<label class="control-label">Aadhaar No.</label>
							<input name="father_aadhar" type="text" placeholder="Aadhaar No." class="m-wrap span12"/>
						</div>
						<div class="span3">
							<label class="control-label">Annual Income</label>
							<input name="father_ai" type="text" placeholder="Annual Income" class="m-wrap span12"/>
						</div>
						<div class="span3">
							<label class="control-label">PAN</label>
							<input name="father_pan" type="text" placeholder="PAN" class="m-wrap span12"/>
						</div>
	
					</div>
				</div>
			</div>
			<h3 class="form-section mother"><i class="icon-plus"></i>About Mother</h3>
			<div class="mother_data">
				<div class="row-fluid">
					<div class="span12">
						<div class="span3">
							<label class="control-label">First Name</label>
							<input name="mother_fname" type="text" placeholder="First Name" class="m-wrap span12"/>
						</div>
						<div class="span3">
							<label class="control-label">Occupation</label>
							<select name="mother_occupation" class="m-wrap span12">
								<option value="Housewife ">Housewife </option>
								<option value="Service">Service</option>
								<option value="Business">Business</option>
								<option value="Professional">Professional</option>
								<option value="Other">Other</option>
							</select>
						</div>
						<div class="span3">
							<label class="control-label">Qualification</label>
							<select name="mother_qualification" class="m-wrap span12">
								<option value="non-ssc">Non-SSC</option>
								<option value="ssc">SSC</option>
								<option value="graduate">Graduate</option>
								<option value="double_graduate">Double Graduate</option>
								<option value="post_graduate">Post Graduate</option>
								<option value="doctorate">Doctorate</option>
							</select>
						</div>
						<div class="span3">
							<label class="control-label">Professional Qualification</label>
							<input name="mother_pq" type="text" placeholder="Professional Qualification" class="m-wrap span12" />
						</div>
	
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<div class="span3">
							<label class="control-label">Mobile</label>
							<input name="mother_mobile" type="text" placeholder="Mobile" class="m-wrap span12" />
						</div>
						<div class="span3">
							<label class="control-label">Office No.</label>
							<input name="mother_ofc_num" type="text" placeholder="Office No." class="m-wrap span12" />
						</div>
						<div class="span3">
							<label class="control-label">Office Name</label>
							<input name="mother_ofc_name" type="text" placeholder="Office Name" class="m-wrap span12" />
						</div>
						<div class="span3">
							<label class="control-label">Office Address</label>
							<textarea name="adrs_mother_ofc" class="m-wrap span12" placeholder="Office Address"></textarea>
						</div>
	
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<div class="span3">
							<label class="control-label">Email</label>
							<input name="mother_email" type="email" placeholder="Mother Email Id" class="m-wrap span12" />
						</div>
						<div class="span3">
							<label class="control-label">Aadhaar No.</label>
							<input name="mother_aadhar" type="text" placeholder="Aadhaar No." class="m-wrap span12"/>
						</div>
						<div class="span3">
							<label class="control-label">Annual Income</label>
							<input name="mother_ai" type="text" placeholder="Annual Income" class="m-wrap span12"/>
						</div>
						<div class="span3">
							<label class="control-label">PAN</label>
							<input name="mother_pan" type="text" placeholder="PAN" class="m-wrap span12" />
						</div>
	
					</div>
				</div>
			</div>
			<h3 class="form-section"></h3>
			<div class="row-fluid">
				<div class="span12">
					<div class="span3">
						<label class="control-label">Is Divorced?</label>
						<select name="is_divorced" class="m-wrap span12">
							<option value="yes">YES</option>
							<option value="no">NO</option>
						</select>
					</div>
					<div class="span3">
						<label class="control-label">Is Adopted?</label>
						<select name="is_adopted" class="m-wrap span12">
							<option value="yes">YES</option>
							<option value="no">NO</option>
						</select>
					</div>
					<div class="span2">
						<label class="control-label">Sibbling student ID 1</label>
						<textarea name="sibbling1" class="m-wrap span12" placeholder="Sibbling student ID 1"></textarea>
					</div>
					<div class="span2">
						<label class="control-label">Sibbling student ID 2</label>
						<textarea name="sibbling2" class="m-wrap span12" placeholder="Sibbling student ID 2"></textarea>
					</div>
					<div class="span2">
						<label class="control-label">Sibbling student ID 3</label>
						<textarea name="sibbling3" class="m-wrap span12" placeholder="Sibbling student ID 3"></textarea>
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">

					<div class="span3">
						<label class="control-label">Residence</label>
						<textarea name="adrs_residence" class="m-wrap span12" placeholder="Residence"></textarea>
					</div>
					<div class="span3">
						<label class="control-label">Native Place Address</label>
						<textarea name="adrs_native" class="m-wrap span12" placeholder="Native Place Address"></textarea>
					</div>
					<div class="span2">
						<label class="control-label">City</label>
						<select name="city" class="m-wrap span12">
							<option value="dehradun">Dehradun</option>
							<option value="rishikesh">Rishikesh</option>
						</select>
					</div>
					<div class="span2">
						<label class="control-label">Pincode</label>
						<input name="pincode" type="text" placeholder="Pincode" class="m-wrap span12"/>
					</div>
					<div class="span2">
						<label class="control-label">District</label>
						<select name="district" class="m-wrap span12">
							<option value="thane">Thane</option>
							<option value="kalyan">Kalyan</option>
							<option value="mumbai">Mumbai</option>
						</select>
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<div class="span3">
						<label class="control-label">Birth Place</label>
						<input name="birth_place" type="text" placeholder="Birth Place" class="m-wrap span12"/>
					</div>
					<div class="span3">
						<label class="control-label">Tel No.</label>
						<input name="alt_phone" type="text" placeholder="Tel No." class="m-wrap span12" />
					</div>
					<div class="span2">
						<label class="control-label">Gender</label>
						<select name="gender" class="m-wrap span12">
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select>
					</div>
					<div class="span2">
						<label class="control-label">Religion</label>
						<select name="religion" class="m-wrap span12">
							<option value="hindu">Hindu</option>
							<option value="muslim">Muslim</option>
							<option value="isminority">IsMinority</option>
						</select>
					</div>
					<div class="span2">
						<label class="control-label">Caste</label>
						<select name="caste" class="m-wrap span12" onchange="caste_function()">
							<option value="OPEN">OPEN</option>
							<option value="SC">SC</option>
							<option value="ST">ST</option>
							<option value="OBC">OBC</option>
							<option value="SBC">SBC</option>
							<option value="NT">NT</option>
							<option value="VJNT">VJNT</option>
						</select>
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<div class="span2">
						<label class="control-label">S-Caste</label>
						<input name="s_caste" type="text" placeholder="S-Caste" class="m-wrap span12 s_caste" />
					</div>
					<div class="span2">
						<label class="control-label">Birth Date</label>
						<input name="birth_date" type="text" placeholder="Birth Date" class="m-wrap span12 ui_date_picker" required="required" />
					</div>
					<div class="span2">
						<label class="control-label">Admission Date</label>
						<input name="admission_date" type="text" placeholder="Admission Date" class="m-wrap span12 ui_date_picker" required="required" />
						
					</div>
					<div class="span2">
						<label class="control-label">Start std.</label>
						<select name="start_std" class="m-wrap span12">
							<?php 
								foreach($standards as $standard) {
									echo "<option value='". $standard['std_id'] ."'>". $standard['std_name'] ."</option>";
								} 
							?>
						</select>
					</div>
					<div class="span2">
						<label class="control-label">Weight</label>
						<input name="weight" type="text" placeholder="Weight" class="m-wrap span6"/>
					</div>
					<div class="span2">
						<label class="control-label">Height</label>
						<input name="height" type="text" placeholder="Height" class="m-wrap span6"/>
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<div class="span2">
						<label class="control-label">Blood Group</label>
						<select name="blood_grp" class="m-wrap span12">
							<option value="A+">A+</option>
							<option value="A-">A-</option>
							<option value="B+">B+</option>
							<option value="B-">B-</option>
							<option value=" AB+"> AB+</option>
							<option value="AB-">AB-</option>
							<option value=" O+">O+</option>
							<option value="O-">O-</option>
						</select>
					</div>
					<div class="span2">
						<label class="control-label">Mother Tongue</label>
						<select name="mother_tongue" class="m-wrap span12">
							<option value="marathi">Marathi</option>
							<option value="gujrathi">Gujrathi</option>
						</select>
					</div>
					<div class="span3">
						<label class="control-label">Near Railway Station</label>
						<input name="near_rly_stn" type="text" placeholder="Near Railway Station" class="m-wrap span12">
					</div>
					<div class="span2">
						<label class="control-label">Nationality</label>
						<input name="nationality" type="text" placeholder="Nationality" class="m-wrap span12"/>
					</div>
					<div class="span3">
						<label class="control-label">Fee Scheme</label>
						<input name="fee_scheme" type="text" placeholder="Fee Scheme (click here for details)" class="m-wrap span12" />
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<div class="span3">
						<label class="control-label">Status</label>
						<select name="status" class="m-wrap span12">
							<option value="Current">Current</option>
							<option value="Left">Left</option>
							<option value="Finished">Finished</option>
							<option value="Long">Long</option>
							<option value="Absent">Absent</option>
							<option value="on_break">On break</option>
						</select>
					</div>					
					<div class="span3">
						<label class="control-label">Seat No.</label>
						<input name="seat_num" type="text" placeholder="Seat No." class="m-wrap span12"/>
					</div>
					<div class="span2">
						<label class="control-label">Child No.</label>
						<input name="child_num" type="text" placeholder="Child No." class="m-wrap span12"/>
					</div>					
					<div class="span2">
						<label class="control-label">Handicap?</label>
						<select name="passed_out" class="m-wrap span12">
							<option value="yes">YES</option>
							<option value="no">NO</option>
						</select>
					</div>
					<div class="span2">
						<label class="control-label">N.S.S.?</label>
						<select name="nss" class="m-wrap span12">
							<option value="yes">YES</option>
							<option value="no">NO</option>
						</select>
					</div>
					<input name="submit" type="hidden" value="submit"/>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span10">
					<label class="control-label">Passed Out</label>
					<input name="passed_out" type="text" placeholder="Passed Out" class="m-wrap span12 typeahead"/>					
				</div>
				<div class="span2">
					<label class="control-label">Last %</label>
					<input name="last_percentage" type="text" placeholder="Last %" class="m-wrap span12"/>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<div class="span12">
						<label class="control-label">Leaving Date(Leave blank if not passed out)</label>
						<input name="fee_scheme" type="text" placeholder="yyyy-mm-dd" class="m-wrap span12" class="ui_date_picker_change_year_month"/>
					</div>
				</div>
			</div>
			
			<div class="row-fluid">
				<div class="span12">
					<div class="span1"><button type="submit" class="btn blue span12">Save</button></div>
					<div class="span3"><button type="submit" class="btn blue span12">Quick Student Entry</button></div>
					<div class="span2"><button type="submit" class="btn blue span12">Print GR Sheets</button></div>
					<div class="span1 reset"><button type="button" class="btn span12">Clear</button></div>
					<div class="span1"><a href="<?php echo base_url("student/listing.htm");?>" class="btn blue">Exit</a></div>
				</div>
			</div>
		</form>
	</div>
</div>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/bootstrap-fileupload/bootstrap-fileupload.js') ; ?>"></script>
<script>
	$(document).ready(function(){
		$(".father_data").hide();
		$(".mother_data").hide();
		var ftoken = 0;
		var mtoken = 0;
		$(document).on('click','.father',function(){
			if(ftoken == 0){
				$(".father_data").show();
				ftoken = ftoken + 1;	
			}else{
				$(".father_data").hide();
				ftoken = 0;
			}
			
		});
		$(document).on('click','.mother',function(){
			if(mtoken == 0){
				$(".mother_data").show();
				mtoken = mtoken + 1;	
			}else{
				$(".mother_data").hide();
				mtoken = 0;
			}
		});
		
		//Clear all inputs values
		$(document).on('click','.reset',function(){
			$('#add_student_frm').trigger("reset");
		});
		
		var type = $('select[name=caste]').val();	      
	    if(type == "OPEN"){
	    	$(".s_caste").attr('disabled', 'disabled');;
	    }
	    
	    //For pass out school typehead
	    $(".typeahead").typeahead({
					 	
		 	updater: function(item) {		 		
        		return this.$element.val().replace(/[^,]*$/,'')+item+',';
        		//return item;
		    },
		    matcher: function (item) {			    
		      var tquery = extractor(this.query);
		      if(!tquery) return false;
		      return ~item.toLowerCase().indexOf(tquery)
		    },
		    highlighter: function (item){
		      var query = extractor(this.query).replace(/[\-\[\]{}()*+?.,\\\^$|#\s]/g, '\\$&')
		      //var query = item;
		    
		      return item.replace(new RegExp('(' + query + ')', 'ig'), function ($1, match) {
		        return '<strong>' + match + '</strong>'
		      })
		    },
		 			 	
		    ajax: {
		        url: "<?php echo base_url('admin/student/get_schools')?>",
		        timeout: 500,
		        displayField: "name",
		        triggerLength: 1,
		        method: "get",
		        loadingClass: "loading-circle",
		        preDispatch: function (query) {
		        			        	
		            // showLoadingMask(true);
		            return {
		                search: query,
		                otherParam: 123
		            }
		        },
		        preProcess: function (data) {
		        	data = $.parseJSON(data);
		        			        			        	
		            // showLoadingMask(false);
		            if (data.success === false) {
		                // Hide the list, there was some error
		                return false;
		            }
		            // We good!
		            return data;
		        }
		    }
		});
	    
	    
		UIJQueryUI.init();
		
	});
	function caste_function() {   			    
	    var type = $('select[name=caste]').val();	      
	    if(type == "OPEN"){
	    	$(".s_caste").attr('disabled', 'disabled');;
	    }else{
	    	$(".s_caste").removeAttr('disabled');
	    }
	}
</script>
