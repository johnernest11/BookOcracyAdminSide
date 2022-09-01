 <!-- PAGE-HEADER -->
 <div class="page-header">
	<div>
		<h1 class="page-title">User Settings</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="javascript:void(0);">User Settings</a></li>
			<li class="breadcrumb-item active" aria-current="page">Account Settings</li>
		</ol>
	</div>
</div>
<!-- PAGE-HEADER END -->

<div class="row row-sm">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Account Settings</h3>
		
			</div>
			<div class="card-body">
				<div class="table-responsive table-lg deleted-table">
					<table class="table table-bordered text-nowrap border-bottom w-100" id="delete-datatable">
						<thead>
							<tr>
								<th class="wd-15p border-bottom-0">AID</th>
								<th class="wd-15p border-bottom-0">Photo</th>
								<th class="wd-15p border-bottom-0">Fullname</th>
								<th class="wd-10p border-bottom-0">Email</th>
								<th class="wd-25p border-bottom-0"></th>
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
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">AID</label>
                            <div class="col-md-10">
                              <input type="text" name="account_id_edit" id="account_id_edit" class="form-control" placeholder="AID" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Fullname</label>
                            <div class="col-md-10">
                              <input type="text" name="account_name_edit" id="account_name_edit" class="form-control" placeholder="Fullname">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Email</label>
                            <div class="col-md-10">
                              <input type="text" name="account_email_edit" id="account_email_edit" class="form-control" placeholder="Email">
                            </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_update" class="btn btn-primary">Update</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL EDIT-->

		 <!--MODAL DELETE-->
         <form>
            <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                       <strong>Are you sure to delete this record?</strong>
                  </div>
                  <div class="modal-footer">
                    <input type="text" name="account_id_delete" id="account_id_delete" class="form-control">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL DELETE-->
		



<script type="text/javascript">
    $(document).ready(function(){
        show_product(); //call function show all product
         
        $('#mydata').dataTable();
          
        //function show all product
        function show_product(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo site_url('product/product_data')?>',
                async : true,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].AID+'</td>'+
                                '<td>'+data[i].Profile_Photo+'</td>'+
								'<td>'+data[i].Full_Name+'</td>'+
                                '<td>'+data[i].Email+'</td>'+
                                '<td style="text-align:right;">'+
                                    '<a href="javascript:void(0);" class="btn btn-info badge btn-sm item_edit"'+
									'data-account_id="'+data[i].AID+'"'+
									'data-account_name="'+data[i].Full_Name+'"'+
									'data-account_email="'+data[i].Email+'">Edit</a>'+' '+
                                    '<a href="javascript:void(0);" class="btn btn-danger badge btn-sm item_delete" data-account_id="'+data[i].AID+'">Delete</a>'+
                                '</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });
        }
 
 
        //get data for update record
        $('#show_data').on('click','.item_edit',function(){
            var account_id = $(this).data('account_id');
            var account_name = $(this).data('account_name');
            var account_email        = $(this).data('account_email');
             
            $('#Modal_Edit').modal('show');
            $('[name="account_id_edit"]').val(account_id);
            $('[name="account_name_edit"]').val(account_name);
            $('[name="account_email_edit"]').val(account_email);
        });
 
        //update record to database
         $('#btn_update').on('click',function(){
            var account_id = $('#account_id_edit').val();
            var account_name = $('#account_name_edit').val();
            var account_email        = $('#account_email_edit').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('PageController/update')?>",
                dataType : "JSON",
                data : {account_id:account_id , account_name:account_name, account_email:account_email},
                success: function(data){
                    $('[name="account_id_edit"]').val("");
                    $('[name="account_name_edit"]').val("");
                    $('[name="account_email_edit"]').val("");
                    $('#Modal_Edit').modal('hide');
                    show_product();
                }
            });
            return false;
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
            });
            return false;
        });
 
    });
 
</script>



		

		