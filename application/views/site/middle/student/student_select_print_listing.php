<?php
    $count=0;
    foreach($students as $student) {
        if($count % 4 == 0){
            echo '<div class="row-fluid">
                <div class="span12">';
        }
?>
        <div class='span3'>
            <label class='control-label'> <?php $name =$student['fname'] .' ' .$student['mname'] .' ' .$student['lname'];
                $name =  (trim($name) != '')?$name:$student['gr_num'];
                echo $name;
                ?> </label>
            <?php
            $data = array(
                'name'  => "field[".$student['stud_id']."]",
                'id'    => $student['stud_id'],
                'value' => '',
                'style' => 'margin:10px',
            );
            echo form_checkbox($data);
            ?>
        </div>
        <?php
        if($count % 4 == 3 && $count > 0){
            echo "</div>";
        }
        $count++;
    }
        ?>
<div class="row-fluid">
    <div class="span12">
        <div class="span2"><button type="button" id="download" class="btn blue span12">Save</button></div>
    </div>
</div>
