<!-- PAGE-HEADER -->
<div class="page-header">
	<div>
		<h1 class="page-title">Setting</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="javascript:void(0);">Backup History</a></li>
			<li class="breadcrumb-item active" aria-current="page">Authors/Users Archieved</li>
		</ol>
	</div>
  <div class="ms-auto pageheader-btn">
        <div class="form-group text-right">
            <select name="beast" id="account_Status" class="form-control form-select select2 ">
                <option value="">--Account Status--</option>
                <option value="1">Suspended</option>
                <option value="2">Banned</option>
                <option value="3">Deleted</option>
            </select>
        <a href="javascript:void(0);" id="btn_filter" class="btn btn-primary btn-icon text-white me-2">
        <i class="fa fa-search" aria-hidden="true"></i> Filter
        </a>
        <button id="reset" class="btn btn-danger btn-icon text-white me-2"><i class="fa fa-refresh" aria-hidden="true"></i>RESET</button>
        </div>
  </div>
</div>
<!-- PAGE-HEADER END -->
<!-- TABLE -->
<div class="row row-sm">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title"> <i class="side-menu__icon fe fe-settings"> Authors/Users Archieved</i></h3>
		
			</div>
			<div class="card-body">
        <!-- <div class="text-wrap">
            <div class="example"> -->
            <div class="btn-list text-end">
                  <button  class="btn btn-secondary"  id="btnRetrieve"><i class="fa fa-file-archive-o" aria-hidden="true"></i>Retrieve Account</button> 
                  <button class="btn btn-danger" id="btnDelete"><i class="fa fa-trash" aria-hidden="true"></i> Delete Account</button> 
                </div>

              <!-- </div>
            </div> -->
				<div class="table-responsive table-lg ">
          <br>
          <br>
					<table class="table table-bordered text-nowrap border-bottom w-100" id="datatable">
						<thead>
							<tr>
                <th></th>
								<th class="wd-15p border-bottom-0">AID</th>
								<th class="wd-15p border-bottom-0">Photo</th>
								<th class="wd-15p border-bottom-0">Fullname</th>
                <th class="wd-15p border-bottom-0">Username</th>
                <th class="wd-15p border-bottom-0">Phone Number</th>
                <th class="wd-15p border-bottom-0">Birth Date</th>
                <th class="wd-15p border-bottom-0">Credits</th>
                <th class="wd-15p border-bottom-0">Votes Credit</th>
								<th class="wd-10p border-bottom-0">Email</th>
                <th class="wd-10p border-bottom-0">Status</th>
                <th class="wd-10p border-bottom-0">Suspended Until</th>
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
          $("#reset").click(function(){ 
            location.reload();
            });
            $('#btn_filter').on('click',function(){
          var Account_Status   = $('#account_Status').val();
         alert(Account_Status);
            $.ajax({
                type  : 'POST',
                url   : '<?php echo site_url('SettingController/historyAdmin_data')?>',
                async : true,
                dataType : 'json',
                data : {Account_Status:Account_Status},
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                      if(data[i].Account_Status == "1")
                      {
                        $Status ="Suspended"
                      }else
                      {
                        $Status ="Deleted"
                      }
                        html += '<tr>'+
                                '<td></td>'+
                                '<td>'+data[i].AID+'</td>'+
                                '<td>'+data[i].Profile_Photo+'</td>'+
								                '<td>'+data[i].Full_Name+'</td>'+
                                '<td>'+data[i].Username+'</td>'+
                                '<td>'+data[i].Phone_Number+'</td>'+
                                '<td>'+data[i].Birth_Date+'</td>'+
                                '<td>'+data[i].Credits+'</td>'+
                                '<td>'+data[i].Votes_Credit+'</td>'+
                                '<td>'+data[i].Email+'</td>'+
                                '<td>'+$Status+'</td>'+
                                '<td>'+data[i].Account_SuspendDay+'</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                    var table = $('#datatable').DataTable({
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
                  $('#datatable tbody').on('click', 'tr', function () {
                        console.log( table.row( this ).data() );
                          if ($(this).hasClass('selected')) {
                              $(this).removeClass('selected');
                          } else {
                              table.$('tr.selected').removeClass('selected');
                              $(this).addClass('selected');
                          }
                      });
                      // RETRIEVE DATA BUTTON
                      $('#btnRetrieve').click(function () {
                              var arr = [];
                              var arr1 = [];
                              $.each(table.rows('.selected').data(), function() {
                                  arr.push(this[1]);
                                  arr1.push(this[2]);
                                  console.log(arr.toString());
                                  console.log(arr1.toString());
                                  alert(arr.toString());
                                  alert(arr1.toString());
                              });
                              Swal.fire({
                                          title: 'Are you sure?',
                                          text: "You won't be able to revert this!",
                                          icon: 'warning',
                                          showCancelButton: true,
                                          confirmButtonColor: '#3085d6',
                                          cancelButtonColor: '#d33',
                                          confirmButtonText: 'Yes, Retrieve it!'
                                        }).then((result) => {
                                          if (result.isConfirmed) {
                                            var account_id  =arr.toString();
                                            var account_status = 0;
                                          $.ajax({
                                                  type : "POST",
                                                  url  : "<?php echo site_url('SettingController/historyAuthors_retrieve')?>",
                                                  dataType : "JSON",
                                                  data : {account_id:account_id ,account_status:account_status}
                                              })
                                              .done(function(data) {
                                                Swal.fire({
                                                position: 'bottom-end',
                                                icon: 'success',
                                                title: 'Account as been successfully  Retrieve!',
                                                showConfirmButton: false,
                                                timer: 3000
                                                }),
                                                setTimeout(function(){
                                                  window.location.reload(1);
                                                }, 3000);
                                            }); 
                                          }
                                        })
                                
                    });
                    // RETRIEVE DATA BUTTON

                    // DELETE DATA BUTTON
                    $('#btnDelete').click(function () {
                              var arr = [];
                              var arr1 = [];
                              $.each(table.rows('.selected').data(), function() {
                                  arr.push(this[1]);
                                  arr1.push(this[2]);
                                  console.log(arr.toString());
                                  console.log(arr1.toString());
                                  alert(arr.toString());
                                  alert(arr1.toString());
                              });
                              Swal.fire({
                                          title: 'Are you sure?',
                                          text: "You won't be able to revert this!",
                                          icon: 'warning',
                                          showCancelButton: true,
                                          confirmButtonColor: '#3085d6',
                                          cancelButtonColor: '#d33',
                                          confirmButtonText: 'Yes, Delete it!'
                                        }).then((result) => {
                                          if (result.isConfirmed) {
                                            var account_delete  =arr.toString();
                                          $.ajax({
                                                  type : "POST",
                                                  url  : "<?php echo site_url('SettingController/historyAuthors_delete')?>",
                                                  dataType : "JSON",
                                                  data : {account_delete:account_delete}
                                              })
                                              .done(function(data) {
                                                Swal.fire({
                                                position: 'bottom-end',
                                                icon: 'success',
                                                title: 'Account as been successfully  Deleted!',
                                                showConfirmButton: false,
                                                timer: 3000
                                                }),
                                                setTimeout(function(){
                                                  window.location.reload(1);
                                                }, 3000);
                                            }); 
                                          }
                                        })
                                
                    });
                     // DELETE DATA BUTTON
                }
            });
          });
        }

 
    });

</script>
