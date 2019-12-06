<?php 
// mengaktifkan session
session_start();
 
// menghapus semua session
session_destroy();
 
// mengalihkan halaman sambil mengirim pesan logout
echo ("<script LANGUAGE='JavaScript'>
    window.alert('Logout Sukses');
    window.location.href='login.php';
    </script>");
?>