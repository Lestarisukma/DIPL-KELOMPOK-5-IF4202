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

        .satu {
            margin-top: 100px;
            margin-left: 550px;
        }

        .dua {
            margin-left: 640px;
        }

        input {
            background-color: #DFDFDF;
            border-radius: 5px;
            height: 25px;
            width: 250px;
            margin-bottom: 15px;
        }

        form {
            margin-left: 250px;
            margin-top: 50px;
        }

        .id {
            margin-left: 40px;
        }

        .nama {
            margin-left: 18px;
        }

        .judul {
            margin-left: 70px;
        }

        .tanggal {
            margin-left: 90px;
        }

        button {
            background-color: #3F3D56;
            border-radius: 8px;
            color: white;
            margin-top: 20px;
            width: 80px;
            height: 30px;
        }
    </style>
    <title>Input Denda Buku</title>
</head>
<body>
    <h1 class="satu">Input Denda Buku</h1>
    <h1 class="dua">O-LIB</h1>
    <form>
        <p>
            <label>ID PEMINJAMAN</label>
            <input type="text"class="id"/>
        </p>
        <p>
            <label>NAMA MAHASISWA</label>
            <input type="text" class="nama"/>
        </p>
        <p>
            <label>JUDUL BUKU</label>
            <input type="text" class="judul"/>
        </p>
        <p>
            <label>TANGGAL</label>
            <input type="date" class="tanggal"/>
        </p>
        <button>SUBMIT</button>
    </form>
</body>
</html>