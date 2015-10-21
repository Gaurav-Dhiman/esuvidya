<div class="portlet box blue ">
	<div class="portlet-title">
		<div class="caption"><i class="icon-reorder"></i>Add Standard</div>
		<div class="tools">
			<a href="javascript:;" class="collapse"></a>
			<a href="#portlet-config" data-toggle="modal" class="config"></a>
			<a href="javascript:;" class="reload"></a>
			<a href="javascript:;" class="remove"></a>
		</div>
	</div>
	<div class="portlet-body form">
		<form action="<?php echo base_url('master/edit_standard/'.$standard['std_id']);?>" class="form-horizontal form-bordered form-label-stripped" method="POST">
			<div class="control-group">
				<label class="control-label">Std Code</label>
				<div class="controls">
					<input name="std_code" type="text" value="<?php echo $standard['std_code'] ; ?>" placeholder="Std. Code" class="m-wrap span12" required/>
					<span class="help-inline"></span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Std</label>
				<div class="controls">
					<div class="select2-wrapper">
						<input name="std" type="text" value="<?php echo $standard['std'] ; ?>" class="span12 select2_sample2" placeholder="Standard" required>
					</div>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Section</label>
				<div class="controls">
					<input name="section" type="text" value="<?php echo $standard['section'] ; ?>" placeholder="Section" class="m-wrap span12" required/>					
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Medium</label>
				<div class="controls">
					<input name="medium" type="text" value="<?php echo $standard['medium'] ; ?>" placeholder="Medium" class="m-wrap span12" required/>					
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Best Age</label>
				<div class="controls">
					<input name="best_age" type="text" value="<?php echo $standard['best_age'] ; ?>" placeholder="Best Age" class="m-wrap span12" required/>					
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Next Std</label>
				<div class="controls">
					<input name="next_std" type="text" value="<?php echo $standard['next_std'] ; ?>" placeholder="Next Std." class="m-wrap span12" />					
				</div>
			</div>	
			<div class="control-group">
				<label class="control-label">Default Fee Schemes</label>
				<div class="controls">
					<input name="default_fee_schemes" type="text" value="<?php echo $standard['default_fee_schemes'] ; ?>" placeholder="Default Fee Schemes" class="m-wrap span12" />					
				</div>
			</div>			
			<div class="control-group">
				<label class="control-label">Std. Name</label>
				<div class="controls">
					<input name="std_name" type="text" value="<?php echo $standard['std_name'] ; ?>" placeholder="Std. Name" class="m-wrap span12" />					
				</div>
			</div>			
			<div class="control-group">
				<label class="control-label">Fractional Marks</label>
				<div class="controls">
					<input name="fractional_marks" type="text" value="<?php echo $standard['fractional_marks'] ; ?>" placeholder="Fractional Marks" class="m-wrap span12" />					
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