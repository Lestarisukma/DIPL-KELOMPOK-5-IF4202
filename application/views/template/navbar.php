<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #659DD4">
    <a class="navbar-brand" href="#">O-Lib</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="width: 500px;">
        <ul class="navbar-nav mr-auto " >
            <li class="nav-item ">
                <a class="nav-link" href="<?= site_url('Welcome/vmahasiswa')?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?= $this->session->userdata('peran') == 'mahasiswa'?'Buku':'Laporan'?>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <?php if($this->session->userdata('peran') == 'mahasiswa'){?>
                    <a class="dropdown-item" href="<?= site_url('Controller_Buku/Peminjaman')?>">Peminjaman</a>
                    <!-- <a class="dropdown-item" href="<?= site_url('Controller_Buku/Pengembalian')?>">Pengembalian</a> -->
                    <a class="dropdown-item" href="<?= site_url('Controller_Buku/Denda')?>">Denda</a>
                    <?php } else{?>
                    <a class="dropdown-item" href="<?= site_url('Controller_Laporan/PengembalianBuku')?>">Buku</a>
                    <a class="dropdown-item" href="<?= site_url('Controller_Laporan/DendaMahasiswa')?>">Denda</a>
                    <?php } ?>
                    
                </div>
            </li>
            <li class="nav-item" >
                <?php if($this->session->userdata('peran') == 'mahasiswa'){?>
                <a class="nav-link" href="<?= site_url('Controller_Ruangan')?>">Ruangan <span class="sr-only">(current)</span></a>
                <?php } else{?>
                <a class="nav-link" href="<?= site_url('Controller_Kelola')?>">Kelola <span class="sr-only">(current)</span></a>
                <?php } ?>
            </li>
        </ul>
        <i class="fas fa-user-circle fa-600x"></i>
        <div class="dropdown nav-item">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?= $this->session->userdata('nama');?>
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="<?= site_url('Welcome')?>">Logout</a>
            </div>
        </div>
    </div>
</nav>