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
                <th scope="col">NIM</th>
                <th scope="col">Tanggal Pengembalian</th>
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
                    <td id="margin"><?php echo $d_denda['NIM']?></td>
                    <td id="margin"><?php echo $d_denda['Tanggal']?></td>
                    <td id="margin"><?php echo $d_denda['TotalDenda'] ?></td>
                    <td id="margin">
                        <!-- <button
                            type="button"
                            class="btn btn-warning"
                            data-toggle="modal"
                            data-target="#updateModal"
                            data-id="<?= $d_denda['idPeminjaman']?>">
                            Edit
                        </button> -->
                        <a
                            type="button"
                            class="btn btn-danger"
                            href="<?php echo site_url('Controller_InputDenda/hapusDenda/'); ?><?= $d_denda['idDenda'] ?>"
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
        <?php
          $id = 0;
          if(count($denda) > 0){
             $id = $denda[0]['idDenda'];
          }
        ?>
        <form action="<?= site_url("Controller_InputDenda/addDenda/".$id);?>" method="POST"  enctype="multipart/form-data">
            <div class="form-group">
              <label for="idPeminjaman">ID Peminjaman</label>
              <input type="text" class="form-control" id="idPeminjaman" name="idPeminjaman">
            </div>
             <div class="form-group">
              <label for="NIM">NIM</label>
              <input type="text" class="form-control" id="NIM" name="NIM">
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

<!-- Modal Update Buku -->
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">

  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h2 style="text-align:center;">EDIT DATA DENDA</h2>
      </div>
      <div class="modal-body">

      <!-- isi form ini -->
      <form action="" method="POST" id="formUpdate">

        <div class="form-group">
          <label for="JudulB">ID Peminjaman</label>
          <input type="text" class="form-control" id="JudulBook" placeholder="Judul Buku" name="JudulB" required>
        </div>
        <div class="form-group">
          <label for="PenerbitB">Penerbit</label>
          <input type="text" class="form-control" id="PenerbitBook" placeholder="Penerbit Buku" name="PenerbitB" required>
        </div>
        <div class="form-group">
          <label for="StockB">Stock</label>
          <input type="text" class="form-control" id="StockBook" placeholder="Stock Buku" name="StockB" required>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary" id="updateSubmit">Submit</button>
      </div>
    </form>
    </div>
  </div>
</div>
<!-- </body>
</html> -->