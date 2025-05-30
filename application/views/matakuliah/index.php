<?php $this->load->view('layouts/header'); ?>
<?php $this->load->view('layouts/sidebar'); ?>

<main class="app-main">
  <div class="app-content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <h3 class="mb-0">Data Mata Kuliah</h3>
          <p class="text-muted">Halaman Lihat Data Mata Kuliah</p>
          <a href="<?= base_url('matakuliah/tambah') ?>" class="btn btn-primary btn-sm mb-3">Tambah</a>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="<?= base_url('matakuliah') ?>">Mata Kuliah</a></li>
            <li class="breadcrumb-item active" aria-current="page">Lihat Data Mata Kuliah</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <section class="content ">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table id="mahasiswaTable" class="table table-bordered">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Mata Kuliah</th>
                  <th>Kode Matkul</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no=1; foreach($matakuliah as $mk): ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $mk->nama_mata_kuliah ?></td>
                    <td><?= $mk->kode_matkul ?></td>
                    <td>
                      <a href="<?= base_url('matakuliah/edit/'.$mk->id) ?>" class="btn btn-warning btn-sm">Edit</a>
                      <a href="<?= base_url('matakuliah/hapus/'.$mk->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php $this->load->view('layouts/footer'); ?>