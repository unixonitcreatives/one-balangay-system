<!DOCTYPE html>
<html>
<?php $title = "Admin | Residents"; ?>
<?php $subTitle = "One Balangay Ph"; ?>
<?php $account = "vince - Administrator"; ?>
<?php $breadcrumb = "Pasay City, Brgy. 46"; ?>

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
			            <h1 class="m-0">Residents</h1>
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

				<section class="content">
					<div class="container-fluid">
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-header">
										<i class="fa fa-search"></i> Search
									</div>
									<div class="card-body">
										<div class="row">

											<div class="col-md-12 form-group">
					      				<label>Type something</label>&nbsp;<i></i>
					      				<input class="form-control"type="text" placeholder="(Resident ID, First/Last Name, National/SSS/TIN ID, Family ID, Voter's ID)" value="">
				      				</div>

				      				<div class="col-md-2 form-group">
					      				<label>Age Group</label>
						      				<input class="form-control"type="number" placeholder="from" value="">
				      				</div>
				      				<div class="col-md-2 form-group">
					      				<label>Age Group</label>
						      				<input class="form-control"type="number" placeholder="to" value="">
				      				</div>

				      				<div class="col-md-2 form-group">
					      				<label>Gender</label>
						      				<select class="form-control select2" name="">
						      					<option value=""></option>
													  <option value="Male">Male</option>
													  <option value="Female">Female</option>
													</select>
				      				</div>
				      				<div class="col-md-2 form-group">
				      					<label>Civil Status</label>
						      				<select class="form-control select2" name="">
						      					<option value=""></option>
													  <option value="">Single</option>
													  <option value="">Married</option>
													  <option value="">Widowed</option>
													</select>
				      				</div>
				      				<div class="col-md-2 form-group">
					      				<label>Nationality</label>
						      				<select class="form-control select2" name="">
						      					<option value=""></option>
													  <option value="">Filipino</option>
													  <option value="">American</option>
													  <option value="">Others</option>
													</select>
				      				</div>
				      				<div class="col-md-2 form-group">
					      				<label>Religion</label>
						      				<select class="form-control select2" name="">
													  <option value="">Catholic</option>
													  <option value="">Muslim</option>
													  <option value="">None</option>
													</select>
				      				</div>

	

				      				<div class="col-md-2 form-group">
					      				<label>Voter Status</label>
						      				<select class="form-control select2" name="">
						      					<option value=""></option>
													  <option value="Male">Registered</option>
													  <option value="Female">Unregistered</option>
													</select>
				      				</div>
				      				<div class="col-md-2 form-group">
				      					<label>PWD</label>
						      				<select class="form-control select2" name="">
						      					<option value=""></option>
													  <option value="">YES</option>
													  <option value="">NO</option>
													</select>
				      				</div>
				      				<div class="col-md-2">
					      				<label>4P's</label>
						      				<select class="form-control select2" name="">
						      					<option value=""></option>
													  <option value="">YES</option>
													  <option value="">NO</option>
													</select>
				      				</div>
				      				<div class="col-md-2 form-group">
					      				<label>Youth Member</label>
						      				<select class="form-control select2" name="">
													  <option value=""></option>
													  <option value="">YES</option>
													  <option value="">NO</option>
													</select>
				      				</div>
				      				<div class="col-md-2">
					      				<label>Blood Type</label>
						      				<select class="form-control select2" name="">
						      					<option value=""></option>
													  <option value="">O</option>
													  <option value="">A</option>
													  <option value="">B</option>
													  <option value="">AB</option>
													</select>
				      				</div>
				      				<div class="col-md-2 form-group">
					      				<label>Blood Donor?</label>
						      				<select class="form-control select2" name="">
													  <option value=""></option>
													  <option value="">YES</option>
													  <option value="">NO</option>
													</select>
				      				</div>

				      				<div class="col-md-2 form-group">
					      				<label>Home Address</label>
													<input class="form-control"type="text" placeholder="" value="">
											</div>

				      				<div class="col-md-2 form-group">
				      					<label>Building</label>
						      				<select class="form-control select2" name="">
													  <option value=""></option>
													  <option value="">Hollywood Condo</option>
													  <option value="">SMDC Shell Residence</option>
													  <option value="">Zen Pod Apartment</option>
													  <option value="">RDuterte Homes</option>
													  <option value="">Avida Tower</option>
													</select>
				      				</div>
				      				<div class="col-md-2">
					      				<label>Street</label>
						      				<select class="form-control select2" name="">
						      					<option value=""></option>
													  <option value="">New York St.</option>
													  <option value="">New Jersey St.</option>
													  <option value="">California St.</option>
													  <option value="">Arizona St.</option>
													  <option value="">Honeywood Condominum</option>
													  <option value="">Zen Apartment</option>
													</select>
				      				</div>
				      				<div class="col-md-2 form-group">
					      				<label>Area</label>
						      				<select class="form-control select2" name="">
													  <option value=""></option>
													  <option value="">Purok 1</option>
													  <option value="">Purok 2</option>
													  <option value="">Purok 3</option>
													  <option value="">Purok 4</option>
													  <option value="">Purok 5</option>
													</select>
				      				</div>
				      				<div class="col-md-2">
					      				<label>Residency Status</label>
						      				<select class="form-control select2" name="">
						      					<option value=""></option>
													  <option value="">Permanent</option>
													  <option value="">Temporary</option>
													</select>
				      				</div>
				      				<div class="col-md-2 form-group">
					      				<label>COVID-19 Vaccine</label>
						      				<select class="form-control select2" name="">
													  <option value=""></option>
													  <option value="">YES</option>
													  <option value="">NO</option>
													</select>
				      				</div>


				      			</div><!-- ./row -->
				      			
									</div><!-- ./card -->
									<div class="card-footer">
				      				<a type="submit" class="btn btn-primary float-right" id="test" onclick="this.disabled = true;"><i class="fa fa-search"></i>&nbsp;&nbsp;Search</a> <!-- BRO Disable mo buttons everytime mag input ng new record para di mkpg multiple inputs-->
				      			</div>

								</div>
							</div>
						</div>
					</div>


					<div class="container-fluid">
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-header">
						               <a type="button" class="btn btn-success float-right" href="add-resident.php"><i class="fa fa-user-plus"></i>&nbsp;Add new resident</a>
						            </div>
						            <div class="card-body">
						            		<table id="example1" class="table table-striped table-head-fixed">
							                  <thead>
							                  <tr>
							                    <th>(Code) Full Name</th>
							                    <th>Home Address</th>
							                    <th>Employment Status</th>
							                    <th>Voter Registration</th>
							                    <th>Contact No</th>
							                    <th>Residency</th>
							                    <th>Moral</th>
							                    <th>Tags</th>
							                    <th>Action</th>
							                  </tr>
							                  </thead>
							                  <tbody>
							                  <tr>
							                    <td><b>(RES-002341)</b> Dela Cruz, Juan
							                    </td>
							                    <td>Blk 4 Lot 5 Tramo St.</td>
							                    <td>Employed</td>
							                    <td>Registered</td>
																	<td>09123456789</td>
																	<td>Permanent</td>
																	<td></td>
																	<td></td>
							                    <td>
							                    	<a type="button" title="View Resident" class="btn-sm btn-primary" href="view-resident.php"><i class="fa fa-search"></i></a>
							                    	<a type="button" title="View Household" class="btn-sm btn-primary" href="view-household.php"><i class="fa fa-home"></i></a>
							                    	<a type="button" title="Print Certificate" class="btn-sm btn-success" href="#" data-toggle="modal" data-target="#modal-default"><i class="fa fa-file"></i></a>
							                    	
							                    </td>
							                  </tr>

							                  <tr>
							                    <td><b>(RES-005423)</b> Marcos, Ferdinand
							                    </td>
							                    <td>Blk 6 Lot 3 Tramo St.</td>
							                    <td>Employed</td>
							                    <td>Registered</td>
																	<td>09123456789</td>
																	<td>Permanent</td>
																	<td></td>
																	<td></td>
							                    <td>
							                    	<a type="button" title="View Resident" class="btn-sm btn-primary" href="view-resident.php"><i class="fa fa-search"></i></a>
							                    	<a type="button" title="Print Certificate" class="btn-sm btn-success" href="#" data-toggle="modal" data-target="#modal-default"><i class="fa fa-file"></i></a>
							                    	
							                    </td>
							                  </tr>

							                  <tr>
							                    <td><b>(RES-002341)</b> Dela Cruz, Miguel
							                    </td>
							                    <td>Blk 4 Lot 5 Tramo St.</td>
							                    <td>Unemployed</td>
							                    <td>Unregistered</td>
																	<td>09124228759</td>
																	<td>Permanent</td>
																	<td></td>
																	<td></td>
							                    <td>
							                    	<a type="button" title="View Resident" class="btn-sm btn-primary" href="view-resident.php"><i class="fa fa-search"></i></a>
							                    	<a type="button" title="Print Certificate" class="btn-sm btn-success" href="#" data-toggle="modal" data-target="#modal-default"><i class="fa fa-file"></i></a>
							                    	
							                    </td>
							                  </tr>

							                  <tr>
							                    <td><b>(RES-007522)</b> Duterte, Sarah
							                    </td>
							                    <td>Blk 4 Lot 13 Tramo St.</td>
							                    <td>Employed</td>
							                    <td>Registered</td>
																	<td>09124264889</td>
																	<td>Temporary</td>
																	<td></td>
																	<td></td>
							                    <td>
							                    	<a type="button" title="View Resident" class="btn-sm btn-primary" href="view-resident.php"><i class="fa fa-search"></i></a>
							                    	<a type="button" title="Print Certificate" class="btn-sm btn-success" href="#" data-toggle="modal" data-target="#modal-default"><i class="fa fa-file"></i></a>
							                    	
							                    </td>
							                  </tr>

							                  <tr>
							                    <td><b>(RES-002341)</b> Penduko, Pedro
							                    </td>
							                    <td>Blk 5 Lot 1 Tramo St.</td>
							                    <td>Unemployed</td>
							                    <td>Unegistered</td>
																	<td>09122375524</td>
																	<td>Temporary</td>
																	<td>Pending Case</td>
																	<td>Theft</td>
							                    <td>
							                    	<a type="button" title="View Resident" class="btn-sm btn-primary" href="view-resident.php"><i class="fa fa-search"></i></a>
							                    	<a type="button" title="Print Certificate" class="btn-sm btn-success" href="#" data-toggle="modal" data-target="#modal-default"><i class="fa fa-file"></i></a>
							                    	
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
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
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