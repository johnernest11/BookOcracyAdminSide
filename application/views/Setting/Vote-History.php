 <!-- PAGE-HEADER -->
 <div class="page-header">
 <div>
		<h1 class="page-title">Setting</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="javascript:void(0);">Vote History</a></li>
			<li class="breadcrumb-item active" aria-current="page">Vote</li>
		</ol>
	</div>
    <div class="col-lg-4">
    <!-- <div class="">
      <div class="card-body">
        <div class="wd-200 mg-b-30">
          <div class="input-group">
          <select class="form-control form-select status-dropdown" data-placeholder="Filter Account Type">
                <optgroup label="Search Account Type">
                <option value="">--Account Status--</option>
                <option value="Suspended">Suspended</option>
                <option value="Banned">Banned</option>
                </optgroup>
            </select>
          </div>
        </div>
      </div>
    </div> -->
  </div>
</div>
<!-- PAGE-HEADER END -->

<!-- TABLE -->
<div class="row row-sm">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title"> <i class="side-menu__icon fe fe-settings"> Vote History</i></h3>
		
			</div>
			<div class="card-body">
        <!-- <div class="text-wrap">
            <div class="example"> -->
            <div class="btn-list text-end">
                  <!-- <button  class="btn btn-secondary"  id="btnRetrieve"><i class="fa fa-file-archive-o" aria-hidden="true"> Unsuspend/Unbanned Account</i></button>  -->
                </div>

              <!-- </div>
            </div> -->
				<div class="table-responsive table-lg ">
          <br>
          <br>
					<table class="table table-bordered text-nowrap border-bottom w-100" id="datatable">
						<thead> 
                            <th class="wd-15p border-bottom-0">Picture</th>
                            <th class="wd-15p border-bottom-0">Book Title</th>
                            <th class="wd-15p border-bottom-0">Author</th>
                            <th class="wd-15p border-bottom-0">Vote Value</th>
                            <th class="wd-15p border-bottom-0">Date</th>
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
                url   : '<?php echo site_url('SettingController/vote_history')?>',
                async : true,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        $picture =data[i].Book_Cover
                        html += '<tr>'+
                                '<td><img src="<?=  base_url('images/+data[i].Book_Cover+')?>"></td>'+
                                '<td>'+data[i].Book_Title+'</td>'+
                                '<td>'+data[i].Full_Name+'</td>'+
                                '<td>'+data[i].Vote_Value+'</td>'+
                                '<td>'+data[i].vote_date+'</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                    var table = $('#datatable').DataTable({
                        order: [[4, 'desc']],
										dom: 'Bfrtip',
										buttons: [
											'csv', 'excel'
										]
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

                      $('.status-dropdown').on('change', function(e){
                      var Type = $(this).val();
                      $('.status-dropdown').val(Type)
                      console.log(Type)
                      //dataTable.column(6).search('\\s' + status + '\\s', true, false, true).draw();
                      table.column(9).search(Type).draw();
                    })
                      
                }
            });
        }

 
    });

</script>
