<!DOCTYPE html>
<html lang="en">
<head>
    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">

    <!--CSS-->
    <style>
      .card:hover{
          transform: scale(1.05);
          box-shadow:  0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
      }
      .card{
          border-radius: 10px;
          background: #fff;
          box-shadow: 0 6px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);
          transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);
          cursor: pointer;
      }
    </style>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman Ruangan</title>
</head>
<body>
    <!--View card untuk menampilkan jenis-jenis ruangan-->
    <div class="container-fluid" style="padding-left: 70px;">
        <div class="row ">
          <h1 style="padding-top: 70px; margin: 0 auto; margin-bottom: 50px;">DAFTAR RUANGAN </h1>
          <div class="container">
            <div class="row">
              <div class="col-4 mb-5">
                <a href="<?= site_url("/Controller_Ruangan/DetailRuangan")?> ">
                  <div class="card" style="width: 18rem; ">
                    <img class="card-img-top" src="../asset/ruangan1.jpg" alt="Card image cap" width="400" height="200">
                    <div class="card-body">
                      <p class="card-text" style="color: black;">R01</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-4 mb-5">
                <a href=" ">
                  <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="../asset/ruangan2.jpg" alt="Card image cap" width="400" height="200" >
                    <div class="card-body">
                      <p class="card-text " style="color: black;">R02</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-4 mb-5">
                <a href=" ">
                  <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="../asset/ruangan3.JPEG" alt="Card image cap" width="400" height="200">
                    <div class="card-body">
                      <p class="card-text" style="color: black;">R03</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-4 mb-5">
                <a href=" ">
                  <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="../asset/ruangan4.JPEG" alt="Card image cap" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text" style="color: black;">R04</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-4 mb-5">
                <a href=" ">
                  <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="../asset/ruangan5.jpeg" alt="Card image cap" width="400" height="200">
                    <div class="card-body">
                      <p class="card-text" style="color: black;">R05</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-4 mb-5">
                <a href=" ">
                  <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="../asset/ruangan6.jpg" alt="Card image cap" width="400" height="200">
                    <div class="card-body">
                      <p class="card-text" style="color: black;">R06</p>
                    </div>
                  </div>
                </a>
              </div>
        </div>  
    </div>   
</body>
  <!--Javascript untuk mahasiswa melakukan peminjaman ruangan-->
  <script type="text/javascript" src="../../javascript/bootstrap.min.js"></script>
  <script type="text/javascript" src="../../javascript/jquery-2.2.3.min.js"></script>
</html>