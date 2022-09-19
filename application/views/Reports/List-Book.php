 <!-- PAGE-HEADER -->
 <div class="page-header">
	<div>
		<h1 class="page-title">Reports</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="javascript:void(0);">Reports</a></li>
			<li class="breadcrumb-item active" aria-current="page">List of Books</li>
		</ol>
	</div>
    <div class="col-lg-4">
    <div class="">
      <div class="card-body">
        <div class="wd-200 mg-b-30">
          <div class="input-group">
          <select name="beast" id="select-beast" class="form-control form-select filter-Dropdown " >
                <option value="">--Filter Categories--</option>
                <option value="Adventure">Adventure</option>
                <option value="Romance">Romance</option>
                <option value="Contemporary">Contemporary</option>
                <option value="Mystery">Mystery</option>
                <option value="Horror">Horror</option>
                <option value="Thriller">Thriller</option>
                <option value="Paranormal">Paranormal</option>
                <option value="Children’s">Children’s</option>
                <option value="History">History</option>
                <option value="Classics">Classics</option>
                <option value="Suspense">Suspense</option>
            </select>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- PAGE-HEADER END -->
<!-- TABLE -->
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
								<th class="wd-15p border-bottom-0">Book Cover</th>
                                <th class="wd-15p border-bottom-0">Book Title</th>
								<th class="wd-15p border-bottom-0">Book Author</th>
								<th class="wd-15p border-bottom-0">Category</th>
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
                                    <td><?php echo $dataa->Book_Cover; ?></td>
                                    <td><?php echo $dataa->Book_Title; ?></td>
                                    <td><?php echo $dataa->Full_Name; ?></td>
                                    <td><?php echo $dataa->Book_Category; ?></td>
                                    <td><?php echo $Status1; ?></td>   
                                    <td><a href="<?php echo base_url('/index.php/Book/'.$id); ?>" class="btn btn-primary">View</a></td>
                                    
                                    
                                </tr>
                                <?php endforeach; ?>
                        </tbody>
						
					</table>

                    
				</div>
			</div>
		</div>
	</div>
</div>





        <!-- MODAL EDIT -->
        <form>
            <div class="modal fade" id="Modal_Edit_Book" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Book Status</h5>
                          <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
                  </div>
                  <div class="modal-body">
                        <div class="row row-sm">
                            <input type="hidden" name="book_id_edit" id="book_id_edit" class="form-control" placeholder="AID" readonly>
                        </div>
                        <div class="row row-sm">
                            <label for="validationCustom04">Book Status</label>
                            <select class="form-select select2 form-control" name="book_status_edit" id="book_status_edit" required>
                                <option selected disabled value="">....</option>
                                <option value="0">Unpublish</option>
                                <option value="1">Publish</option>
                            </select>
                        </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" type="submit" id="btn_update_book" class="btn btn-primary">Update</button>
                  </div>
                </div>
              </div>
            </div>
        </form>
        <!--END MODAL EDIT-->


        <script>

$(document).ready(function() {
    // $('#example').DataTable({
    //                   "pagingType": "full_numbers",
    //                   "searching": true,
    //                   retrieve: true,
    //                   dom: 'Bfrtip',
    //                     buttons: [
    //                         'copy', 'csv', 'excel', 'pdf', 'print'
    //                     ]
    //               });

    //______Delete Data Table
	var table = $('#example').DataTable({
		// language: {
		// 	searchPlaceholder: 'Search...',
		// 	sSearch: '',
		// },
        buttons: [
            {
                text: 'My button',
                action: function ( e, dt, node, config ) {
                    alert( 'Button activated' );
                }
            }
        ]

	}); 
    $('#example tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } );
    $('#button').click( function () {
        table.row('.selected').remove().draw( false );
    } );

    $('.filter-Dropdown').on('change', function(e){
                      var Type = $(this).val();
                      $('.filter-Dropdown').val(Type)
                      console.log(Type)
                      //dataTable.column(6).search('\\s' + status + '\\s', true, false, true).draw();
                      table.column(3).search(Type).draw();
                    })

    
    
} );
            </script>
