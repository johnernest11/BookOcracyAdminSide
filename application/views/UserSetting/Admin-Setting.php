<!-- PAGE-HEADER -->
<div class="page-header">
	<div>
		<h1 class="page-title">User Settings</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="javascript:void(0);">User Settings</a></li>
			<li class="breadcrumb-item active" aria-current="page">Authors/Users</li>
		</ol>
	</div>
</div>
<!-- PAGE-HEADER END -->
<!-- TABLE -->
<div class="row row-sm">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title"> <i class="side-menu__icon fe fe-settings"> Authors/Users</i></h3>
		
			</div>
			<div class="card-body">
				<div class="table-responsive table-lg ">
					<table class="table table-bordered text-nowrap border-bottom w-100" id="datatable">
						<thead>
							<tr>
								<th class="wd-15p border-bottom-0">Id</th>
								<th class="wd-15p border-bottom-0">Photo</th>
								<th class="wd-15p border-bottom-0">Fullname</th>
                <th class="wd-15p border-bottom-0">Username</th>
                <th class="wd-15p border-bottom-0">Phone Number</th>
                <th class="wd-15p border-bottom-0">Birth Date</th>
								<th class="wd-10p border-bottom-0">Email</th>
								<th class="wd-10p border-bottom-0"></th>
                
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





        <!-- MODAL EDIT -->
        <form>
            <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Accounts</h5>
                          <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
                  </div>
                  <div class="modal-body">
                        <div class="row row-sm">
                            <input type="hidden" name="account_id_edit" id="account_id_edit" class="form-control"  readonly>
                        </div>
                        <div class="row row-sm">
                              <div class="col-lg-6">
                                <label class="col-md-6 col-form-label">Full Name</label>
                                  <input type="text" name="account_fullname_edit" id="account_fullname_edit" class="form-control" >
                              </div>
                              <div class="col-lg-6">
                                <label class="col-md-6 col-form-label">Username</label>
                                  <input type="text" name="account_username_edit" id="account_username_edit" class="form-control" >
                              </div>
                        </div>
                        <div class="row row-sm">
                              <div class="col-lg-6">
                                <label class="col-md-6 col-form-label">Phone Number</label>
                                  <input type="number" name="account_phone_edit" id="account_phone_edit" class="form-control" >
                              </div>
                              <div class="col-lg-6">
                                <label class="col-md-6 col-form-label">Birth Date</label>
                                  <input type="date" name="account_birth_edit" id="account_birth_edit" class="form-control" >
                              </div>
                        </div>
                        <div class="row row-sm">
                              <div class="col-lg-12">
                                <label class="col-md-12 col-form-label">Email</label>
                                  <input type="email" name="account_email_edit" id="account_email_edit" class="form-control">
                              </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" type="submit" id="btn_update" class="btn btn-primary">Update</button>
                  </div>
                </div>
              </div>
            </div>
        </form>
        <!--END MODAL EDIT-->

		 <!--ARCHIEVE MODAL-->
         <form>
         <div class="modal fade" id="Modal_Archieve" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Accounts</h5>
                          <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
                  </div>
                  <div class="modal-body">
                  <input type="text" name="account_id_archieve_edit" id="account_id_archieve_edit" class="form-control"  readonly>
                  <input type="number" name="account_archieve_edit" id="account_archieve_edit" value="1" class="form-control"  readonly>
                          <strong>Are you sure to delete this record?</strong>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" type="submit" id="btn_archieve" class="btn btn-warning">Delete</button>
                  </div>
                </div>
              </div>
            </div>
        </form>
        <!--END ARCHIEVE MODAL-->
		

        <!--MODAL RESET PASSWORD-->
        <form>
         <div class="modal fade" id="Modal_Reset" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Reset Password</h5>
                          <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
                  </div>
                  <div class="modal-body">
                        <div class="form-group row">
                            <input type="hidden" name="account_id_reset" id="account_id_reset" class="form-control"  readonly>
                            
                            <div class="row row-sm">
                              <div class="col-lg-12">
                                <div class="form-group">
                                <label class="col-md-6 col-form-label">Password</label>
                                <input type="password" name="account_password_reset" id="account_password_reset" class="form-control" value="default"  readonly>
                                </div>
                              </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" type="submit" id="btn_reset" class="btn btn-warning">Reset</button>
                  </div>
                </div>
              </div>
            </div>
        </form>
        <!--MODAL RESET PASSWORD-->



<script type="text/javascript">
  
    $(document).ready(function(){
        show_product(); //call function show all product
         
        $('#mydata').dataTable();
          
        //function show all product
        function show_product(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo site_url('PageController/AdminSetting_data')?>',
                async : true,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].Id+'</td>'+
                                '<td>'+data[i].Profile_Photo+'</td>'+
								                '<td>'+data[i].Full_Name+'</td>'+
                                '<td>'+data[i].Username+'</td>'+
                                '<td>'+data[i].Phone_Number+'</td>'+
                                '<td>'+data[i].Birth_Date+'</td>'+
                                '<td>'+data[i].Email+'</td>'+
                                '<td style="text-align:right;">'+
                                '<a href="javascript:void(0);" data-bs-toggle="dropdown" class="nav-link leading-none d-flex px-1">'+
                               '<i class="fa fa-ellipsis-v"></i>'+
                                                '</a>'+
                                '<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">'+
                                                    '<div class="dropdown-divider m-0"></div>'+
                                                        '<a href="#" class="dropdown-item item_edit"'+
                                                            'data-account_id="'+data[i].Id+'" data-account_photo="'+data[i].Profile_Photo+'" data-account_fullname="'+data[i].Full_Name+'" data-account_username="'+data[i].Username+'"'+
                                                            'data-account_phone="'+data[i].Phone_Number+'" data-account_birth="'+data[i].Birth_Date+'"'+
                                                            'data-account_email="'+data[i].Email+'" ><i class="dropdown-icon fe fe-edit item_edit"></i>Update</a>'+' '+
                                                        '<a href="#" class="dropdown-item reset_password" data-account_id="'+data[i].Id+'" data-account_password="'+data[i].Password+'"><i class="dropdown-icon fe fe-refresh-cw"></i>Reset Password</a>'+
                                                        '<a href="#" class="dropdown-item archieve_data" data-account_id_archieve="'+data[i].Id+'"data-account_archieve="'+data[i].Archieve_Data+'"><i class="dropdown-icon fe fe-folder"></i>Archive</a>'+
                                  '</div>'+
                                '</td>'+
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
 
 
        //get data for update record
        $('#show_data').on('click','.item_edit',function(){
            var account_id       = $(this).data('account_id');
            var account_fullname = $(this).data('account_fullname');
            var account_username = $(this).data('account_username');
            var account_phone    = $(this).data('account_phone');
            var account_birth    = $(this).data('account_birth');
            var account_email    = $(this).data('account_email');
             
            $('#Modal_Edit').modal('show');
            $('[name="account_id_edit"]').val(account_id);
            $('[name="account_fullname_edit"]').val(account_fullname);
            $('[name="account_username_edit"]').val(account_username);
            $('[name="account_phone_edit"]').val(account_phone);
            $('[name="account_birth_edit"]').val(account_birth);
            $('[name="account_email_edit"]').val(account_email);
        });
 
        //update record to database
         $('#btn_update').on('click',function(){
            var account_id       = $('#account_id_edit').val();
            var account_fullname = $('#account_fullname_edit').val();
            var account_username = $('#account_username_edit').val();
            var account_phone    = $('#account_phone_edit').val();
            var account_birth    = $('#account_birth_edit').val();
            var account_email    = $('#account_email_edit').val();
            
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('PageController/update_admin')?>",
                dataType : "JSON",
                data : {account_id:account_id, account_fullname:account_fullname,
                        account_username:account_username,account_phone:account_phone , account_birth:account_birth, 
                         account_email:account_email
                },
                success: function(data){
                    $('[name="account_id_edit"]').val("");
                    $('[name="account_fullname_edit"]').val("");
                    $('[name="account_username_edit"]').val("");
                    $('[name="account_phone_edit"]').val("");
                    $('[name="account_birth_edit"]').val("");
                    $('[name="account_email_edit"]').val("");
                    $('#Modal_Edit').modal('hide');
                    show_product();
                } 
            })
            .done(function(data) {
              Swal.fire({
              position: 'bottom-end',
              icon: 'success',
              title: 'Data as been successfully Updated',
              showConfirmButton: false,
              timer: 3000
              })
           });    
        });


         //get data for RESET PASSWORD record
         $('#show_data').on('click','.reset_password',function(){
            var account_id = $(this).data('account_id');
            var account_password = $(this).data('account_password');
             
            $('#Modal_Reset').modal('show');
            $('[name="account_id_reset"]').val(account_id);
            // $('[name="account_password_reset"]').val(account_password);
        });
        //Reset Password record to database
        $('#btn_reset').on('click',function(){
            var account_id       = $('#account_id_reset').val();
            var account_password = $('#account_password_reset').val();
            
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('PageController/update_reset')?>",
                dataType : "JSON",
                data : {account_id:account_id, account_password:account_password
                },
                success: function(data){
                    $('[name="account_id_reset"]').val("");
                    $('[name="account_password_reset"]').val("");
                    $('#Modal_Reset').modal('hide');
                    show_product();
                }
            })
            .done(function(data) {
              Swal.fire({
              position: 'bottom-end',
              icon: 'success',
              title: 'Password as been successfully Reset!',
              showConfirmButton: false,
              timer: 3000
              })
           }); 
        });





        // /get data for ARCHIEVE record
         $('#show_data').on('click','.archieve_data',function(){
            var account_id_archieve = $(this).data('account_id_archieve');
            var account_archieve = $(this).data('account_archieve');
             
            $('#Modal_Archieve').modal('show');
            $('[name="account_id_archieve_edit"]').val(account_id_archieve);
            // $('[name="account_archieve_edit').val(account_archieve);
        });
        //Reset Password record to database
        $('#btn_archieve').on('click',function(){
            var account_id_archieve = $('#account_id_archieve_edit').val();
            var account_archieve = $('#account_archieve_edit').val();
            
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('PageController/update_archieve')?>",
                dataType : "JSON",
                data : {account_id_archieve:account_id_archieve, account_archieve:account_archieve
                },
                success: function(data){
                    $('[name="account_id_archieve"]').val("");
                    $('[name="account_archieve"]').val("");
                    $('#Modal_Archieve').modal('hide');
                    show_product();
                }
            })
            .done(function(data) {
              Swal.fire({
              position: 'bottom-end',
              icon: 'success',
              title: 'Data as Successfully Deleted',
              showConfirmButton: false,
              timer: 2000
              }),
              setTimeout(function(){
                window.location.reload(1);
              }, 3000);
           });
        });



 
 
        //get data for delete record
        $('#show_data').on('click','.item_delete',function(){
            var account_id = $(this).data('account_id');
             
            $('#Modal_Delete').modal('show');
            $('[name="account_id_delete"]').val(account_id);
        });
 
        //delete record to database
         $('#btn_delete').on('click',function(){
            var account_id = $('#account_id_delete').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('PageController/delete')?>",
                dataType : "JSON",
                data : {account_id:account_id},
                success: function(data){
                    $('[name="account_id_delete"]').val("");
                    $('#Modal_Delete').modal('hide');
                    show_product();
                }
            })
            .done(function(data) {
              Swal.fire({
              position: 'bottom-end',
              icon: 'success',
              title: 'Account as been successfully  Deleted!',
              showConfirmButton: false,
              timer: 3000
              })
           }); 
        });
 
    });






// PREVIEW IMAGE BEFORE UPLOAD
    // $(document).ready(()=>{
    //   $('#account_photo_edit').change(function(){
    //     const file = this.files[0];
    //     console.log(file);
    //     if (file){
    //       let reader = new FileReader();
    //       reader.onload = function(event){
    //         console.log(event.target.result);
    //         $('#imgPreview').attr('src', event.target.result);
    //       }
    //       reader.readAsDataURL(file);
    //     }
    //   });
    // });
 

</script>
