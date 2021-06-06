
<h1 class="satu">Input Data Buku</h1>
<h1 class="dua">O-LIB</h1>
<form>
    <div style="float:right;">
        <img src="<?= base_url('asset/upload.jpg')?>" alt="Upload Gambar" style="width:220px; height:250px;"><br>
        <input type="file" class="upload"/>
    </div>
    <div>
        <label>KODE BUKU</label>
        <input type="text"class="kode"/>
    </div>
    <div>
        <label>JUDUL BUKU</label>
        <input type="text" class="judul"/>
    </div>
    <div>
        <label>STOCK</label>
        <input type="number" class="stock"/>
    </div>
    <div>
        <label>PENERBIT</label>
        <input type="text" class="penerbit"/>
    </div>
    <button>SUBMIT</button>
</form>
