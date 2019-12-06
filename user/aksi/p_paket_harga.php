<?php
session_start();
include '../../config.php';


$id_paket       =$_POST['id_paket'];
$jumlah         =$_POST['jumlah'];
$lokasi_file    =$_FILES['fupload']['tmp_name'];
$nama_file      =$_FILES['fupload']['name'];
$folder         ="files/$nama_file";
$keterangan     =$_POST['keterangan'];
$tgl_upload = date("Ymd");

if (move_uploaded_file($lokasi_file,"$folder")){

  echo ("<script LANGUAGE='JavaScript'>
  window.alert('Pemesanan Sukses');
  window.location.href='transaksi.php';
  </script>");
  
  $query = "INSERT INTO tb_pemesanan  (id_paket, jumlah, file,keterangan,tgl_pemesanan) VALUES('$id_paket','$jumlah','$nama_file','$keterangan','$tgl_upload')".$_SESSION['id_pelanggan'];
  
  mysqli_query($koneksi, $query);
}
else{
  echo "File gagal di upload";
}
?>



