<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #659DD4">
        <a class="navbar-brand" href="#">O-Lib</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="width: 500px;">
        <ul class="navbar-nav mr-auto " >
            <li class="nav-item ">
            <a class="nav-link" href="#" >Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Buku
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Peminjaman</a>
                <a class="dropdown-item" href="#">Pengembalian</a>
                <a class="dropdown-item" href="#">Denda</a>
            </div>
            </li>
            <li class="nav-item" >
            <a class="nav-link" href="<?= site_url('Controller_Ruangan')?>">Ruangan <span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Nama
            </a>
        </form>
        </div>
    </nav>
</body>
</html>
    