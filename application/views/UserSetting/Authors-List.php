<!-- PAGE-HEADER -->
<div class="page-header">
	<div>
		<h1 class="page-title">Accounts</h1>
		<ol class="breadcrumb">
		</ol>
	</div>
  <!-- <div class="col-lg-4">
    <div class="">
      <div class="card-body">
        <div class="wd-200 mg-b-30">
          <div class="input-group">
            <select class="form-control form-select status-dropdown" data-placeholder="Filter Account Type">
                <option value="">--Filter Account Type--</option>
                <option value="Author">Author</option>
                <option value="User">User</option>
            </select>
          </div>
        </div>
      </div>
    </div>
  </div> -->
</div>
<hr>
<!-- PAGE-HEADER END -->
<!-- TABLE -->
<div class="row row-sm">
  <div class="col-lg-2">
        <div>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="javascript:void(0);">Accounts</a></li>
              <li class="breadcrumb-item active" aria-current="page">Authors List</li>
            </ol>
        </div>
    </div>
    <div class="col-lg-10">
      <div class="card">
        <div class="card-header">
          <div class="ms-auto pageheader-btn">
            <div class="form-group text-right">
                  <button class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-pause-circle" aria-hidden="true"></i> Suspend Account</button> 
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="javascript:void(0)" id="btn3daySuspend">3 Days</a>
                          <a class="dropdown-item" href="javascript:void(0)"  id="btn7daySuspend">7 Days</a>
                          <a class="dropdown-item" href="javascript:void(0)"  id="btn1monthSuspend">1 Month</a>
                        </div>
                  <button class="btn btn-danger" id="btnBan"><i class="fa fa-ban" aria-hidden="true"></i> Ban Account</button>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive deleted-table">
              <br>
              <br>
            <table id="datatable" class="table table-bordered text-nowrap border-bottom">
                <thead>
                  <tr>
                    <th></th>
                    <th class="wd-15p border-bottom-0"></th>
                    <th class="wd-10p border-bottom-0">Email</th>
                    <th class="wd-15p border-bottom-0">Date Added</th>
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
</div>

<!-- -------------------------------------------------------------------------------------------------------- -->
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
                      <div class="col-lg-6">
                        <label class="col-md-6 col-form-label">Credits</label>
                          <input type="text" name="account_credits_edit" id="account_credits_edit" class="form-control"  readonly>
                      </div>
                      <div class="col-lg-6">
                        <label class="col-md-6 col-form-label">Votes Credit</label>
                          <input type="text" name="account_votes_edit" id="account_votes_edit" class="form-control"  readonly>
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

<!-- -------------------------------------------------------------------------------------------------------- -->

<script type="text/javascript" src="//gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/js/dataTables.checkboxes.min.js"></script>
<script type="text/javascript">
  
    $(document).ready(function(){
        show_product(); //call function show all product]
        $('#mydata').dataTable();
        //function show all product
        
        function show_product(){
          $.ajax({
                type  : 'ajax',
                url   : '<?php echo site_url('AccountController/viewauthoraccounts')?>',
                async : true,
                dataType : 'json',
                success : function(data){
                  
                  // alert(data);
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                      $AID =data[i].AID;
                        html += '<tr>'+
                                '<td>'+data[i].AID+'</td>'+
                                '<td>'+data[i].Full_Name+'</td>'+
                                '<td>'+data[i].Email+'</td>'+
								                '<td>'+data[i].added_date+'</td>'+
                                '<td style="text-align:right;">'+
                                '<a href="javascript:void(0);" data-bs-toggle="dropdown" class="nav-link leading-none d-flex px-1">'+
                                '<i class="fa fa-ellipsis-v"></i></a>'+
                                '<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">'+
                                '<div class="dropdown-divider m-0"></div>'+
                                  '<a href="#" class="dropdown-item item_edit"'+
                                      'data-account_id="'+data[i].AID+'" data-account_photo="'+data[i].Profile_Photo+'" data-account_fullname="'+data[i].Full_Name+'" data-account_username="'+data[i].Username+'"'+
                                      'data-account_phone="'+data[i].Phone_Number+'" data-account_birth="'+data[i].Birth_Date+'" data-account_credits="'+data[i].Credits+'"'+
                                      'data-account_votes="'+data[i].Votes_Credit+'" data-account_email="'+data[i].Email+'" ><i class="dropdown-icon fe fe-edit item_edit"></i>Update</a>'+' '+
                                  '<a href="#" class="dropdown-item reset_password" data-account_id="'+data[i].AID+'" data-account_password="'+data[i].Password+'"><i class="dropdown-icon fe fe-refresh-cw"></i>Reset Password</a>'+
                                  '<a href="<?php echo site_url();?>Author-Profile/'+$AID+'" class="dropdown-item"><i class="dropdown-icon fe fe-users-cw"></i>View Profile</a>'+
                                '</div>'+
                                '</td>'+
                                '</tr>';
                      }
                    $('#show_data').html(html);
                      var table = $('#datatable').DataTable({
                        'columnDefs': [
                          {
                              'targets': 0,
                              'checkboxes': {
                                'selectRow': false
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
                    
                       //STATUS DROPDOWN
                    $('.status-dropdown').on('change', function(e){
                      var Type = $(this).val();
                      $('.status-dropdown').val(Type)
                      console.log(Type)
                      //dataTable.column(6).search('\\s' + status + '\\s', true, false, true).draw();
                      table.column(3).search(Type).draw();
                    })
                        // BAN DATA BUTTON
                      $('#btnBan').click(function () {
                              var arr = [];
                              var arr1 = [];
                              $.each(table.rows('.selected').data(), function() {
                                  arr.push(this[0]);
                                  arr1.push(this[1]);
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
                                confirmButtonText: 'Yes, Banned it!'
                              }).then((result) => {
                                  if (result.isConfirmed) {
                                    var account_id  =arr.toString();
                                    var account_status = "2";
                                  $.ajax({
                                          type : "POST",
                                          url  : "<?php echo site_url('AccountController/banned')?>",
                                          dataType : "JSON",
                                          data : {account_id:account_id ,account_status:account_status}
                                      })
                                      .done(function(data) {
                                        Swal.fire({
                                        position: 'bottom-end',
                                        icon: 'success',
                                        title: 'Account as been successfully  Banned!',
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
                        // BAN DATA BUTTON

                        // 3 DAYS BAN DATA BUTTON
                      $('#btn3daySuspend').click(function () {
                        Date.prototype.addDays = function(days) {
                        this.setDate(this.getDate() + parseInt(days));
                        return this;
                        };
                          var today = new Date();
                          today.addDays(3);
                          var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
                          var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
                          var dateTime = date+' '+time;
                          alert(dateTime);
                          var arr = [];
                          var arr1 = [];
                        $.each(table.rows('.selected').data(), function() {
                                arr.push(this[0]);
                                arr1.push(this[1]);
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
                          confirmButtonText: 'Yes, suspend   it!'
                        }).then((result) => {
                            if (result.isConfirmed) {
                              var account_id  =arr.toString();
                              var account_status = "1";
                              var account_suspend = dateTime;
                            $.ajax({
                                    type : "POST",
                                    url  : "<?php echo site_url('AccountController/suspend')?>",
                                    dataType : "JSON",
                                    data : {account_id:account_id,account_status:account_status,account_suspend:account_suspend}
                                })
                                .done(function(data) {
                                  Swal.fire({
                                  position: 'bottom-end',
                                  icon: 'success',
                                  title: 'Account as been successfully  Suspended!',
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
                        // 3 DAYS BAN DATA BUTTON

                        // 7 DAYS BAN DATA BUTTON
                      $('#btn7daySuspend').click(function () {
                        Date.prototype.addDays = function(days) {
                        this.setDate(this.getDate() + parseInt(days));
                        return this;
                        };
                        var today = new Date();
                        today.addDays(7);
                        var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
                        var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
                        var dateTime = date+' '+time;
                        alert(dateTime);
                        var arr = [];
                        var arr1 = [];
                        $.each(table.rows('.selected').data(), function() {
                              arr.push(this[0]);
                              arr1.push(this[1]);
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
                          confirmButtonText: 'Yes, Suspend it!'
                        }).then((result) => {
                            if (result.isConfirmed) {
                              var account_id  =arr.toString();
                              var account_status = "1";
                              var account_suspend = dateTime;
                              $.ajax({
                                    type : "POST",
                                    url  : "<?php echo site_url('AccountController/suspend')?>",
                                    dataType : "JSON",
                                    data : {account_id:account_id,account_status:account_status,account_suspend:account_suspend}
                              })
                              .done(function(data) {
                                Swal.fire({
                                position: 'bottom-end',
                                icon: 'success',
                                title: 'Account as been successfully  Suspended!',
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
                        // 7 DAYS BAN DATA BUTTON

                        // 1 Month BAN DATA BUTTON
                      $('#btn1monthSuspend').click(function () {
                        Date.prototype.addDays = function(months) {
                        this.setDate(this.getDate() + parseInt(months));
                        return this;
                        };
                        var today = new Date();
                        today.addDays(30);
                        alert(today);
                        var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
                        var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
                        var dateTime = date+' '+time;
                        alert(dateTime);
                        var arr = [];
                        var arr1 = [];
                        $.each(table.rows('.selected').data(), function() {
                          arr.push(this[0]);
                          arr1.push(this[1]);
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
                          confirmButtonText: 'Yes, Suspend  it!'
                          }).then((result) => {
                          if (result.isConfirmed) {
                            var account_id  =arr.toString();
                            var account_status = "1";
                            var account_suspend = dateTime;
                          $.ajax({
                                  type : "POST",
                                  url  : "<?php echo site_url('AccountController/suspend')?>",
                                  dataType : "JSON",
                                  data : {account_id:account_id,account_status:account_status,account_suspend:account_suspend}
                          })
                          .done(function(data) {
                              Swal.fire({
                              position: 'bottom-end',
                              icon: 'success',
                              title: 'Account as been successfully  Suspended!',
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
                      // 1 Month BAN DATA BUTTON
                }
          });
        }
            



   
 
 
        //GET DATA FOR UPDATE RECORD//
        $('#show_data').on('click','.item_edit',function(){
            var account_id       = $(this).data('account_id');
            var account_fullname = $(this).data('account_fullname');
            var account_username = $(this).data('account_username');
            var account_phone    = $(this).data('account_phone');
            var account_birth    = $(this).data('account_birth');
            var account_credits  = $(this).data('account_credits');
            var account_votes    = $(this).data('account_votes');
            var account_email    = $(this).data('account_email');
            $('#Modal_Edit').modal('show');
            $('[name="account_id_edit"]').val(account_id);
            $('[name="account_fullname_edit"]').val(account_fullname);
            $('[name="account_username_edit"]').val(account_username);
            $('[name="account_phone_edit"]').val(account_phone);
            $('[name="account_birth_edit"]').val(account_birth);
            $('[name="account_credits_edit"]').val(account_credits);
            $('[name="account_votes_edit"]').val(account_votes);
            $('[name="account_email_edit"]').val(account_email);
        });
        //update record to database
         $('#btn_update').on('click',function(){
            var account_id       = $('#account_id_edit').val();
            var account_fullname = $('#account_fullname_edit').val();
            var account_username = $('#account_username_edit').val();
            var account_phone    = $('#account_phone_edit').val();
            var account_birth    = $('#account_birth_edit').val();
            var account_credits  = $('#account_credits_edit').val();
            var account_votes    = $('#account_votes_edit').val();
            var account_email    = $('#account_email_edit').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('AccountController/update')?>",
                dataType : "JSON",
                data : {account_id:account_id, account_fullname:account_fullname,
                        account_username:account_username,account_phone:account_phone , account_birth:account_birth, 
                        account_credits:account_credits,account_votes:account_votes , account_email:account_email
                },
                success: function(data){
                    $('[name="account_id_edit"]').val("");
                    $('[name="account_fullname_edit"]').val("");
                    $('[name="account_username_edit"]').val("");
                    $('[name="account_phone_edit"]').val("");
                    $('[name="account_birth_edit"]').val("");
                    $('[name="account_credits_edit"]').val("");
                    $('[name="account_votes_edit"]').val("");
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
              timer: 2000
              }),
              setTimeout(function(){
                window.location.reload(1);
              }, 2000);
           });    
        });
         //GET DATA FOR UPDATE RECORD//

         //GET DATA FOR RESER PASSWORD RECORD
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
                url  : "<?php echo site_url('AccountController/reset')?>",
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
              timer: 2000
              })
           }); 
        });
         //GET DATA FOR RESER PASSWORD RECORD//

         // GET DATA FOR DELETE RECORD//
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
                url  : "<?php echo site_url('AccountController/delete')?>",
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
        // GET DATA FOR DELETE RECORD//
    });
</script>
