<!-- PAGE-HEADER -->
<div class="page-header">
	<div>
		<h1 class="page-title">User Settings</h1>
		<ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0);">Accounts</a></li>
              <li class="breadcrumb-item active" aria-current="page">Admininstrative Setting</li>
		</ol>
	</div>
</div>

<!-- PAGE-HEADER END -->
<div class="row">
<div class="col-lg-2">
        <div>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="javascript:void(0);">Personal Information</a></li>
        </div>
    </div>
        <div class="col-xl-8 col-md-12 col-sm-12">
              <div class="card">
                
										<div class="card-header">
											<div class="card-title">Profile</div>
										</div>
										<div class="card-body">
											<div class="d-flex mb-3">
                                            <img src="<?php echo $this->session->userdata('Picture'); ?>"  class="rounded-circle" width="150" height="150" >
											</div>
											<div class="row">
												<div class="col-lg-6 col-md-12">
													<div class="form-group">
														<label for="exampleInputname">Full Name</label>
														<input type="text" class="form-control" id="exampleInputname" value="<?php echo $this->session->userdata('Full_Name'); ?>" disabled >
													</div>
												</div>
												<div class="col-lg-6 col-md-12">
													<div class="form-group">
														<label for="exampleInputname1">Username</label>
														<input type="text" class="form-control" id="exampleInputname1" value="<?php echo $this->session->userdata('Username'); ?>" disabled>
													</div>
												</div>
											</div>
                                            <div class="row">
												<div class="col-lg-12 col-md-12">
													<div class="form-group">
														<label for="exampleInputname">Birthday</label>
														<input type="email" class="form-control" id="exampleInputname" value="<?php echo $this->session->userdata('Birthday'); ?>" disabled>
													</div>
												</div>
												<div class="col-lg-6 col-md-12">
													<div class="form-group">
														<label for="exampleInputname1">Phone Number</label>
														<input type="text" class="form-control" id="exampleInputname1" value="<?php echo $this->session->userdata('Phone_Number'); ?>" disabled>
													</div>
												</div>
											</div>
                                            <div class="row">
												<div class="col-lg-12 col-md-12">
													<div class="form-group">
														<label for="exampleInputname">Email</label>
														<input type="email" class="form-control" id="exampleInputname" value="<?php echo $this->session->userdata('Email'); ?>" disabled>
													</div>
												</div>
                                                
											</div>
										</div>
									</div>
                                </div>