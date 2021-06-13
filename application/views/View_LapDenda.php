<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Denda</title>
</head>
<body> -->
    <!--View tabel untuk melihat data denda pada mahasiswa-->
    <div class="container-fluid mt-lg-5  mb-5"
    style="background-color: #CBE3FF; width: 100%; text-align: center; padding-top: 10px; padding-bottom: 10px;">
        <h1>DATA DENDA</h1>
    </div>
    <div class="d-flex">
        <a
            href="<?= site_url("")?>"
            type="button"
            class="btn btn-primary ml-auto mr-5 mb-2"
            data-toggle = "modal"
            data-target="#addDenda">Tambah Denda</a>
    </div>
    <div class="container">
        <table class="table" >
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">ID Peminjaman</th>
                <th scope="col">Nama Mahasiswa</th>
                <th scope="col">Judul Buku</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Total Denda</th>
                <th scope="col">Opsi</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=1; foreach ($dataDenda as $d_denda ) {?>
                <tr>
                  <td>
                    <?php echo $no?>
                  </td>
                    <td id="margin"><?php echo $d_denda['idPeminjaman']?></td>
                    <td id="margin"><?php echo $d_denda['NamaMhs']?></td>
                    <td id="margin"><?php echo $d_denda['Judul'] ?></td>
                    <td id="margin"><?php echo $d_denda['Tanggal']?></td>
                    <td id="margin"><?php echo $d_denda['TotalDenda'] ?></td>
                    <td id="margin">
                        <button
                            type="button"
                            class="btn btn-warning"
                            data-toggle="modal"
                            data-target="#updateModal"
                            data-id="<?= $d_denda['idPeminjaman']?>">
                            Edit
                        </button>
                        <a
                            type="button"
                            class="btn btn-danger"
                            href="<?php echo site_url('Controller_Laporan/hapusDenda/'); ?><?php echo $d_denda['idDenda'] ?>"
                            onclick="return confirm('Apakah Anda Yakin untuk Menghapusnya?')">Delete</a>
                    </td>
                </tr>
              <?php $no++;} ?>   
            </tbody>
          </table>
    </div>

<!-- Modal Tambah Denda -->
<div class="modal fade" id="addDenda" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="">Tambah Denda</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= site_url("Controller_InputDenda/tambahDenda/");?>" method="POST"  enctype="multipart/form-data">
            <div class="form-group">
              <label for="idPeminjaman">ID Peminjaman</label>
              <input type="text" class="form-control" id="JudulBuku" name="Judul">
            </div>
             <div class="form-group">
              <label for="NamaMhs">Nama Mahasiswa</label>
              <input type="text" class="form-control" id="KodeBuku" name="KodeBuku">
            </div>
             <div class="form-group">
              <label for="Judul">Judul Buku</label>
              <input type="text" class="form-control" id="PenerbitBuku" name="Penerbit">
            </div>
             <div class="form-group">
              <label for="Tanggal">Tanggal</label>
              <input type="date" class="form-control" id="StockBuku" name="Stock">
            </div>
            <div class="form-group">
              <label for="TotalDenda">Total Denda</label>
              <input type="text" class="form-control" id="TotalDenda" name="TotalDenda">
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary" value="uploads">Tambah Denda</button>
              <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancel</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- </body>
</html> -->