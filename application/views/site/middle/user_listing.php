<link href="<?php echo base_url('/assets/css/demo_table_jui.css') ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('/assets/css/jquery.dataTables.css') ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('/assets/css/jquery-ui-1.7.2.custom.css') ?>" rel="stylesheet" type="text/css" />
<!-- END CSS -->
<!--  SCRIPTS -->
<script type="text/javascript" src="<?php echo base_url('/assets/js/jquery.dataTables.min.js')  ?>"></script>
<script>

$(document).ready(function(){
	
	$('#tbl_viewalluser').dataTable({
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
	    "sAjaxSource": "<?php echo base_url('user/ajax_datatable_user_list') ?>",
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
<legend>Admin users	
	<div class="btn-group pull-right">
		<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
			<i class="icon-asterisk"></i> <span class="caret"></span>
		</a>
		<ul class="dropdown-menu">                         
			<li><a onclick="$.ui_redirect('add_new_admin')" href="javascript:void(0)"><span>Create Account</span></a></li>  
  		</ul>
	</div>
</legend>

<?php 
	if($this->session->flashdata('success_msg'))
		ui_message_highlight($this->session->flashdata('success_msg'),'HIGHLIGHT');
?>

<!-- END HEADER  -->
<table class="display table " id="tbl_viewalluser" > 
    <thead> 
        <tr> 
            <th>Full Name</th>   
            <th>Username</th>                      
            <th>Email</th> 
            <th>Gender</th>
            <th>User Type</th>                                            
            <th>Action</th>                                     
        </tr> 
    </thead> 
    <tbody> 
    </tbody> 
</table>