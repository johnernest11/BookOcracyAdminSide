
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
									<h1 class="page-title">Author`s Profile</h1>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Author</a></li>
										<li class="breadcrumb-item active" aria-current="page"><?php echo $accounts->Full_Name; ?></li>
										<li class="breadcrumb-item active" aria-current="page">Profile</li>
									</ol>
								</div>
								<div class="col-lg-4">
									<div class="">
									<div class="card-body">
										<div class="wd-200 mg-b-30">
										<div class="input-group">
										</div>
										</div>
									</div>
									</div>
								</div>
							</div>
							<!-- PAGE-HEADER END -->


							<!-- ROW-1 OPEN -->
							 <div class="row">
								<div class="col-xl-2 col-md-12 col-sm-12">
									<div class="card panel-theme">
										<div class="card-header">
											<div class="float-start">
												<h3 class="card-title"></h3>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="card-body no-padding">
										<!-- <img src=https://bookocracy.com/Assets/'+data[i].Book_Cover+ -->
										<img src="<?php echo  base_url('https://bookocracy.com/Assets/'.$accounts->Profile_Photo);?>">
										</div>
									</div>
								</div>
								<div class="col-xl-10 col-md-12 col-sm-12">
								<div class="col-xl-12">
									<div class="card">
										<div>
											<div class="panel panel-primary">
												<div class="tab-menu-heading">
													<div class="tabs-menu "> 
														<!-- Tabs -->
														 <ul class="nav panel-tabs">
															<li ><a href="#tab1" class="active me-1" data-bs-toggle="tab">Authors Information</a></li>
															<li><a href="#tab2" data-bs-toggle="tab" class="me-1"> Gift</a></li>
                                                            <li><a href="#tab3" data-bs-toggle="tab" class="me-1"> Gift Wallet</a></li>
															
														</ul>
													</div>
												</div>
												<div class="panel-body tabs-menu-body">
													<div class="tab-content">
														<div class="tab-pane active " id="tab1">
															<div class="card">
																<div class="card-header">
																	<h3 class="card-title">Account Information</h3>
																</div>
																<input type="hidden" name="_method" value="PUT">
																<div class="card-body">
																	<div class="row">
																		<div class="col-lg-6 col-md-12">
																			<div class="form-group">
																				<label for="exampleInputname">Authors Name</label>
																				<input type="text" class="form-control" id="exampleInputname" name="Book_Title" value="<?php echo $accounts->Full_Name; ?>"  disabled>
																			</div>
																		</div>
																		<div class="col-lg-6 col-md-12">
																			<div class="form-group">
																				<label for="exampleInputEmail1">Username</label>
																				<input type="text" class="form-control" id="exampleInputEmail1" name="Book_Category" value="<?php echo $accounts->Username; ?>" placeholder="email address" disabled>
																			</div>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-lg-6 col-md-12">
																			<div class="form-group">
																				<label for="exampleInputnumber">Phone Number</label>
																				<input type="text" class="form-control" id="exampleInputnumber" name="Book_Tag" value="<?php echo $accounts->Phone_Number; ?>" placeholder="ph number" disabled>
																			</div>
																		</div>
																		<div class="col-lg-6 col-md-12">
																			<div class="form-group">
																					<label class="form-label">Birth Date</label>
																					<input class="form-control" value="" placeholder="<?php echo $accounts->Birth_Date; ?>" disabled>
																			</div>
																		</div>
																	</div>
																	<div class="form-group">
                                                                            <label class="form-label">Email</label>
                                                                                <input class="form-control" value="" placeholder="<?php echo $accounts->Email; ?>" disabled>
																	</div>
																</div>
															</div>
														</div>

													
														<div class="tab-pane  " id="tab2">
															<div class="card-body">
																<div class="col-lg-12 col-md-12">
																	<table id="example" class="table table-bordered text-nowrap border-bottom">
																		<thead>
																			<tr>
																				<th class="wd-15p border-bottom-0">Book Title</th>
																				<th class="wd-15p border-bottom-0">Book Chapter</th>
																				<th class="wd-15p border-bottom-0">Gift Amount</th>
																			</tr>
																		</thead>
																		<tbody>
																				<?php foreach($gift as $dataa):  ?>
																				
																															
																				<tr>
																					<td><?php echo $dataa->Book_Title; ?></td>
																					<td><?php echo $dataa->Chapter_Title; ?></td>	
																					<td><?php echo $dataa->Gift_Amount; ?></td>
																					<!--MODAL RESET PASSWORD-->
																					
																					
																				</tr>
																				<?php endforeach; ?>
																		</tbody>
																	</table>
																</div>
															</div>
														</div>


                                                        <div class="tab-pane  " id="tab3">
															<div class="card-body">
																<div class="col-lg-12 col-md-12">
																	<table id="example" class="table table-bordered text-nowrap border-bottom">
																		<thead>
																			<tr>
																				<th class="wd-15p border-bottom-0">Book Title</th>
																				<th class="wd-15p border-bottom-0">Sender</th>
																				<th class="wd-15p border-bottom-0">Gift Amount</th>
																			</tr>
																		</thead>
																		<tbody>
																				<?php foreach($gift_wallet as $dataa):  ?>
																				
																															
																				<tr>
																					<td><?php echo $dataa->Book_Title; ?></td>
																					<td><?php echo $dataa->Sender; ?></td>	
																					<td><?php echo $dataa->Gift_Amount; ?></td>
																					<!--MODAL RESET PASSWORD-->
																					
																					
																				</tr>
																				<?php endforeach; ?>
																		</tbody>
																	</table>
																</div>
															</div>
														</div>
													
												</div>
											</div>
										</div>
									</div>
								</div>
                                <!-- COL-END -->
									
								</div>
							</div>
							<!-- ROW-1 CLOSED -->

					
						</div>
					</div>
				</div> 
				<!--CONTAINER CLOSED -->
			</div>



			<script type="text/javascript">
  
  $(document).ready(function(){
	var table = $('#datatablea').DataTable({
                        'columnDefs': [
                          {
                              'targets': 0,
                              'checkboxes': {
                                'selectRow': true
                              }
                          }
                        ],
                        'select': {
                          'style': 'multi'
                        }
                  });
                  $('#datatablea tbody').on('click', 'tr', function () {
                        console.log( table.row( this ).data() );
                          if ($(this).hasClass('selected')) {
                              $(this).removeClass('selected');
                          } else {
                              table.$('tr.selected').removeClass('selected');
                              $(this).addClass('selected');
                          }
                      });

                      $('.status-dropdown').on('change', function(e){
                      var Type = $(this).val();
                      $('.status-dropdown').val(Type)
                      console.log(Type)
                      //dataTable.column(6).search('\\s' + status + '\\s', true, false, true).draw();
                      table.column(3).search(Type).draw();
                    })
  });
</script>