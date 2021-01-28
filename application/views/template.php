<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $this->template->title->prepend("CI-Admin - ");?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php
		// CSS Default
		$this->template->stylesheet->add('assets/plugins/fontawesome-free/css/all.min.css');
		$this->template->stylesheet->add('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css');
		$this->template->stylesheet->add('assets/dist/css/adminlte.min.css');
		$this->template->stylesheet->add('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700'); 
		echo $this->template->stylesheet; 
	?>
</head>

<body class="hold-transition sidebar-mini">
	<!-- Site wrapper -->
	<div class="wrapper">
		<?php 
			echo $this->template->widget("header");
			echo $this->template->widget("sidebar");
		?>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1><?php echo $this->template->page->title;?></h1>
						</div>
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active">Legacy User Menu</li> -->
							</ol>
						</div>
					</div>
				</div><!-- /.container-fluid -->
			</section>

			<!-- Main content -->
			<section class="content">
				<?php echo $this->template->content;?>
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<?php echo $this->template->widget("footer");?>
	</div>
	<!-- ./wrapper -->
	<?php 
		// JS Default
		$this->template->javascript->add('assets/plugins/jquery/jquery.min.js');
		$this->template->javascript->add('assets/plugins/bootstrap/js/bootstrap.bundle.min.js');
		$this->template->javascript->add('assets/dist/js/adminlte.min.js');
		$this->template->javascript->add('assets/dist/js/demo.js');
		echo $this->template->javascript; 
	?>
</body>

</html>
