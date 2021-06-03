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
            margin-left: 500px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        textarea {
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

        .border {
            border: 1px solid;
            width: max-content;
            padding-right: 40px;
            padding-left: 40px;
            padding-top: 40px;
            padding-bottom: 40px;
            margin-top: 180px;
            border-radius: 5px;
        }

        .kerangka {
            margin-left: 50px;
        }
    </style>
    <title>Pengembalian Buku</title>
</head>
<body>
    <div class="border">
        <h1>Input Pengembalian Buku</h1>
        <div class="kerangka">
            <textarea placeholder="KODE PEMINJAMAN"> </textarea><br>
            <button>OK</button>
        </div>
    </div>
</body>
</html>