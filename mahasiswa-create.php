<?php
// Memasukan koneksi.php untuk koneksi kedatabase
include_once("koneksi.php");

// Melakukan eksekusi query untuk mengambil data dari database
$query = mysqli_query($mysqli, "SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PLN</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/Font-Awesome-4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/AdminLTE.min.css">
  <link rel="stylesheet" href="assets/css/skins/_all-skins.min.css">
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="loaderku">
    <div class="wrapper">
      <header class="main-header">
        <a href="#" class="logo">
          <span class="logo-mini"><b>KF</b></span>
          <span class="logo-lg"><b>CRUD</b> </span>
        </a>
        <nav class="navbar navbar-static-top" role="navigation">
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button" id="buttonMenu">
            <span class="sr-only">Toggle navigation</span><span> Menu</span>
          </a>
        </nav>
      </header>
      <aside class="main-sidebar">
        <section class="sidebar">
          <ul class="sidebar-menu">
            <li class="header">MENU</li>
            <li class="active"><a href="mahasiswa.php"><i class="fa fa-dashboard"></i> <span> Mahasiswa</span></a></li>
          </ul>
        </section>
      </aside>

      <div class="content-wrapper">
        <section class="content-header">
          <h1>
            CRUD
          </h1>
          <div class="enter"></div>
        </section>
        <section class="content">
          <div class="row">
            <div class="col-lg-12">
              <div class="box box-primary box-solid"> 
                <div class="box-header">
                  <h3 class="box-title">
                  Data Mahasiswa
                  </h3>
                </div>
                <div class="box-body table-responsive">
                  <div class="form-horizontal">
                    <form name="form1" id="form1" method="post" action="action.php" enctype="multipart/form-data" autocomplete="off">
                      <div class="form-group">
                        <label for="username" class="col-sm-2 control-label">Nim</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" id="nim" name="nim" value="" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="username" class="col-sm-2 control-label">Nama</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" id="nama" name="nama" value="" required number="true">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="username" class="col-sm-2 control-label">Jenis Kelamin</label>
                        <div class="col-sm-7">
                          <select class="form-control" id="jkel" name="jkel">
                            <option>--pilih--</option>
                            <option value="laki-laki">laki-laki</option>
                            <option value="perempuan">perempuan</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="username" class="col-sm-2 control-label">Umur</label>
                        <div class="col-sm-7">
                          <input type="number" class="form-control" id="umur" name="umur" value="" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Alamat</label>
                        <div class="col-sm-7">
                          <textarea type="text" class="form-control" id="alamat" name="alamat" required></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="simpan" class="col-sm-2 control-label"></label>
                        <div class="col-sm-7">
                          <button type="submit" class="btn btn-success" name="Simpan" id="Simpan" value="Simpan"><i class="fa fa-save"></i> Simpan</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Ver</b> 1
        </div>
        <strong>Copyright &copy; 2019 </strong>
      </footer>
    <div class="control-sidebar-bg"></div>
    </div>
  </div>

<script src="assets/js/jQuery-2.1.4.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/app.min.js"></script>
</body>
</html>