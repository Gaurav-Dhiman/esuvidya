<?php //pre_print($user_details); ?>
<div class="portlet box blue ">
	<div class="portlet-title">
		<div class="caption"><i class="icon-reorder"></i>Edit User</div>
		<div class="tools">
			<a href="javascript:;" class="collapse"></a>
			<a href="#portlet-config" data-toggle="modal" class="config"></a>
			<a href="javascript:;" class="reload"></a>
			<a href="javascript:;" class="remove"></a>
		</div>
	</div>
	<div class="portlet-body form">
		<!-- BEGIN FORM-->
		<form action="<?php echo base_url('user/edit_user/'.$user_details['user_id']);?>" class="form-horizontal form-bordered form-label-stripped" method="POST">
			<div class="control-group">
				<label class="control-label">Full Name</label>
				<div class="controls">
					<input name="fullname" type="text" placeholder="Full Name" class="m-wrap span12" value="<?php echo $user_details['fullname']; ?>"/>
					<span class="help-inline"></span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Username</label>
				<div class="controls">
					<div class="select2-wrapper">
						<input name="username" type="text" class="span12 select2_sample2" placeholder="Username" value="<?php echo $user_details['username']; ?>"/>
					</div>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Password</label>
				<div class="controls">
					<input name="password" type="password" placeholder="Password" class="m-wrap span12" value="<?php echo $user_details['password']; ?>"/>				
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Gender</label>
				<div class="controls">
					<select  name="gender" class="m-wrap span12">
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
					<span class="help-block">Select your gender.</span>
				</div>
			</div>			
			<div class="control-group">
				<label class="control-label" >Email</label>
				<div class="controls">
					<div class="select2-wrapper">
						<input name="email" type="email" class="m-wrap span12"  placeholder="Mail Id" value="<?php echo $user_details['email']; ?>"/>
					</div>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">User Type</label>
				<div class="controls">
					<div class="select2-wrapper">
						<select  name="user_type" class="m-wrap span12">
							<option value="superadmin">Superadmin</option>
							<option value="teacher">Teachers</option>
							<option value="student">Students</option>
							<option value="account">Accounts</option>
							<option value="parent">Parents</option>
							<option value="admin">Admins</option>
						</select>
					</div>
				</div>
			</div>			
			<div class="form-actions">
				<input name="submit" type="hidden" value="submit">
				<button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
				<button type="button" class="btn">Cancel</button>
			</div>
		</form>
		<!-- END FORM-->  
	</div>
</div>