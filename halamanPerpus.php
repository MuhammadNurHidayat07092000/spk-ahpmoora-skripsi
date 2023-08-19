<?php
session_start();

if(empty($_SESSION['username']) or empty($_SESSION['level'])) {
  echo "<script>alert('Maaf, untuk mengakses halaman ini, anda harus login terlebih dahulu, terima kasih');
  document.location='login.php'</script> ";
}

// include('includes/header.php');
require_once 'perpustakaan.php';
$moora = new moora();

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>PROJEK SPK</title>
  </head>
  <body>
    <div class="container mt-3">
      <div class="jumbotron bg-success text-white">
        <h1 class="display-4">Hello, <b><?= $_SESSION['nama_lengkap'] ?></b></h1>
        <p class="lead">Selamat datang, anda berhasil Login sebagai <b><?= $_SESSION['username'] ?></b></p>
        <a class="btn btn-warning btn-lg" href="logout.php" role="button">Log Out</a>
      </div>
        <h3 class="text-center">PENGELOLAAN DATA BIDANG PERPUSTAKAAN</h3>

        <hr>
        <!-- <div class="card">
          <div class="card-header">
            <h4>Data Kriteria</h4>
          </div>
          <div class="card-body">
            <table class="table table-striped">
              <thead class="table-warning">
                  <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Kriteria</th>
                    <th>Type</th>
                    <th>Bobot</th>
                    <th>Satuan</th>
                  </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach($moora->kriteria as $k) {
                ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $k[0] ?></td>
                    <td><?= $k[1] ?></td>
                    <td><?= $k[2] ?></td>
                    <td><?= $k[3] ?></td>
                    <td><?= $k[4] ?></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div> -->

        <div class="card mt-4">
          <div class="card-header">
            <h4>Data Alternatif</h4>
          </div>
          <div class="card-body">
            <table class="table table-striped">
              <thead class="table-warning">
                  <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Alternatif</th>
                    <th>K1</th>
                    <th>K2</th>
                    <th>K3</th>
                    <th>K4</th>
                    <th>K5</th>
                  </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                $as = $moora->akar_sigma;
                foreach($moora->alternatif as $a) {
                ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $a[0] ?></td>
                    <td><?= $a[1] ?></td>
                    <td><?= $a[2] ?></td>
                    <td><?= $a[3] ?></td>
                    <td><?= $a[4] ?></td>
                    <td><?= $a[5] ?></td>
                    <td><?= $a[6] ?></td>
                  </tr>
                <?php } ?>
                <tr>
                  <th></th>
                  <td></td>
                  <td></td>
                  <td><?= $moora->akar_sigma[0] ?></td>
                  <td><?= $as[1] ?></td>
                  <td><?= $as[2] ?></td>
                  <td><?= $as[3] ?></td>
                  <td><?= $as[4] ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card mt-4">
          <div class="card-header">
            <h4>Data Normalisasi</h4>
          </div>
          <div class="card-body">
            <table class="table table-striped">
              <thead class="table-warning">
                  <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Alternatif</th>
                    <th>K1</th>
                    <th>K2</th>
                    <th>K3</th>
                    <th>K4</th>
                    <th>K5</th>
                  </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach($moora->matriks_normalisasi as $mn) {
                ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $mn[0] ?></td>
                    <td><?= $mn[1] ?></td>
                    <td><?= $mn[2] ?></td>
                    <td><?= $mn[3] ?></td>
                    <td><?= $mn[4] ?></td>
                    <td><?= $mn[5] ?></td>
                    <td><?= $mn[6] ?></td>
                  </tr>
                <?php } ?>
                <tr>
                  <th colspan = "3"></th>
                  <?php
                  $no = 1;
                  foreach($moora->kriteria as $k) {
                  ?>
                  <td><?= $k[3] ?></td>
                  <?php } ?>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card mt-4">
          <div class="card-header">
            <h4>Data Optimalisasi</h4>
          </div>
          <div class="card-body">
            <table class="table table-striped">
              <thead class="table-warning">
                  <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Alternatif</th>
                    <th>Benefit</th>
                    <th>Cost</th>
                    <th>Optimalisasi</th>
                  </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach($moora->nilai_optimalisasi as $np) {
                ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $np[0] ?></td>
                    <td><?= $np[1] ?></td>
                    <td><?= $np[2] ?></td>
                    <td><?= $np[3] ?></td>
                    <td><?= $np[4] ?></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card mt-4">
          <div class="card-header">
            <h4>Data Perangkingan</h4>
          </div>
          <div class="card-body">
            <table class="table table-striped">
              <thead class="table-warning">
                  <tr>
                    <th class="text-center">Rangking</th>
                    <th>Kode</th>
                    <th>Alternatif</th>
                    <th>Benefit</th>
                    <th>Cost</th>
                    <th>Optimalisasi</th>
                  </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach($moora->perangkingan as $p) {
                ?>
                  <tr>
                    <td class="text-center"><?= $no++ ?></td>
                    <td><?= $p[0] ?></td>
                    <td><?= $p[1] ?></td>
                    <td><?= $p[2] ?></td>
                    <td><?= $p[3] ?></td>
                    <td><?= $p[4] ?></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </div>
  </body>
</html>