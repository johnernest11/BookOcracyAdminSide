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
          <table id="datatable" class="table table-bordered text-nowrap border-bottom">
						<thead>
							<tr>
                                <th class="wd-15p border-bottom-0">Customer Name</th>
                                <th class="wd-15p border-bottom-0">Customer Number</th>
                                <th class="wd-15p border-bottom-0">Order #</th>
                                <th class="wd-15p border-bottom-0">Description</th>
                                <th class="wd-15p border-bottom-0">Date</th>
                                <th class="wd-15p border-bottom-0">Amount</th>
							</tr>
						</thead>
						<tbody id="recent_transaction">
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
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
			</div>
      
			<div class="card-body">
        <div class="table-responsive deleted-table">
            <br>
          <table id="history_transaction_datatable" class="table table-bordered text-nowrap border-bottom">
						<thead>
							<tr>
                                <th class="wd-15p border-bottom-0">Customer Name</th>
                                <th class="wd-15p border-bottom-0">Customer Number</th>
                                <th class="wd-15p border-bottom-0">Order #</th>
                                <th class="wd-15p border-bottom-0">Description</th>
                                <th class="wd-15p border-bottom-0">Date</th>
                                <th class="wd-15p border-bottom-0">Amount</th>
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
                                '<td>'+data[i].cname+'</td>'+
                                '<td>'+data[i].cnum+'</td>'+
                                '<td>'+data[i].order_id+'</td>'+
                                '<td>'+data[i].description+'</td>'+
                                '<td>'+data[i].created_at+'</td>'+
                                '<td> $ '+data[i].amount+'</td>'+
                                '</tr>';
                    }
                    $('#recent_transaction').html(html);  
                }
            });
        }
    });
    //RECENT TRANSACTION//

    //HISTORY TRANSACTION//
    $(document).ready(function(){
        history_transaction(); //call function history_transaction
        //function show history_transaction
        function history_transaction(){
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
                                '<td>'+data[i].TID+'</td>'+
                                '<td>'+data[i].cnum+'</td>'+
                                '<td>'+data[i].order_id+'</td>'+
                                '<td>'+data[i].description+'</td>'+
                                '<td>'+data[i].created_at+'</td>'+
                                '<td> $ '+data[i].LastName+'</td>'+
                                '<td style="text-align:right;">'+
                                '<a data-bs-toggle="tooltip" title="Click Receipt Information"'+
                                ' href="javascript:void(0);" class="btn  btn-sm history_transactionbtn"'+
                                ' data-TID="'+data[i].TID+'" data-cname="'+data[i].cname+'"'+
                                ' data-cnum="'+data[i].cnum+'" data-order_id="'+data[i].order_id+'"'+
                                ' data-created_at="'+data[i].created_at+'" data-description="'+data[i].description+'"'+
                                ' data-First_Name="'+data[i].First_Name+'" data-LastName="'+data[i].LastName+'"'+
                                ' data-Email="'+data[i].Email+'" data-Street_Address="'+data[i].Street_Address+'"'+
                                ' data-amount="'+data[i].amount+'">'+
                                '<i class="fa fa-file-text-o text-red " aria-hidden="true"></i></a>'+
                                '</td>'+
                                '</tr>';
                    }
                    $('#history_transaction').html(html);  
                    var table = $('#history_transaction_datatable').DataTable();
                    $('#history_transaction_datatable tbody').on('click', 'tr', function () {
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

            
        //get data for view record from database to  modal
            $('#history_transaction').on('click','.history_transactionbtn',function(){
                var TID_id = $(this).data('TID');
                var cname = $(this).data('cname');
                var cnum = $(this).data('cnum');
                var order_id = $(this).data('order_id');
                var description = $(this).data('description');
                var First_Name = $(this).data('First_Name');
                var LastName = $(this).data('LastName');
                var Email = $(this).data('Email');
                var Street_Address = $(this).data('Street_Address');
                console.log('TID_id',TID_id);
                // console.log('cname',cname);
                // console.log('cnum',cnum);
                // console.log('order_id',order_id);
                // console.log('description',description);
                console.log('Street_Address',Street_Address);
                console.log('First_Name',First_Name);
                console.log('LastName',LastName);
                console.log('Email',Email);


                console.log('TID',order_id);
                
                $('#Transaction_Receipt_Modal_Edit').modal('show');
                $('[name="cname_edit"]').val(cname);
                $('[name="cnum_edit"]').val(cnum);
                $('[name="order_id_edit"]').val(order_id);
                $('[name="description_edit"]').val(description);
                $('[name="First_Name_edit"]').val(First_Name);
                $('[name="LastName_edit"]').val(LastName);
                $('[name="Email_edit"]').val(Email);
                $('[name="Street_Address_edit"]').val(Street_Address);
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



  <!-- MODAL TRANSACTION RECIEPT VIEW/EDIT -->
  <form>
            <div class="modal fade" id="Transaction_Receipt_Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><label for="fname" >First name:</label>TRANSACTION RECIEPT</h5>
                          <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
                  </div>
                  <div class="modal-body">
                        <div class="row row-sm">
                            <input type="text" name="order_id_edit" id="order_id_edit" class="form-control"  readonly>
                        </div>
                        <div class="row row-sm">
                              <div class="col-lg-6">
                                <label class="col-md-6 col-form-label">Customer Name</label>
                                  <input type="text" name="cname_edit" id="cname_edit" class="form-control" >
                              </div>
                              <div class="col-lg-6">
                                <label class="col-md-6 col-form-label">Customer Number</label>
                                  <input type="text" name="cnum_edit" id="cnum_edit" class="form-control" >
                              </div>
                        </div>
                        <div class="row row-sm">
                              <div class="col-lg-6">
                                <label class="col-md-6 col-form-label">Description</label>
                                  <input type="text" name="description_edit" id="description_edit" class="form-control" >
                              </div>
                              <div class="col-lg-6">
                                <label class="col-md-6 col-form-label">First Name</label>
                                  <input type="date" name="First_Name_edit" id="First_Name_edit" class="form-control" >
                              </div>
                        </div>
                        <div class="row row-sm">
                              <div class="col-lg-6">
                                <label class="col-md-6 col-form-label">Last Name</label>
                                  <input type="text" name="LastName_edit" id="LastName_edit" class="form-control"  readonly>
                              </div>
                              <div class="col-lg-6">
                                <label class="col-md-6 col-form-label">Email</label>
                                  <input type="text" name="Email_edit" id="Email_edit" class="form-control"  readonly>
                              </div>
                        </div>
                        <div class="row row-sm">
                              <div class="col-lg-12">
                                <label class="col-md-12 col-form-label">Street Address</label>
                                  <input type="text" name="Street_Address_edit" id="Street_Address_edit" class="form-control">
                              </div>
                        </div>
                  </div>
                </div>
              </div>
            </div>
        </form>
        <!--END MODAL EDIT-->

