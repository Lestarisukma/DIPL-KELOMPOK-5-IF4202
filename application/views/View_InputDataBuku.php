<body style="background-color: #CBE3FF; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <h1 style="margin-top: 60px; margin-left: 550px;">Input Data Buku</h1>
    <h1 style="margin-left: 640px;">O-LIB</h1>
    <form style="margin-left: 250px; margin-top: 50px;">
        <div style="float:right;">
            <img src="<?= base_url('asset/upload.jpg')?>" alt="Upload Gambar" style="width:220px; height:250px;"><br>
            <input type="file" style="margin-right: 200px;"/>
        </div>
        <div>
            <label>KODE BUKU</label>
            <input type="text" style="background-color: #DFDFDF; border-radius: 5px; height: 25px; width: 250px; margin-bottom: 30px; margin-left: 35px;"/>
        </div>
        <div>
            <label>JUDUL BUKU</label>
            <input type="text" style="background-color: #DFDFDF; border-radius: 5px; height: 25px; width: 250px; margin-bottom: 30px; margin-left: 28px;"/>
        </div>
        <div>
            <label>STOCK</label>
            <input type="number" style="background-color: #DFDFDF; border-radius: 5px; height: 25px; width: 250px; margin-bottom: 30px; margin-left: 70px;"/>
        </div>
        <div>
            <label>PENERBIT</label>
            <input type="text" style="background-color: #DFDFDF; border-radius: 5px; height: 25px; width: 250px; margin-bottom: 30px; margin-left: 50px;"/>
        </div>
        <button style="background-color: #3F3D56; border-radius: 8px; color: white;
                       margin-top: 20px; width: 80px; height: 30px;">SUBMIT</button>
    </form>
</body>
