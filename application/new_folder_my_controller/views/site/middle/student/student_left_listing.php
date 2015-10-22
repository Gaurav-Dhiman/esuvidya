<?php
	if($date == true):
?>
	<link href="<?php echo base_url('/assets/css/demo_table_jui.css') ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('/assets/css/jquery.dataTables.css') ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('/assets/css/jquery-ui-1.7.2.custom.css') ?>" rel="stylesheet" type="text/css" />
	<!-- END CSS -->
	<!--  SCRIPTS -->
	<script type="text/javascript" src="<?php echo base_url('/assets/js/jquery.dataTables.min.js')  ?>"></script>
	<script>

	$(document).ready(function(){
		
		$('#tbl_viewallstudent').dataTable({
		    "bJQueryUI": true,
		    "bSortClasses": false,
		    "bAutoWidth": true,
		    "bInfo": true,
		    "sScrollY": "100%",
		    "sScrollX": "100%",
		    "bScrollCollapse": true,
		    "sPaginationType": "full_numbers",
		    "bRetrieve": true,
		    "oLanguage": {
		        "sSearch": "Search Anything:"
		    },
		    "bProcessing": true,
		    "bServerSide": true,
		    "sAjaxSource": "<?php echo base_url('student/ajax_datatable_student_left_list') ?>",
		    "fnServerData": function(sSource, aoData, fnCallback) {
		        $.ajax({
		            "dataType": 'json',
		            "type": "POST",
		            "url": sSource,
		            "data": aoData,
		            "success": fnCallback
		        });
		    }
		});

	});
	</script>

	<!-- END SCRIPTS -->

	<!-- HEADER  -->
	<legend>Student Left Listing	
		<div class="btn-group pull-right">
			<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
				<i class="icon-asterisk"></i> <span class="caret"></span>
			</a>
			<ul class="dropdown-menu">                         
				<li><a onclick="$.ui_redirect('student/add')" href="javascript:void(0)"><span>Add Student</span></a></li>  
	  		</ul>
		</div>
	</legend>

	<?php 
		if($this->session->flashdata('success_msg'))
			ui_message_highlight($this->session->flashdata('success_msg'),'HIGHLIGHT');
	?>

	<!-- END HEADER  -->
	<table class="display table " id="tbl_viewallstudent" > 
	    <thead> 
	        <tr> 
	        	
	            <th>GR No.</th>   
	            <th>Std</th>
	            <th>Division</th>
	            <th>Roll No.</th>                      
	            <th>First Name</th> 
	            <th>Last Name</th>
	            <th>Gender</th>
	            <th>Status</th>                                                                   
	            <th>Action</th>                                     
	        </tr> 
	    </thead> 
	    <tbody> 
	    </tbody> 
	</table>

<?php 
	else:
?>	
	<div class="portlet box blue ">
		<div class="portlet-title">
			<div class="caption"><i class="icon-reorder"></i>Select Date</div>
			<div class="tools">
				<a href="javascript:;" class="collapse"></a>
				<a href="#portlet-config" data-toggle="modal" class="config"></a>
				<a href="javascript:;" class="reload"></a>
				<a href="javascript:;" class="remove"></a>
			</div>
		</div>
		<div class="portlet-body form">
			<form action="<?php echo base_url('student/left_student_listing');?>" class="form-horizontal form-bordered form-label-stripped" method="POST">
				<div class="control-group">
					<label class="control-label">Start Date</label>
					<div class="controls">
						<input name="start_date" type="text" placeholder="Birth Date" class="m-wrap span12 ui_date_picker" required="required" />
						<span class="help-inline"></span>
					</div>					
				</div>
				<div class="control-group">
					<label class="control-label">End Date</label>
					<div class="controls">
						<input name="end_date" type="text" placeholder="Birth Date" class="m-wrap span12 ui_date_picker" required="required" />
						<span class="help-inline"></span>
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
<?php
	endif;
?>	