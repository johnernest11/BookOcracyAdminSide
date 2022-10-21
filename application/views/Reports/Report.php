<!-- PAGE-HEADER -->

<div class="page-header">
	<div>
		<h1 class="page-title">Reports</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="javascript:void(0);">Reports</a></li>
		</ol>
	</div>
</div>
<!-- PAGE-HEADER END -->

<div class="row">
<div class="col-xl-1">
</div>
<div class="col-xl-10">
    <div class="card">
        <div class="">
            <div class="panel panel-primary">
                <div class=" tab-menu-heading">
                    <div class="tabs-menu1 ">
                        <!-- Tabs -->
                        <ul class="nav panel-tabs">
                            <li ><a href="#SalesReport" class="active" data-bs-toggle="tab">Sales and Reports</a></li>
                            <li><a href="#Authors" data-bs-toggle="tab">List of Authors</a></li>
                            <!-- <li><a href="#Books" data-bs-toggle="tab">List of Books</a></li> -->
                        </ul>
                    </div>
                </div>
                <div class="panel-body tabs-menu-body">
                    <div class="tab-content">
                        <div class="tab-pane active " id="SalesReport">
                            <div class="row row-sm">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Sales and Reports</h3>
                                        </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h3 class="card-title">Sales Stats</h3>
                                                                <div class="col-md-3">
                                                                <select name="year" id="year" class="form-control">
                                                                    <option value="">Select Year</option>
                                                                <?php
                                                                foreach($year_list->result_array() as $row)
                                                                {
                                                                    echo '<option value="'.$row["year"].'">'.$row["year"].'</option>';
                                                                }
                                                                ?>

                                                                </select>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="chart-container">
                                                                <div id="chartBar1" style="height: 620px;"></div>
                                                                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                                                    <script>
                                                                    /* Bar-Chart1 */
                                                                    google.charts.load('current', {packages:['corechart', 'bar']});
                                                                            google.charts.setOnLoadCallback();

                                                                            function load_monthwise_data(year, title)
                                                                            {
                                                                                var temp_title = title + ' ' + year;
                                                                                $.ajax({
                                                                                    url:"<?php echo base_url(); ?>ReportController/fetch_data",
                                                                                    method:"POST",
                                                                                    data:{year:year},
                                                                                    dataType:"JSON",
                                                                                    success:function(data)
                                                                                    {
                                                                                        drawMonthwiseChart(data, temp_title);
                                                                                    }
                                                                                })
                                                                            }

                                                                            function drawMonthwiseChart(chart_data, chart_main_title)
                                                                            {
                                                                                var jsonData = chart_data;
                                                                                var data = new google.visualization.DataTable();
                                                                                data.addColumn('string', 'month');
                                                                                data.addColumn('number', 'amounts');

                                                                                $.each(jsonData, function(i, jsonData){
                                                                                    var month = jsonData.month;
                                                                                    var profit = parseFloat($.trim(jsonData.amounts));
                                                                                    data.addRows([[month, profit]]);
                                                                                });

                                                                                var options = {
                                                                                    backgroundColor: { fill:'transparent' },
                                                                                    if(isDarkMode) {
                                                                                        chartTextStyle = {color: '#FFFFFF'};
                                                                                    },
                                                                                    title:chart_main_title,
                                                                                    hAxis: {
                                                                                        title: "Months"
                                                                                    },
                                                                                    vAxis: {
                                                                                        title: 'Profit'
                                                                                    },
                                                                                    chartArea:{width:'70%',height:'60%'}
                                                                                }

                                                                                var chart = new google.visualization.ColumnChart(document.getElementById('chartBar1'));

                                                                                chart.draw(data, options);
                                                                            }

                                                                            </script>

                                                                            <script>
                                                                                
                                                                            $(document).ready(function(){
                                                                                $('#year').change(function(){
                                                                                    var year = $(this).val();
                                                                                    if(year != '')
                                                                                    {
                                                                                        load_monthwise_data(year, 'Report');
                                                                                    }
                                                                                });
                                                                            });
                                                                    </script>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>  
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-12">
                                                        <div class="card overflow-hidden">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <h6 class="">Trending Activities</h6>
                                                                        <!-- <table id="example" class="table  text-nowrap border-bottom">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th class="wd-15p border-bottom-0">Book Title</th>
                                                                                    <th class="wd-15p border-bottom-0">Book Author</th>
                                                                                    <th class="wd-15p border-bottom-0">Category</th>
                                                                                    <th class="wd-15p border-bottom-0">Status</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                    <?php foreach($book as $dataa):  ?>
                                                                                        <?php

                                                                                            $id=$dataa->Book_ID;
                                                                                            $Status=$dataa->Book_Status;

                                                                                            if ($Status ==1) {
                                                                                                $Status1="Publish";
                                                                                            } else {
                                                                                                $Status1="Unpublish";
                                                                                            }
                                                                                            ?>                              
                                                                                    <tr>
                                                                                        <td><?php echo $dataa->Book_Title; ?></td>
                                                                                        <td><?php echo $dataa->Full_Name; ?></td>
                                                                                        <td><?php echo $dataa->Book_Category; ?></td>
                                                                                        <td><?php echo $Status1; ?></td>   
                                                                                    </tr>
                                                                                    <?php endforeach; ?>
                                                                            </tbody>
                                                                        </table> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-6">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h3 class="card-title">Users Status</h3>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="chart-container">
                                                                    <canvas id="chartLine" class="h-275"></canvas>
                                                                    <script>
                                                                    /*LIne-Chart */
                                                                        var ctx = document.getElementById("chartLine").getContext('2d');
                                                                        var myChart = new Chart(ctx, {
                                                                            type: 'line',
                                                                            data: {
                                                                                labels: ["Sun", "Mon", "Tus", "Wed", "Thu", "Fri", "Sat"],
                                                                                datasets: [{
                                                                                    label: 'Active User',
                                                                                    data: [100, 420, 210, 420, 210, 320, 350],
                                                                                    borderWidth: 2,
                                                                                    backgroundColor: 'transparent',
                                                                                    borderColor: '#6259ca',
                                                                                    borderWidth: 3,
                                                                                    pointBackgroundColor: '#ffffff',
                                                                                    pointRadius: 2
                                                                                }, {
                                                                                    label: 'Blocked',
                                                                                    data: [450, 200, 350, 250, 480, 200, 400],
                                                                                    borderWidth: 2,
                                                                                    backgroundColor: 'transparent',
                                                                                    borderColor: '#eb6f33',
                                                                                    borderWidth: 3,
                                                                                    pointBackgroundColor: '#ffffff',
                                                                                    pointRadius: 2
                                                                                },
                                                                                {
                                                                                    label: 'Suspended',
                                                                                    data: [400, 100, 250, 150, 280, 100, 200],
                                                                                    borderWidth: 2,
                                                                                    backgroundColor: 'transparent',
                                                                                    borderColor: '#eb6f23',
                                                                                    borderWidth: 3,
                                                                                    pointBackgroundColor: '#ffffff',
                                                                                    pointRadius: 2
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
                                                                                        display: true,
                                                                                        gridLines: {
                                                                                            color: 'rgba(119, 119, 142, 0.2)'
                                                                                        }
                                                                                    }],
                                                                                    yAxes: [{
                                                                                        ticks: {
                                                                                            fontColor: "#77778e",
                                                                                        },
                                                                                        display: true,
                                                                                        gridLines: {
                                                                                            color: 'rgba(119, 119, 142, 0.2)'
                                                                                        },
                                                                                        scaleLabel: {
                                                                                            display: false,
                                                                                            labelString: 'Thousands',
                                                                                            fontColor: 'rgba(119, 119, 142, 0.2)'
                                                                                        }
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
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-6">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h3 class="card-title">Users Overtime</h3>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="chart-container">
                                                                    <canvas id="chartLine1" class="h-275"></canvas>
                                                                    <script>
                                                                    /*LIne-Chart */
                                                                        var ctx = document.getElementById("chartLine1").getContext('2d');
                                                                        var myChart = new Chart(ctx, {
                                                                            type: 'line',
                                                                            data: {
                                                                                labels: ["Sun", "Mon", "Tus", "Wed", "Thu", "Fri", "Sat"],
                                                                                datasets: [{
                                                                                    label: 'Profits',
                                                                                    data: [100, 420, 210, 420, 210, 320, 350],
                                                                                    borderWidth: 2,
                                                                                    backgroundColor: 'transparent',
                                                                                    borderColor: '#6259ca',
                                                                                    borderWidth: 3,
                                                                                    pointBackgroundColor: '#ffffff',
                                                                                    pointRadius: 2
                                                                                }, {
                                                                                    label: 'Expenses',
                                                                                    data: [450, 200, 350, 250, 480, 200, 400],
                                                                                    borderWidth: 2,
                                                                                    backgroundColor: 'transparent',
                                                                                    borderColor: '#eb6f33',
                                                                                    borderWidth: 3,
                                                                                    pointBackgroundColor: '#ffffff',
                                                                                    pointRadius: 2
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
                                                                                        display: true,
                                                                                        gridLines: {
                                                                                            color: 'rgba(119, 119, 142, 0.2)'
                                                                                        }
                                                                                    }],
                                                                                    yAxes: [{
                                                                                        ticks: {
                                                                                            fontColor: "#77778e",
                                                                                        },
                                                                                        display: true,
                                                                                        gridLines: {
                                                                                            color: 'rgba(119, 119, 142, 0.2)'
                                                                                        },
                                                                                        scaleLabel: {
                                                                                            display: false,
                                                                                            labelString: 'Thousands',
                                                                                            fontColor: 'rgba(119, 119, 142, 0.2)'
                                                                                        }
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
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="col-lg-6 col-md-6 col-sm-12 col-xl-12">
                                                        <div class="card overflow-hidden">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <h6 class="">Visitors</h6>
                                                                        <?php foreach($book as $dataa):  ?>
                                                                        <h3 class="mb-2 number-font" > <?php echo $dataa->Book_Title; ?></h3>
                                                                        <?php endforeach; ?>
                                                                    </div>
                                                                    <div class="col col-auto">
                                                                        <div class="counter-icon bg-secondary-gradient box-shadow-secondary brround ms-auto">
                                                                            <i class="fe fe-book-open text-white mb-5 "></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- AUTHORS BOOK COUNT  LIST -->
                    <div class="tab-pane " id="Authors">
                        <div class="row row-sm">
                            <div class="col-lg-12">
                                <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">List of Authors</h3>
                                        </div>
                                    <div class="card-body">
                                        <div class="table-responsive deleted-table">
                                            <table id="AuthorList_datatable" class="table table-bordered text-nowrap border-bottom">
                                                <thead>
                                                    <tr>
                                                         <th class="wd-15p border-bottom-0"></th>
                                                        <th class="wd-15p border-bottom-0">Author</th>
                                                        <th class="wd-15p border-bottom-0">Number  Books</th>
                                                        <th class="wd-15p border-bottom-0">View Books</th>
                                                    </tr>
                                                </thead>
                                                    <tbody id="AuthorList">
                                                    </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--END  AUTHORS BOOK COUNT LIST -->

                    <!-- LIST OF BOOK -->
                    <div class="tab-pane " id="Books">
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
													<div class="tabs-menu1 ">
														<!-- Tabs -->
														<ul class="nav panel-tabs">
															<li ><a href="#tab1" class="active me-1" data-bs-toggle="tab">Publish Books</a></li>
															<li><a href="#tab2" data-bs-toggle="tab" class="me-1">Unpublish Books</a></li>
														</ul>
													</div>
												</div>
												<div class="panel-body tabs-menu-body">
													<div class="tab-content">
														<div class="tab-pane active " id="tab1">
                                                            <div class="card-header">
                                                                <h3 class="card-title">List of Publish  Books</h3>
                                                            </div>
                                                            <div class="card-body">
                                                                    <div class="table-responsive ">
                                                                        <table id="publishlistbook_datatable" class="table table-bordered text-nowrap border-bottom">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th class="wd-15p border-bottom-0">#</th>
                                                                                    <th class="wd-15p border-bottom-0">Books</th>
                                                                                    <th class="wd-15p border-bottom-0">Author</th>
                                                                                    <th class="wd-15p border-bottom-0">Caterogy</th>
                                                                                    <th class="wd-15p border-bottom-0">Status</th>
                                                                                    <th class="wd-15p border-bottom-0"></th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody id="publishlistbook">
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                            </div>
                                                        </div>
														<div class="tab-pane  " id="tab2">
                                                        <div class="card-header">
                                                                <h3 class="card-title">List of Unpublish  Books</h3>
                                                            </div>
                                                            <div class="card-body">
                                                                    <div class="table-responsive ">
                                                                        <table id="unpublishlistbook_datatable" class="table table-bordered text-nowrap border-bottom">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th class="wd-15p border-bottom-0">#</th>
                                                                                    <th class="wd-15p border-bottom-0">Books</th>
                                                                                    <th class="wd-15p border-bottom-0">Author</th>
                                                                                    <th class="wd-15p border-bottom-0">Caterogy</th>
                                                                                    <th class="wd-15p border-bottom-0">Status</th>
                                                                                    <th class="wd-15p border-bottom-0"></th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody id="unpublishlistbook">
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
                    <!-- LIST OF BOOK -->
                </div>
            </div>
        </div>
    </div>
</div><!-- COL-END -->
 

<script type="text/javascript">
    //COUNT AUTHORS BOOKS//
    $(document).ready(function(){
        recent_transaction(); //call function recent_transaction
        //function show recent_transaction
        function recent_transaction(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo site_url('ReportController/countauthor')?>',
                async : true,
                dataType : 'json',
				success : function(data){
                    var html = '';
                    var i;
					for(i=0; i<data.length; i++){
                        $AID =data[i].AID;
                        html += '<tr>'+
                                    '<td>'+data[i].AID+'</td>'+
                                    '<td>'+data[i].Full_Name+'</td>'+
                                    '<td>'+data[i].num+'</td>'+
                                    '<td>'+
                                     '<a href="<?php echo site_url();?>Book/'+$AID+'"><i class="fa fa-book" aria-hidden="true"></i></a>'+
                                    '</td>'
                                '</tr>';
                    }
                    $('#AuthorList').html(html);  
					
                    var table = $('#AuthorList_datatable').DataTable();
                    $('#AuthorList_datatable tbody').on('click', 'tr', function () {
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
              //COUNT AUTHORS BOOKS//
			


                //LIST OF PUBLISH BOOK REPORT//
			// $.ajax({
            //     type  : 'ajax',
            //     url   : '<?php echo site_url('ReportController/publishlistbook')?>',
            //     async : true,
            //     dataType : 'json',
			// 	success : function(data){
            //         var html = '';
            //         var i;
            //         for(i=0; i<data.length; i++){
            //             if(data[i].Book_Status == 1)
            //             {
            //                 BookStatus ="PUBLISH"
            //             }else{
            //             }
            //             $id=data[i].Book_ID
            //             html += '<tr>'+
            //                         '<td>'+$id+'</td>'+
            //                         '<td>'+data[i].Book_Title+'</td>'+
            //                         '<td>'+data[i].Full_Name+'</td>'+
            //                         '<td>' +data[i].Book_Category+'</td>'+
            //                         '<td>'+BookStatus+'</td>'+
            //                         '<td><a href="<?php echo site_url();?>Book/'+$id+'"><i class="fa fa-book" aria-hidden="true"></i></a>'+
            //                     '</tr>';
            //         }
                                     
            //         $('#publishlistbook').html(html);  
            //         var table = $('#listbook_datatable').DataTable();
            //         $('#publishlistbook_datatable tbody').on('click', 'tr', function () {
            //             console.log( table.row( this ).data() );
            //               if ($(this).hasClass('selected')) {
            //                   $(this).removeClass('selected');
            //               } else {
            //                   table.$('tr.selected').removeClass('selected');
            //                   $(this).addClass('selected');
            //               }
            //         });
            //     }
            // });
                //LIST OF PUBLISH BOOK REPORT//

                    //LIST OF UNPUBLISH BOOK REPORT//
			// $.ajax({
            //     type  : 'ajax',
            //     url   : '<?php echo site_url('ReportController/unpublishlistbook')?>',
            //     async : true,
            //     dataType : 'json',
			// 	success : function(data){
            //         var html = '';
            //         var i;
            //         for(i=0; i<data.length; i++){
            //             if(data[i].Book_Status == 0)
            //             {
            //                 BookStatus ="UNPUBLISH"
            //             }else{
            //             }
            //             $id=data[i].Book_ID
            //             html += '<tr>'+
            //                         '<td>'+$id+'</td>'+
            //                         '<td>'+data[i].Book_Title+'</td>'+
            //                         '<td>'+data[i].Full_Name+'</td>'+
            //                         '<td>' +data[i].Book_Category+'</td>'+
            //                         '<td>'+BookStatus+'</td>'+
            //                         '<td><a href="<?php echo site_url();?>Book/'+$id+'"><i class="fa fa-book" aria-hidden="true"></i></a>'+
            //                     '</tr>';
            //         }
                                     
            //         $('#unpublishlistbook').html(html);  
            //         var table = $('#listbook_datatable').DataTable();
            //         $('#unpublishlistbook_datatable tbody').on('click', 'tr', function () {
            //             console.log( table.row( this ).data() );
            //               if ($(this).hasClass('selected')) {
            //                   $(this).removeClass('selected');
            //               } else {
            //                   table.$('tr.selected').removeClass('selected');
            //                   $(this).addClass('selected');
            //               }
            //         });
            //     }
            // });
                //LIST OF UNPUBLISH BOOK REPORT//

        }
    });
     //LIST OF PUBLISH BOOK REPORT//

</script>
