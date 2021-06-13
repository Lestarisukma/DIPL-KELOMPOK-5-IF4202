<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
    <style>
        body {
            background-color: #CBE3FF;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* .border {
            background-color: #F0D790;
            width: 300px;
            height: 30px;
            border-radius: 5px;
            margin-top: 20px;
        } */

        .textarea {
            background-color: #F0D790;
            width: 300px;
            border-radius: 5px;
            margin-top: 20px;
        }

        button {
            background-color: #3F3D56;
            border-radius: 8px;
            color: white;
            margin-top: 20px;
            margin-left: 256px;
            width: 50px;
            height: 30px;
        }
        
        .kerangka {
            margin-left: 550px;
            margin-top: 35px;
        }
    </style>
    <title>Peminjaman Buku</title>
</head>
<body>
    <div>
        <form method="post" action="<?= site_url("Controller_Mahasiswa/peminjamanBuku")?>">
            <h1 style="margin-left: 500px; margin-top: 50px;">Input Peminjaman Buku</h1>
            <div class="kerangka">
                <a>NIM</a><br>
                <input type="text" class="textarea" name="NIM"/><br>
                <a>KODE BUKU</a><br>
                <input type="text" class="textarea" name="KodeBuku"/><br>
                <a>TANGGAL PENGAMBILAN</a><br>
                <input type="date" class="textarea" name="Tanggal"/><br>
                <button>OK</button>
            </div>
        </form>
    </div>
</body>
</html>