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
                        <?php
                        $data = array(
                            'name'  => 'selectby',
                            'id'    => 'rdsection',
                            'value' => 'sections',
                            'checked' => 'true',
                            'style' => 'margin:10px',
                        );
                        echo form_radio($data);
                        ?>
                        <label class="control-label">Sections</label>
                        <select name="sections" class="m-wrap span12" id="sections" required>
                            <option value="">Select Sections</option>
                            <?php foreach($sections as $section) {
                                echo "<option value='". $section['code'] ."'>". $section['name'] ."</option>";
                            } ?>
                        </select>
                    </div>
                    <div class="span3">
                        <?php
                        $data = array(
                            'name'  => 'selectby',
                            'id'    => 'rdstandard',
                            'value' => 'standard',
                            'style' => 'margin:10px',
                        );
                        echo form_radio($data);
                        ?>
                        <label class="control-label">Standard</label>
                        <select name="standard" class="m-wrap span12" id="standard" required>
                            <option value="">Select Standard</option>
                            <?php foreach($standards as $standard) {
                                echo "<option value='". $standard['std_id'] ."'>". $standard['std_name'] ."</option>";
                            } ?>
                        </select>
                    </div>
                    <!--<div class="span3">
                        <?php
/*                        $data = array(
                            'name'  => 'selectby',
                            'id'    => 'rdstream',
                            'value' => 'streams',
                            'style' => 'margin:10px',
                        );
                        echo form_radio($data);
                        */?>
                        <label class="control-label">Stream</label>
                        <select name="streams" class="m-wrap span12" id="streams" required>
                            <option value="">Select Stream</option>
                            <?php /*foreach($streams as $streams) {
                                echo "<option value='". $streams['stream_id'] ."'>". $streams['stream_name'] ."</option>";
                            } */?>
                        </select>
                    </div>-->
                    <!--<div class="span3">
                        <?php
/*                        $data = array(
                            'name'  => 'selectby',
                            'id'    => 'rddivision',
                            'value' => 'division',
                            'style' => 'margin:10px',
                        );
                        echo form_radio($data);
                        */?>
                        <label class="control-label">Division</label>
                        <select name="division" class="m-wrap span12" id="division" required>
                            <option value="">Select Division</option>
                            <?php /*foreach($divisions as $division) {
                                echo "<option value='". $division['div_id'] ."'>". $division['division_name'] ."</option>";
                            } */?>
                        </select>
                    </div>-->
                    <div class="span3">
                        <label class="control-label">Standard</label>
                        <select name="orderby" class="m-wrap span12" id="orderby" required>
                            <option value="">Order By</option>
                            <option value='ASC'>ASC</option>";
                            <option value='DESC'>Desc</option>";
                        </select>
                    </div>
                </div>
            </div>

            <div class="clear"></div>
            <h3 class="form-section">Select Fields</h3>
            <!-- <div class="row-fluid">
              <div class="span12"> -->
            <?php
            $count=0;
            foreach($columns as $column) {
                if($count % 4 == 0){
                    echo '<div class="row-fluid">
                        <div class="span12">';
                }
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
                                'name'  => "field[".$column['col_name']."]",
                                'id'    => $column['col_name'],
                                'value' => 'yes',
                                'style' => 'margin:10px',
                            );
                            echo form_checkbox($data);
                            ?>
                        </div>
                    <?php  }
                    if($count % 4 == 3 && $count > 0){
                        echo "</div>
                  </div>";
                    }
                    $count++;
                }
            }
            ?>
            <!-- </div>
          </div> -->
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
        $("#standard").prop("disabled", true);
        /*$("#streams").prop("disabled", true);
        $("#division").prop("disabled", true);
        $('input:radio[name=selectby]').on('change',function(){
            switch($(this).val()) {
                case 'standard':
                    $("#standard").prop("disabled", false);
                    $("#streams").prop("disabled", true);
                    $("#division").prop("disabled", true);
                    break;
                case 'streams':
                    $("#standard").prop("disabled", true);
                    $("#streams").prop("disabled", false);
                    $("#division").prop("disabled", true);
                    break;
                case 'division':
                    $("#standard").prop("disabled", true);
                    $("#streams").prop("disabled", true);
                    $("#division").prop("disabled", false);
                    break;
            }
        });*/

        $('#sections').on('change',function(){
            var col = 'std';
            $("#standard").prop("disabled", false);
            var index = $('#sections').find('option:selected').val();
            var std = $('#standard option:selected').val();
            getStdsFrmSect(index,std);
        });
        $('#standard').on('change',function(){
            var col = 'std';
            var index = $('#standard option:selected').val();
            getStudents(col,index);
        });
        $('#streams').on('change',function(){
            var col = 'stream';
            var index = $('#streams option:selected').val();
            getStudents(col,index);
        });

        function getStdsFrmSect(sec, std){
            $.post("<?php echo base_url('student/get_standards_by_section')?>", {section: sec, std: std}, function(data, status){
                if(status == 'success'){
                    $("select[id='standard']").find('option').remove().end().append($(data));
                }
            });
        }
        $('#division').on('change',function(){
            var col = 'division';
            var index = $('#division option:selected').val();
            getStudents(col,index);
        });
        function getStudents(col,value){
            /*$.post("<?php echo base_url('student/get_students_by_field')?>", {col: col, value: value}, function(data, status){
                if(status == 'success'){
                    $("#students").html(data);
                }
            });*/
        }

        $( document ).on( 'click', '#download', function () {
            var ids = [];
            $('#students input:checked').each(function() {
                ids.push($(this).attr('id'));
            });
            var id = ids.join(', ');
            if(id.length >0)
                getStudentsExcel(id);
            else
                alert('Please select at least one student');
        });
    });
</script>