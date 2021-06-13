<html>
    <head>
        <link rel="stylesheet" href="<?= base_url("css/inputruang.css")?>">
        <title>Mahasiswa | Peminjaman Ruangan</title>
    </head>
    <body>
     
        <div class="div-img">
            <form style="float:right;" method="POST" action="<?=site_url('Controller_Ruangan/pinjamRuang')?>">
                <h2 style="padding-bottom: 20px;">Input Peminjaman Ruangan</h2>
                <p>
                    <input type="text"class="id" name="KodeRuangan" placeholder="Masukkan Kode Ruangan"/>
                </p>
                <p>
                    <input type="date" name="Tanggal" class="tanggal"/>
                </p>
                
                <button>OK</button>
            </form>
            <h1>R01</h1>
            <img class="card-img-top" src="../../asset/ruangan1.jpg" alt="Card image cap" width="650" height="358" style="border-radius: 5px;">
        </div>
    </body>
</html>
