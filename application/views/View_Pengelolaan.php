
<div class="container-fluid mt-lg-5  mb-5"
style="background-color: #CBE3FF; width: 100%; text-align: center; padding-top: 10px; padding-bottom: 10px;">
    <h1>DATA BUKU</h1>
</div>
<div class="form-group input-group" style="margin-left: 82%; ">
    <a
        href="<?= site_url('Controller_Laporan/InputBukuBaru')?>"
        type="button"
        class="btn btn-primary"
        data-target="">Tambah Buku</a>
</div>

<div class="container">
    <table class="table" >
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Judul Buku</th>
            <th scope="col">Kode Buku</th>
            <th scope="col">Penerbit</th>
            <th scope="col">Stock</th>
            <th scope="col">Opsi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
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
            </tr>
            
            
        </tbody>
        </table>
</div>
