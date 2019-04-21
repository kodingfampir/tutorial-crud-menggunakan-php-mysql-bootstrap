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
          <div class="enter"></div><br>
          <?php
          if(isset($_GET['notif'])){
            if($_GET['notif']=="berhasil"){
          ?>
          <div class="alert alert-success alert-dismissable">
            <p><i class="icon fa fa-check"></i> Berhasil</p>
          </div>
          <?php
             }
           } 
          ?>
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
                  <table class="table table-bordered table-striped table-hover">
                    <thead>
                      <th><center>No</center></th>
                      <th><center>Nim</center></th>
                      <th><center>Nama</center></th>
                      <th><center>Jenis Kelamin</center></th>
                      <th><center>Umur</center></th>
                      <th><center>Alamat</center></th>
                      <th><center>Action</center></th>
                    </thead>
                    <tbody>
                      <?php 
                        $i=1;
                        while($data=mysqli_fetch_array($query)){
                      ?>
                      <tr>
                        <td align="center"><?php echo $i ?></td>
                        <td align="center"><?php echo $data['nim'] ?></td>
                        <td align="center"><?php echo $data['nama'] ?></td>
                        <td align="center"><?php echo $data['jkel'] ?></td>
                        <td align="center"><?php echo $data['umur'] ?></td>
                        <td align="center"><?php echo $data['alamat'] ?></td>
                        <td align="center">
                          <a href="mahasiswa-edit.php?id=<?php echo $data['id'] ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
                          <a href="mahasiswa-delete.php?id=<?php echo $data['id'] ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                      </tr>
                      <?php
                        $i++;
                        }
                      ?>
                    </tbody>
                  </table>
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