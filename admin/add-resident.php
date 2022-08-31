<!DOCTYPE html>
<html>
<?php $title = "Admin | Residents"; ?>
<?php $subTitle = "One Balangay Ph"; ?>
<?php $account = "vince - Administrator"; ?>
<?php $breadcrumb = "Brgy 46, Pasay City"; ?>

<head>
	<title><?php echo $title;?></title>
	<?php include "../template/header.php";?>
	<?php include "../template/script.php";?>
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
			            <h1 class="m-0">Add New Resident</h1>
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
			      	<div class="col">
			      		<div class="card card-primary">
			      			<div class="card-header">
									<i class="fa fa-info-circle"></i> Personal Information
			      			</div>

			      			<div class="card-body">
			      				<div class="row">
				      				<div class="col-md-4">
				      					<div class="form-group">
						      				<label>NATIONAL ID</label>
						      				<input class="form-control"type="text" placeholder="" value="">
						      			</div>
				      				</div>
				      				<div class="col-md-4">
				      					<div class="form-group">
						      				<label>SSS ID</label>
						      				<input class="form-control"type="text" placeholder="" value="">
						      			</div>
				      				</div>
				      				<div class="col-md-4">
				      					<div class="form-group">
						      				<label>TIN ID</label>
						      				<input class="form-control"type="text" placeholder="" value="">
						      			</div>
				      				</div>

				      				<!------------>
				      				<div class="col-md-4">
				      					<div class="form-group">	
					      					<label>HEAD</label>
						      				<select class="form-control select2" name="">
													  <option value="">NO</option>
													  <option value="">YES</option>
													</select>
												</div>
				      				</div>

				      				<div class="col-md-8 form-group">
				      				<label>FAMILY ID</label>
				      				<input class="form-control"type="text" placeholder="">
				      				</div>
				      				<div class="col-md-6 form-group">
				      				<label>CONTACT NO</label><code>*</code>
				      				<input class="form-control"type="text" placeholder="">
				      				</div>

				      				<div class="col-md-6 form-group">
				      				<label>SOCIAL MEDIA LINK</label>
				      				<input class="form-control"type="text" placeholder="">
				      				</div>
				      				<!------------><br>
				      				<div class="col-md-12 form-group">
				      				<label>FIRST NAME</label><code>*</code>
				      				<input class="form-control"type="text" placeholder="">
				      				</div>
				      				<div class="col-md-12 form-group">
				      				<label>MIDDLE NAME</label><code>*</code>
				      				<input class="form-control"type="text" placeholder="">
				      				</div>
				      				<div class="col-md-12 form-group">
				      				<label>LAST NAME</label><code>*</code>
				      				<input class="form-control"type="text" placeholder="">
				      				</div>
				      				<div class="col-md-6 form-group">
				      				<label>BIRTHDATE</label><code>*</code>&nbsp;<i>mm/dd/yyyy</i>
					      				<div class="input-group date" id="reservationdate" data-target-input="nearest">
		                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
		                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
		                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
		                        </div>
		                    </div>
				      				</div>
				      				<div class="col-md-6 form-group">
				      				<label>AGE</label><code>*</code>&nbsp;<i>auto-compute</i>
				      				<input class="form-control"type="text" placeholder="" disabled>
				      				</div>
				      				<div class="col-md-8 form-group">
				      				<label>PLACE OF BIRTH</label><code>*</code>
				      				<input class="form-control"type="text" placeholder="">
				      				</div>

				      				<div class="col-md-4 form-group">
					      					<label>GENDER</label><code>*</code>
						      				<select class="form-control select2" name="">
													  <option value="Male">Male</option>
													  <option value="Female">Female</option>
													</select>
				      				</div>
				      				<div class="col-md-4 form-group">
					      					<label>CIVIL STATUS</label><code>*</code>
						      				<select class="form-control select2" name="">
													  <option value="">Single</option>
													  <option value="">Married</option>
													  <option value="">Widowed</option>
													</select>
				      				</div>
				      				<div class="col-md-4 form-group">
					      					<label>NATIONALITY</label><code>*</code>
						      				<select class="form-control select2" name="">
													  <option value="">Filipino</option>
													  <option value="">American</option>
													  <option value="">Others</option>
													</select>
				      				</div>
				      				<div class="col-md-4 form-group">
					      					<label>RELIGION</label><code>*</code>
						      				<select class="form-control select2" name="">
													  <option value="">Catholic</option>
													  <option value="">Muslim</option>
													  <option value="">None</option>
													</select>
				      				</div>
				      				<div class="col-md-4 form-group">
					      					<label>EDUCATIONAL ATTAINMENT</label><code>*</code>
						      				<select class="form-control select2" name="">
													  <option value="">Elementary</option>
													  <option value="">Secondary</option>
													  <option value="">Vocational</option>
													  <option value="">Bachelor's Degree</option>
													  <option value="">Master's Degree</option>
													  <option value="">PHD Degree</option>
													  <option value="">None</option>
													</select>
				      				</div>

				      				<div class="col-md-4 form-group">
					      					<label>EMPLOYMENT STATUS</label><code>*</code>
						      				<select class="form-control select2" name="">
													  <option value="">Unemployed</option>
													  <option value="">Employed</option>
													  <option value="">Business Owner</option>
													</select>
				      				</div>

				      				<div class="col-md-4 form-group">
				      				<label>PRESENT JOB</label>
				      				<input class="form-control"type="text" placeholder="">
				      				</div>

				      				<div class="col-md-4 form-group">
				      					<label>VOTER STATUS</label><code>*</code>
					      				<select class="form-control select2" name="">
												  <option value="">Unregistered</option>
												  <option value="">Registered</option>
												</select>
				      				</div>

				      				<div class="col-md-4 form-group">
					      				<label>VOTER's ID | (PRECINT NUMBER)</label>
					      				<input class="form-control"type="text" placeholder="">
					      			</div>

					      			<div class="col-md-4 form-group">
				      					<label>PWD</label><code>*</code>
					      				<select class="form-control select2" name="">
												  <option value="">NO</option>
												  <option value="">YES</option>
												</select>
					      			</div>

			      					<div class="col-md-4 form-group">
				      					<label>4P's</label><code>*</code>
					      				<select class="form-control select2" name="">
												  <option value="">NO</option>
												  <option value="">YES</option>
												</select>
			      					</div>

			      					<div class="col-md-4 form-group">
				      					<label>BLOOD TYPE</label><code>*</code>
					      				<select class="form-control select2" name="">
												  <option value="">O</option>
												  <option value="">A</option>
												  <option value="">B</option>
												  <option value="">AB</option>
												  <option value="">NA</option>
												</select>
			      					</div>

			      					<div class="col-md-4 form-group">
				      					<label>DONOR?</label><code>*</code>
					      				<select class="form-control select2" name="">
												  <option value="">YES</option>
												  <option value="">NO</option>
												</select>
											</div>

											<div class="col-md-4 form-group">
				      					<label>YOUTH MEMBER</label>
					      				<select class="form-control select2" name="">
												  <option value="">NO</option>
												  <option value="">YES</option>
												</select>
			      					</div>

			      					<div class="col-md-4 form-group">
				      					<label>SK VOTER</label>
					      				<select class="form-control select2" name="">
												  <option value="">NO</option>
												  <option value="">YES</option>
												</select>
			      					</div>

			      					<div class="col-md-4 form-group">
				      					<label>INCOME per MONTH</label>
					      				<select class="form-control select2" name="">
												  <option value="">0 - 500</option>
												  <option value="">500 - 5,000</option>
												  <option value="">5000 - 25,000</option>
												  <option value="">25,000 - 50,000</option>
												  <option value="">50,000 - 500,000</option>
												  <option value="">500,000+</option>
												</select>
			      					</div>

			      					<div class="col-md-4 form-group">	
				      					<label>MORAL</label>
					      				<select class="form-control select2" name="">
												  <option value="">YES</option>
												  <option value="">NO</option>
												</select>
			      					</div>

			      					<div class="col-md-8 form-group">
					      				<label>TAGS</label>
					      				<input class="form-control"type="text" placeholder="">
				      				</div>
				      				
			      				</div><!--- ROW --->

			      			</div>
			      		</div>
			      	</div>
						</div>

					  <div class="row">
					  	<div class="col">
					      		<div class="card card-success">
					      			<div class="card-header">
					      			<i class="fa fa-home"></i> Residency Permanent Address
					      			</div>
					      			<div class="card-body">
					 
					      				<div class="row">
						      					<div class="col-md-6 form-group">
						      						<label>HOME ADDRESS</label><code>*</code>
								      				<input class="form-control"type="text" placeholder="">
						      					</div>
						      					<div class="col-md-6 form-group">
								      					<label>AREA</label><code>*</code>
									      				<select class="form-control select2" name="">
																  <option value="">Purok 1</option>
																  <option value="">Purok 2</option>
																  <option value="">Purok 3</option>
																  <option value="">Purok 4</option>
																  <option value="">Purok 5</option>
																  <option value="">Purok 6</option>
																</select>
							      				</div>
							      			
						      					<div class="col-md-6 form-group">
						      						<label>BARANGAY</label><code>*</code>
								      				<input class="form-control"type="text" placeholder="This Barangay" disabled>
						      					</div>

						      					<div class="col-md-6 form-group">
						      						<label>CITY / MUNICIPALITY / PROVINCE</label><code>*</code>
								      				<input class="form-control"type="text" placeholder="This City/Municipality/Province" disabled>
						      					</div>
						      			
						      					<div class="col-md-6 form-group">
								      					<label>RESIDENCY STATUS</label><code>*</code>
									      				<select class="form-control select2" name="">
																  <option value="">Permanent</option>
																  <option value="">Temporary</option>
																</select>
							      				</div>

						      					<div class="col-md-6 form-group">
						      						<label>RESIDENCE SINCE</label> <i>mm/dd/yyyy</i><code>*</code>
								      				<div class="input-group date" id="residencesince" data-target-input="nearest">
				                        <input type="text" class="form-control datetimepicker-input" data-target="#residencesince"/>
				                        <div class="input-group-append" data-target="#residencesince" data-toggle="datetimepicker">
				                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
				                        </div>
				                    </div>
						      					</div>
						      			
						      			</div>

						  
					      				
					      			</div>
					      		</div>
					      	</div>
					  </div>

					  <div class="row">
					  	<div class="col">
					  		<div class="card card-danger">
					      	<div class="card-header">
									<i class="fa fa-phone"></i> Emergency Contact
			      			</div>
					      			<div class="card-body">
					      					<div class="row">
						      					<div class="col-md-6 form-group">
						      						<label>FULL NAME</label>
								      				<input class="form-control"type="text" placeholder="">
						      					</div>
						      					<div class="col-md-6 form-group">
						      						<label>CONTACT NO</label>
								      				<input class="form-control"type="text" placeholder="">
						      					</div>

						      					<div class="col-md-12 form-group">
						      						<label>HOME ADDRESS</label>
								      				<input class="form-control"type="text" placeholder="">
						      					</div>
						      				</div>
						      				<br>
					      			</div>
				      		</div>
				      	</div>

					  </div>

					  <div class="row">
					  	<div class="col">
					  		<div class="card card-info">
					      	<div class="card-header">
									<i class="fa fa-syringe"></i> COVID-19 Vaccine Details
			      			</div>
					      			<div class="card-body">
					      					<div class="row">
						      					<div class="col-md-4 form-group">
								      					<label>VACCINE MANUFACTURER</label><code>*</code>
									      				<select class="form-control select2" name="">
									      					<option value=""></option>
																  <option value="">Pfizer</option>
																  <option value="">Astrazeneca</option>
																  <option value="">Moderna</option>
																  <option value="">Sinovac</option>
																  <option value="">Johnson & Johnson's</option>
																</select>
							      				</div>

							      				<div class="col-md-4 form-group">
								      					<label>VACCINE MANUFACTURER</label><code>*</code>
									      				<select class="form-control select2" name="">
									      					<option value=""></option>
																  <option value="">1st Dose</option>
																  <option value="">2nd Dose</option>
																  <option value="">3rd Dose</option>
																  <option value="">Booster Dose</option>
																</select>
							      				</div>

						      					<div class="col-md-4 form-group">
						      						<label>DATE</label> <i>mm/dd/yyyy</i><code>*</code>
								      				<div class="input-group date" id="vaccine1" data-target-input="nearest">
				                        <input type="text" class="form-control datetimepicker-input" data-target="#vaccine1"/>
				                        <div class="input-group-append" data-target="#vaccine1" data-toggle="datetimepicker">
				                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
				                        </div>
				                    </div>
						      					</div>

						      					<div class="col-md-4 form-group">
								      					<label>VACCINE MANUFACTURER</label><code>*</code>
									      				<select class="form-control select2" name="">
									      					<option value=""></option>
																  <option value="">Pfizer</option>
																  <option value="">Astrazeneca</option>
																  <option value="">Moderna</option>
																  <option value="">Sinovac</option>
																  <option value="">Johnson & Johnson's</option>
																</select>
							      				</div>

							      				<div class="col-md-4 form-group">
								      					<label>VACCINE MANUFACTURER</label><code>*</code>
									      				<select class="form-control select2" name="">
									      					<option value=""></option>
																  <option value="">1st Dose</option>
																  <option value="">2nd Dose</option>
																  <option value="">3rd Dose</option>
																  <option value="">Booster Dose</option>
																</select>
							      				</div>

						      					<div class="col-md-4 form-group">
						      						<label>DATE</label> <i>mm/dd/yyyy</i><code>*</code>
								      				<div class="input-group date" id="vaccine2" data-target-input="nearest">
				                        <input type="text" class="form-control datetimepicker-input" data-target="#vaccine2"/>
				                        <div class="input-group-append" data-target="#vaccine2" data-toggle="datetimepicker">
				                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
				                        </div>
				                    </div>
						      					</div>

						      					<div class="col-md-4 form-group">
								      					<label>VACCINE MANUFACTURER</label><code>*</code>
									      				<select class="form-control select2" name="">
									      					<option value=""></option>
																  <option value="">Pfizer</option>
																  <option value="">Astrazeneca</option>
																  <option value="">Moderna</option>
																  <option value="">Sinovac</option>
																  <option value="">Johnson & Johnson's</option>
																</select>
							      				</div>

							      				<div class="col-md-4 form-group">
								      					<label>VACCINE MANUFACTURER</label><code>*</code>
									      				<select class="form-control select2" name="">
									      					<option value=""></option>
																  <option value="">1st Dose</option>
																  <option value="">2nd Dose</option>
																  <option value="">3rd Dose</option>
																  <option value="">Booster Dose</option>
																</select>
							      				</div>

						      					<div class="col-md-4 form-group">
						      						<label>DATE</label> <i>mm/dd/yyyy</i><code>*</code>
								      				<div class="input-group date" id="vaccine3" data-target-input="nearest">
				                        <input type="text" class="form-control datetimepicker-input" data-target="#vaccine3"/>
				                        <div class="input-group-append" data-target="#vaccine3" data-toggle="datetimepicker">
				                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
				                        </div>
				                    </div>
						      					</div>



						      					
						      				</div>
						      				<br>
					      			</div>
				      		</div>
				      	</div>

					  </div>

					  <div class="row">
					  	<div class="col">
						  	<div class="card card-secondary">
						  		<div class="card-header">
										<i class="fa fa-info"></i> Terms & Agreement
			      			</div>
			      			<div class="card-body">
			      				
				      					<div class="col-md-12">
			                    <input type="checkbox" class="form-check-input form-group" id="exampleCheck1">
			                    <label class="form-check-label" for="exampleCheck1">I have read and agreed to the <a href="#">Data Privacy Policy</a></label>
			                  </div>
			                  
			                  <div class="col-md-12">
			                    <input type="checkbox" class="form-check-input form-group" id="exampleCheck2">
			                    <label class="form-check-label" for="exampleCheck2">I have confirmed that all information stated above is true and correct</label>
			                  </div>

			      			</div>

			      			<div class="card-footer">
			      				<a type="button" class="btn btn-success"><i class="fa fa-plus"></i>&nbsp;&nbsp;Submit New Resident</a>
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

    $('#vaccine1').datetimepicker({
        format: 'L'
    });

    $('#vaccine2').datetimepicker({
        format: 'L'
    });

    $('#vaccine3').datetimepicker({
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