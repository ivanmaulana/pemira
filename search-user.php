<?php 
	include ('config.php');
	$nrp = $_POST['nrp'];
	$query = mysql_query("SELECT * FROM pengguna INNER JOIN departemen, fakultas, data WHERE pengguna.nrp='$nrp' AND pengguna.departemen=departemen.kode_departemen AND pengguna.fakultas=fakultas.kode_fakultas AND pengguna.nrp=data.nrp");
	$q1 = mysql_query("SELECT * FROM kandidat WHERE ketua='$nrp'");
	$tes1 = mysql_fetch_array($q1);
	$q2 = mysql_query("SELECT * FROM kandidat WHERE wakil='$nrp'");
	$tes2 = mysql_fetch_array($q2);
?>
<!DOCTYPE html>
 <html>
  <head>
    <meta charset="UTF-8">
    <title>PEMIRA IPB | Cari NRP</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="image/ipb pav.png">     

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
  <body class="skin-blue layout-top-nav">
    <div class="wrapper">
      
      <header class="main-header">               
        <nav class="navbar navbar-static-top">
          <div class="container-fluid">
          <div class="navbar-header">
            <a href="index.php" class="navbar-brand">Pemira<b>IPB</b></a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar-collapse">
            <form action="search-user.php" method="post" class="navbar-form navbar-left">
              <div class="form-group">
                <input type="text" class="form-control" name="nrp" id="navbar-search-input" placeholder="Cari dengan NRP">
              </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bar-chart-o"></i> Hasil Pemilihan <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="warning.php"> Wilayah KM IPB</a></li>
                  <li><a href="warning.php"> Wilayah FAPERTA</a></li>
                  <li><a href="warning.php"> Wilayah FKH</a></li>
                  <li><a href="warning.php"> Wilayah FPIK</a></li>
                  <li><a href="warning.php"> Wilayah FAPET</a></li>
                  <li><a href="warning.php"> Wilayah FAHUTAN</a></li>
                  <li><a href="warning.php"> Wilayah FATETA</a></li>
                  <li><a href="warning.php"> Wilayah FMIPA</a></li>
                  <li><a href="warning.php"> Wilayah FEM</a></li>
                  <li><a href="warning.php"> Wilayah FEMA</a></li>
                  <li><a href="warning.php"> Wilayah DIPLOMA</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-table"></i> Data Pemilih <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="tabel-departemen-user.php?id=A"> Wilayah FAPERTA</a></li>
                  <li><a href="tabel-departemen-user.php?id=B"> Wilayah FKH</a></li>
                  <li><a href="tabel-departemen-user.php?id=C"> Wilayah FPIK</a></li>
                  <li><a href="tabel-departemen-user.php?id=D"> Wilayah FAPET</a></li>
                  <li><a href="tabel-departemen-user.php?id=E"> Wilayah FAHUTAN</a></li>
                  <li><a href="tabel-departemen-user.php?id=F"> Wilayah FATETA</a></li>
                  <li><a href="tabel-departemen-user.php?id=G"> Wilayah FMIPA</a></li>
                  <li><a href="tabel-departemen-user.php?id=H"> Wilayah FEM</a></li>
                  <li><a href="tabel-departemen-user.php?id=I"> Wilayah FEMA</a></li>
                  <li><a href="tabel-departemen-user.php?id=J"> Wilayah DIPLOMA</a></li>
                </ul>
              </li>
              <li><a href="tabel-kandidat-user.php"><i class="fa fa-table"></i> Kandidat</a></li>
              <li><a href="login.php"><i class="fa fa-sign-in"></i> Login</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
      </header>
      <!-- Full Width Column -->
      <div class="content-wrapper">

        <section class="content">
          <div class="row">
              <div class="col-md-5 col-sm-6 col-xs-12">
                <!-- general form elements disabled -->
                <div class="box box-info">

                  <div class="box-header">
                    <h3 class="box-title" ><i class="fa fa-search"></i> Hasil Pencarian NRP <b><?php echo $nrp ?></b></h3>
                  </div><!-- /.box-header -->
<?php 			if(mysql_num_rows($query) == 1){
				$search = mysql_fetch_array($query);
?>
                  <div class="box-body">
                  <hr>
                    <h4><pre> Nama 		:<?php echo $search['fullname'] ?> </pre></h4>
                    <h4><pre> Departemen 	: <?php echo $search['nama_departemen'] ?></pre></h4>
                    <h4><pre> Fakultas 	: <?php echo $search['nama_fakultas'] ?></pre></h4>
                    <h4><pre> Status 	: <?php if($search['status'] == 0) {?><a class="text-red" href="#"><i class="fa fa-square"></i> Belum Memilih</a><?php }; if ($search['status'] == 1){ ?><a class="text-green" href="#"><i class="fa fa-square"></i> Sudah Memilih</a></center><?php }?></pre></h4>
<?php if(mysql_num_rows($q1) != 0 || mysql_num_rows($q2) != 0) {?>
                    <h4><pre> Kandidat 	: <?php if(mysql_num_rows($q1) == 1) {?>Ketua no urut <?php echo $tes1['no_urut'] ?> wilayah <?php echo $tes1['wilayah']; } ?> <?php if(mysql_num_rows($q2) == 1) {?>Wakil no urut <?php echo $tes2['no_urut'] ?> wilayah <?php echo $tes2['wilayah']; } ?></pre></h4>
<?php } }?>
                  </div><!-- /.box-body -->
                </div><!-- /.box -->
              </div><!--/.col (right) -->
            </div>
          </div>   <!-- /.row -->
        </section><!-- /.content -->


      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="container-fluid">
         <div class="pull-right hidden-xs">
          <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2015 <a>Pemilihan Raya Institut Pertanian Bogor</a>.</strong> 
        </div><!-- /.container -->
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="plugins/slimScroll/jquery.slimScroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>
  </body>
</html> 