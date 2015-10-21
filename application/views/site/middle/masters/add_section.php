<div class="portlet box blue ">
	<div class="portlet-title">
		<div class="caption"><i class="icon-reorder"></i>Add Section</div>
		<div class="tools">
			<a href="javascript:;" class="collapse"></a>
			<a href="#portlet-config" data-toggle="modal" class="config"></a>
			<a href="javascript:;" class="reload"></a>
			<a href="javascript:;" class="remove"></a>
		</div>
	</div>
	<div class="portlet-body form">
		<form action="<?php echo base_url('master/add_section');?>" class="form-horizontal form-bordered form-label-stripped" method="POST">
			<div class="control-group">
				<label class="control-label">Code</label>
				<div class="controls">
					<input name="code" type="text" placeholder="Code" class="m-wrap span12" required/>
					<span class="help-inline"></span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Name</label>
				<div class="controls">
					<div class="select2-wrapper">
						<input name="name" type="text" class="span12 select2_sample2" placeholder="Section Name" required>
					</div>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Start Std</label>
				<div class="controls">
					<input name="start_std" type="text" placeholder="Start Std" class="m-wrap span12" required/>					
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">End Std</label>
				<div class="controls">
					<input name="end_std" type="text" placeholder="End Std" class="m-wrap span12" required/>					
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Header Name</label>
				<div class="controls">
					<input name="header_name" type="text" placeholder="Header Name" class="m-wrap span12" required/>					
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Only For Accounts</label>
				<div class="controls">
					<input name="only_fr_acc" type="text" placeholder="Only For Accounts" class="m-wrap span12" />					
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