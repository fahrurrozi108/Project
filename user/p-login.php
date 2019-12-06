<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include '../config.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from tb_pelanggan where username='$username' and password='$password' ");
 $tes = mysqli_query($koneksi,"select * from tb_paket");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    
    while($d = mysqli_fetch_array($data)){
       $_SESSION['id_pelanggan'] = $d['id_pelanggan'];
       
    }
    while($d = mysqli_fetch_array($tes)){
        $_SESSION['id_paket'] =$d['id_paket'];
     }
    
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Login Sukses');
    window.location.href='aksi/home.php';
    </script>");
}else{
	header("location:login.php");
}
?>