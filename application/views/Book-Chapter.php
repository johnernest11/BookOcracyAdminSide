
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
									<h1 class="page-title">Book</h1>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Chapter</a></li>
										<li class="breadcrumb-item active" aria-current="page"><?php echo $book->Book_Title; ?></li>
										<li class="breadcrumb-item active" aria-current="page">Chapters</li>
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
								<div class="col-xl-3 col-md-12 col-sm-12">
									<div class="card panel-theme">
										<div class="card-header">
											<div class="float-start">
												<h3 class="card-title"><?php echo $book->Book_Title; ?></h3>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="card-body no-padding">

										<img src="<?=  base_url('https://bookocracy.com/Assets/'.$book->Book_Cover)?>">
										</div>
									</div>
								</div>
								<div class="col-xl-9 col-md-12 col-sm-12">
								<div class="col-xl-12">
									<div class="card">
										<div>
											<div class="panel panel-primary">
												<div class="tab-menu-heading">
													<div class="tabs-menu "> 
														<!-- Tabs -->
														 <ul class="nav panel-tabs">
															<li ><a href="#tab1" class="active me-1" data-bs-toggle="tab">Book Details</a></li>
															<li><a href="#tab2" data-bs-toggle="tab" class="me-1"> Chapters</a></li>
															<li><a href="#tab3" data-bs-toggle="tab" class="me-1"> Comments</a></li>
															<li><a href="#tab4" data-bs-toggle="tab" class="me-1"> Views & Like</a></li>
															
														</ul>
													</div>
												</div>
												<div class="panel-body tabs-menu-body">
													<div class="tab-content">
														<div class="tab-pane active " id="tab1">
															<div class="card">
																<div class="card-header">
																	<h3 class="card-title">Edit Details</h3>
																</div>
																<?php
																	$id=$book->Book_ID;
																	?>
																
																<form action="<?php echo site_url('BookController/update/'. $id)?>" method="POST">
																<input type="hidden" name="_method" value="PUT">
																<div class="card-body">
																	<div class="row">
																		<div class="col-lg-6 col-md-12">
																			<div class="form-group">
																				<label for="exampleInputname">Book Title</label>
																				<input type="text" class="form-control" id="exampleInputname" name="Book_Title" value="<?php echo $book->Book_Title; ?>" >
																			</div>
																		</div>
																		<div class="col-lg-6 col-md-12">
																			<div class="form-group">
																				<label for="exampleInputEmail1">Book Category</label>
																				<input type="text" class="form-control" id="exampleInputEmail1" name="Book_Category" value="<?php echo $book->Book_Category; ?>" placeholder="email address">
																			</div>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-lg-6 col-md-12">
																			<div class="form-group">
																				<label for="exampleInputnumber">Tag</label>
																				<input type="text" class="form-control" id="exampleInputnumber" name="Book_Tag" value="<?php echo $book->Book_Tag; ?>" placeholder="ph number">
																			</div>
																		</div>
																		<div class="col-lg-6 col-md-12">
																			<div class="form-group">
																					<label class="form-label">Status</label>
																					<input class="form-control" value="<?php 
																							$Status=$book->Book_Status;
																							if ($Status ==1) {
																								$Status1="Publish";
																							} else {
																								$Status1="Unpublish";
																							}
																							echo $Status1; ?>" placeholder="">
																			</div>
																		</div>
																	</div>
																	<div class="form-group">
																		<label class="form-label">Description</label>
																		<textarea type="message"  class="form-control" name="Book_Description"><?php echo $book->Book_Description; ?></textarea>
																	</div>
																</div>
																<div class="card-footer text-end">
																<button type="submit" class="btn btn-outline-primary">Update Project</button>
																	<a href="javascript:void(0);" class="btn btn-danger mt-1">Cancel</a>
																</div>
																</form>
															</div>
														</div>

													
														<div class="tab-pane  " id="tab2">
															<div class="card-body">
																<div class="col-lg-12 col-md-12">
																<div class="card-header">
																	<h3 class="card-title">Book Chapters</h3>
																</div>	
																<hr>
																	<table id="example" class="table table-bordered text-nowrap border-bottom">
																		<thead>
																			<tr>
																				<th class="wd-15p border-bottom-0">#</th>
																				<th class="wd-15p border-bottom-0">Title</th>
																				<th class="wd-15p border-bottom-0">Date Added</th>
																				<th class="wd-15p border-bottom-0">Content</th>
																			</tr>
																		</thead>
																		<tbody>
																				<?php foreach($book_chapter as $dataa):  ?>
																				
																															
																				<tr>
																					<td><?php echo $dataa->Chapter_No; ?></td>
																					<td><?php echo $dataa->Chapter_Title; ?></td>	
																					<td><?php echo $dataa->Date_Time; ?></td>
																					<td><button  class="btn  mt-3" data-bs-toggle="modal" data-bs-target="#Chapter<?php echo $dataa->Chapter_No; ?>"><i class="fa fa-book text-blue" aria-hidden="true"></i></button></td>
																					<!--MODAL RESET PASSWORD-->
																					<!-- Modal -->
																						<div class="modal fade"  id="Chapter<?php echo $dataa->Chapter_No; ?>" tabindex="-1" role="dialog" >
																							<div class="modal-dialog modal-dialog-scrollable" role="document">
																								<div class="modal-content">
																									<div class="modal-header">
																										<h5 class="modal-title" >Chapter <?php echo $dataa->Chapter_No; ?>:<?php echo $dataa->Chapter_Title; ?></h5>
																										<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
																											<span aria-hidden="true">×</span>
																										</button>
																									</div>
																									<div class="modal-body">
																									<p><?php echo $dataa->Chapter_Content; ?></p>
																									</div>
																								</div>
																							</div>
																						</div>
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
																<div class="card-header">
																	<h3 class="card-title">Book Comments</h3>
																</div>	
																<hr>
																	<table id="example" class="table text-nowrap border-bottom">
																		<thead>
																			<tr>
																				<th></th>
																				<th></th>
																			</tr>
																		</thead>
																		<tbody>
																				<?php foreach($book_chapter as $dataa):  ?>
																				<tr>
																					<td>
																					    <!-- <img src="../../images/myImage.jpg" /> -->
																					     <img src="../john.jpg"  class="rounded-circle" width="70" height="70" >
																					</td>
																					<td>
																					<div class="timeline-wrapper timeline-wrapper-primary">
																					<div class="timeline-panel">
																						<div class="timeline-heading">
																							<h6 class="timeline-title"><strong>JOHN ERNEST R. CATUNGAL</strong></h6>
																						</div>
																						<div class="timeline-body">
																							<p>Tolerably earnestly middleton extremely distrusts she boasdadadasdy now not.</p>
																							<p> Add and offered prepare how cordial two promise. Greatly who affixed suppose but enquire compact prepare all put. Added forth chief trees but rooms think may.</p>
																						</div>
																						<div class="timeline-footer d-flex align-items-center flex-wrap">
																							<span class="ms-md-auto"><i class="fe fe-calendar text-muted mx-1"></i>19 Oct 2022</span>
																						</div>
																					</div>
																				</div>
																					</td>
																				</tr>
																				<?php endforeach; ?>
																		</tbody>
																	</table>
																</div>
															</div>
														</div>



														<div class="tab-pane  " id="tab4">
															<div class="card-body">
																<div class="col-lg-12 col-md-12">
																<div class="card-header">
																	<h3 class="card-title">Book Views & Like</h3>
																</div>	
																<hr>
																<div class="row">
																	<div class="col-lg-6 col-md-6 col-sm-12 col-xl-6">
																		<div class="card overflow-hidden">
																			<div class="card-body">
																				<div class="row">
																					<div class="col">
																						<h6 class="">Views</h6>
																						<h3 class="mb-2 number-font"><?php echo $this->db->count_all('accounts'); ?></h3>
																					</div>
																					<div class="col col-auto">
																						<div class="counter-icon bg-primary-gradient box-shadow-primary brround ms-auto">
																							<i class="fe fe-users text-white mb-5 "></i>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-lg-6 col-md-6 col-sm-12 col-xl-6">
																		<div class="card overflow-hidden">
																			<div class="card-body">
																				<div class="row">
																					<div class="col">
																						<h6 class="">Likes</h6>
																						<h3 class="mb-2 number-font"><?php echo $this->db->count_all('book'); ?></h3>
																					</div>
																					<div class="col col-auto">
																						<div class="counter-icon bg-danger-gradient box-shadow-danger brround  ms-auto">
																							<i class="fe fe-book  text-white mb-5 "></i>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																	<table id="example" class="table text-nowrap border-bottom">
																		<thead>
																			<tr>
																			    <th class="wd-15p border-bottom-0"></th>
																				<th class="wd-15p border-bottom-0"></th>
																				<th class="wd-15p border-bottom-0"></th>
																				<th class="wd-15p border-bottom-0"></th>
																			</tr>
																		</thead>
																		<tbody>
																				<?php foreach($book_chapter as $dataa):  ?>
																				<tr>
																				    <td> <img src="../john.jpg"  class="rounded-circle" width="70" height="70" ></td>
																					<td><?php echo $dataa->Chapter_Title; ?></td>	
																					<td><?php echo $dataa->Date_Time; ?></td>
																					<td><?php echo $dataa->Date_Time; ?></td>
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