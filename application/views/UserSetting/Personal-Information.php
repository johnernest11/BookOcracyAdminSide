
<style>
/* IMAGE CENTER */
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 100%;
}
	</style>
							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">User Setting</h1>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">User Setting</a></li>
										<li class="breadcrumb-item active" aria-current="page">Account Setting</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- ROW-1 OPEN -->
							<div class="row">
								<div class="col-xl-4 col-md-12 col-sm-12">
									<div class="card panel-theme">
										<div class="card-header">
											<div class="float-start">
												<h3 class="card-title">Title:</h3>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="card-body no-padding">
                                             <img src="<?php echo  base_url();?>/assets/images/users/21.jpg" alt="profile-user" class="avatar  profile-user brround cover-image">
										</div>
									</div>
								</div>
								<div class="col-xl-8 col-md-12 col-sm-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Edit Details</h3>
										</div>
										
										<form action="" method="POST">
                                        <input type="hidden" name="_method" value="PUT">
										<div class="card-body">
											<div class="row">
												<div class="col-lg-6 col-md-12">
													<div class="form-group">
														<label for="exampleInputname">Book Title</label>
														<input type="text" class="form-control" id="exampleInputname" name="Book_Title" value="" >
													</div>
												</div>
												<div class="col-lg-6 col-md-12">
													<div class="form-group">
														<label for="exampleInputEmail1">Book Category</label>
														<input type="text" class="form-control" id="exampleInputEmail1" name="Book_Category" value="" placeholder="email address">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-6 col-md-12">
													<div class="form-group">
														<label for="exampleInputnumber">Tag</label>
														<input type="text" class="form-control" id="exampleInputnumber" name="Book_Tag" value="" placeholder="ph number">
													</div>
												</div>
												<div class="col-lg-6 col-md-12">
													<div class="form-group">
															<label class="form-label">Status</label>
															<input class="form-control" placeholder="">
													</div>
												</div>
											</div>
											<div class="form-group">
												<label class="form-label">Description</label>
												<textarea type="message"  class="form-control" name="Book_Description"></textarea>
											</div>
										</div>
										<div class="card-footer text-end">
										<button type="submit" class="btn btn-outline-primary">Update Project</button>
											<a href="javascript:void(0);" class="btn btn-danger mt-1">Cancel</a>
										</div>
										</form>
									</div>
								</div>
							</div>
							<!-- ROW-1 CLOSED -->

						
						</div>
					</div>
				</div>
				<!--CONTAINER CLOSED -->
			</div>