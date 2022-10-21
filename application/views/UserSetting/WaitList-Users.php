<!-- PAGE-HEADER -->
<div class="page-header">
	<div>
		<h1 class="page-title">User Settings</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="javascript:void(0);">User Settings</a></li>
			<li class="breadcrumb-item active" aria-current="page">Waitlist Users</li>
		</ol>
	</div>
</div>
<!-- PAGE-HEADER END -->
<!-- TABLE -->
<div class="row row-sm">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title"> <i class="side-menu__icon fe fe-settings"> Waitlist Users</i></h3>
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
				<div class="table-responsive table-lg ">
					<table class="table table-bordered text-nowrap border-bottom w-100" id="datatable">
						<thead>
							<tr>
								<th class="wd-15p border-bottom-0">Id</th>
								<th class="wd-15p border-bottom-0">Fullname</th>
                                <th class="wd-15p border-bottom-0">Email</th>
                                <th class="wd-15p border-bottom-0">Registered</th>
							</tr>
						</thead>
						<tbody id="show_data">
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>





       

<script type="text/javascript">
  
    $(document).ready(function(){
        show_product(); //call function show all product
         
        $('#mydata').dataTable();
          
        //function show all product
        function show_product(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo site_url('AccountController/viewwaitlistaccounts')?>',
                async : true,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].WID+'</td>'+
                                '<td>'+data[i].Full_Name+'</td>'+
                                '<td>'+data[i].Email+'</td>'+
                                '<td>'+data[i].added_date+'</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                    var table = $('#datatable').DataTable( {
                        
                                dom: 'Bfrtip',
                                buttons: [
                                    'csv', 'excel'
                                ]
                            } );
                    $('#datatable tbody').on('click', 'tr', function () {
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
                      table.column(3).search(Type).draw();
                    })
                }
            });
        }
    });

</script>
