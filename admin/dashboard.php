<!DOCTYPE html>
<html>
<?php $title = "Admin | Dashboard"; ?>
<?php $subTitle = "BIMO"; ?>
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
			              <li class="breadcrumb-item active">Brgy. Canlubang, Calamba City, Laguna</li>
			            </ol>
			          </div><!-- /.col -->
			        </div><!-- /.row -->
			      </div><!-- /.container-fluid -->
			    </div>
			    <!-- /.content-header -->
		  </div>



	</div>
</body>


<?php include "../template/script.php";?>
<?php include "../template/css.php";?>
<?php include "../template/footer.php";?>
</html>