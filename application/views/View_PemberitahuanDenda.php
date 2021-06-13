<!DOCTYPE html>
<html lang="en">
<head>
    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Pemberitahuan Denda</title>
</head>
<body>
    <div class="container-fluid mt-lg-5  mb-5"
    style="background-color: #CBE3FF; width: 100%; text-align: center; padding-top: 10px; padding-bottom: 10px;">
        <h1>PEMBERITAHUAN DENDA</h1>
    </div>
    <div class="container">
        <table class="table" >
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">ID Peminjaman</th>
                <th scope="col">NIM</th>
                <th scope="col">Judul Buku</th>
                <th scope="col">Tanggal Pengembalian</th>
                <th scope="col">Total Denda</th>
              </tr>
            </thead>
            <tbody>
            <?php $no=1; foreach ($data as $d_denda ) {?>
                <tr>
                  <td>
                    <?php echo $no?>
                  </td>
                    <td id="margin"><?php echo $d_denda['idPeminjaman']?></td>
                    <td id="margin"><?php echo $d_denda['NIM']?></td>
                    <td id="margin"><?php echo $d_denda['Judul'] ?></td>
                    <td id="margin"><?php echo $d_denda['Tanggal']?></td>
                    <td id="margin"><?php echo $d_denda['TotalDenda'] ?></td>
                </tr>
              <?php $no++;} ?>   
            </tbody>
          </table>
          <div style="color: red; margin-top: 250px;"><b>*Silahkan segera membayar denda!</b></div>
          <p style="color: red;"><b>Jika tidak, maka denda akan berlipat ganda.</b></p>
    </div>
</body>
</html>