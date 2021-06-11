
<div class="mt-lg-5  mb-5"
style="background-color: #CBE3FF; width: 100%; text-align: center; padding-top: 10px; padding-bottom: 10px;">
    <h1>DATA BUKU</h1>
</div>
<div class="d-flex">
    <a
        href="<?= site_url("")?>"
        type="button"
        class="btn btn-primary ml-auto mr-5 mb-2"
        data-toggle = "modal"
        data-target="#addBuku">Tambah Buku</a>
</div>

<div class="ml-5 mr-5">
    <table class="table">
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
                  <?php echo $no?>
                </td>
                  <td>
                      <img id="image" width="100" height="100" src="<?= base_url("asset/") . $d_buku['Gambar'] ?>" alt="">
                  </td>
                  <td id="margin"><?php echo $d_buku['Judul']?></td>
                  <td id="margin"><?php echo $d_buku['KodeBuku'] ?></td>
                  <td id="margin"><?php echo $d_buku['Penerbit']?></td>
                  <td id="margin"><?php echo $d_buku['Stock'] ?></td>
                  <td id="margin">
                      <button
                          type="button"
                          class="btn btn-warning"
                          data-toggle="modal"
                          data-target="#updateModal"
                          data-id="<?= $d_buku['KodeBuku']?>">
                          Edit
                      </button>
                      <a
                          type="button"
                          class="btn btn-danger"
                          href="<?php echo site_url('Controller_Kelola/hapusBuku/'); ?><?php echo $d_buku['KodeBuku'] ?>"
                          onclick="return confirm('Apakah Anda Yakin untuk Menghapusnya?')">Delete</a>
                  </td>
              </tr>
            <?php $no++;} ?>            
        </tbody>
        </table>
</div>

<!-- Modal Tambah Buku -->
<div class="modal fade" id="addBuku" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="">Tambah Buku</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= site_url("Controller_Kelola/InsertBuku/");?>" method="POST"  enctype="multipart/form-data">
            <div class="form-group">
              <label for="JudulBuku">Judul Buku</label>
              <input type="text" class="form-control" id="JudulBuku" name="Judul" placeholder="Judul Buku">
            </div>
             <div class="form-group">
              <label for="KodeBuku">Kode Buku</label>
              <input type="text" class="form-control" id="KodeBuku" name="KodeBuku" placeholder="Kode Buku">
            </div>
             <div class="form-group">
              <label for="Penerbit">Penerbit</label>
              <input type="text" class="form-control" id="PenerbitBuku" name="Penerbit" placeholder="Penerbit Buku">
            </div>
             <div class="form-group">
              <label for="StockBuku">Stock</label>
              <input type="text" class="form-control" id="StockBuku" name="Stock" placeholder="Stock Buku">
            </div>
            <div class="form-group">
              <label for="UploadGambar">Upload Gambar</label>
              <input type="file" class="form-control-file" id="UploadGambar" name="uploadImage">
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


<!--Modal Tambah Buku -->

<!-- <div class="container" id="NewProduct">
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
                        <div class="col-md-4">
                            <img
                                id="addImage"
                                src="<?= base_url('asset/upload.jpg') ?>"
                                style=""
                                class="roundedcircle d-block"/>
                        </div>
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
</div> -->
<!-- Modal Update Buku -->
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">

  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h2 style="text-align:center;">UPDATE DATA BUKU</h2>
      </div>
      <div class="modal-body">

      <!-- isi form ini -->
      <form action="" method="POST" id="formUpdate">

        <div class="form-group">
          <label for="JudulB">Judul</label>
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

<script type="text/javascript">
$(document).ready(function() {
  $('#updateModal').on('show.bs.modal', function(event) {
    let KodeBuku = $(event.relatedTarget).data('id');
    $.ajax({
      url: `<?= site_url('Controller_Kelola/getBukuByKodeBuku/') ?>${KodeBuku}`,
      type: "GET",
      dataType: "JSON",
      success: function(data) {
        console.log(data)
        if (data) {
          $('#formUpdate').attr("action",`<?= site_url("Controller_Buku/updateBuku/")?>${data.KodeBuku}`);
          $('#JudulBook').val(data.Judul);
          $('#PenerbitBook').val(data.Penerbit);
          $('#StockBook').val(data.Stock);
        }
      }
    })
  })
})
</script>