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
                <h2 class="section-title">Tables</h2>
                <p class="section-lead">
                Examples for opt-in styling of tables (given their prevalent use in JavaScript plugins) with Bootstrap.
                </p>

                <div class="row">
                <div class="col-12">
                    <div class="card">
                    <div class="card-header">
                        <h4>Data</h4>
                        <div class="card-header-action">
                            <a href="#" class="btn btn-danger">Tambah Data <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Fakultas</th>
                            <th scope="col">Tahun Masuk</th>
                            <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach($data_mahasiswa as $mhs){?>
                            <tr>
                            <th scope="row"><?= $no++;?>.</th>
                            <td><?= $mhs->nama;?></td>
                            <td><?= $mhs->nim;?></td>
                            <td><?= $mhs->fakultas;?></td>
                            <td><?= $mhs->tahun_masuk;?></td>
                            <td></td>
                            </tr>
                            <?php }?>
                        </tbody>
                        </table>
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

  