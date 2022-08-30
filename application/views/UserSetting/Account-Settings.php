 <!-- PAGE-HEADER -->
 <div class="page-header">
	<div>
		<h1 class="page-title">User Settings</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="javascript:void(0);">User Settings</a></li>
			<li class="breadcrumb-item active" aria-current="page">Account Settings</li>
		</ol>
	</div>
</div>
<!-- PAGE-HEADER END -->

<div class="row row-sm">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Account Settings</h3>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered text-nowrap border-bottom w-100" id="responsive-datatable">
						<thead>
							<tr>
								<th class="wd-15p border-bottom-0">AID</th>
								<th class="wd-15p border-bottom-0">Fullname</th>
								<th class="wd-10p border-bottom-0">Email</th>
								<th class="wd-25p border-bottom-0"></th>
							</tr>
						</thead>
						<tbody>
							<?php  
							if($fetch_data->num_rows() > 0)  
							{  
									foreach($fetch_data->result() as $user)  
									{  
							?>  
							<tr>
								<td><?php echo $user->AID; ?></td>
								<td><?php echo $user->Full_Name; ?></td>
								<td><?php echo $user->Email; ?></td>
								<td>
								<td><a href="<?php echo site_url('AccountSettingController/Edit/'); ?><?php echo $user->AID; ?>">Edit</a></td>  
								</td>
							</tr>
							<?php       
									}  
							}  
							else  
							{  
							?>  
							<tr>  
									<td colspan="5">No Data Found</td>  
							</tr>  
							<?php  
							}  
							?> 
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
							<!-- End Row -->