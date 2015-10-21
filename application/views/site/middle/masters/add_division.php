<?php
	//pre_print($standards);
?>

<div class="portlet box blue ">
	<div class="portlet-title">
		<div class="caption"><i class="icon-reorder"></i>Add Division</div>
		<div class="tools">
			<a href="javascript:;" class="collapse"></a>
			<a href="#portlet-config" data-toggle="modal" class="config"></a>
			<a href="javascript:;" class="reload"></a>
			<a href="javascript:;" class="remove"></a>
		</div>
	</div>
	<div class="portlet-body form">
		<form action="<?php echo base_url('master/add_division');?>" class="form-horizontal form-bordered form-label-stripped" method="POST">
			<div class="control-group">
				<label class="control-label">Standard</label>
					<select name="std_code" class="m-wrap span12" required>
						<option value="">Standard</option>
					<?php
						foreach($standards as $key => $standard):
					?>	
							<option value="<?php echo $standard['std_code'] ; ?>"><?php echo $standard['std'] ; ?></option>
					<?php
						endforeach;
					?>							
					</select>
			</div>
			<div class="control-group">
				<label class="control-label">Division Name</label>
				<div class="controls">
					<div class="select2-wrapper">
						<input name="division_name" type="text" class="span12 select2_sample2" placeholder="Division Name" required>
					</div>
				</div>
			</div>
			<div class="form-actions">
				<input name="submit" type="hidden" value="submit">
				<button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
				<button type="button" class="btn">Cancel</button>
			</div>
		</form> 
	</div> 
	
</div>