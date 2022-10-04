 <!-- PAGE-HEADER -->
 <div class="page-header">
 <div>
		<h1 class="page-title">Setting</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="javascript:void(0);">Gift History</a></li>
			<li class="breadcrumb-item active" aria-current="page">Gift</li>
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
				<h3 class="card-title"> <i class="side-menu__icon fe fe-settings"> Gift History</i></h3>
		
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
							<tr>
								<th class="wd-15p border-bottom-0">Picture</th>
								<th class="wd-15p border-bottom-0">Book Title</th>
                <th class="wd-15p border-bottom-0">Book Chapter</th>
                <th class="wd-15p border-bottom-0">Author</th>
                <th class="wd-15p border-bottom-0">Gift Amount</th>
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
                url   : '<?php echo site_url('SettingController/gift_history')?>',
                async : true,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].Profile_Photo+'</td>'+
                                '<td>'+data[i].Book_Title+'</td>'+
								                '<td>'+data[i].Chapter_Title+'</td>'+
                                '<td>'+data[i].Full_Name+'</td>'+
                                '<td>'+data[i].Gift_Amount+'</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                    var table = $('#datatable').DataTable({
                        'columnDefs': [
                          {
                              // 'targets': 0,
                              // 'checkboxes': {
                              //   'selectRow': true
                              // }
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
