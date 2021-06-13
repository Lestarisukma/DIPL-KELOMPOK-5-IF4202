<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <style>
      #carouselExampleIndicators{
          padding-top:70px;
          margin-bottom: 10px
      }
      .card-pop{
          border-radius: 10px;
          background: #fff;
          box-shadow: 0 6px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);
          transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);
          cursor: pointer;
      }
      .card-pop:hover{
          transform: scale(1.05);
          box-shadow:  0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
      }
    </style>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body> -->
<div class="container" id="section1">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div>
            <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="col-img">
                        <img src="../../asset/2016_01.png" class=" w-100 h-100">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-img">
                        <img src="../../asset/College.jpg" class=" w-100 h-100">
                    </div>
                </div>
                <div class="carousel-item" >
                    <div class="col-img">
                        <img src="../../asset/students-studying.jpg" class="w-100 h-100">
                    </div>
                </div>
            </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
              </a>
        </div>
      </div>
</div>

<!--Buku-->
<div class="container-fluid">
    <div class="row">
      <div class="col-7 mt-sm-5 mb-4">
        <h5 style="margin-left: 20px;">Rekomendasi Buku</h5>
      </div>
      <!-- <div class="col-4 mt-sm-5 mb-4">
        <a href="viewall_popular.html"><h6 class="float-right text-danger">view all</h6></a>
      </div> -->
      <div class="container">
        <div class="row">
        <?php
          foreach($data as $b){

          
        ?>
          <div class="col-2">
              <div class="card-pop" >
                <img src="<?=base_url('asset/'.$b['Gambar'])?>" width="210" height="210" class="card-img-top" alt="..." >
              </div>
          </div>
          <?php }
          ?>
    </div>  
</div>

<div class="container-fluid">
    <div class="row">
      <div class="col-7 mt-sm-5 mb-4">
        <h5 style="margin-left: 20px;">Buku Populer</h5>
      </div>
      <!-- <div class="col-4 mt-sm-5 mb-4">
        <a href="viewall_popular.html"><h6 class="float-right text-danger">view all</h6></a>
      </div> -->
      <div class="container">
        <div class="row">
        <?php
          foreach($data as $b){

          
        ?>
          <div class="col-2">
              <div class="card-pop" >
                <img src="<?=base_url('asset/'.$b['Gambar'])?>" width="210" height="210" class="card-img-top" alt="...">
              </div>
          </div>
          <?php }
          ?>
        </div>
    </div>  
</div> 

<!--Modal Detail Buku-->
<div class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Detail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Pinjam Sekarang</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
 

<!--       
</body>
  <script type="text/javascript" src="../../javascript/bootstrap.min.js"></script>
  <script type="text/javascript" src="../../javascript/jquery-2.2.3.min.js"></script>
<script></script>
</html> -->