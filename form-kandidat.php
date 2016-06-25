<?php 
  include('cek-login.php');
  include('config.php');
  include('status.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>PEMIRA IPB | Form Kandidat</title>
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
            Form Kandidat
            <small>PEMIRA IPB 2015</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="tabel-kandidat.php"><i class="fa fa-table"></i> Kandidat</a></li>
            <li class="active"><a> Tambah Kandidat</a></li>
          </ol>
        </section>

        <section class="content">
<?php
      if (!empty($_GET['message'])) {

        if ($_GET['message'] == 1) { ?>
          <div class="callout callout-warning">
            <p>Format gambar harus .jpg atau .png</p>
          </div>
<?php   }
        if ($_GET['message'] == 2) {?>
          <div class="callout callout-warning">
            <p>Dimensi foto harus 1 : 1 misalnya 500px x 500px</p>
          </div>
<?php   }
        if ($_GET['message'] == 3) {?>
          <div class="callout callout-info">
            <p>Kandidat berhasil dirubah</p>
          </div>
<?php   }
        if ($_GET['message'] == 4) {?>
          <div class="callout callout-info">
            <p>Kandidat berhasil ditambahkan</p>
          </div>
<?php   }
      }?>
          <div class="row">
              <div class="col-md-5 col-sm-6 col-xs-12">
                <!-- general form elements disabled -->
                <div class="box box-info">

                  <div class="box-header">
                    <h3 class="box-title" >Tambah Kandidat</h3>
                  </div><!-- /.box-header -->
<?php if (!empty($_GET['id'])){
      $wilayah = $_GET['id'];
      $cek_wilayah = mysql_query("SELECT COUNT(*) AS status FROM kandidat WHERE wilayah='$wilayah'");
      $c_w = mysql_fetch_array($cek_wilayah);
}?>
                  <div class="box-body">
                    <form action="<?php if($c_w['status']==0){ ?> insert-kandidat.php?id=<?php echo $wilayah ?> <?} if($c_w['status']>0) {?> update-kandidat.php?id=<?php echo $wilayah?><?php }?>" method="post" enctype="multipart/form-data">
                      <!-- text input -->
                      <div class="form-group">
                          <select name="wilayah" class="form-control"  onchange="location = this.options[this.selectedIndex].value;">
                          <option value="form-kandidat.php">-- Pilih Wilayah Pemilihan</option>
                          <option value="form-kandidat.php?id=K">Keluarga Mahasiswa</option>

      <?php
          $query = mysql_query("SELECT * from fakultas");
                   while ($data = mysql_fetch_array($query)) {

      ?>
                          <option value="form-kandidat.php?id=<?php echo $data['kode_fakultas'] ?>"><?php echo $data['nama_fakultas']; ?></option>
      <?php
      }
      ?>
                          </select>
                      </div>
    <?php
    if (!empty($_GET['id'])){
      $q_k1 = mysql_query("SELECT * FROM kandidat WHERE wilayah='$wilayah' AND no_urut='1'");
      $q_k2 = mysql_query("SELECT * FROM kandidat WHERE wilayah='$wilayah' AND no_urut='2'");
      $f1 = mysql_fetch_array($q_k1);
      $f2 = mysql_fetch_array($q_k2);
      ?>
                      <div class="form-group">
                        <label>Kandidat 1</label>
                        <input type="text" name="K1_ketua" maxlength="9" class="form-control" placeholder="Masukan NRP Ketua Kandidat 1" value="<?php echo $f1['ketua'] ?>"/>
                      </div>
                      <div class="form-group">
                        <input type="text" name="K1_wakil" maxlength="9" class="form-control" placeholder="Masukan NRP Wakil Kandidat 1" value="<?php echo $f1['wakil'] ?>"/>
                      </div>
                      <div class="form-group">
                        Photo pasangan dengan dimensi 1 : 1 dengan format .jpg / .png
                        <input type="file" accexpt="image/*" name="gambar_k1" required />
                      </div>
                      <div class="form-group">
                        <label>Kandidat 2</label>
                        <input type="text" name="K2_ketua" maxlength="9" class="form-control" placeholder="Masukan NRP Ketua Kandidat 2" value="<?php echo $f2['ketua'] ?>"/>
                      </div>
                      <div class="form-group">
                        <input type="text" name="K2_wakil" maxlength="9" class="form-control" placeholder="Masukan NRP Wakil Kandidat 2" value="<?php echo $f2['wakil'] ?>"/>
                      </div>
                      <div class="form-group">
                        Photo pasangan dengan dimensi 1 : 1 dengan format .jpg / .png
                        <input type="file" accept="image/*" name="gambar_k2" required />
                      </div>
                      <div>
                        <input type="submit" class="btn btn-primary btn-block bg-navy btn-flat" value="Simpan">
                      </div>
        <?php }?>
                    </form>
                  </div><!-- /.box-body -->
                </div><!-- /.box -->
              </div><!--/.col (right) -->
              <div class="col-md-4 col-sm-6 col-xs-12">
                <!-- general form elements disabled -->
                <div class="box box-info">
                  <div class="box-header">
                    <h3 class="box-title" >Foto Kandidat</h3>
                  </div><!-- /.box-header -->
<?php
    if (!empty($f1['image']) || !empty($f2['image'])){
?>
                  <div class="box-body">
                      <center><img width="250px" height="250px" src="image/<?php echo $f1['image'];?>"></center>
                      <br>
                      <hr>
                      <center><img width="250px" height="250px" src="image/<?php echo $f2['image'];?>"></center>
                  </div><!-- /.box-body -->
                  <hr>
<?php } ?>
                </div><!-- /.box -->
              </div><!--/.col (right) -->
            </div>
          </div>   <!-- /.row -->
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
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->

  </body>
</html>
