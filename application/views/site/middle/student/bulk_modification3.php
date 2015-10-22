<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/bootstrap-fileupload/bootstrap-fileupload.css') ; ?>" />
<div class="portlet box blue ">
    <div class="portlet-title">
        <div class="caption"><i class="icon-reorder"></i>Bulk Modification</div>
        <div class="tools">
            <a href="javascript:;" class="reload"></a>
        </div>
    </div>
</div>
<div class="clear"></div>
<div class="container-fluid">
    <div class="new-form">
        <form action="<?php echo base_url('student/save_bulk_students');?>" class="form-horizontal form-bordered form-label-stripped" method="POST" enctype="multipart/form-data">
            <?php
            if(!empty($students)) {
                $count = 1;
                foreach ($students as $student) {
                    echo '<h5 class="form-section"><strong>Student ' . $count . '</strong></h5>';
                    if (isset($student['stud_id'])) {
                        echo form_hidden("student[$student[stud_id]][stud_id]", $student['stud_id']);
                    }
                    if (isset($student['image_path'])) {
                        ?>
                        <div class="row-fluid">
                            <div class="span12">
                                <!-- <div class="span3"><input name="idno" type="text" placeholder="ID No." class="m-wrap span12" /></div> -->
                                <div class="span12">
                                    <label class="control-label">Image Upload</label>

                                    <div class="controls">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                <img
                                                    src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image"
                                                    alt=""/>
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail"
                                                 style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                        <span class="btn btn-file"><span class="fileupload-new">Select image</span>
                        <span class="fileupload-exists">Change</span>
                        <input type="file" class="default" name="student[<?php $student['stud_id'] ?>][image_path]"/>
                        <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    if (isset($student['std']) || isset($student['stream']) || isset($student['division'])) {
                        ?>
                        <div class="row-fluid">
                            <div class="span12">
                                <?php
                                if (isset($student['std'])) {
                                    ?>
                                    <div class="span3">
                                        <label class="control-label">Standard</label>
                                        <select name="student[<?php echo $student['stud_id'] ?>][std]"
                                                class="m-wrap span12"
                                                id="student[<?php echo $student['stud_id'] ?>][std]" required>
                                            <option value="">Select Standards</option>
                                            <?php foreach ($standards as $standard) {
                                                echo "<option value='" . $standard['std_id'] . "'>" . $standard['std_name'] . "</option>";
                                            } ?>
                                        </select>
                                    </div>
                                    <?php
                                }
                                if (isset($student['stream'])) {
                                    ?>
                                    <div class="span3">
                                        <label class="control-label">Stream</label>
                                        <select name="student[<?php echo $student['stud_id'] ?>][stream]"
                                                class="m-wrap span12"
                                                id="student[<?php echo $student['stud_id'] ?>][stream]" required
                                            >
                                            <option value="">Select Streams</option>
                                            <?php foreach ($streams as $stream) {
                                                echo "<option value='" . $stream['stream_id'] . "' data-std-code='" . $stream['std_code']
                                                    . "'>" . $stream['stream_name'] . "</option>";
                                            } ?>
                                        </select>
                                    </div>
                                    <?php
                                }
                                if (isset($student['division'])) {
                                    ?>
                                    <div class="span3">
                                        <label class="control-label">Division</label>
                                        <select name="student[<?php echo $student['stud_id'] ?>][division]"
                                                class="m-wrap span12"
                                                id="student[<?php echo $student['stud_id'] ?>][division]" required
                                            >
                                            <option value="">Select Divisions</option>
                                            <?php foreach ($divisions as $division) {
                                                echo "<option value='" . $division['div_id'] . "' data-std-code='" .
                                                    $division['stream_code']
                                                    . "'>" . $division['division_name'] . "</option>";
                                            } ?>
                                        </select>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <?php
                    }
                    if (isset($student['semester']) || isset($student['admit_to']) || isset($student['medium'])) {
                        ?>
                        <div class="row-fluid">
                            <div class="span12">
                                <?php
                                if (isset($student['semester'])) {
                                    ?>
                                    <div class="span3">
                                        <label class="control-label">Semester</label>
                                        <select name="student[<?php echo $student['stud_id'] ?>][semester]"
                                                id="student[<?php echo $student['stud_id'] ?>][semester]"
                                                class="m-wrap span12">
                                            <option value="">Semester</option>
                                            <option value="semester1">Semester 1</option>
                                            <option value="semester2">Semester 2</option>
                                            <option value="semester3">Semester 3</option>
                                            <option value="semester4">Semester 4</option>
                                            <option value="semester5">Semester 5</option>
                                            <option value="semester6">Semester 6</option>
                                        </select>
                                    </div>
                                    <?php
                                }
                                if (isset($student['admit_to'])) {
                                    ?>
                                    <div class="span3">
                                        <label class="control-label">Admit To</label>
                                        <select name="student[<?php echo $student['stud_id']; ?>][admit_to]"
                                                class="m-wrap span12" required>
                                            <option value="">Admit To</option>
                                            <option value="2015-16">2015-16</option>
                                            <option value="2015-16">2016-17</option>
                                        </select>
                                    </div>
                                    <?php
                                }
                                if (isset($student['medium'])) {
                                    ?>
                                    <div class="span3">
                                        <label class="control-label">Medium</label>
                                        <select name="student[<?php echo $student['stud_id']; ?>][medium]"
                                                class="m-wrap span12" required>
                                            <option value="">Medium</option>
                                            <option value="english">English</option>
                                            <option value="hindi">Hindi</option>
                                            <option value="marathi">Marathi</option>
                                            <option value="gujrati">Gujrati</option>
                                        </select>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <?php
                    }
                    if (isset($student['fname']) || isset($student['mname']) || isset($student['lname'])) {
                        ?>
                        <div class="row-fluid">
                            <div class="span12">
                                <?php
                                if (isset($student['fname'])) {
                                    ?>
                                    <div class="span3">
                                        <label class="control-label">First Name</label>
                                        <input name="student[<?php echo $student['stud_id']; ?>][fname]" type="text"
                                               placeholder="First Name" class="m-wrap span12" value="<?php echo $student['fname']; ?>" required="required"/>
                                    </div>
                                    <?php
                                }
                                if (isset($student['mname'])) {
                                    ?>
                                    <div class="span3">
                                        <label class="control-label">Middle Name</label>
                                        <input name="student[<?php echo $student['stud_id']; ?>][mname]" type="text"
                                               placeholder="Middle Name" class="m-wrap span12"/>
                                    </div>
                                    <?php
                                }
                                if (isset($student['lname'])) {
                                    ?>
                                    <div class="span3">
                                        <label class="control-label">Last Name</label>
                                        <input name="student[<?php echo $student['stud_id']; ?>][lname]" type="text"
                                               placeholder="Last Name" class="m-wrap span12" required="required"/>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    <h3 class="form-section">About Father</h3>
                    <?php
                    if (isset($student['father_mname']) || isset($student['father_occupation']) || isset($student['father_qualification']) || isset($student['father_pq'])) {
                        ?>
                        <div class="row-fluid">
                            <div class="span12">
                                <?php
                                if (isset($student['father_mname'])) {
                                    ?>
                                    <div class="span3">
                                        <label class="control-label">Middle Name</label>
                                        <input name="student[<?php echo $student['stud_id']; ?>][father_mname]"
                                               type="text" placeholder="Middle Name" class="m-wrap span12"
                                               required="required"/>
                                    </div>
                                    <?php
                                }
                                if (isset($student['father_occupation'])) {
                                    ?>
                                    <div class="span3">
                                        <label class="control-label">Occupation</label>
                                        <select name="student[<?php echo $student['stud_id']; ?>][father_occupation]"
                                                class="m-wrap span12">
                                            <option value="">Father's Occupation</option>
                                            <option value="Service">Service</option>
                                            <option value="Business">Business</option>
                                            <option value="Professional">Professional</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                    <?php
                                }
                                if (isset($student['father_qualification'])) {
                                    ?>
                                    <div class="span3">
                                        <label class="control-label">Qualification</label>
                                        <select name="student[<?php echo $student['stud_id']; ?>][father_qualification]"
                                                class="m-wrap span12">
                                            <option value="">Father's Qualification</option>
                                            <option value="non-ssc">Non-SSC</option>
                                            <option value="ssc">SSC</option>
                                            <option value="graduate">Graduate</option>
                                            <option value="double_graduate">Double Graduate</option>
                                            <option value="post_graduate">Post Graduate</option>
                                            <option value="doctorate">Doctorate</option>
                                        </select>
                                    </div>
                                    <?php
                                }
                                if (isset($student['father_pq'])) {
                                    ?>
                                    <div class="span3">
                                        <label class="control-label">Professional Qualification</label>
                                        <input name="student[<?php echo $student['stud_id']; ?>][father_pq]" type="text"
                                               placeholder="Professional Qualification" class="m-wrap span12"/>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <?php
                    }
                    if (isset($student['father_mobile']) || isset($student['father_ofc_num']) || isset($student['father_ofc_name']) || isset($student['adrs_father_ofc'])) {
                        ?>
                        <div class="row-fluid">
                            <div class="span12">
                                <?php
                                if (isset($student['father_mobile'])) {
                                    ?>
                                    <div class="span3">
                                        <label class="control-label">Mobile</label>
                                        <input name="student[<?php echo $student['stud_id']; ?>][father_mobile]"
                                               type="text" placeholder="Mobile" class="m-wrap span12"
                                               required="required"/>
                                    </div>
                                    <?php
                                }
                                if (isset($student['father_ofc_num'])) {
                                    ?>
                                    <div class="span3">
                                        <label class="control-label">Office No.</label>
                                        <input name="student[<?php echo $student['stud_id']; ?>][father_ofc_num]"
                                               type="text" placeholder="Office No." class="m-wrap span12"/>
                                    </div>
                                    <?php
                                }
                                if (isset($student['father_ofc_name'])) {
                                    ?>
                                    <div class="span3">
                                        <label class="control-label">Office Name</label>
                                        <input name="student[<?php echo $student['stud_id']; ?>][father_ofc_name]"
                                               type="text" placeholder="Office Name" class="m-wrap span12"/>
                                    </div>
                                    <?php
                                }
                                if (isset($student['adrs_father_ofc'])) {
                                    ?>
                                    <div class="span3">
                                        <label class="control-label">Office Address</label>
                                        <textarea name="student[<?php echo $student['stud_id']; ?>][adrs_father_ofc]"
                                                  class="m-wrap span12" placeholder="Office Address"></textarea>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <?php
                    }
                    if (isset($student['father_email']) || isset($student['father_aadhar']) || isset($student['father_ai']) || isset($student['father_pan'])) {
                        ?>
                        <div class="row-fluid">
                            <div class="span12">
                                <?php
                                if (isset($student['father_email'])) {
                                    ?>
                                    <div class="span3">
                                        <label class="control-label">Email</label>
                                        <input name="student[<?php echo $student['stud_id']; ?>][father_email]"
                                               type="email" placeholder="Father Email Id" class="m-wrap span12"/>
                                    </div>
                                    <?php
                                }
                                if (isset($student['father_aadhar'])) {
                                    ?>
                                    <div class="span3">
                                        <label class="control-label">Aadhaar No.</label>
                                        <input name="student[<?php echo $student['stud_id']; ?>][father_aadhar]"
                                               type="text" placeholder="Aadhaar No." class="m-wrap span12"/>
                                    </div>
                                    <?php
                                }
                                if (isset($student['father_ai'])) {
                                    ?>
                                    <div class="span3">
                                        <label class="control-label">Annual Income</label>
                                        <input name="student[<?php echo $student['stud_id']; ?>][father_ai]" type="text"
                                               placeholder="Annual Income" class="m-wrap span12"/>
                                    </div>
                                    <?php
                                }
                                if (isset($student['father_pan'])) {
                                    ?>
                                    <div class="span3">
                                        <label class="control-label">PAN</label>
                                        <input name="student[<?php echo $student['stud_id']; ?>][father_pan]"
                                               type="text" placeholder="PAN" class="m-wrap span12"/>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    <h3 class="form-section">About Mother</h3>
                    <?php
                    if (isset($student['mother_fname']) || isset($student['mother_occupation']) || isset($student['mother_qualification']) || isset($student['mother_pq'])) {
                        ?>
                        <div class="row-fluid">
                            <div class="span12">
                                <?php
                                if (isset($student['mother_fname'])) {
                                    ?>
                                    <div class="span3">
                                        <label class="control-label">First Name</label>
                                        <input name="student[<?php echo $student['stud_id']; ?>][mother_fname]"
                                               type="text" placeholder="First Name" class="m-wrap span12"/>
                                    </div>
                                    <?php
                                }
                                if (isset($student['mother_occupation'])) {
                                    ?>
                                    <div class="span3">
                                        <label class="control-label">Occupation</label>
                                        <select name="student[<?php echo $student['stud_id']; ?>][mother_occupation]"
                                                class="m-wrap span12">
                                            <option value="">Mother's Occupation</option>
                                            <option value="Housewife ">Housewife</option>
                                            <option value="Service">Service</option>
                                            <option value="Business">Business</option>
                                            <option value="Professional">Professional</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                    <?php
                                }
                                if (isset($student['mother_qualification'])) {
                                    ?>
                                    <div class="span3">
                                        <label class="control-label">Qualification</label>
                                        <select name="student[<?php echo $student['stud_id']; ?>][mother_qualification]"
                                                class="m-wrap span12">
                                            <option value="">Mother's Qualification</option>
                                            <option value="non-ssc">Non-SSC</option>
                                            <option value="ssc">SSC</option>
                                            <option value="graduate">Graduate</option>
                                            <option value="double_graduate">Double Graduate</option>
                                            <option value="post_graduate">Post Graduate</option>
                                            <option value="doctorate">Doctorate</option>
                                        </select>
                                    </div>
                                    <?php
                                }
                                if (isset($student['mother_pq'])) {
                                    ?>
                                    <div class="span3">
                                        <label class="control-label">Professional Qualification</label>
                                        <input name="student[<?php echo $student['stud_id']; ?>][mother_pq]" type="text"
                                               placeholder="Professional Qualification" class="m-wrap span12"/>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <?php
                    }
                    if (isset($student['mother_mobile']) || isset($student['mother_ofc_num']) || isset($student['mother_ofc_name']) || isset($student['adrs_mother_ofc'])) {
                        ?>
                        <div class="row-fluid">
                            <div class="span12">
                                <?php
                                if (isset($student['mother_mobile'])) {
                                    ?>
                                    <div class="span3">
                                        <label class="control-label">Mobile</label>
                                        <input name="student[<?php echo $student['stud_id']; ?>][mother_mobile]"
                                               type="text" placeholder="Mobile" class="m-wrap span12"/>
                                    </div>
                                    <?php
                                }
                                if (isset($student['mother_ofc_num'])) {
                                    ?>
                                    <div class="span3">
                                        <label class="control-label">Office No.</label>
                                        <input name="student[<?php echo $student['stud_id']; ?>][mother_ofc_num]"
                                               type="text" placeholder="Office No." class="m-wrap span12"/>
                                    </div>
                                    <?php
                                }
                                if (isset($student['mother_ofc_name'])) {
                                    ?>
                                    <div class="span3">
                                        <label class="control-label">Office Name</label>
                                        <input name="student[<?php echo $student['stud_id']; ?>][stud_id]" type="text"
                                               placeholder="Office Name" class="m-wrap span12"/>
                                    </div>
                                    <?php
                                }
                                if (isset($student['adrs_mother_ofc'])) {
                                    ?>
                                    <div class="span3">
                                        <label class="control-label">Office Address</label>
                                        <textarea name="student[<?php echo $student['stud_id']; ?>][adrs_mother_ofc]"
                                                  class="m-wrap span12" placeholder="Office Address"></textarea>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <?php
                    }
                    if (isset($student['mother_email']) || isset($student['mother_aadhar']) || isset($student['mother_ai']) || isset($student['mother_pan'])) {
                        ?>
                        <div class="row-fluid">
                            <div class="span12">
                                <?php
                                if (isset($student['mother_email'])) {
                                    ?>
                                    <div class="span3">
                                        <label class="control-label">Email</label>
                                        <input name="student[<?php echo $student['stud_id']; ?>][mother_email]"
                                               type="email" placeholder="Mother Email Id" class="m-wrap span12"/>
                                    </div>
                                    <?php
                                }
                                if (isset($student['mother_aadhar'])) {
                                    ?>
                                    <div class="span3">
                                        <label class="control-label">Aadhaar No.</label>
                                        <input name="student[<?php echo $student['stud_id']; ?>][mother_aadhar]"
                                               type="text" placeholder="Aadhaar No." class="m-wrap span12"/>
                                    </div>
                                    <?php
                                }
                                if (isset($student['mother_ai'])) {
                                    ?>
                                    <div class="span3">
                                        <label class="control-label">Annual Income</label>
                                        <input name="student[<?php echo $student['stud_id']; ?>][mother_ai]" type="text"
                                               placeholder="Annual Income" class="m-wrap span12"/>
                                    </div>
                                    <?php
                                }
                                if (isset($student['mother_pan'])) {
                                    ?>
                                    <div class="span3">
                                        <label class="control-label">PAN</label>
                                        <input name="student[<?php echo $student['stud_id']; ?>][mother_pan]"
                                               type="text" placeholder="PAN" class="m-wrap span12"/>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <?php
                    }
                    if (isset($student['is_divorced']) || isset($student['is_adopted']) || isset($student['sibbling1']) || isset($student['sibbling2']) || isset($student['sibbling3'])) {
                        ?>
                        <div class="row-fluid">
                            <div class="span12">
                                <?php
                                if (isset($student['is_divorced'])) {
                                    ?>
                                    <div class="span3">
                                        <label class="control-label">Is Divorced?</label>
                                        <select name="student[<?php echo $student['stud_id']; ?>][is_divorced]"
                                                class="m-wrap span12">
                                            <option value="">Is Divorced?</option>
                                            <option value="yes">YES</option>
                                            <option value="no">NO</option>
                                        </select>
                                    </div>
                                    <?php
                                }
                                if (isset($student['is_adopted'])) {
                                    ?>
                                    <div class="span3">
                                        <label class="control-label">Is Adopted?</label>
                                        <select name="student[<?php echo $student['stud_id']; ?>][is_adopted]"
                                                class="m-wrap span12">
                                            <option value="">Is Adopted?</option>
                                            <option value="yes">YES</option>
                                            <option value="no">NO</option>
                                        </select>
                                    </div>
                                    <?php
                                }
                                if (isset($student['sibbling1'])) {
                                    ?>
                                    <div class="span2">
                                        <label class="control-label">Sibbling student ID 1</label>
                                        <textarea name="student[<?php echo $student['stud_id']; ?>][sibbling1]"
                                                  class="m-wrap span12" placeholder="Sibbling student ID 1"></textarea>
                                    </div>
                                    <?php
                                }
                                if (isset($student['sibbling2'])) {
                                    ?>
                                    <div class="span2">
                                        <label class="control-label">Sibbling student ID 2</label>
                                        <textarea name="student[<?php echo $student['stud_id']; ?>][sibbling2]"
                                                  class="m-wrap span12" placeholder="Sibbling student ID 2"></textarea>
                                    </div>
                                    <?php
                                }
                                if (isset($student['sibbling3'])) {
                                    ?>
                                    <div class="span2">
                                        <label class="control-label">Sibbling student ID 3</label>
                                        <textarea name="student[<?php echo $student['stud_id']; ?>][sibbling3]"
                                                  class="m-wrap span12" placeholder="Sibbling student ID 3"></textarea>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <?php
                    }
                    if (isset($student['adrs_residence']) || isset($student['adrs_native']) || isset($student['city']) || isset($student['pincode']) || isset($student['district'])) {
                        ?>
                        <div class="row-fluid">
                            <div class="span12">
                                <?php
                                if (isset($student['adrs_residence'])) {
                                    ?>
                                    <div class="span3">
                                        <label class="control-label">Residence</label>
                                        <textarea name="student[<?php echo $student['stud_id']; ?>][adrs_residence]"
                                                  class="m-wrap span12" placeholder="Residence"></textarea>
                                    </div>
                                    <?php
                                }
                                if (isset($student['adrs_native'])) {
                                    ?>
                                    <div class="span3">
                                        <label class="control-label">Native Place Address</label>
                                        <textarea name="student[<?php echo $student['stud_id']; ?>][adrs_native]"
                                                  class="m-wrap span12" placeholder="Native Place Address"></textarea>
                                    </div>
                                    <?php
                                }
                                if (isset($student['city'])) {
                                    ?>
                                    <div class="span2">
                                        <label class="control-label">City</label>
                                        <select name="student[<?php echo $student['stud_id']; ?>][city]"
                                                class="m-wrap span12">
                                            <option value="">City</option>
                                            <option value="dehradun">Dehradun</option>
                                            <option value="rishikesh">Rishikesh</option>
                                        </select>
                                    </div>
                                    <?php
                                }
                                if (isset($student['pincode'])) {
                                    ?>
                                    <div class="span2">
                                        <label class="control-label">Pincode</label>
                                        <input name="student[<?php echo $student['stud_id']; ?>][pincode]" type="text"
                                               placeholder="Pincode" class="m-wrap span12"/>
                                    </div>
                                    <?php
                                }
                                if (isset($student['district'])) {
                                    ?>
                                    <div class="span2">
                                        <label class="control-label">District</label>
                                        <select name="student[<?php echo $student['stud_id']; ?>][district]"
                                                class="m-wrap span12">
                                            <option value="">District</option>
                                            <option value="dehradun">Dehradun</option>
                                            <option value="haridwar">Haridwar</option>
                                        </select>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <?php
                    }
                    if (isset($student['birth_place']) || isset($student['alt_phone']) || isset($student['gender']) || isset($student['religion']) || isset($student['caste'])) {
                        ?>
                        <div class="row-fluid">
                            <div class="span12">
                                <?php
                                if (isset($student['birth_place'])) {
                                    ?>
                                    <div class="span3">
                                        <label class="control-label">Birth Place</label>
                                        <input name="student[<?php echo $student['stud_id']; ?>][birth_place]"
                                               type="text" placeholder="Birth Place" class="m-wrap span12"/>
                                    </div>
                                    <?php
                                }
                                if (isset($student['alt_phone'])) {
                                    ?>
                                    <div class="span3">
                                        <label class="control-label">Tel No.</label>
                                        <input name="student[<?php echo $student['stud_id']; ?>][alt_phone]" type="text"
                                               placeholder="Tel No." class="m-wrap span12"/>
                                    </div>
                                    <?php
                                }
                                if (isset($student['gender'])) {
                                    ?>
                                    <div class="span2">
                                        <label class="control-label">Gender</label>
                                        <select name="student[<?php echo $student['stud_id']; ?>][gender]"
                                                class="m-wrap span12">
                                            <option value="">Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <?php
                                }
                                if (isset($student['religion'])) {
                                    ?>
                                    <div class="span2">
                                        <label class="control-label">Religion</label>
                                        <select name="student[<?php echo $student['stud_id']; ?>][religion]"
                                                class="m-wrap span12">
                                            <option value="">Religion</option>
                                            <option value="hindu">Hindu</option>
                                            <option value="muslim">Muslim</option>
                                            <option value="isminority">IsMinority</option>
                                        </select>
                                    </div>
                                    <?php
                                }
                                if (isset($student['caste'])) {
                                    ?>
                                    <div class="span2">
                                        <label class="control-label">Caste</label>
                                        <select name="student[<?php echo $student['stud_id']; ?>][caste]"
                                                class="m-wrap span12">
                                            <option value="">Caste</option>
                                            <option value="OPEN">OPEN</option>
                                            <option value="SC">SC</option>
                                            <option value="ST">ST</option>
                                            <option value="OBC">OBC</option>
                                            <option value="SBC">SBC</option>
                                            <option value="NT">NT</option>
                                            <option value="VJNT">VJNT</option>
                                        </select>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <?php
                    }
                    if (isset($student['s_caste']) || isset($student['birth_date']) || isset($student['admission_date']) || isset($student['start_std']) || isset($student['weight']) || isset($student['height'])) {
                        ?>
                        <div class="row-fluid">
                            <div class="span12">
                                <?php
                                if (isset($student['s_caste'])) {
                                    ?>
                                    <div class="span2">
                                        <label class="control-label">S-Caste</label>
                                        <input name="student[<?php echo $student['stud_id']; ?>][s_caste]" type="text"
                                               placeholder="S-Caste" class="m-wrap span12"/>
                                    </div>
                                    <?php
                                }
                                if (isset($student['birth_date'])) {
                                    ?>
                                    <div class="span2">
                                        <label class="control-label">Birth Date</label>
                                        <input name="student[<?php echo $student['stud_id']; ?>][birth_date]"
                                               type="text" placeholder="Birth Date" class="m-wrap span12 ui_date_picker"
                                               required="required"/>
                                    </div>
                                    <?php
                                }
                                if (isset($student['admission_date'])) {
                                    ?>
                                    <div class="span2">
                                        <label class="control-label">Admission Date</label>
                                        <select name="student[<?php echo $student['stud_id']; ?>][admission_date]"
                                                class="m-wrap span12">
                                            <option value="">Admission Date</option>
                                            <option value="date1">date1</option>
                                            <option value="date2">date2</option>
                                        </select>
                                    </div>
                                    <?php
                                }
                                if (isset($student['start_std'])) {
                                    ?>
                                    <div class="span2">
                                        <label class="control-label">Start std.</label>
                                        <select name="student[<?php echo $student['stud_id']; ?>][start_std]"
                                                class="m-wrap span12">
                                            <option value="">Start std.</option>
                                            <option value="std1">std1</option>
                                            <option value="std2">std2</option>
                                        </select>
                                    </div>
                                    <?php
                                }
                                if (isset($student['weight'])) {
                                    ?>
                                    <div class="span2">
                                        <label class="control-label">Weight</label>
                                        <input name="student[<?php echo $student['stud_id']; ?>][weight]" type="text"
                                               placeholder="Weight" class="m-wrap span6"/>
                                    </div>
                                    <?php
                                }
                                if (isset($student['height'])) {
                                    ?>
                                    <div class="span2">
                                        <label class="control-label">Height</label>
                                        <input name="student[<?php echo $student['stud_id']; ?>][height]" type="text"
                                               placeholder="Height" class="m-wrap span6"/>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <?php
                    }
                    if (isset($student['blood_grp']) || isset($student['mother_tongue']) || isset($student['near_rly_stn']) || isset($student['nationality']) || isset($student['fee_scheme'])) {
                        ?>
                        <div class="row-fluid">
                            <div class="span12">
                                <?php
                                if (isset($student['blood_grp'])) {
                                    ?>
                                    <div class="span2">
                                        <label class="control-label">Blood Group</label>
                                        <select name="student[<?php echo $student['stud_id']; ?>][blood_grp]"
                                                class="m-wrap span12">
                                            <option value="">Blood Group</option>
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
                                    <?php
                                }
                                if (isset($student['mother_tongue'])) {
                                    ?>
                                    <div class="span2">
                                        <label class="control-label">Mother Tongue</label>
                                        <select name="student[<?php echo $student['stud_id']; ?>][mother_tongue]"
                                                class="m-wrap span12">
                                            <option value="">Mother Tongue</option>
                                            <option value="marathi">Marathi</option>
                                            <option value="gujrathi">Gujrathi</option>
                                        </select>
                                    </div>
                                    <?php
                                }
                                if (isset($student['near_rly_stn'])) {
                                    ?>
                                    <div class="span3">
                                        <label class="control-label">Near Railway Station</label>
                                        <input name="student[<?php echo $student['stud_id']; ?>][near_rly_stn]"
                                               type="text" placeholder="Near Railway Station" class="m-wrap span12">
                                    </div>
                                    <?php
                                }
                                if (isset($student['nationality'])) {
                                    ?>
                                    <div class="span2">
                                        <label class="control-label">Nationality</label>
                                        <input name="student[<?php echo $student['stud_id']; ?>][nationality]"
                                               type="text" placeholder="Nationality" class="m-wrap span12"/>
                                    </div>
                                    <?php
                                }
                                if (isset($student['fee_scheme'])) {
                                    ?>
                                    <div class="span3">
                                        <label class="control-label">Fee Scheme</label>
                                        <input name="student[<?php echo $student['stud_id']; ?>][fee_scheme]"
                                               type="text" placeholder="Fee Scheme (click here for details)"
                                               class="m-wrap span12"/>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <?php
                    }
                    if (isset($student['status']) || isset($student['passed_out']) || isset($student['seat_num']) || isset($student['child_num']) || isset($student['last_percentage']) || isset($student['passed_out']) || isset($student['nss'])) {
                        ?>
                        <div class="row-fluid">
                            <div class="span12">
                                <?php
                                if (isset($student['status'])) {
                                    ?>
                                    <div class="span2">
                                        <label class="control-label">Status</label>
                                        <select name="student[<?php echo $student['stud_id']; ?>][status]"
                                                class="m-wrap span12">
                                            <option value="">Status</option>
                                            <option value="Current">Current</option>
                                            <option value="Left">Left</option>
                                            <option value="Finished">Finished</option>
                                            <option value="Long">Long</option>
                                            <option value="Absent">Absent</option>
                                            <option value="on_break">On break</option>
                                        </select>
                                    </div>
                                    <?php
                                }
                                if (isset($student['passed_out'])) {
                                    ?>
                                    <div class="span2">
                                        <label class="control-label">Passed Out</label>
                                        <select name="student[<?php echo $student['stud_id']; ?>][passed_out]"
                                                class="m-wrap span12">
                                            <option value="">Passed Out</option>
                                            <option value="yes">YES</option>
                                            <option value="no">NO</option>
                                        </select>
                                    </div>
                                    <?php
                                }
                                if (isset($student['seat_num'])) {
                                    ?>
                                    <div class="span1">
                                        <label class="control-label">Seat No.</label>
                                        <input name="student[<?php echo $student['stud_id']; ?>][seat_num]" type="text"
                                               placeholder="Seat No." class="m-wrap span12"/>
                                    </div>
                                    <?php
                                }
                                if (isset($student['child_num'])) {
                                    ?>
                                    <div class="span2">
                                        <label class="control-label">Child No.</label>
                                        <input name="student[<?php echo $student['stud_id']; ?>][child_num]" type="text"
                                               placeholder="Child No." class="m-wrap span12"/>
                                    </div>
                                    <?php
                                }
                                if (isset($student['last_percentage'])) {
                                    ?>
                                    <div class="span1">
                                        <label class="control-label">Last %</label>
                                        <input name="student[<?php echo $student['stud_id']; ?>][last_percentage]"
                                               type="text" placeholder="Last %" class="m-wrap span12"/>
                                    </div>
                                    <?php
                                }
                                if (isset($student['passed_out'])) {
                                    ?>
                                    <div class="span2">
                                        <label class="control-label">Handicap?</label>
                                        <select name="student[<?php echo $student['stud_id']; ?>][passed_out]"
                                                class="m-wrap span12">
                                            <option value="">Handicap?</option>
                                            <option value="yes">YES</option>
                                            <option value="no">NO</option>
                                        </select>
                                    </div>
                                    <?php
                                }
                                if (isset($student['nss'])) {
                                    ?>
                                    <div class="span2">
                                        <label class="control-label">N.S.S.?</label>
                                        <select name="student[<?php echo $student['stud_id']; ?>][nss]"
                                                class="m-wrap span12">
                                            <option value="">N.S.S.?</option>
                                            <option value="yes">YES</option>
                                            <option value="no">NO</option>
                                        </select>
                                    </div>
                                    <?php
                                }
                                ?>
                                <input name="submit" type="hidden" value="submit"/>
                            </div>
                        </div>
                        <?php
                    }
                    if (isset($student['image_path'])) {
                        ?>
                        <div class="row-fluid">
                            <?php
                            if (isset($student['image_path'])) {
                                ?>
                                <div class="span12">
                                    <div class="span12">
                                        <label class="control-label">Leaving Date(Leave blank if not passed out)</label>
                                        <input name="student[<?php echo $student['stud_id']; ?>][fee_scheme]"
                                               type="text"
                                               placeholder="yyyy-mm-dd" class="m-wrap span12"
                                               class="ui_date_picker_change_year_month"/>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    $count++;
                }
            }
            else{ ?>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="span3">
                            No Students available in record.
                        </div>
                    </div>
                </div>
            <?php } ?>

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
