<!-- PAGE-HEADER -->
<div class="page-header">
	<div>
		<h1 class="page-title">Transaction</h1>
	</div>
</div>
<hr>
<!-- PAGE-HEADER END -->
<!-- RECENT TRANSACTION -->
<div class="row row-sm">
    <div class="col-lg-1">
	</div>
	<div class="col-lg-10">
		<div class="card">
			<div class="card-header">
            <h3 class="card-title"> <i class="side-menu__icon fe fe-settings"> Recent Transaction</i></h3>
			</div>
      
			<div class="card-body">
        <div class="table-responsive deleted-table">
          <table id="recent_transaction_datatable" class="table table-bordered text-nowrap border-bottom">
						<thead>
							<tr>
								<th class="wd-15p border-bottom-0">Transaction No.</th>
								<th class="wd-15p border-bottom-0">Transaction Details</th>
                                <th class="wd-15p border-bottom-0">Transaction Order No.</th>
                                <th class="wd-15p border-bottom-0">Value</th>
								<th class="wd-15p border-bottom-0">TimeStamp</th>
                                <th class="wd-15p border-bottom-0"></th>
							</tr>
						</thead>
						<tbody id="recent_transaction">
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<!-- MODAL TRANSACTION RECIEPT RECENT VIEW/EDIT -->
	<form>
            <div class="modal fade" id="Transaction_ReceiptRecent_Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" name="order_id_edit"><label for="fname" ></label>TRANSACTION RECIEPT</h5>
                          <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
                  </div>
                  <div class="modal-body">
                        <div class="row row-sm">
                            <!-- <input type="text" name="order_id_edit" id="order_id_edit" class="form-control"  readonly> -->
                        </div>
                        <div class="row row-sm">
                              <div class="col-lg-4">
                                <label class="col-md-6 col-form-label">Fist Name</label>
                                  <input type="text" name="First_Name_edit" id="First_Name_edit" class="form-control"readonly >
                              </div>
                              <div class="col-lg-4">
                                <label class="col-md-6 col-form-label">Last Name</label>
                                  <input type="text" name="Last_Name_edit" id="Last_Name_edit" class="form-control"readonly >
                              </div>
							  <div class="col-lg-4">
                                <label class="col-md-6 col-form-label">Phone Number</label>
                                  <input type="text" name="Phone_Number_edit" id="Phone_Number_edit" class="form-control"readonly >
                              </div>
                        </div>
                        <div class="row row-sm">
                              <div class="col-lg-6">
                                <label class="col-md-6 col-form-label">Email</label>
                                  <input type="text" name="Email_edit" id="Email_edit" class="form-control" readonly>
                              </div>
                              <div class="col-lg-6">
                                <label class="col-md-6 col-form-label">Street</label>
                                  <input type="text" name="Street_Address_edit" id="Street_Address_edit" class="form-control" readonly>
                              </div>
                        </div>
                        <div class="row row-sm">
                              <div class="col-lg-4">
                                <label class="col-md-6 col-form-label">State</label>
                                  <input type="text" name="State_edit" id="State_edit" class="form-control"  readonly>
                              </div>
                              <div class="col-lg-4">
                                <label class="col-md-6 col-form-label">City</label>
                                  <input type="text" name="City_edit" id="City_edit" class="form-control"  readonly>
                              </div>
							  <div class="col-lg-4">
							  <label class="col-md-12 col-form-label">Postal Code</label>
                                  <input type="text" name="Postal_Code_edit" id="Postal_Code_edit" class="form-control" readonly>
                              </div>
                        </div>
						<div class="modal-footer">
                    			<h5 class="modal-title" id="exampleModalLabel" name="Email_edit"><label for="fname" ></label>TRANSACTION RECIEPT</h5>
						</div>
					</div>
                </div>
            </div>
		</form>
        <!--END MODAL EDIT-->

		
</div>
<!-- RECENT TRANSACTION -->


<!-- STATISTIC & EXPENSES TRANSACTION -->
<div class="row row-sm">
    <div class="col-lg-1">
	</div>
	<div class="col-lg-5">
		<div class="card">
			<div class="card-header">
            <h3 class="card-title"> <i class="side-menu__icon fe fe-settings"> Statistic</i></h3>
        </div>
            <div class="card-body">
            <div class="chart-container">
                <canvas id="chartArea1" class="h-275"></canvas>
               
            </div>

            </div>
		</div>
	</div>
    <div class="col-lg-5">
		<div class="card">
			<div class="card-header">
            <h3 class="card-title"> <i class="side-menu__icon fe fe-settings"> Expenses</i></h3>
			</div>
      
			<div class="card-body">
                <div class="chart-container">
                    <canvas id="chartBar2" class="h-275"></canvas>
                </div>
            </div>
		</div>
	</div>
</div>
<!-- STATISTIC & EXPENSES TRANSACTION -->



<!-- HISTORY TRANSACTION -->
<div class="row row-sm">
    <div class="col-lg-1">
	</div>
	<div class="col-lg-10">
		<div class="card">
			<div class="card-header">
            <h3 class="card-title"> <i class="side-menu__icon fe fe-settings"> History Transaction</i></h3>
			<div class="col-lg-10">
				<div class="">
					<div class="card-body">
						<div class="row">
							<div class="col-md-4">
								
							</div>
							<div class="col-md-4 mt-4 mt-md-0">
							<div >
							  
							</div>
							</div>
							<div class="col-md-4 mt-4 mt-md-0">
							<div class="input-group">
								<div class="input-group-text">
									<span class="fa fa-clock-o tx-16 lh-0 op-6"> Filter Date</span>
								</div>
								<input type="date" class="form-control filter-date" id="datepicker-year" placeholder="Year Range" >
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
      
			<div class="card-body">
				
        <div class="table-responsive deleted-table">
            <br>
          <table id="history_transaction_datatable" class="table table-bordered text-nowrap border-bottom">
						<thead>
							<tr>
							<th class="wd-15p border-bottom-0">Transaction No.</th>
								<th class="wd-15p border-bottom-0">Transaction Details</th>
                                <th class="wd-15p border-bottom-0">Transaction Order No.</th>
                                <th class="wd-15p border-bottom-0">Value</th>
								<th class="wd-15p border-bottom-0">TimeStamp</th>
                                <th class="wd-15p border-bottom-0"></th>
							</tr>
						</thead>
						<tbody id="history_transaction">
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<!-- MODAL TRANSACTION RECIEPT HISTORY VIEW/EDIT -->
	<form>
            <div class="modal fade" id="Transaction_ReceiptHistory_Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" name="order_id_edit"><label for="fname" ></label>TRANSACTION RECIEPT</h5>
                          <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
                  </div>
                  <div class="modal-body">
                        <div class="row row-sm">
                            <!-- <input type="text" name="order_id_edit" id="order_id_edit" class="form-control"  readonly> -->
                        </div>
                        <div class="row row-sm">
                              <div class="col-lg-4">
                                <label class="col-md-6 col-form-label">Fist Name</label>
                                  <input type="text" name="First_Name_editt" id="First_Name_editt" class="form-control"readonly >
                              </div>
                              <div class="col-lg-4">
                                <label class="col-md-6 col-form-label">Last Name</label>
                                  <input type="text" name="Last_Name_editt" id="Last_Name_editt" class="form-control"readonly >
                              </div>
							  <div class="col-lg-4">
                                <label class="col-md-6 col-form-label">Phone Number</label>
                                  <input type="text" name="Phone_Number_edit" id="Phone_Number_edit" class="form-control"readonly >
                              </div>
                        </div>
                        <div class="row row-sm">
                              <div class="col-lg-6">
                                <label class="col-md-6 col-form-label">Email</label>
                                  <input type="text" name="Email_editt" id="Email_editt" class="form-control" readonly>
                              </div>
                              <div class="col-lg-6">
                                <label class="col-md-6 col-form-label">Street</label>
                                  <input type="text" name="Street_Address_editt" id="Street_Address_editt" class="form-control" readonly>
                              </div>
                        </div>
                        <div class="row row-sm">
                              <div class="col-lg-4">
                                <label class="col-md-6 col-form-label">State</label>
                                  <input type="text" name="State_editt" id="State_editt" class="form-control"  readonly>
                              </div>
                              <div class="col-lg-4">
                                <label class="col-md-6 col-form-label">City</label>
                                  <input type="text" name="City_editt" id="City_editt" class="form-control"  readonly>
                              </div>
							  <div class="col-lg-4">
							  <label class="col-md-12 col-form-label">Postal Code</label>
                                  <input type="text" name="Postal_Code_editt" id="Postal_Code_editt" class="form-control" readonly>
                              </div>
                        </div>
						<div class="modal-footer">
                    			<h5 class="modal-title" id="exampleModalLabel" name="Email_edit"><label for="fname" ></label>TRANSACTION RECIEPT</h5>
						</div>
					</div>
                </div>
            </div>
		</form>
        <!--END MODAL EDIT-->

</div>

 
<script type="text/javascript">
    //RECENT TRANSACTION//
    $(document).ready(function(){
        recent_transaction(); //call function recent_transaction
        //function show recent_transaction
        function recent_transaction(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo site_url('TransactionController/transaction_recent_data')?>',
                async : true,
                dataType : 'json',
				success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
						        '<td>'+data[i].cnum+'</td>'+
								'<td>'+data[i].description+'</td>'+
                                '<td>'+data[i].order_id+'</td>'+
                                '<td> $ '+data[i].amount+'</td>'+
                                '<td>'+data[i].created_at+'</td>'+
                                '<td>'+
                                '<a  class="btn  btn-sm recent_transactionbtn"'+
                                ' data-trasaction_tid="'+data[i].TID+'"'+
								' data-trasaction_firstname="'+data[i].First_Name+'"'+
                                ' data-trasaction_lastname="'+data[i].Last_Name+'"'+
								' data-trasaction_email="'+data[i].Email+'"'+
                                ' data-trasaction_streetaddress="'+data[i].Street_Address+'"'+
								' data-trasaction_state="'+data[i].State+'"'+
                                ' data-trasaction_city="'+data[i].City+'"'+
								' data-trasaction_postalcode="'+data[i].Postal_Code+'"'+
                                ' data-trasaction_phonenumber="'+data[i].Phone_Number+'">'+
                                '<i class="fa fa-file-text-o text-red " aria-hidden="true"></i></a>'+
                                '</td>'+
                                '</tr>';
                    }
                    $('#recent_transaction').html(html);  
                    var table = $('#recent_transaction_datatable').DataTable();
                    $('#recent_transaction_datatable tbody').on('click', 'tr', function () {
                        console.log( table.row( this ).data() );
                          if ($(this).hasClass('selected')) {
                              $(this).removeClass('selected');
                          } else {
                              table.$('tr.selected').removeClass('selected');
                              $(this).addClass('selected');
                          }
                    });
                }
            });
        
			//RECENT TRANSACTION//
			    //get data for view record from database to  modal
			$('#recent_transaction').on('click','.recent_transactionbtn',function(){
                var transaction_TID = $(this).data('trasaction_tid');
                var transaction_First_Name = $(this).data('trasaction_firstname');
                var transaction_Last_Name = $(this).data('trasaction_lastname');
                var transaction_Email = $(this).data('trasaction_email');
                var transaction_Street_Address = $(this).data('trasaction_streetaddress');
                var transaction_State = $(this).data('trasaction_state');
                var transaction_City = $(this).data('trasaction_city');
                var transaction_Postal_Code = $(this).data('trasaction_postalcode');
				var transaction_Phone_Number = $(this).data('trasaction_phonenumber');
                alert(transaction_TID);
				alert(transaction_First_Name);
				console.log('Street_Address',transaction_Street_Address);
                console.log('First_Name',transaction_First_Name);
                console.log('LastName',transaction_Last_Name);
                console.log('Email',transaction_Postal_Code);
                
                $('#Transaction_ReceiptRecent_Modal_Edit').modal('show');
                $('[name="First_Name_edit"]').val(transaction_First_Name);
                $('[name="Last_Name_edit"]').val(transaction_Last_Name);
                $('[name="Email_edit"]').val(transaction_Email);
                $('[name="Street_Address_edit"]').val(transaction_Street_Address);
                $('[name="State_edit"]').val(transaction_State);
                $('[name="City_edit"]').val(transaction_City);
                $('[name="Postal_Code_edit"]').val(transaction_Postal_Code);
				$('[name="Phone_Number_edit"]').val(transaction_Phone_Number);
            });





			$.ajax({
                type  : 'ajax',
                url   : '<?php echo site_url('TransactionController/transaction_history_data')?>',
                async : true,
                dataType : 'json',
				success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
								'<td>'+data[i].cnum+'</td>'+
								'<td>'+data[i].description+'</td>'+
                                '<td>'+data[i].order_id+'</td>'+
                                '<td> $ '+data[i].amount+'</td>'+
                                '<td>'+data[i].created_at+'</td>'+
                                '<td>'+
                                '<a  class="btn  btn-sm history_transactionbtn"'+
                                ' data-trasaction_tid="'+data[i].TID+'"'+
								' data-trasaction_firstname="'+data[i].First_Name+'"'+
                                ' data-trasaction_lastname="'+data[i].Last_Name+'"'+
								' data-trasaction_email="'+data[i].Email+'"'+
                                ' data-trasaction_streetaddress="'+data[i].Street_Address+'"'+
								' data-trasaction_state="'+data[i].State+'"'+
                                ' data-trasaction_city="'+data[i].City+'"'+
								' data-trasaction_postalcode="'+data[i].Postal_Code+'"'+
                                ' data-trasaction_phonenumber="'+data[i].Phone_Number+'">'+
                                '<i class="fa fa-file-text-o text-red " aria-hidden="true"></i></a>'+
                                '</td>'+
                                '</tr>';
                    }
                    $('#history_transaction').html(html);  
                    var table = $('#history_transaction_datatable').DataTable();
                    $('#history_transactionn_datatable tbody').on('click', 'tr', function () {
                        console.log( table.row( this ).data() );
                          if ($(this).hasClass('selected')) {
                              $(this).removeClass('selected');
                          } else {
                              table.$('tr.selected').removeClass('selected');
                              $(this).addClass('selected');
                          }
                    });
					$('.filter-date').on('change', function(e){
                      var Type = $(this).val();
                      $('.filter-date').val(Type)
                      console.log(Type)
                      //dataTable.column(6).search('\\s' + status + '\\s', true, false, true).draw();
                      table.column(4).search(Type).draw();
                    })

					// $('.filter-date_from').on('change', function(e){
                    //   var Type = $(this).val();
                    //   $('.filter-date_from').val(Type)
                    //   console.log(Type)
                    //   //dataTable.column(6).search('\\s' + status + '\\s', true, false, true).draw();
                    //   table.column(4).search(Type).draw();
                    // })
                }
            });

			//HISTORY TRANSACTION//
			    //get data for view record from database to  modal
				$('#history_transaction').on('click','.history_transactionbtn',function(){
                var transaction_TID = $(this).data('trasaction_tid');
                var transaction_First_Name = $(this).data('trasaction_firstname');
                var transaction_Last_Name = $(this).data('trasaction_lastname');
                var transaction_Email = $(this).data('trasaction_email');
                var transaction_Street_Address = $(this).data('trasaction_streetaddress');
                var transaction_State = $(this).data('trasaction_state');
                var transaction_City = $(this).data('trasaction_city');
                var transaction_Postal_Code = $(this).data('trasaction_postalcode');
                alert(transaction_TID);
				alert(transaction_First_Name);
				console.log('Street_Address',transaction_Street_Address);
                console.log('First_Name',transaction_First_Name);
                console.log('LastName',transaction_Last_Name);
                console.log('Email',transaction_Postal_Code);
                
                $('#Transaction_ReceiptHistory_Modal_Edit').modal('show');
                $('[name="First_Name_editt"]').val(transaction_First_Name);
                $('[name="Last_Name_editt"]').val(transaction_Last_Name);
                $('[name="Email_editt"]').val(transaction_Email);
                $('[name="Street_Address_editt"]').val(transaction_Street_Address);
                $('[name="State_editt"]').val(transaction_State);
                $('[name="City_editt"]').val(transaction_City);
                $('[name="Postal_Code_editt"]').val(transaction_Postal_Code);
            });
 
        }
    });
    //HISTORY TRANSACTION//

</script>

<script>
    /* Area Chart*/
    var ctx = document.getElementById("myChart");
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
			datasets: [{
				label: "Data2",
				borderColor: "rgba(235, 111, 51 ,0.9)",
				borderWidth: "3",
				backgroundColor: "rgba(	235, 111, 51, 0.7)",
				pointHighlightStroke: "rgba(235, 111, 51 ,1)",
				data: [16, 32, 18, 26, 42, 33, 44]
			}, {
				label: "Data1",
				borderColor: "#6259ca",
				borderWidth: "3",
				backgroundColor: "#5e2dd81a",
				data: [22, 44, 67, 43, 76, 45, 12]
			}]
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			tooltips: {
				mode: 'index',
				intersect: false
			},
			hover: {
				mode: 'nearest',
				intersect: true
			},
			scales: {
				xAxes: [{
					ticks: {
						fontColor: "#77778e",
					 },
					gridLines: {
						color: 'rgba(119, 119, 142, 0.2)'
					}
				}],
				yAxes: [{
					ticks: {
						beginAtZero: true,
						fontColor: "#77778e",
					},
					gridLines: {
						color: 'rgba(119, 119, 142, 0.2)'
					},
				}]
			},
			legend: {
				labels: {
					fontColor: "#77778e"
				},
			},
		}


        /* Bar-Chart2*/
	var ctx = document.getElementById("chartBar2");
	var myChart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
			datasets: [{
				label: "Data1",
				data: [65, 59, 80, 81, 56, 55, 40],
				borderColor: "#6259ca",
				borderWidth: "0",
				backgroundColor: "#6259ca"
			}, {
				label: "Data2",
				data: [28, 48, 40, 19, 86, 27, 90],
				borderColor: "#eb6f33",
				borderWidth: "0",
				backgroundColor: "#eb6f33"
			}]
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			scales: {
				xAxes: [{
					ticks: {
						fontColor: "#77778e",
					 },
					gridLines: {
						color: 'rgba(119, 119, 142, 0.2)'
					}
				}],
				yAxes: [{
					ticks: {
						beginAtZero: true,
						fontColor: "#77778e",
					},
					gridLines: {
						color: 'rgba(119, 119, 142, 0.2)'
					},
				}]
			},
			legend: {
				labels: {
					fontColor: "#77778e"
				},
			},
		}
    });
	});
</script>

<script>
                    /* Area Chart*/
	var ctx = document.getElementById("chartArea1");
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
			datasets: [{
				label: "Data2",
				borderColor: "rgba(235, 111, 51 ,0.9)",
				borderWidth: "3",
				backgroundColor: "rgba(	235, 111, 51, 0.7)",
				pointHighlightStroke: "rgba(235, 111, 51 ,1)",
				data: [16, 32, 18, 26, 42, 33, 44]
			}, {
				label: "Data1",
				borderColor: "#6259ca",
				borderWidth: "3",
				backgroundColor: "#5e2dd81a",
				data: [22, 44, 67, 43, 76, 45, 12]
			}]
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			tooltips: {
				mode: 'index',
				intersect: false
			},
			hover: {
				mode: 'nearest',
				intersect: true
			},
			scales: {
				xAxes: [{
					ticks: {
						fontColor: "#77778e",
					 },
					gridLines: {
						color: 'rgba(119, 119, 142, 0.2)'
					}
				}],
				yAxes: [{
					ticks: {
						beginAtZero: true,
						fontColor: "#77778e",
					},
					gridLines: {
						color: 'rgba(119, 119, 142, 0.2)'
					},
				}]
			},
			legend: {
				labels: {
					fontColor: "#77778e"
				},
			},
		}
	});


    /* Bar-Chart2*/
	var ctx = document.getElementById("chartBar2");
	var myChart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
			datasets: [{
				label: "Data1",
				data: [65, 59, 80, 81, 56, 55, 40],
				borderColor: "#6259ca",
				borderWidth: "0",
				backgroundColor: "#6259ca"
			}, {
				label: "Data2",
				data: [28, 48, 40, 19, 86, 27, 90],
				borderColor: "#eb6f33",
				borderWidth: "0",
				backgroundColor: "#eb6f33"
			}]
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			scales: {
				xAxes: [{
					ticks: {
						fontColor: "#77778e",
					 },
					gridLines: {
						color: 'rgba(119, 119, 142, 0.2)'
					}
				}],
				yAxes: [{
					ticks: {
						beginAtZero: true,
						fontColor: "#77778e",
					},
					gridLines: {
						color: 'rgba(119, 119, 142, 0.2)'
					},
				}]
			},
			legend: {
				labels: {
					fontColor: "#77778e"
				},
			},
		}
	});
</script>



		

