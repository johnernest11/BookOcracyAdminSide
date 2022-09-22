
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
										<li class="breadcrumb-item"><a href="javascript:void(0);">Reports</a></li>
										<li class="breadcrumb-item active" aria-current="page">List of Books</li>
										<li class="breadcrumb-item active" aria-current="page">Books</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- ROW-1 OPEN -->
							<div class="row">
								<div class="col-xl-2 col-md-12 col-sm-12">
									<div class="card panel-theme">
										<div class="card-header">
											<div class="float-start">
												<h3 class="card-title">Title: <?php echo $book->Book_Title; ?></h3>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="card-body no-padding">
													<img src="<?php echo  base_url();?>/assets/images/books/sample.png"  class="center"  >
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
															<li ><a href="#tab1" class="active me-1" data-bs-toggle="tab">Book Details</a></li>
															<li><a href="#tab2" data-bs-toggle="tab" class="me-1"> Chapters</a></li>
															
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
																
																<form action="<?php echo site_url('BookController/update/'. $book->Book_ID)?>" method="POST">
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
																<div class="col-lg-2 col-md-2">
																	<table id="example" class="table table-bordered text-nowrap border-bottom">
																		<thead>
																			<tr>
																				<th class="wd-15p border-bottom-0">#</th>
																				<th class="wd-15p border-bottom-0">Title</th>
																				<th class="wd-15p border-bottom-0">Content</th>
																			</tr>
																		</thead>
																		<tbody>
																				<?php foreach($book_chapter as $dataa):  ?>
																				
																															
																				<tr>
																					<td><?php echo $dataa->Chapter_No; ?></td>
																					<td><?php echo $dataa->Chapter_Title; ?></td>
																					<td><p><?php echo $dataa->Chapter_Content; ?></p></td>   
																					
																					
																					
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
								</div><!-- COL-END -->
									
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
	var table = $('#example').DataTable({
					  'columnDefs': [
						{
							'targets': 0,
							'checkboxes': {
							  'selectRow': false
							}
						}
					  ],
					  'select': {
						'style': 'multi'
						}
					 });
					$('#datatable tbody').on('click', 'tr', function () {
					  console.log( table.row( this ).data() );
						if ($(this).hasClass('selected')) {
							$(this).removeClass('selected');
						} else {
							table.$('tr.selected').removeClass('selected');
							$(this).addClass('selected');
						}
					});
	  
  });
</script>