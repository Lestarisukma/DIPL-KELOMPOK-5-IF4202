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
                <th scope="col">Kode Peminjaman</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Denda</th>
                <th scope="col">Opsi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>P00001</td>
                <td>Waktu peminjaman buku telah melewati
                    batas waktu yang telah ditentukan</td>
                <td>Rp 10.000</td>
                <td>
                    <button
                        type="button"
                        class="btn btn-success"
                        data-toggle="modal"
                        data-target="">
                        Bayar
                    </button>
                </td>
              </tr>
            </tbody>
          </table>
          <div style="color: red; margin-top: 250px;"><b>*Silahkan segera membayar denda!</b></div>
          <p style="color: red;"><b>Jika tidak, maka denda akan berlipat ganda.</b></p>
    </div>
</body>
</html>