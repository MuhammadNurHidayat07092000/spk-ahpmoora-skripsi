<?php

session_start();
unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['nama_lengkap']);
unset($_SESSION['level']);

session_destroy();
// alert('Anda telah keluar dari halaman Administrator');
echo "<script>document.location='index.php'</script>"; 