<!-- PAGE-HEADER -->
<style>
@media screen and (min-width: 601px) {
  h3 {
    font-size: 22px;
  }
}

@media screen and (max-width: 600px) {
  h3 {
    font-size: 5px;
  }
}

</style>
<div class="page-header">
	<div>
		<h1 class="page-title">Dashboard</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
			<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
		</ol>
	</div>
</div>
<!-- PAGE-HEADER END -->

            <!-- ROW-1 -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h6 class="">Total Number of Users</h6>
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
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h6 class="">Total number of Books</h6>
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
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h6 class="">Most Read books</h6>
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
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h6 class="">Top Authors</h6>
                                            <?php
                                             foreach($author as $dataa):  ?>
                                            <h3 class="mb-2 number-font"> <?php echo $dataa->Full_Name; ?></h3>
                                            <?php endforeach; ?>
                                        </div>
                                        <div class="col col-auto">
                                            <div class="counter-icon bg-success-gradient box-shadow-success brround  ms-auto">
                                                <i class="fe fe-user-check text-white mb-5 "></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-9">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"></h3>
                        </div>
                        <div class="card-body pb-0 ">
                                    <div class="chart-sort ">            
                                        <div class="btn-group" role="group" aria-label="Sort results">
                                        <button type="button" class="btn btn-primary">Day</button>
                                        <button type="button" class="btn btn-primary">Week</button>
                                        <button type="button" class="btn btn-primary">Month</button>
                                        <button type="button" class="btn btn-primary">Year</button>
                                        </div>
                                    </div>
                             <div id="chartArea" class="chart-donut"></div>
                             <!-- <div id="chart-area-spline-sracked" class="chartsh"></div> -->
                        </div>
                    </div>
                </div>
                <!-- COL END -->
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-3">
                    <div class="card custom-card ">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fe fe-users  mb-5 "></i> Users</h3>
                        </div>
                        <div class="card-body pt-0 ps-0 pe-0">
                            <div id="recentorders" class="apex-charts ht-150"></div>
                            <div class="row sales-product-infomation pb-0 mb-0 mx-auto wd-100p mt-6">
                                <div class="col-md-6 col justify-content-center text-center">
                                    <p class="mb-0 d-flex justify-content-center"><span class="legend bg-success"></span>Active users</p>
                                    <h3 class="mb-1 fw-bold">5238</h3>
                                    <div class="d-flex justify-content-center ">
                                        <p class="text-muted mb-0">Last 6 months</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col text-center float-end">
                                    <p class="mb-0 d-flex justify-content-center "><span class="legend bg-warning"></span>New Users</p>
                                    <h3 class="mb-1 fw-bold">3467</h3>
                                    <div class="d-flex justify-content-center ">
                                        <p class="text-muted mb-0">Last 6 months</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                   







    <script>


(function($) {
	 
     /*-----echart1-----*/
     var options = {
         chart: {
             height: 300,
             type: "line",
             stacked: false,
             toolbar: {
                 enabled: false
             },
             dropShadow: {
                 enabled: true,
                 opacity: 0.1,
             },
         },
         colors: [myVarVal, "#f99433", 'rgba(119, 119, 142, 0.05)'],
         dataLabels: {
             enabled: false
         },
         stroke: {
             curve: "smooth",
             width: [3, 3, 0],
             dashArray: [0, 4],
             lineCap: "round"
         },
         grid: {
             padding: {
                 left: 0,
                 right: 0
             },
             strokeDashArray: 3
         },
         markers: {
             size: 0,
             hover: {
                 size: 0
             }
         },
         series: [{
             name: "Total Users",
             type: 'line',
             data: [<?php echo $this->db->like('Date_created','-01-','both')->from("accounts")->count_all_results(); ?>, 
                    <?php echo $this->db->like('Date_created','-02-','both')->from("accounts")->count_all_results(); ?>,
                    <?php echo $this->db->like('Date_created','-03-','both')->from("accounts")->count_all_results(); ?>,
                    <?php echo $this->db->like('Date_created','-04-','both')->from("accounts")->count_all_results(); ?>,
                    <?php echo $this->db->like('Date_created','-05-','both')->from("accounts")->count_all_results(); ?>,
                    <?php echo $this->db->like('Date_created','-06-','both')->from("accounts")->count_all_results(); ?>,
                    <?php echo $this->db->like('Date_created','-07-','both')->from("accounts")->count_all_results(); ?>,
                    <?php echo $this->db->like('Date_created','-08-','both')->from("accounts")->count_all_results(); ?>,
                    <?php echo $this->db->like('Date_created','-09-','both')->from("accounts")->count_all_results(); ?>,
                    <?php echo $this->db->like('Date_created','-10-','both')->from("accounts")->count_all_results(); ?>,
                    <?php echo $this->db->like('Date_created','-11-','both')->from("accounts")->count_all_results(); ?>,
                    <?php echo $this->db->like('Date_created','-12-','both')->from("accounts")->count_all_results(); ?>]
             
         },
         
         {
             name: "Total Number of Books",
             type: 'line',
             data: [<?php echo $this->db->like('Date_Time','-01-','both')->from("book")->count_all_results(); ?>, 
                    <?php echo $this->db->like('Date_Time','-02-','both')->from("book")->count_all_results(); ?>,
                    <?php echo $this->db->like('Date_Time','-03-','both')->from("book")->count_all_results(); ?>,
                    <?php echo $this->db->like('Date_Time','-04-','both')->from("book")->count_all_results(); ?>,
                    <?php echo $this->db->like('Date_Time','-05','both')->from("book")->count_all_results(); ?>,
                    <?php echo $this->db->like('Date_Time','-06-','both')->from("book")->count_all_results(); ?>,
                    <?php echo $this->db->like('Date_Time','-07-','both')->from("book")->count_all_results(); ?>,
                    <?php echo $this->db->like('Date_Time','-08-','both')->from("book")->count_all_results(); ?>,
                    <?php echo $this->db->like('Date_Time','-09-','both')->from("book")->count_all_results(); ?>,
                    <?php echo $this->db->like('Date_Time','-10-','both')->from("book")->count_all_results(); ?>,
                    <?php echo $this->db->like('Date_Time','-11-','both')->from("book")->count_all_results(); ?>,
                    <?php echo $this->db->like('Date_Time','-12-','both')->from("book")->count_all_results(); ?>]
         }],
         xaxis: {
             type: "month",
             categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
             axisBorder: {
                 show: false,
                 color: 'rgba(119, 119, 142, 0.08)',
             },
             labels: {
                 style: {
                     color: '#8492a6',
                     fontSize: '12px',
                 },
             },
         },
         yaxis: {
             labels: {
                 style: {
                     color: '#8492a6',
                     fontSize: '12px',
                 },
             },
             axisBorder: {
                 show: false,
                 color: 'rgba(119, 119, 142, 0.08)',
             },
         },
         fill: {
             gradient: {
               inverseColors: false,
               shade: 'light',
               type: "vertical",
               opacityFrom: 0.85,
               opacityTo: 0.55,
               stops: [0, 100, 100, 100]
             }
           },
         tooltip: {
             show:false
         },
         legend: {
             position: "top",
             show:true
         }
     }
     document.querySelector("#chartArea").innerHTML = "";
     var chart = new ApexCharts(document.querySelector("#chartArea"), options);
     chart.render();
  
})(jQuery);
</script>
<script>


</script>





