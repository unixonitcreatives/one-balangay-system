<!DOCTYPE html>
<html>
<?php $title = "Admin | Dashboard"; ?>
<?php $subTitle = "One Balangay Ph"; ?>
<?php $account = "vince - Administrator"; ?>
<?php $breadcrumb = "Pasay City, Brgy. 46"; ?>

<head>
	<title><?php echo $title;?></title>
	<?php include "../template/header.php";?>
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
		  	    <!-- Content Header (Page header) -->
			    <div class="content-header">
			      <div class="container-fluid">
				        <div class="row mb-2">
			          <div class="col-sm-6">
			            <h1 class="m-0">Dashboard</h1>
			          </div><!-- /.col -->
			          <div class="col-sm-6">
			            <ol class="breadcrumb float-sm-right">
			              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
			              <li class="breadcrumb-item active"><?php echo $breadcrumb;?></li>
			            </ol>
			          </div><!-- /.col -->
			        </div><!-- /.row -->
			      </div><!-- /.container-fluid -->
			    </div>
			    <!-- /.content-header -->
		  

		  <section class="content">
					<div class="container-fluid">
						<div class="row">

					          <div class="col-lg-3 col-6">
					            <!-- small box -->
					            <div class="small-box bg-info">
					              <div class="inner">
					                <h3>35</h3>

					                <p>asdasdasd</p>
					              </div>
					              <div class="icon">
					                <i class="ion ion-home"></i>
					              </div>
					              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					            </div>
					          </div>
					          <!-- ./col -->
					          <div class="col-lg-3 col-6">
					            <!-- small box -->
					            <div class="small-box bg-success">
					              <div class="inner">
					                <h3>53<sup style="font-size: 20px">%</sup></h3>

					                <p>asdasdasd</p>
					              </div>
					              <div class="icon">
					                <i class="ion ion-stats-bars"></i>
					              </div>
					              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					            </div>
					          </div>
					          <!-- ./col -->
					          <div class="col-lg-3 col-6">
					            <!-- small box -->
					            <div class="small-box bg-warning">
					              <div class="inner">
					                <h3>44</h3>

					                <p>Registered Residents</p>
					              </div>
					              <div class="icon">
					                <i class="ion ion-person"></i>
					              </div>
					              <a href="resident.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					            </div>
					          </div>
					          <!-- ./col -->
					          <div class="col-lg-3 col-6">
					            <!-- small box -->
					            <div class="small-box bg-danger">
					              <div class="inner">
					                <h3>12</h3>

					                <p>Unemployed</p>
					              </div>
					              <div class="icon">
					                <i class="ion ion-pie-graph"></i>
					              </div>
					              <a href="resident.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					            </div>
					          </div>
					          <!-- ./col -->
				
							


							
						</div>
						<!--------------------->
					</div>

					<div class="container-fluid">
						<div class="row">

							<div class="col">

								<div class="card">
									<div class="card-header">
									<i class="fa fa-info-google"></i> Map Location	
									</div>
									<div class="card-body">
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1930.8663857646795!2d120.99834315830005!3d14.55726829356033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c970735de7f3%3A0x56f2d763d53ac1b8!2s46%2C%20Pasay%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1661970721398!5m2!1sen!2sph" width="100%" height="450" style="border:0;" allowfullscreen="0" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
										
									</div>
								</div>
							</div>
						</div>
					</div>
		   </section>

		   </div>



	</div>
</body>


<?php include "../template/script.php";?>
<?php include "../template/css.php";?>
<?php include "../template/footer.php";?>
</html>