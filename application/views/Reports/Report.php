<!-- PAGE-HEADER -->
<div class="page-header">
	<div>
		<h1 class="page-title">Reports</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="javascript:void(0);">Reports</a></li>
		</ol>
	</div>>
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
                            <li><a href="#Books" data-bs-toggle="tab">List of Books</a></li>
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
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h3 class="card-title">Sales Stats</h3>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="chart-container">
                                                                    <canvas id="chartBar1" class="h-275"></canvas>
                                                                    <script>
                                                                                                                                            /* Bar-Chart1 */
                                                                            var ctx = document.getElementById("chartBar1").getContext('2d');
                                                                            var myChart = new Chart(ctx, {
                                                                                type: 'bar',
                                                                                data: {
                                                                                    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep"],
                                                                                    datasets: [{
                                                                                        label: 'Sales',
                                                                                        data: [200, 450, 290, 367, 256, 543, 345, 290, 367],
                                                                                        borderWidth: 2,
                                                                                        backgroundColor: '#6259ca',
                                                                                        borderColor: '#6259ca',
                                                                                        borderWidth: 2.0,
                                                                                        pointBackgroundColor: '#ffffff',

                                                                                    }]
                                                                                },
                                                                                options: {
                                                                                    responsive: true,
                                                                                    maintainAspectRatio: false,
                                                                                    legend: {
                                                                                        display: true
                                                                                    },
                                                                                    scales: {
                                                                                        yAxes: [{
                                                                                            ticks: {
                                                                                                beginAtZero: true,
                                                                                                stepSize: 150,
                                                                                                fontColor: "#77778e",
                                                                                            },
                                                                                            gridLines: {
                                                                                                color: 'rgba(119, 119, 142, 0.2)'
                                                                                            }
                                                                                        }],
                                                                                        xAxes: [{
                                                                                            ticks: {
                                                                                                display: true,
                                                                                                fontColor: "#77778e",
                                                                                            },
                                                                                            gridLines: {
                                                                                                display: false,
                                                                                                color: 'rgba(119, 119, 142, 0.2)'
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
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                                        <div class="card overflow-hidden">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <h6 class="">Total Credits</h6>
                                                                        <h3 class="mb-2 number-font" > <?php echo $this->db->count_all('accounts'); ?></h3>
                                                                    </div>
                                                                    <div class="col col-auto">
                                                                        <div class="counter-icon bg-secondary-gradient box-shadow-secondary brround ms-auto">
                                                                            <i class="fe fe-book-open text-white mb-5 "></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                                        <div class="card overflow-hidden">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <h6 class="">Visitors</h6>
                                                                        <h3 class="mb-2 number-font" ><?php echo $this->db->count_all('accounts'); ?></h3>
                                                                    </div>
                                                                    <div class="col col-auto">
                                                                        <div class="counter-icon bg-secondary-gradient box-shadow-secondary brround ms-auto">
                                                                            <i class="fe fe-book-open text-white mb-5 "></i>
                                                                        </div>
                                                                    </div>
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
                                                                        <table id="example" class="table  text-nowrap border-bottom">
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
                                                                        </table>
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
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-12">
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
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- AUTHORS LIST -->
                    <div class="tab-pane " id="Authors">
                        <div class="row row-sm">
                            <div class="col-lg-12">
                                <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">List of Authors</h3>
                                        </div>
                                    <div class="card-body">
                                        <div class="table-responsive deleted-table">
                                            <table id="example" class="table table-bordered text-nowrap border-bottom">
                                                <thead>
                                                    <tr>
                                                        <th class="wd-15p border-bottom-0">Author</th>
                                                        <th class="wd-15p border-bottom-0">Number of Books</th>
                                                        <th class="wd-15p border-bottom-0">Status</th>
                                                        <th class="wd-15p border-bottom-0"></th>
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
                                                            <td><?php echo $dataa->Full_Name; ?></td>
                                                            <td><?php echo $dataa->Full_Name; ?></td>
                                                            <td><?php echo $Status1; ?></td>   
                                                            <td><a href="<?php echo base_url('/index.php/Book/'.$id); ?>"><i class="fa fa-user" aria-hidden="true"></i></a></td>
                                                            
                                                            
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
                    <!--END  AUTHORS LIST -->

                    <!-- LIST OF BOOK -->
                    <div class="tab-pane " id="Books">
                        <div class="row row-sm">
                            <div class="col-lg-12">
                                <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">List of Books</h3>
                                        </div>
                                    <div class="card-body">
                                        <div class="table-responsive deleted-table">
                                                <table id="example" class="table table-bordered text-nowrap border-bottom">
                                                    <thead>
                                                        <tr>
                                                            <th class="wd-15p border-bottom-0">Books</th>
                                                            <th class="wd-15p border-bottom-0">Author</th>
                                                            <th class="wd-15p border-bottom-0">Views</th>
                                                            <th class="wd-15p border-bottom-0">Votes</th>
                                                            <!-- <th class="wd-15p border-bottom-0"></th> -->
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
                                                                <!-- <td><a href="<?php echo site_url('/Book/'.$id); ?>"><i class="fa fa-book" aria-hidden="true"></i></a></td> -->
                                                                
                                                                
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
                    <!-- LIST OF BOOK -->
                </div>
            </div>
        </div>
    </div>
</div><!-- COL-END -->
 
 