<div class="portlet box blue ">
  <div class="portlet-title">
    <div class="caption"><i class="icon-reorder"></i>Bulk Modification- Step 2</div>
    <div class="tools">
      <a href="javascript:;" class="reload"></a>
    </div>
  </div>
</div>
<div class="clear"></div>
<div class="container-fluid">
  <div class="new-form">
    <form action="<?php echo base_url('student/save_bulk_students');?>" class="form-horizontal form-bordered form-label-stripped" method="POST">
      <!-- <h3 class="form-section">Select Standard</h3>
      <div class="row-fluid">
        <div class="span12">
          <div class="span3">
            <label class="control-label">Standard</label>
            <select name="standard" class="m-wrap span12" id="standard" required>
              <option value="">Select Standards</option>
              <?php foreach($standards as $standard) {
                echo "<option value='". $standard['std_id'] ."'>". $standard['std_name'] ."</option>";
              } ?>
            </select>
          </div>
        </div>
      </div>
      <div class="clear"></div> -->
      <h3 class="form-section">Update Students Information</h3>
        <?php
        $count = 1;
        foreach($students as $student) {
        ?>
          <div class="row-fluid">
            <div class="span12">
              <h5 class="form-section"><strong>Student <?php echo $count;?></strong></h5>
          <?php
            foreach($student as $field_name => $value) {
              if($field_name == 'stud_id'){
                  echo form_hidden("student[$student[stud_id]][".$field_name."]",$value);
              }
              else{
          ?>
                <div class='span3'>
                  <label class='control-label'> <?php echo $field_name; ?> </label>
                  <?php
                    $data = array(
                      'name'  => "student[$student[stud_id]][".$field_name."]",
                      'id'    => "student[$student[stud_id]][".$field_name."]",
                      'value' => $value,
                      'class' => 'm-wrap span12'
                      );
                    echo form_input($data);
                  ?>
                </div>
              <?php
              }
            }
            ?>
            </div>
          </div>
        <?php
          $count++;
        }
        ?>
          <div class="row-fluid">
            <div class="span12">
              <div class="span2"><button type="submit" id="bulkModification2" class="btn blue span12">Save</button></div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <script>
      $(document).ready(function(){

      });
    </script>