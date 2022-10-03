<!-- PAGE-HEADER -->
<div class="page-header">
	<div>
		<h1 class="page-title">Emails</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="javascript:void(0);">Emails</a></li>
			<li class="breadcrumb-item active" aria-current="page">Registered Emails</li>
		</ol>
	</div>
</div>
<!-- PAGE-HEADER END -->
<!-- TABLE -->
<div class="row row-sm">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title"> <i class="side-menu__icon fe fe-settings">Registered Emails</i></h3>
		
			</div>
			<div class="card-body">
				<div class="table-responsive table-lg ">
					<table class="table table-bordered text-nowrap border-bottom w-100" id="datatable">
						<thead>
							<tr>
								<th class="wd-15p border-bottom-0">Name</th>
								<th class="wd-15p border-bottom-0">Email</th>
								<th class="wd-15p border-bottom-0">Username</th>
                                <th class="wd-15p border-bottom-0">Phone Number</th>
                                <th class="wd-15p border-bottom-0">Linked Account</th>
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
         
        //function show all product
        function show_product(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo site_url('EmailController/email_data')?>',
                async : true,
                dataType : 'json',
                success : function(data){
                  
                  // alert(data);
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].Full_Name+'</td>'+
                                '<td>'+data[i].Email+'</td>'+
                                '<td>'+data[i].Username+'</td>'+
                                '<td>'+data[i].Phone_Number +'</td>'+
                                '<td>Linkedin/Gmail</td>'+
                               
                                '</tr>';
                      }
                    $('#show_data').html(html);
                    $('#datatable').DataTable({
                      "pagingType": "full_numbers",
                      "searching": true,
                      retrieve: true,
                  });
                }
            });
        }

 
    });

</script>
