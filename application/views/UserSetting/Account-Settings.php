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
				<div class="table-responsive table-lg deleted-table">
					<table class="table table-bordered text-nowrap border-bottom w-100" id="delete-datatable">
						<thead>
							<tr>
								<th class="wd-15p border-bottom-0">AID</th>
								<th class="wd-15p border-bottom-0">Select</th>
								<th class="wd-15p border-bottom-0">Photo</th>
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
								<td class="align-middle text-center">
									<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
										<input class="custom-control-input" id="item-1" type="checkbox"> <label class="custom-control-label" for="item-1"></label>
									</div>
								</td>
								<td class="align-middle text-center"><img alt="image" class="avatar avatar-md br-7" src="../assets/images/users/16.jpg"></td>
								<td><?php echo $user->Full_Name; ?></td>
								<td><?php echo $user->Email; ?></td>
								<td class="text-center align-middle">
									<div class="btn-group align-top">
										<button class="btn btn-sm btn-primary badge" data-bs-effect="effect-fall" data-bs-toggle="modal" href="#modaldemo8" type="button">Edit</button> 
										<a class="btn btn-sm btn-primary badge"  type="button" href="#" class="delete_data" id="<?php echo $user->AID; ?>">Delete</a>
									</div>
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
			<!-- MODAL EFFECTS -->
		<div class="modal fade"  id="modaldemo8">
			<div class="modal-dialog modal-dialog-centered text-center" role="document">
				<div class="modal-content modal-content-demo">
					<div class="modal-header">
						<h6 class="modal-title">Message Preview</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<h6>Why We Use Electoral College, Not Popular Vote</h6>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
					</div>
					<div class="modal-footer">
						<button class="btn btn-primary" >Save changes</button> <button class="btn btn-light" data-bs-dismiss="modal" >Close</button>
					</div>
				</div>
			</div>
		</div>

		<div class="modal  fade" id="smallmodal" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-sm" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Modal title</h5>
						<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">
						<p>Modal body text goes here.</p>
					</div>
					<div class="modal-footer">
						<button  class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<button  class="btn btn-primary">Save changes</button>
					</div>
				</div>
			</div>
		</div>			


		<script>  
      $(document).ready(function(){  
           $('.delete_data').click(function(){  
                var id = $(this).attr("id");  
                if(confirm("Are you sure you want to delete this?"))  
                {  
                     window.location="<?php echo base_url(); ?>main/delete_data/"+id;  
                }  
                else  
                {  
                     return false;  
                }  
           });  
      });  
      </script>  
