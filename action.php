<?php
include_once("koneksi.php");

if(isset($_POST['Simpan'])){

	$nim 	= $_POST['nim'];
	$nama 	= $_POST['nama'];
	$jkel 	= $_POST['jkel'];
	$umur 	= $_POST['umur'];
	$alamat = $_POST['alamat'];

	$query = mysqli_query($mysqli, "INSERT INTO mahasiswa VALUES ('','$nim','$nama','$jkel','$umur','$alamat')");

	if($query){
		header("Location: mahasiswa.php?notif=berhasil");
	}
}


if(isset($_POST['Edit'])){
	
	$id 	= $_POST['id'];
	$nim 	= $_POST['nim'];
	$nama 	= $_POST['nama'];
	$jkel 	= $_POST['jkel'];
	$umur 	= $_POST['umur'];
	$alamat = $_POST['alamat'];

	$query = mysqli_query($mysqli, "UPDATE mahasiswa SET nim='$nim', nama='$nama', jkel='$jkel', umur='$umur', alamat='$alamat' WHERE id='$id' ");

	if($query){
		header("Location: mahasiswa.php?notif=berhasil");
	}
}

if(isset($_POST['Hapus'])){

	$id    = $_POST['id'];
	$query = mysqli_query($mysqli, "DELETE FROM mahasiswa WHERE id='$id' ");

	if($query){
		header("Location: mahasiswa.php?notif=berhasil");
	}

}




?>