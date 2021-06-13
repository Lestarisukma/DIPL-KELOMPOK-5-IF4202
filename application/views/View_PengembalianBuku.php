<body style="background-color: #CBE3FF; margin-left: 0px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <div class="d-flex justify-content-center">
        <div style="border: 1px solid; width: max-content; padding-right: 40px; padding-left: 40px; padding-top: 40px; padding-bottom: 40px; margin-top: 100px;border-radius: 5px;">
            <form method='POST' action='<?= site_url('Controller_Laporan/insertPengembalian/'); ?>'>
                <h1>Input Pengembalian Buku</h1>
                <div class="kerangka" style="margin-left: 50px;">
                    <label>ID Peminjaman</label><br>
                    <textarea placeholder="KODE PEMINJAMAN" name='idPeminjaman' style="background-color: #F0D790; width: 300px; border-radius: 5px; margin-left: 25px; margin-top: 20px;"> </textarea><br>
                    <label>Tanggal Pengembalian</label><br>
                    <input type="date" class="tanggal" name='Tanggal' style="background-color: #F0D790; width: 300px; border-radius: 5px; margin-left: 25px; margin-top: 20px;"/><br>
                    <button 
                        type="Submit"
                        style="background-color: #3F3D56;border-radius: 8px; color: white; 
                            margin-top: 20px; margin-left: 275px; width: 50px; height: 30px;">
                        OK
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>