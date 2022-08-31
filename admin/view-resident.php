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
                  <h1 class="m-0">Resident Profile</h1>
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

        <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="../dist/img/default-150x150.png"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">Juan Dela Cruz</h3>

                <p class="text-muted text-center">RES-002341</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>National ID</b> <a class="float-right">3412 3412 8694 2145</a>
                  </li>
                  <li class="list-group-item">
                    <b>Family ID</b> <a class="float-right">FN-01</a>
                  </li>

                  <li class="list-group-item">
                    <b>Contact No</b> <a class="float-right">0999 123 4567</a>
                  </li>

                  <li class="list-group-item">
                    <b>Area</b> <a class="float-right">Purok 3</a>
                  </li>

                  <li class="list-group-item">
                    <b>Social Media</b> <a class="float-right">@juandelacruz</a>
                  </li>
                </ul>

                

                <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#modal-default">
                <b><i class="fa fa-file"></i>&nbsp;Print Certificate</b></a>

                <a href="edit-resident.php" class="btn btn-primary btn-block"><b><i class="fa fa-edit"></i>&nbsp;Edit Profile</b></a>

                <a href="#" class="btn btn-danger btn-block"><b><i class="fa fa-trash"></i>&nbsp;Delete Resident Record</b></a>

                <a href="#" class="btn btn-secondary btn-block"><b><i class="fa fa-skull"></i>&nbsp;Deceased Resident</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
          <!-- /.col -->
          <div class="col-md-9">
            
            <div class="col">
                      <div class="card card-primary">
                        <div class="card-header">
                        <i class="fa fa-info-circle"></i> Personal Information
                        </div>

                        <div class="card-body">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <dl>
                                  <dt>NATIONAL ID</dt>
                                  <dd>3412 3412 8694 2145</dd>
                          </dl>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <dl>
                                  <dt>SSS ID</dt>
                                  <dd>3412 3412 8694 2145</dd>
                          </dl>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <dl>
                                  <dt>TIN ID</dt>
                                  <dd>3412 3412 8694 2145</dd>
                          </dl>
                        </div>
                      </div>

                      <!------------>
                      <div class="col-md-4">
                        <div class="form-group">  
                          <dl>
                                  <dt>HEAD OF FAMILY</dt>
                                  <dd>NO</dd>
                          </dl>
                        </div>
                      </div>

                      <div class="col-md-8 form-group">
                          <dl>
                                  <dt>FAMILY ID</dt>
                                  <dd>FN-01</dd>
                          </dl>
                      </div>
                      <div class="col-md-4 form-group">
                          <dl>
                                  <dt>CONTACT NO</dt>
                                  <dd>0999 123 4567</dd>
                          </dl>
                      </div>

                      <div class="col-md-8 form-group">
                          <dl>
                                  <dt>SOCIAL MEDIA LINK</dt>
                                  <dd>@juandelacruz</dd>
                          </dl>
                      </div>
                      <!------------><br>
                      <div class="col-md-4 form-group">
                          <dl>
                                  <dt>FIRST NAME</dt>
                                  <dd>Juan</dd>
                          </dl>
                      </div>
                      <div class="col-md-4 form-group">
                          <dl>
                                  <dt>MIDDLE NAME</dt>
                                  <dd>Santos</dd>
                          </dl>
                      </div>
                      <div class="col-md-4 form-group">
                          <dl>
                                  <dt>LAST NAME</dt>
                                  <dd>Dela Cruz</dd>
                          </dl>
                      </div>
                      <div class="col-md-4 form-group">
                          <dl>
                                  <dt>BIRTHDATE</dt>
                                  <dd>01/01/2000</dd>
                          </dl>
                      </div>
                      <div class="col-md-4 form-group">
                          <dl>
                                  <dt>AGE</dt>
                                  <dd>22</dd>
                          </dl>
                      </div>
                      <div class="col-md-4 form-group">
                          <dl>
                                  <dt>PLACE OF BIRTH</dt>
                                  <dd>Manila</dd>
                          </dl>
                      </div>

                      <div class="col-md-4 form-group">
                          <dl>
                                  <dt>GENDER</dt>
                                  <dd>Male</dd>
                          </dl>
                      </div>
                      <div class="col-md-8 form-group">
                          <dl>
                                  <dt>CIVIL STATUS</dt>
                                  <dd>Married</dd>
                          </dl>
                      </div>
                      <div class="col-md-4 form-group">
                          <dl>
                                  <dt>NATIONALITY</dt>
                                  <dd>Filipino</dd>
                          </dl>
                      </div>
                      <div class="col-md-4 form-group">
                          <dl>
                                  <dt>RELIGION</dt>
                                  <dd>Catholic</dd>
                          </dl>
                      </div>
                      <div class="col-md-4 form-group">
                          <dl>
                                  <dt>EDUCATIONAL ATTAINMENT</dt>
                                  <dd>Highschool</dd>
                          </dl>
                      </div>

                      <div class="col-md-4 form-group">
                          <dl>
                                  <dt>EMPLOYMENT STATUS</dt>
                                  <dd>Employed</dd>
                          </dl>
                      </div>

                      <div class="col-md-4 form-group">
                          <dl>
                                  <dt>PRESENT JOB</dt>
                                  <dd>Traffic Enforcer</dd>
                          </dl>
                      </div>

                      <div class="col-md-4 form-group">
                          <dl>
                                  <dt>VOTER STATUS</dt>
                                  <dd>Registered</dd>
                          </dl>
                      </div>

                      

                      <div class="col-md-4 form-group">
                          <dl>
                                  <dt>PWD</dt>
                                  <dd>NO</dd>
                          </dl>
                      </div>

                      <div class="col-md-8 form-group">
                          <dl>
                                  <dt>4P's</dt>
                                  <dd>NO</dd>
                          </dl>
                      </div>

                      <div class="col-md-4 form-group">
                          <dl>
                                  <dt>BLOOD TYPE</dt>
                                  <dd>O</dd>
                          </dl>
                      </div>

                      <div class="col-md-8 form-group">
                          <dl>
                                  <dt>DONOR?</dt>
                                  <dd>Yes</dd>
                          </dl>
                      </div>

                      <div class="col-md-4 form-group">
                          <dl>
                                  <dt>YOUTH MEMBER</dt>
                                  <dd>Yes</dd>
                          </dl>
                      </div>

                      <div class="col-md-8 form-group">
                          <dl>
                                  <dt>SK VOTER</dt>
                                  <dd>Yes</dd>
                          </dl>
                      </div>

                      <div class="col-md-4 form-group">
                          <dl>
                                  <dt>VOTER's ID | (PRECINT NUMBER)</dt>
                                  <dd>7501-00191-C145BCD</dd>
                          </dl>
                      </div>

                      <div class="col-md-8 form-group">
                          <dl>
                                  <dt>INCOME per MONTH</dt>
                                  <dd>5,000 - 25,000</dd>
                          </dl>
                      </div>

                      <div class="col-md-4 form-group"> 
                          <dl>
                                  <dt>MORAL</dt>
                                  <dd>Yes</dd>
                          </dl>
                      </div>

                      <div class="col-md-8 form-group">
                          <dl>
                                  <dt>TAGS</dt>
                                  <dd></dd>
                          </dl>
                      </div>
                      
                    </div><!--- ROW --->

                  </div>
                      </div>
                    </div>
            

            <div class="col">
                      <div class="card card-success">
                        <div class="card-header">
                        <i class="fa fa-home"></i> Residency Permanent Address
                        </div>
                        <div class="card-body">
           
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <dl>
                                  <dt>HOME ADDRESS</dt>
                                  <dd>asdasd</dd>
                                </dl>
                            </div>
                            <div class="col-md-6 form-group">
                                  <dl>
                                  <dt>AREA</dt>
                                  <dd>Purok 3</dd>
                                 </dl>
                            </div>
                          
                            <div class="col-md-6 form-group">
                                <dl>
                                  <dt>BARANGAY</dt>
                                  <dd>46</dd>
                                </dl>
                            </div>

                            <div class="col-md-6 form-group">
                                <dl>
                                  <dt>CITY / MUNICIPALITY</dt>
                                  <dd>Pasay City</dd>
                                </dl>
                            </div>
                        
                            <div class="col-md-6 form-group">
                                <dl>
                                  <dt>RESIDENCY STATUS</dt>
                                  <dd>Permanent</dd>
                                </dl>
                            </div>

                            <div class="col-md-6 form-group">
                                <dl>
                                  <dt>RESIDENCE SINCE</dt>
                                  <dd>01/01/2000</dd>
                                </dl>
                            </div>
                        
                        </div>

                
                          
                        </div>
                      </div>
                    </div>


            <div class="col">
                <div class="card card-danger">
                  <div class="card-header">
                  <i class="fa fa-phone"></i> Emergency Contact
                  </div>
                      <div class="card-body">
                          <div class="row">
                            <div class="col-md-6 form-group">
                               <dl>
                                  <dt>FULL NAME</dt>
                                  <dd>Juana Dela Cruz</dd>
                                </dl>
                            </div>
                            <div class="col-md-6 form-group">
                              <dl>
                                  <dt>CONTACT NO</dt>
                                  <dd>0999 123 4567</dd>
                              </dl>
                            </div>

                            <div class="col-md-12 form-group">
                              <dl>
                                  <dt>HOME ADDRESS</dt>
                                  <dd>123 New York St.</dd>
                              </dl>
                            </div>
                          </div>
                      </div>
                  </div>
                </div>
            

            <div class="col">
                <div class="card card-info">
                  <div class="card-header">
                  <i class="fa fa-syringe"></i> COVID-19 Vaccine Details
                  </div>
                      <div class="card-body">
                          <div class="row">
                            <div class="col-md-4 form-group">
                                <dl>
                                  <dt>1. VACCINE MANUFACTURER</dt>
                                  <dd>Pfizer</dd>
                              </dl>
                            </div>

                            <div class="col-md-4 form-group">
                                <dl>
                                  <dt>DOSE</dt>
                                  <dd>1st Dose</dd>
                              </dl>
                            </div>

                            <div class="col-md-4 form-group">
                              <dl>
                                  <dt>DATE</dt>
                                  <dd>01/01/2021</dd>
                              </dl>
                            </div>

                            <div class="col-md-4 form-group">
                                <dl>
                                  <dt>2. VACCINE MANUFACTURER</dt>
                                  <dd>Pfizer</dd>
                              </dl>
                            </div>

                            <div class="col-md-4 form-group">
                                <dl>
                                  <dt>DOSE</dt>
                                  <dd>2nd Dose</dd>
                              </dl>
                            </div>

                            <div class="col-md-4 form-group">
                              <dl>
                                  <dt>DATE</dt>
                                  <dd>07/01/2021</dd>
                              </dl>
                            </div>

                            <div class="col-md-4 form-group">
                                <dl>
                                  <dt>3. VACCINE MANUFACTURER</dt>
                                  <dd>Pfizer</dd>
                              </dl>
                            </div>

                            <div class="col-md-4 form-group">
                                <dl>
                                  <dt>DOSE</dt>
                                  <dd>Booster Dose</dd>
                              </dl>
                            </div>

                            <div class="col-md-4 form-group">
                              <dl>
                                  <dt>DATE</dt>
                                  <dd>01/01/2022</dd>
                              </dl>
                            </div>

                            
                          </div>
                     </div>
                  </div>
                </div>   


            <div class="col">
                <div class="card card-secondary">
                  <div class="card-header">
                    <i class="fa fa-info"></i> Other Details
                  </div>
                  <div class="card-body">
                    
                        <div class="col-4">
                              <dl>
                                  <dt>CREATED BY</dt>
                                  <dd><strong>(ENCODER-0001)</strong> pedrodenduko</dd>
                              </dl>
                        </div>
                        
                        <div class="col-md-8">
                              <dl>
                                  <dt>CREATED AT</dt>
                                  <dd>08-30-2022 02:00:00</dd>
                              </dl>
                        </div>

                  </div>

                </div>
              </div>
            
           





          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
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


</body>
</html>