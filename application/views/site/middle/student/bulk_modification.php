<div class="portlet box blue ">
  <div class="portlet-title">
    <div class="caption"><i class="icon-reorder"></i>Bulk Modification- Step 1</div>
    <div class="tools">
      <a href="javascript:;" class="reload"></a>
    </div>
  </div>
</div>
<?php if ($this->session->flashdata('success')) { ?>
  <div class="alert alert-success"> <?= $this->session->flashdata('success') ?> </div>
<?php } ?>
<?php if ($this->session->flashdata('error')) { ?>
    <div class="alert alert-danger"> <?= $this->session->flashdata('error') ?> </div>
<?php } ?>
<div class="clear"></div>
<div class="container-fluid">
  <div class="new-form">
    <form action="<?php echo base_url('student/bulk_modification_step2');?>" class="form-horizontal form-bordered form-label-stripped" method="POST">
      <h3 class="form-section">Select Standard</h3>
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
      <div class="clear"></div>
      <h3 class="form-section">Select Fields</h3>
      <div class="row-fluid">
        <div class="span12">
          <?php
            $count=1;
           foreach($columns as $column) {
            if(!in_array($column['col_name'], $not_show_field)){
              if($column['col_null'] == 'NO'){
          ?>
              <div class='span3'>
                <label class='control-label'> <?php echo $column['col_name']; ?> </label>
                <?php  $data = array(
                              'name'  => "field[".$column['col_name']."]",
                              'id'    => $column['col_name'],
                              'value' => 'yes',
                              'style' => 'margin:10px',
                              'checked' => true,
                              'required' => 'required'
                              );
                    echo form_checkbox($data);
                ?>
              </div>
          <?php
              }
              else{ ?>
                <div class='span3'>
                  <label class='control-label'> <?php echo $column['col_name']; ?> </label>
                  <?php  $data = array(
                                'name'  => "field['".$column['col_name']."']",
                                'id'    => $column['col_name'],
                                'value' => 'yes',
                                'style' => 'margin:10px',
                                );
                      echo form_checkbox($data);
                  ?>
                </div>
            <?php  }
            }
          }
          ?>
        </div>
      </div>
      <div class="row-fluid">
        <div class="span12">
          <div class="span2"><button type="submit" id="bulkModification" class="btn blue span12">Save</button></div>
        </div>
      </div>
    </form>
  </div>
</div>
<script>
  $(document).ready(function(){
    $('#bulkModification').on('click',function(){

    });
  });
</script>