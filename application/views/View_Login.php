<h1 class="judul">O-LIB</h1>
<div class="container1" id="container">
    <img class="img" src="<?= base_url('asset/undraw_reading_0re1.jpg')?>">
    <div class="form-container log-in-container overlay-container overlay-right">
        <form method="post" class="form1" >
            <h1 class="welcome-text">Selamat Datang</h1>
            <?php if(isset($error_msg)) { ?>
                        <div class="alert alert-danger" role="alert"> <?= $error_msg ?> </div>
                    <?php } ?>
            <input class="input1" name="email" type="text" placeholder="Email" required="required">
            <input class="input1" name="pw" type="password" placeholder="Password" required="required"><br>
            <button class="button1 btn-success ">Login</button>
        </form>
    </div>
</div>


