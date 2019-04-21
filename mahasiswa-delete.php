<?php
// Memasukan koneksi.php untuk koneksi kedatabase
include_once("koneksi.php");
//mengambil id dari url
$id=$_GET['id'];
// Melakukan eksekusi query untuk mengambil data dari database
$query = mysqli_query($mysqli, "SELECT * FROM mahasiswa WHERE id='$id' ");
//menyimpan hasil quuery kedalam bentuk array
$data  = mysqli_fetch_array($query);
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
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Yakin ingin menghapus data?</h3>
                </div>
                
                <div class="box-body">
                  <form name="form" method="post" action="action.php">
                  <input type="hidden" name="id" value="<?php echo $id ?>">
                    <div class="form-horizontal">
                      <div class="form-group">
                        <label for="Tanggal" class="control-label col-md-2">Nama </label>
                        <div class="col-md-4">
                            <div class="form-control-static">
                                : <?php echo $data['nama'] ?>
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                          <div class="col-md-offset-2 col-md-4">
                            <button type="submit" class="btn btn-danger" name="Hapus"id="Hapus" value="Hapus"><i class="fa fa-save"></i> Hapus</button>
                            <a href="mahasiswa.php" class="btn btn-default"><i class="fa fa-close"></i> Batal</a>
                          </div>
                        </div>  
                    </div>
                  </form>
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