<?php
  include('cek-login.php');
  include('config.php');
  include('status.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>PEMIRA IPB | Daftar Kandidat</title>
    <link rel="shortcut icon" href="image/ipb pav.png">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="index.php" class="logo">Pemira<b>IPB</b></a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

              <!-- User Account: style can be found in dropdown.less -->
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- search form -->
          <form action="search.php" method="post" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="nrp" class="form-control" placeholder="Cari dengan NRP"/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">Main Menu</li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-bar-chart-o"></i>
                <span>Hasil Pemilihan</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="hasil-pemilihan-km.php"><i class="fa fa-chevron-circle-right"></i> Wilayah KM IPB</a></li>
                <li><a href="hasil-pemilihan-fakultas.php?id=A"><i class="fa fa-chevron-circle-right"></i> Wilayah FAPERTA</a></li>
                <li><a href="hasil-pemilihan-fakultas.php?id=B"><i class="fa fa-chevron-circle-right"></i> Wilayah FKH</a></li>
                <li><a href="hasil-pemilihan-fakultas.php?id=C"><i class="fa fa-chevron-circle-right"></i> Wilayah FPIK</a></li>
                <li><a href="hasil-pemilihan-fakultas.php?id=D"><i class="fa fa-chevron-circle-right"></i> Wilayah FAPET</a></li>
                <li><a href="hasil-pemilihan-fakultas.php?id=E"><i class="fa fa-chevron-circle-right"></i> Wilayah FAHUTAN</a></li>
                <li><a href="hasil-pemilihan-fakultas.php?id=F"><i class="fa fa-chevron-circle-right"></i> Wilayah FATETA</a></li>
                <li><a href="hasil-pemilihan-fakultas.php?id=G"><i class="fa fa-chevron-circle-right"></i> Wilayah FMIPA</a></li>
                <li><a href="hasil-pemilihan-fakultas.php?id=H"><i class="fa fa-chevron-circle-right"></i> Wilayah FEM</a></li>
                <li><a href="hasil-pemilihan-fakultas.php?id=I"><i class="fa fa-chevron-circle-right"></i> Wilayah FEMA</a></li>
                <li><a href="hasil-pemilihan-fakultas.php?id=J"><i class="fa fa-chevron-circle-right"></i> Wilayah DIPLOMA</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-bar-chart-o"></i>
                <span>Suara Masuk</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="suara-masuk-km.php"><i class="fa fa-chevron-circle-right"></i> Wilayah KM IPB</a></li>
                <li><a href="suara-masuk-fakultas.php?id=A"><i class="fa fa-chevron-circle-right"></i> Wilayah FAPERTA</a></li>
                <li><a href="suara-masuk-fakultas.php?id=B"><i class="fa fa-chevron-circle-right"></i> Wilayah FKH</a></li>
                <li><a href="suara-masuk-fakultas.php?id=C"><i class="fa fa-chevron-circle-right"></i> Wilayah FPIK</a></li>
                <li><a href="suara-masuk-fakultas.php?id=D"><i class="fa fa-chevron-circle-right"></i> Wilayah FAPET</a></li>
                <li><a href="suara-masuk-fakultas.php?id=E"><i class="fa fa-chevron-circle-right"></i> Wilayah FAHUTAN</a></li>
                <li><a href="suara-masuk-fakultas.php?id=F"><i class="fa fa-chevron-circle-right"></i> Wilayah FATETA</a></li>
                <li><a href="suara-masuk-fakultas.php?id=G"><i class="fa fa-chevron-circle-right"></i> Wilayah FMIPA</a></li>
                <li><a href="suara-masuk-fakultas.php?id=H"><i class="fa fa-chevron-circle-right"></i> Wilayah FEM</a></li>
                <li><a href="suara-masuk-fakultas.php?id=I"><i class="fa fa-chevron-circle-right"></i> Wilayah FEMA</a></li>
                <li><a href="suara-masuk-fakultas.php?id=J"><i class="fa fa-chevron-circle-right"></i> Wilayah DIPLOMA</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-table"></i>
                <span>Kandidat</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                  <li><a href="form-kandidat.php"><i class="fa fa-plus"></i> Tambah kandidat</a></li>
                  <li><a href="tabel-kandidat.php"><i class="fa fa-table"></i> Data kandidat</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-table"></i>
                <span>Pemilih</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                  <li><a href="form-pemilih.php"><i class="fa fa-plus active"></i> Tambah pemilih</a></li>
                 <li>
                  <a href="#"><i class="fa fa-table"></i> Data pemilih <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="tabel-departemen.php?id=A"><i class="fa fa-chevron-circle-right"></i> Wilayah FAPERTA</a></li>
                    <li><a href="tabel-departemen.php?id=B"><i class="fa fa-chevron-circle-right"></i> Wilayah FKH</a></li>
                    <li><a href="tabel-departemen.php?id=C"><i class="fa fa-chevron-circle-right"></i> Wilayah FPIK</a></li>
                    <li><a href="tabel-departemen.php?id=D"><i class="fa fa-chevron-circle-right"></i> Wilayah FAPET</a></li>
                    <li><a href="tabel-departemen.php?id=E"><i class="fa fa-chevron-circle-right"></i> Wilayah FAHUTAN</a></li>
                    <li><a href="tabel-departemen.php?id=F"><i class="fa fa-chevron-circle-right"></i> Wilayah FATETA</a></li>
                    <li><a href="tabel-departemen.php?id=G"><i class="fa fa-chevron-circle-right"></i> Wilayah FMIPA</a></li>
                    <li><a href="tabel-departemen.php?id=H"><i class="fa fa-chevron-circle-right"></i> Wilayah FEM</a></li>
                    <li><a href="tabel-departemen.php?id=I"><i class="fa fa-chevron-circle-right"></i> Wilayah FEMA</a></li>
                    <li><a href="tabel-departemen.php?id=J"><i class="fa fa-chevron-circle-right"></i> Wilayah DIPLOMA</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="header">Akun</li>
            <li><a href="logout.php"><i class="fa fa-sign-out"></i></i>Keluar</a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Data Kandidat
            <small>PEMIRA IPB 2015</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-table"></i> Kandidat</a></li>
            <li class="active">Data Kandidat</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- row -->
          <div class="row">
            <div class="col-xs-12">
              <!-- jQuery Knob -->
              <div class="box box-solid collapsed-box">
                <div class="box-header">
                  <i class="fa fa-table"></i>
                  <h3 class="box-title">Wilayah KM IPB</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-default btn-sm" data-widget="collapse"><i class="fa fa-plus"></i></button>
                    <button class="btn btn-default btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="table-responsive">
<?php
      $fakultas = 'K';
      //ambil data ketua dan wakil dari kandidat 1 dan kandidat 2 di tabel kandida sesuai fakultas
      $q_k1_k = mysql_query("SELECT * FROM kandidat INNER JOIN pengguna, departemen WHERE kandidat.wilayah='K' AND kandidat.no_urut='1' AND pengguna.departemen=departemen.kode_departemen AND kandidat.ketua=pengguna.nrp ");
      $q_k1_w = mysql_query("SELECT * FROM kandidat INNER JOIN pengguna, departemen WHERE kandidat.wilayah='K' AND kandidat.no_urut='1' AND pengguna.departemen=departemen.kode_departemen AND kandidat.wakil=pengguna.nrp ");
      $q_k2_k = mysql_query("SELECT * FROM kandidat INNER JOIN pengguna, departemen WHERE kandidat.wilayah='K' AND kandidat.no_urut='2' AND pengguna.departemen=departemen.kode_departemen AND kandidat.ketua=pengguna.nrp ");
      $q_k2_w = mysql_query("SELECT * FROM kandidat INNER JOIN pengguna, departemen WHERE kandidat.wilayah='K' AND kandidat.no_urut='2' AND pengguna.departemen=departemen.kode_departemen AND kandidat.wakil=pengguna.nrp ");
      //masukan data baris query kesatu variabel
      $k1 = mysql_fetch_array($q_k1_k);
      $w1 = mysql_fetch_array($q_k1_w);
      $k2 = mysql_fetch_array($q_k2_k);
      $w2 = mysql_fetch_array($q_k2_w);
?>
                    <table class="table no-margin">
                      <thead>
                        <tr>
                            <th width="50%"><center>Kandidat 1</center></th>
                            <th><center>Kandidat 2</center></th>
                        </tr>
<?php if (!empty($k1['image']) || !empty($k2['image'])) {
?>
                        <tr>
                          <td><center><img width="250px" height="250px" src="image/<?php echo $k1['image'] ?>"></center></td>
                          <td><center><img width="250px" height="250px" src="image/<?php echo $k2['image'] ?>"></center></td>
                        </tr>
<?php } ?>
                      </thead>
                      <tbody>
                          <tr>
                            <td><?php echo $k1['nrp']?> <?php echo $k1['fullname']?></td>
                            <td><?php echo $k2['nrp']?> <?php echo $k2['fullname']?></td>
                          </tr>
                          <tr>
                            <td><?php echo $k1['nama_departemen']?></td>
                            <td><?php echo $k2['nama_departemen']?></td>
                          </tr>
                      </tbody>
                      <tbody>
                          <tr>
                            <td><?php echo $w1['nrp']?> <?php echo $w1['fullname']?></td>
                            <td><?php echo $w2['nrp']?> <?php echo $w2['fullname']?></td>
                          </tr>
                          <tr>
                            <td><?php echo $w1['nama_departemen']?></td>
                            <td><?php echo $w2['nama_departemen']?></td>
                          </tr>
                    </table>
                    <div class="box-footer clearfix">
                      <a href="form-kandidat.php?id=K" class="btn btn-sm bg-navy btn-default btn-flat pull-right"> + Kandidat</a>
                    </div><!-- /.box-footer -->
                  </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

<?php  $loop_fakultas = mysql_query("SELECT * FROM fakultas");
       while ($l_f = mysql_fetch_array($loop_fakultas)) {
?>
          <!-- row -->
          <div class="row">
            <div class="col-xs-12">
              <!-- jQuery Knob -->
              <div class="box box-solid collapsed-box">
                <div class="box-header">
                  <i class="fa fa-table"></i>
                  <h3 class="box-title">Wilayah <?php echo $l_f['singkatan'] ;?></h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-default btn-sm" data-widget="collapse"><i class="fa fa-plus"></i></button>
                    <button class="btn btn-default btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="table-responsive">
<?php
      $fakultas = $l_f['kode_fakultas'];
      //ambil data ketua dan wakil dari kandidat 1 dan kandidat 2 di tabel kandida sesuai fakultas
      $q_k1_k = mysql_query("SELECT * FROM kandidat INNER JOIN pengguna, departemen WHERE kandidat.wilayah='$fakultas' AND kandidat.no_urut='1' AND kandidat.ketua=pengguna.nrp AND pengguna.departemen=departemen.kode_departemen ");
      $q_k1_w = mysql_query("SELECT * FROM kandidat INNER JOIN pengguna, departemen WHERE kandidat.wilayah='$fakultas' AND kandidat.no_urut='1' AND kandidat.wakil=pengguna.nrp AND pengguna.departemen=departemen.kode_departemen ");
      $q_k2_k = mysql_query("SELECT * FROM kandidat INNER JOIN pengguna, departemen WHERE kandidat.wilayah='$fakultas' AND kandidat.no_urut='2' AND kandidat.ketua=pengguna.nrp AND pengguna.departemen=departemen.kode_departemen ");
      $q_k2_w = mysql_query("SELECT * FROM kandidat INNER JOIN pengguna, departemen WHERE kandidat.wilayah='$fakultas' AND kandidat.no_urut='2' AND kandidat.wakil=pengguna.nrp AND pengguna.departemen=departemen.kode_departemen ");
      //masukan data baris query kesatu variabel
      $k1 = mysql_fetch_array($q_k1_k);
      $w1 = mysql_fetch_array($q_k1_w);
      $k2 = mysql_fetch_array($q_k2_k);
      $w2 = mysql_fetch_array($q_k2_w);
?>
                    <table class="table no-margin">
                      <thead>
                        <tr>
                            <th width="50%"><center>Kandidat 1</center></th>
                            <th><center>Kandidat 2</center></th>
                        </tr>
<?php if (!empty($k1['image']) || !empty($k2['image'])) {
?>
                        <tr>
                          <td><center><img width="250px" height="250px" src="image/<?php echo $k1['image'] ?>"></center></td>
                          <td><center><img width="250px" height="250px" src="image/<?php echo $k2['image'] ?>"></center></td>
                        </tr>
<?php } ?>
                      </thead>
                      <tbody>
                          <tr>
                            <td><?php echo $k1['nrp']?> <?php echo $k1['fullname']?></td>
                            <td><?php echo $k2['nrp']?> <?php echo $k2['fullname']?></td>
                          </tr>
                          <tr>
                            <td><?php echo $k1['nama_departemen']?></td>
                            <td><?php echo $k2['nama_departemen']?></td>
                          </tr>
                      </tbody>
                      <tbody>
                          <tr>
                            <td><?php echo $w1['nrp']?> <?php echo $w1['fullname']?></td>
                            <td><?php echo $w2['nrp']?> <?php echo $w2['fullname']?></td>
                          </tr>
                          <tr>
                            <td><?php echo $w1['nama_departemen']?></td>
                            <td><?php echo $w2['nama_departemen']?></td>
                          </tr>
                    </table>
                    <div class="box-footer clearfix">
                      <a href="form-kandidat.php?id=<?php echo $l_f['kode_fakultas'];?>" class="btn btn-sm bg-navy btn-default btn-flat pull-right"> + Kandidat</a>
                    </div><!-- /.box-footer -->
                  </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
<?php }?>
<!-- end loop -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2015 <a>Pemilihan Raya Institut Pertanian Bogor</a>.</strong>
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- page script -->

  </body>
</html>
