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
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Formulir</h4>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url();?>index.php/mahasiswa/add" method="POST">
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" class="form-control" name="nama" required>
                                </div>
                                <div class="form-group">
                                    <label for="">NIM</label>
                                    <input type="number" class="form-control" name="nim" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Fakultas</label>
                                    <select class="form-control" name="fakultas">
                                        <option value="Kedokteran">Kedokteran</option>
                                        <option value="Teknik">Teknik</option>
                                        <option value="Ekonomi">Ekonomi</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Tahun Masuk</label>
                                    <input type="number" class="form-control" name="tahun_masuk" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-info">Simpan</button>
                                </div>
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

  