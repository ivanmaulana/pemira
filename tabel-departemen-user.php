<?php
  include('config.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>PEMIRA IPB | Data Departemen</title>
    <link rel="shortcut icon" href="image/ipb pav.png">
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
    <?php
        $id_fak = $_GET['id'];
        $q_fak = mysql_query("SELECT * FROM fakultas WHERE kode_fakultas='$id_fak'");
        $data_fak = mysql_fetch_array($q_fak);
    ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
              Fakultas
            <small><?php echo $data_fak['nama_fakultas'] ?></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-table"></i>Data pemilih</a></li>
            <li class="active">Wilayah <?php echo $data_fak['singkatan'] ?></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th colspan="2">Departemen</th>
                      </tr>
                    </thead>
      <?php
          $q_dep = mysql_query("SELECT * FROM departemen WHERE kode_fakultas='$id_fak' ORDER BY kode_departemen");
          while ($data = mysql_fetch_array($q_dep)) {
      ?>
                    <tbody>
                      <tr>
                        <td><?php echo $data['nama_departemen']; ?></td>
                        <td>
                            <a href="tabel-pemilih-user.php?id=<?php echo $data['kode_departemen']; ?>"><input type="button" value="Lihat Data Pemilih"></a>
                        </td>
                      </tr>
                    </tbody>
        <?php }?>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div><!-- /.col -->
          </div><!-- /.row -->


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
    <!-- SlimScroll -->
    <script src="plugins/slimScroll/jquery.slimScroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>
  </body>
</html>
