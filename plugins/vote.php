<!DOCTYPE html>
<?php 
  include('config.php');
  include('cek-login.php');
  $id = $_SESSION['nrp'];

  $q1 = mysql_query("SELECT status FROM data WHERE nrp='$id'") or die(mysql_error());
  $qa = mysql_fetch_array($q1);
  if($qa['status'] == 1)
        header('location:sudah-memilih.php');
?>
 <html>
  <head>
    <meta charset="UTF-8">
    <title>PEMIRA IPB | Pemberian Suara</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck for checkboxes and radio inputs -->
    <link href="plugins/iCheck/all.css" rel="stylesheet" type="text/css" />
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
            <a href="vote.php" class="navbar-brand">Pemira<b>IPB</b></a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="login.php"><i class="fa fa-sign-out"></i> Keluar</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
      </header>
      <!-- Full Width Column -->
      <div class="content-wrapper">
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <!-- jQuery Knob -->
              <div class="box box-solid">
                <div class="box-header">
                  <i class="fa fa-check-square-o"></i>
                  <h3 class="box-title">Wilayah KM IPB</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-default btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
<?php 
      $q_k1_k = mysql_query("SELECT * FROM kandidat INNER JOIN pengguna WHERE kandidat.wilayah='K' AND kandidat.no_urut='1' AND kandidat.ketua=pengguna.nrp ");
      $q_k1_w = mysql_query("SELECT * FROM kandidat INNER JOIN pengguna WHERE kandidat.wilayah='K' AND kandidat.no_urut='1' AND kandidat.wakil=pengguna.nrp ");
      $q_k2_k = mysql_query("SELECT * FROM kandidat INNER JOIN pengguna WHERE kandidat.wilayah='K' AND kandidat.no_urut='2' AND kandidat.ketua=pengguna.nrp ");
      $q_k2_w = mysql_query("SELECT * FROM kandidat INNER JOIN pengguna WHERE kandidat.wilayah='K' AND kandidat.no_urut='2' AND kandidat.wakil=pengguna.nrp ");
      //masukan data baris query kesatu variabel 
      $k1 = mysql_fetch_array($q_k1_k);
      $w1 = mysql_fetch_array($q_k1_w);
      $k2 = mysql_fetch_array($q_k2_k);
      $w2 = mysql_fetch_array($q_k2_w);
?>
                  <div class="box-body">
                    <div class="row">
                      <div class="col-md-6 col-sm-12 col-xs-12 text-center">
                        <form action="voting.php?nrp=<?php echo $id;?>" method="post">
                        <table class="table no-margin">
                          <tr>
                            <th><center>1</center></th>
                          </tr>
                          <tr>
                            <th><center><img width="250px" height="250px" src="image/K1K.png"></center></th>
                          </tr>
                          <tr>
                            <th><center><?php echo $k1['fullname'] ?> & <?php echo $w1['fullname'] ?></center></th>
                          </tr>
                          <tr>
                            <th><center><input required="required" type="radio" name="km" value="1" class="flat-red"/></center></th>
                          </tr>
                        </table>
                      </div><!-- ./col -->
                      <div class="col-md-6 col-sm-12 col-xs-12 text-center">
                        <table class="table no-margin">
                          <tr>
                            <th><center>2</center></th>
                          </tr>
                          <tr>
                            <th><center><img width="250px" height="250px" src="image/K2K.png"></center></th>
                          </tr>
                          <tr>
                            <th><center><?php echo $k2['fullname'] ?> & <?php echo $w2['fullname'] ?></center></th>
                          </tr>
                          <tr>
                            <th><center><input required="required" type="radio" name="km" value="2" class="flat-red"/></center></th>
                          </tr>
                        </table>
                      </div><!-- ./col -->
                    </div>
                  </div>
                </div><!-- /.box-header -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
<?php   
        $f = substr($id, 0 , 1);
        $q_f = mysql_query("SELECT * FROM fakultas WHERE kode_fakultas='$f'");
        $data_f = mysql_fetch_array($q_f);        
?>
          <div class="row">
            <div class="col-xs-12">
              <!-- jQuery Knob -->
              <div class="box box-solid">
                <div class="box-header">
                  <i class="fa fa-check-square-o"></i>
                  <h3 class="box-title">Wilayah <?php echo $data_f['singkatan'] ?></h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-default btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
<?php 
      $q_f_k1_k = mysql_query("SELECT * FROM kandidat INNER JOIN pengguna WHERE kandidat.wilayah='$f' AND kandidat.no_urut='1' AND kandidat.ketua=pengguna.nrp ");
      $q_f_k1_w = mysql_query("SELECT * FROM kandidat INNER JOIN pengguna WHERE kandidat.wilayah='$f' AND kandidat.no_urut='1' AND kandidat.wakil=pengguna.nrp ");
      $q_f_k2_k = mysql_query("SELECT * FROM kandidat INNER JOIN pengguna WHERE kandidat.wilayah='$f' AND kandidat.no_urut='2' AND kandidat.ketua=pengguna.nrp ");
      $q_f_k2_w = mysql_query("SELECT * FROM kandidat INNER JOIN pengguna WHERE kandidat.wilayah='$f' AND kandidat.no_urut='2' AND kandidat.wakil=pengguna.nrp ");
      //masukan data baris query kesatu variabel 
      $f_k1 = mysql_fetch_array($q_f_k1_k);
      $f_w1 = mysql_fetch_array($q_f_k1_w);
      $f_k2 = mysql_fetch_array($q_f_k2_k);
      $f_w2 = mysql_fetch_array($q_f_k2_w);
?>
                  <div class="box-body">
                    <div class="row">
                      <div class="col-md-6 col-sm-12 col-xs-12 text-center">
                        <table class="table no-margin">
                          <tr>
                            <th><center>1</center></th>
                          </tr>
                          <tr>
                            <th><center><img width="250px" height="250px" src="image/<?php echo $f_k1['image'] ?>"></center></th>
                          </tr>
                          <tr>
                            <th><center><?php echo $f_k1['fullname'] ?> & <?php echo $f_w1['fullname'] ?></center></th>
                          </tr>
                          <tr>
                            <th><center><input required="required" type="radio" name="f" value="1" class="flat-red"/></center></th>
                          </tr>
                        </table>
                      </div><!-- ./col -->
                      <div class="col-md-6 col-sm-12 col-xs-12 text-center">
                        <table class="table no-margin">
                          <tr>
                            <th><center>2</center></th>
                          </tr>
                          <tr>
                            <th><center><img width="250px" height="250px" src="image/<?php echo $f_k2['image'] ?>"></center></th>
                          </tr>
                          <tr>
                            <th><center><?php echo $f_k2['fullname'] ?> & <?php echo $f_w2['fullname'] ?></center></th>
                          </tr>
                          <tr>
                            <th><center><input required="required" type="radio" name="f" value="2" class="flat-red"/></center></th>
                          </tr>
                        </table>
                      </div><!-- ./col -->
                    </div>
                  </div>
                </div><!-- /.box-header -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
          <div class="row">
            <div class="col-xs-12">
              <!-- jQuery Knob -->
                  <div class="box-body">
                    <div class="row">
                        <center><input type="submit" value="Berikan Suara" class="btn btn-primary btn-block btn-flat"></center>
                    </div>
                    </form>
                </div><!-- /.box-header -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section>
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
    <!-- iCheck 1.0.1 -->
    <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>


  </body>
</html>