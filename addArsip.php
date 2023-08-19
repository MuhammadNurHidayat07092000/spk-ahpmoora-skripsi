<?php

$koneksi = mysqli_connect("localhost","root","");
$db = mysqli_select_db($koneksi,"db_moora");

// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "db_moora";

// $koneksi = mysqli_connect($servername, $username, $password, $database);

if(isset($_POST['tambahData'])) 
{
    $kode = $_POST['kode'];
    $kriteria = $_POST['kriteria'];
    $type = $_POST['type'];
    $bobot = $_POST['bobot'];
    $satuan = $_POST['satuan'];

    $query = "INSERT INTO tb_kriteria(`kode`,`kriteria`,`type`,`bobot`,`satuan`) VALUES ('$kode','$kriteria','$type','$bobot','$satuan')";
    $query_run = mysqli_query($koneksi, $query);

    if($query_run)
    {
        echo '<script> alert("Data Tersimpan"); </script>';
        header('Location:index3.php');
    } else {
        echo '<script> alert("Data Tidak Tersimpan"); </script>';
    }
}