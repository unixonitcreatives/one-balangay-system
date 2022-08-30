<!DOCTYPE html>
<html>
<?php $title = "Admin | Settings"; ?>
<?php $subTitle = "One Balangay Ph"; ?>
<?php $breadcrumb = "Administrator Vince"; ?>

<head>
	<title><?php echo $title;?></title>
	<?php include "../template/header.php";?>
	<?php include "../template/script.php";?>
	<!-- DataTables  & Plugins -->
	<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
	<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
	<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
	<script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
	<script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
	<script src="../plugins/jszip/jszip.min.js"></script>
	<script src="../plugins/pdfmake/pdfmake.min.js"></script>
	<script src="../plugins/pdfmake/vfs_fonts.js"></script>
	<script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
	<script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
	<script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
</head>
<?php include "../template/menu.php";?>
<body class="hold-transition sidebar-mini layout-fixed">
	
	<div class="wrapper">

		<!-- Preloader -->
		  <!-- <div class="preloader flex-column justify-content-center align-items-center">
		    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
		  </div>
 -->
		  <div class="content-wrapper">
		  		<section class="content-header">
		  	    <!-- Content Header (Page header) -->
			    <div class="content-header">
			      <div class="container-fluid">
			        <div class="row mb-2">
			          <div class="col-sm-6">
			            <h1 class="m-0">Settings	</h1>
			          </div><!-- /.col -->
			          <div class="col-sm-6">
			            <ol class="breadcrumb float-sm-right">
			              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
			              <li class="breadcrumb-item active"><?php echo $subTitle;?></li>
			            </ol>
			          </div><!-- /.col -->
			        </div><!-- /.row -->
			      </div><!-- /.container-fluid -->
			    </div>
			    <!-- /.content-header -->
				</section>

				<div class="card-body">
					<div class="alert alert-info alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-info"></i> Deleting Admin Accounts</h5>
            If you want to delete an Admin Account, please contact technical support @ xxx xxxx xxxx
          </div>
      	</div>

				<section class="content">
					<div class="container-fluid">
						<div class="row">
							<div class="col-8">
								<div class="card">
									<div class="card-header">
										<h3 class="float-left">Profile Setting</h3>
									</div>
									<div class="card-body">

										<div class="row">

							      				<div class="col-6">
							      				<div class="form-group">	
								      					<label>Usertype</label>
									      				<select class="form-control select2" name="">
																  <option value="1">Admin</option>
																  <option value="2">Encoder</option>
																</select>
															</div>
							      				</div>
							      				<div class="col-6">
							      				<label>Username</label>
							      				<input class="form-control"type="text" placeholder="">
							      				</div>

						      				</div>
						      				<!------------><br>
						      				<div class="row">
							      				<div class="col-4">
							      				<label>FIRST NAME</label><code>*</code>
							      				<input class="form-control"type="text" placeholder="">
							      				</div>
							      				<div class="col-4">
							      				<label>MIDDLE NAME</label><code>*</code>
							      				<input class="form-control"type="text" placeholder="">
							      				</div>
							      				<div class="col-4">
							      				<label>LAST NAME</label><code>*</code>
							      				<input class="form-control"type="text" placeholder="">
							      				</div>
						      				</div>
						      				<!------------><br>
						      				<div class="row">
							      				<div class="col-9">
							      				<label>BIRTHDATE</label> <i>mm/dd/yyy</i><code>*</code>
								      				<div class="input-group date" id="reservationdate" data-target-input="nearest">
					                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
					                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
					                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
					                        </div>
					                    </div>
							      				</div>
							      				<div class="col-3">
							      				<label>AGE</label><code>autocompute</code>
							      				<input class="form-control"type="text" placeholder="" disabled>
							      				</div>

						      				</div>
						      				
							</div>
							<div class="card-footer">
								<br>
								<a type="button" class="btn btn-secondary float-right"><i class="fa fa-lock"></i> Update Password</a>&nbsp;
								<a type="button" class="btn btn-success float-right"><i class="fa fa-check"></i> Update Changes</a><br>
							</div>
						</div>
					</div>





					<div class="container-fluid">
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-header">
													 <h3 class="float-left">Accounts Master List</h3>
						               <a type="button" class="btn btn-success float-right" href="add-account.php"><i class="fa fa-	home"></i>&nbsp;+ Add new account</a>
						            </div>
						            <div class="card-body">
						            		<table id="example1" class="table table-striped">
							                  <thead class=>
							                  <tr>
							                    <th>ID</th>
							                    <th>Usertype</th>
							                    <th>Username</th>
							                    <th>Created by</th>
							                    <th>Created at</th>

							                    <th>Action</th>
							                  </tr>
							                  </thead>
							                  <tbody>
							                  <tr>
							                    <td>ADMIN-0001</td>
							                    <?php
							                    //ADMIN ID FORMAT: ADMN-0001 
							                    //ENCODER ID FORMAT: ENCODER-0001
							                    ?>
							                    <td>Admin</td>
							                    <td>vince</td>
							                    <td>Superadmin</td>
							                    <td>08-30-2022 02:00:00</td>
							                    <td>
							                    	<a type="button" title="View Account" class="btn-sm btn-primary" href="#"><i class="fa fa-search"></i></a>


							                    </td>
							                  </tr>

							                  <tr>
							                    <td>ADMIN-0002</td>
							                    <?php
							                    //ADMIN ID FORMAT: ADMN-0001 
							                    //ENCODER ID FORMAT: ENCODER-0001
							                    ?>
							                    <td>Admin</td>
							                    <td>joff</td>
							                    <td>Superadmin</td>
							                    <td>08-30-2022 02:00:02</td>
							                    <td>
							                    	<a type="button" title="View Account" class="btn-sm btn-primary" href="#"><i class="fa fa-search"></i></a>

							                    
							                    </td>
							                  </tr>

							                  <tr>
							                    <td>ADMIN-0003</td>
							                    <?php
							                    //ADMIN ID FORMAT: ADMN-0001 
							                    //ENCODER ID FORMAT: ENCODER-0001
							                    ?>
							                    <td>Admin</td>
							                    <td>lance</td>
							                    <td>Superadmin</td>
							                    <td>08-30-2022 02:00:05</td>
							                    <td>
							                    	<a type="button" title="View Account" class="btn-sm btn-primary" href="#"><i class="fa fa-search"></i></a>

							                    </td>
							                  </tr>

							                   <tr>
							                    <td>ENCODER-0001</td>
							                    <?php
							                    //ADMIN ID FORMAT: ADMN-0001 
							                    //ENCODER ID FORMAT: ENCODER-0001
							                    ?>
							                    <td>Encoder</td>
							                    <td>pedropenduko</td>
							                    <td><strong>(ADMIN-0001)</strong>&nbsp;vince</td>
							                    <td>08-30-2022 02:15:05</td>
							                    <td>
							                    	<a type="button" title="View Account" class="btn-sm btn-primary" href="#"><i class="fa fa-search"></i></a>

							                    	<a type="button" title="Delete Account" class="btn-sm btn-danger" href="#"><i class="fa fa-trash"></i></a>
							                    </td>
							                  </tr>
							                  
							                  </tbody>
							                  <!-- <tfoot>
							                  <tr>
							                    <th>Rendering engine</th>
							                    <th>Browser</th>
							                    <th>Platform(s)</th>
							                    <th>Engine version</th>
							                    <th>CSS grade</th>
							                  </tr>
							                  </tfoot> -->
							                </table>

						            </div>
								</div>
							</div>
						</div>
						
					</div>
					
				</section>
		  </div>

	<?php include "../template/footer.php";?>
	</div>



<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": true, "autoWidth": true,
      "buttons": ["excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-12:eq(0)');
    
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
    });
  });
</script>

			<div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">


            <div class="modal-header">
              <h4 class="modal-title">PRINT BRGY CERTIFICATE</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            		
            		<div class="card">
	          			<div class="card-body">

	          				<ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
				              <li class="nav-item">
				                <a class="nav-link active" id="brgyclearance" data-toggle="pill" href="#custom-content-below-home" role="tab" aria-controls="custom-content-below-home" aria-selected="true">BARANGAY CLEARANCE</a>
				              </li>
				              <li class="nav-item">
				                <a class="nav-link" id="custom-content-below-profile-tab" data-toggle="pill" href="#custom-content-below-profile" role="tab" aria-controls="custom-content-below-profile" aria-selected="false">INDIGENCY & OTHERS</a>
				              </li>
				            </ul>

				            <div class="tab-content" id="custom-content-below-tabContent">
				            		<div class="tab-pane fade show active" id="custom-content-below-home" role="tabpanel" aria-labelledby="custom-content-below-home-tab">
				            										<br>	
					                 							<div class="row">
														      				<div class="col-12">
															      				<label>RESIDENT</label><code>*</code>
															      				<input class="form-control"type="text" placeholder="" value="(RES-002341) Dela Cruz, Juan" disabled>
														      				</div>
													      				</div>

													  
													      				<div class="row">
														      				<div class="col-12">
														      				<label>PURPOSE</label><code>*</code>
														      				<input class="form-control"type="text" placeholder="">
														      				</div>
													      				</div>
													      				
													      				<div class="row">
														      				<div class="col-12">
														      				<label>CERTIFICATE NO.</label><code>*</code>
														      				<input class="form-control"type="text" placeholder="">
														      				</div>
													      				</div>
													      				
													      				<div class="row">
														      				<div class="col-12">
														      				<label>CTC ISSUED ON</label> <i>mm/dd/yyy</i><code>*</code>
															      				<div class="input-group date" id="reservationdate" data-target-input="nearest">
													                      <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
													                      <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
													                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
													                      </div>
													                  </div>
														      				</div>
													      				</div>
													      				
													      				<div class="row">
														      				<div class="col-12">
														      				<label>CTC ISSUED AT</label><code>*</code>
														      				<input class="form-control" type="text" placeholder="">
														      				</div>
													      				</div>
													      				
													      				<div class="row">
														      				<div class="col-12">
														      				<label>AMOUNT</label><code>*</code>
														      				<input class="form-control" type="number" placeholder="">
														      				</div>
													      				</div>

													      				<div class="row">
														      				<div class="col-12">
														      				<label>OFFICIAL RECEIPT NO</label><code>*</code>
														      				<input class="form-control" type="number" placeholder="">
														      				</div>
													      				</div>

													      				<div class="row">
													      				<div class="col-6">
													    						<div class="form-group">	
														      					<label>MODE OF PAYMENT</label><code>*</code>
															      				<select class="form-control select2" name="">
																						  <option value="">CASH</option>
																						  <option value="">BANK</option>
																						  <option value="">GCASH</option>
																						</select>
																					</div>
													      				</div>
													      			</div>

													      				<div class="row">
														      				<div class="col-12">
														      				<label>REFERENCE NO</label><code>*</code>
														      				<input class="form-control" type="text" placeholder="">
														      				</div>
													      				</div>



													      				<div class="row">
														      				<div class="col-12">
														      				<label>ISSUED ON</label><code>*</code>
														      				<input class="form-control" type="text" placeholder="" value="07/28/2022 10:34" disabled>
														      				</div>
													      				</div>

													      				<div class="row">
														      				<div class="col-12">
														      				<label>ISSUED AT</label><code>*</code>
														      				<input class="form-control" type="text" placeholder="" value="This Brgy." disabled>
														      				</div>
													      				</div>

					              </div>
					              <div class="tab-pane fade" id="custom-content-below-profile" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">
																				<br>	
					                 							<div class="row">
														      				<div class="col-12">
															      				<label>RESIDENT</label><code>*</code>
															      				<input class="form-control"type="text" placeholder="" value="(RES-002341) Dela Cruz, Juan" disabled>
														      				</div>
													      				</div>

													  
													      				<div class="row">
														      				<div class="col-12">
														      				<label>PURPOSE/REQUESTED BY</label><code>*</code>
														      				<input class="form-control"type="text" placeholder="">
														      				</div>
													      				</div>
													      				
													      				<div class="row">
														      				<div class="col-12">
														      				<label>CERTIFICATE NO.</label><code>*</code>
														      				<input class="form-control"type="text" placeholder="">
														      				</div>
													      				</div>
													      				
													      				<div class="row">
														      				<div class="col-12">
														      				<label>CTC ISSUED ON</label> <i>mm/dd/yyy</i><code>*</code>
															      				<div class="input-group date" id="reservationdate" data-target-input="nearest">
													                      <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
													                      <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
													                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
													                      </div>
													                  </div>
														      				</div>
													      				</div>
													      				
													      				<div class="row">
														      				<div class="col-12">
														      				<label>CTC ISSUED AT</label><code>*</code>
														      				<input class="form-control" type="text" placeholder="">
														      				</div>
													      				</div>
													      				
													      				<div class="row">
														      				<div class="col-12">
														      				<label>AMOUNT</label><code>*</code>
														      				<input class="form-control" type="number" placeholder="">
														      				</div>
													      				</div>

													      				<div class="row">
														      				<div class="col-12">
														      				<label>OFFICIAL RECEIPT NO</label><code>*</code>
														      				<input class="form-control" type="number" placeholder="">
														      				</div>
													      				</div>

													      				<div class="row">
													      				<div class="col-6">
													    						<div class="form-group">	
														      					<label>MODE OF PAYMENT</label><code>*</code>
															      				<select class="form-control select2" name="">
																						  <option value="">CASH</option>
																						  <option value="">BANK</option>
																						  <option value="">GCASH</option>
																						</select>
																					</div>
													      				</div>
													      			</div>

													      				<div class="row">
														      				<div class="col-12">
														      				<label>REFERENCE NO</label><code>*</code>
														      				<input class="form-control" type="text" placeholder="">
														      				</div>
													      				</div>



													      				<div class="row">
														      				<div class="col-12">
														      				<label>ISSUED ON</label><code>*</code>
														      				<input class="form-control" type="text" placeholder="" value="07/28/2022 10:34" disabled>
														      				</div>
													      				</div>

													      				<div class="row">
														      				<div class="col-12">
														      				<label>ISSUED AT</label><code>*</code>
														      				<input class="form-control" type="text" placeholder="" value="This Brgy." disabled>
														      				</div>
													      				</div>
					              </div>
				            </div>
					          
					          	
					        </div>
					      </div>
	


						</div>

            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary"><i class="fa fa-print"></i> PRINT</button>
            </div>


          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->



<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    $('#residencesince').datetimepicker({
        format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End
</script>


</body>
</html>