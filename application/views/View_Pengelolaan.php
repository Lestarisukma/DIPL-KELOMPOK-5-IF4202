
<div class="container-fluid mt-lg-5  mb-5"
style="background-color: #CBE3FF; width: 100%; text-align: center; padding-top: 10px; padding-bottom: 10px;">
    <h1>DATA BUKU</h1>
</div>
<div class="form-group input-group" style="margin-left: 82%; ">
    <a
        href="<?= site_url("")?>"
        type="button"
        class="btn btn-primary"
        data-toggle = "modal"
        data-target="#addBuku">Tambah Buku</a>
</div>

<div class="container">
    <table class="table" >
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Gambar</th>
            <th scope="col">Judul Buku</th>
            <th scope="col">Kode Buku</th>
            <th scope="col">Penerbit</th>
            <th scope="col">Stock</th>
            <th scope="col">Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach ($data as $d_buku ) {?>
              <tr>
                  <td>
                      <img id="image" src="<?= base_url("asset/") . $d_buku->Gambar ?>" alt="">
                  </td>
                  <td id="margin"><?php echo $d_buku->Judul?></td>
                  <td id="margin"><?php echo $d_buku->KodeBuku ?></td>
                  <td id="margin"><?php echo $d_buku->Penerbit?></td>
                  <td id="margin"><?php echo $d_buku->Stock ?></td>
                  <td id="margin"></td>
                  <td id="margin">
                      <button
                          type="button"
                          class="btn btn-warning"
                          data-toggle="modal"
                          data-target="#edit<?php echo $d_buku->KodeBuku ?>">
                          Edit
                      </button>
                      <a
                          type="button"
                          class="btn btn-danger"
                          href="<?php echo base_url(); ?>Controller_Kelola/hapusBuku/<?php echo $d_buku->KodeBuku ?>"
                          onclick="return confirm('Apakah Anda Yakin untuk Menghapusnya?')">Delete</a>
                  </td>
              </tr>
            <?php } ?>
            <!-- <tr>
            <th scope="row">1</th>
            <td>...</td>
            <td>Kamu Terlalu Banyak Bercanda</td>
            <td>B01</td>
            <td>GRAMEDIA</td>
            <td>5</td>
            <td>
                <button
                    type="button"
                    class="btn btn-warning mr-2"
                    data-toggle="modal"
                    data-target="">
                    Edit
                </button>
                <a
                    type="button"
                    class="btn btn-danger"
                    href=""
                    onclick="return confirm('Apakah Anda Yakin untuk Menghapusnya?')">Delete</a>

            </td>
            </tr> -->
            
            
        </tbody>
        </table>
</div>

<!--Modal Tambah Buku -->
<div class="container" id="NewProduct">
    <div class="row justify-content-center">
        <div class="modal fade justify-content-center" id="addBuku" role="dialog">
            <div class="modal-dialog bg-modal">
                <div class="modal-content">
                    <h5 id="tittle">Tambah Buku</h5>
                    <form
                        class="row"
                        action="<?= site_url("Controller_Kelola/InsertBuku/");?>"
                        method="POST"
                        enctype="multipart/form-data">
                        <div class="col-md-1"></div>
                        <!-- <div class="col-md-4">
                            <img
                                id="addImage"
                                src="<?= base_url('asset/upload.jpg') ?>"
                                style=""
                                class="roundedcircle d-block"/>
                        </div> -->
                        <div class="col-md-7" id="masukan">
                            <div class="topic-title">Judul Buku</div>
                            <input type="text" name="Judul" class="form-control">
                            <div class="topic-title">Kode Buku</div>
                            <input type="text" class="form-control" name="KodeBuku">
                            <div class="topic-title">Penerbit</div>
                            <input type="text" name="Penerbit" class="form-control">
                            <div class="topic-title">Stock</div>
                            <input type="text" class="form-control" name="Stock">
                            <br>
                            <input type="file" name="uploadImage" class="form-control"/>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary" value="upload">Tambah Buku</button>
                            <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancel</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Update Buku -->
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">

  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h2 style="text-align:center;">UPDATE DATA BUKU</h2>
      </div>
      <div class="modal-body">

      <!-- isi form ini -->
      <form method="POST" id="formUpdate">

        <div class="form-group">
          <label for="formGroupExampleInput">Judul</label>
          <input type="text" class="form-control" id="usernInput" placeholder="Judul Buku" name="JudulB" required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Penerbit</label>
          <input type="text" class="form-control" id="namaInput" placeholder="Penerbit Buku" name="PenerbitB" required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Stock</label>
          <input type="text" class="form-control" id="alamatInput" placeholder="Stock Buku" name="StockB" required>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary" id="updateSubmit">Submit</button>
      </div>
    </form>
    </div>
  </div>
</div>