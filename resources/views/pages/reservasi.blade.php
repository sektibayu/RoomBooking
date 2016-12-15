<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lumino - Dashboard</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#"><span>Room</span>Booking</a>
				<!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User</a> -->
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Login Admin</a>
						<ul class="dropdown-menu" role="menu">
							<div class="col-sm-12">
								<form role="form" method="post" action="admin.html">
								
									<div class="form-group">
										<label>Nama:</label>
										<input type="text" class="form-control">
									</div>						
									<div class="form-group">
										<label>Password:</label>
										<input type="password" class="form-control">
									</div>
									<button type="submit" class="btn btn-primary">login</button>
								</form>
							</div>
						</ul>
					</li>
				</ul>
				<ul class="user-menu">
					<li>
						<a href="reservasi.html"> Reservasi</a>
					</li>
				</ul>
				<ul class="user-menu">
					<li>
						<a href="jadwal.html"> Jadwal Pinjam</a>
					</li>
				</ul>
			</div>			
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 sidebar">
		<div class="panel panel-primary">
						<div class="panel-heading text-center">Pending Request</div>
						<div class="panel-body">
							<!-- begin request -->
							<div class="text-center text-bold panel-blue panel-body">Pending 1</div>
							<label>NRP/NIP:</label><br>
							<label>Nama:</label><br>
							<label>Waktu Awal:</label><br>
							<label>Waktu Akhir:</label><br>
							<label>Status:</label><br>
							<!-- end request -->
							<!-- begin request -->
							<div class="text-center text-bold panel-blue panel-body">Pending 2</div>
							<label>NRP/NIP:</label><br>
							<label>Nama:</label><br>
							<label>Waktu Awal:</label><br>
							<label>Waktu Akhir:</label><br>
							<label>Status:</label><br>
							<!-- end request -->
							<!-- begin request -->
							<div class="text-center text-bold panel-blue panel-body">Pending 3</div>
							<label>NRP/NIP:</label><br>
							<label>Nama:</label><br>
							<label>Waktu Awal:</label><br>
							<label>Waktu Akhir:</label><br>
							<label>Status:</label><br>
							<!-- end request -->
						</div>
					</div>

	</div><!--/.sidebar-->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-offset-3 col-lg-6">
				<h1 class="page-header text-center">Reservasi</h1>
				<div class="panel panel-default">
					<div class="panel-heading text-center">Form Pesan</div>
					<div class="panel-body">
						<div class="col-md-12">
							<form role="form" method="post" action="#">
							
								<div class="form-group">
									<label>NRP/NIP</label>
									<input type="text" class="form-control">
								</div>						
								<div class="form-group">
									<label>Nama</label>
									<input type="text" class="form-control">
								</div>
								<div class="form-group">
									<label>Ruangan</label>
									<select class="form-control">
										<option>Ruang 101</option>
										<option>Ruang 102</option>
										<option>Ruang 103</option>
										<option>Ruang 104</option>
										<option>Ruang 105A</option>
										<option>Ruang 105B</option>
										<option>Ruang 106</option>
										<option>Ruang 108</option>
										<option>Aula</option>
										<option>Studio Musik</option>
									</select>
									<!-- <input type="text" class="form-control"> -->
								</div>
								<div class="form-group">
									<label>Date Awal</label>
									<input type="date" class="form-control">
								</div>
								<div class="form-group">
									<label>waktu Akhir</label>
									<input type="time" class="form-control">
								</div>
								<div class="form-group">
									<label>Date Akhir</label>
									<input type="date" class="form-control">
								</div>
								<div class="form-group">
									<label>waktu Akhir</label>
									<input type="time" class="form-control">
								</div>
								<button type="submit" class="btn btn-primary">Pesan</button>
								<button type="reset" class="btn btn-default">Reset</button>
							</form>
						</div>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
	</div>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<!-- <script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script> -->
</body>

</html>
