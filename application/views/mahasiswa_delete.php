<?php $this->load->view('template/head');?>

<body>
  <div id="app">
      <div class="main-wrapper main-wrapper-1">
        <?php $this->load->view('template/navbar');?>
      

        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
            <div class="section-header">
                <h1><?= $judul;?></h1>
                <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
                <div class="breadcrumb-item">Table</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                    <div class="card-header">
                        <h4>Hapus</h4>
                    </div>
                    <div class="card-body">
                        <div class="empty-state" data-height="400">
                        <div class="empty-state-icon">
                            <i class="fas fa-question"></i>
                        </div>
                        <h2>Apa anda yakin?</h2>
                        <p class="lead">
                            mahasiswa : "<?= $data_mhs->nama;?>"
                        </p>
                        <form action="<?= base_url();?>index.php/mahasiswa/del" method="POST">
                            <input type="text" class="form-control" name="id" hidden value="<?=$data_mhs->id;?>">
                            <button type="submit" class="btn btn-primary mt-4">Hapus</button>
                            <hr>
                            <a href="<?= base_url();?>index.php/mahasiswa" class="mt-4 bb">Kembali</a>
                        </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            </section>
        </div>
        
        <?php $this->load->view('template/foot');?>
      
    </div>
  </div>
  <?php $this->load->view('template/script');?>

  