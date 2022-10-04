
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
								<div class="col-lg-4">
									<div class="">
									<div class="card-body">
										<div class="wd-200 mg-b-30">
										<div class="input-group">
										<select class="form-control form-select status-dropdown" data-placeholder="Filter Book Status">
												<optgroup label="Search Book Status">
												<option value="">--Book Status--</option>
												<option value="Published">Published</option>
												<option value="Unpublish">Unpublish</option>
												</optgroup>
											</select>
										</div>
										</div>
									</div>
									</div>
								</div>
							</div>
							<!-- PAGE-HEADER END -->


							<div class="row row-sm">
                            <div class="col-lg-12">
                            <div class="row">
								<div class="col-xl-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">List of Books</h3>
										</div>
										<div class="card-body p-6">
											<div class="panel panel-primary">
												<div class="tab-menu-heading">
												</div>
												<div class="panel-body tabs-menu-body">
													<div class="tab-content">
														<div class="tab-pane active " id="tab1">
                                                            <div class="card-header">
                                                                <h3 class="card-title"> Author: <?php echo $accounts->Full_Name; ?></h3>
                                                            </div>
                                                            <div class="card-body">
                                                                    <div class="table-responsive ">
                                                                        <table id="datatablea" class="table table-bordered text-nowrap border-bottom">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th class="wd-15p border-bottom-0">#</th>
                                                                                    <th class="wd-15p border-bottom-0">Books</th>
                                                                                    <th class="wd-15p border-bottom-0">Caterogy</th>
                                                                                    <th class="wd-15p border-bottom-0">Status</th>
                                                                                    <th class="wd-15p border-bottom-0"></th>
                                                                                </tr>
                                                                            </thead>
																			<tbody>
																				<?php foreach($book as $dataa):?>	
																					<?php
																						if($dataa->Book_Status == 1)
																						{
																							$BookStatuss ="Published";
																						}else{
																							$BookStatuss ="Unpublish";
																						}

                                                                                        $id=$dataa->Book_ID;

																					?>
																				<tr>
																					<td><?php echo $dataa->Book_ID; ?></td>
																					<td><?php echo $dataa->Book_Title; ?></td>
																					<td><?php echo $dataa->Book_Category; ?></td>
																					<td><?php echo $BookStatuss; ?></td>
																					<td><a href="<?php echo site_url();?>Book-Chapter/<?php echo $id ?>"><i class="fa fa-book" aria-hidden="true"></i></a></td>
																					
																					
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
								</div><!-- COL-END -->
                            </div>
                        </div>
			</div>



			<script type="text/javascript">
  
  $(document).ready(function(){
	var table = $('#datatablea').DataTable({
                        'columnDefs': [
                          {
                              'targets': 0,
                              
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