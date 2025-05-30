<?php $this->load->view('layouts/header'); ?>
<?php $this->load->view('layouts/sidebar'); ?>

<main class="app-main">
  <div class="app-content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <h3 class="mb-0">Data Kelas</h3>
          <p class="text-muted">Halaman Tambah Data Kelas</p>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="<?= base_url('kelas') ?>">Kelas</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Data Kelas</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <section class="content ">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <form method="post" action="<?= base_url('kelas/simpan') ?>">
          <div class="form-group">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="nama_kelas" placeholder="Nama Kelas" name="nama_kelas" required>
              <label for="nama_kelas">Nama Kelas</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="kode_kelas" placeholder="Kode Kelas" name="kode_kelas" required>
              <label for="kode_kelas">Kode Kelas</label>
            </div>
              <button type="submit" class="btn btn-primary">Simpan</button>
              <a href="<?= base_url('kelas') ?>" class="btn btn-secondary">Kembali</a>
          </form>
        </div>
      </div>
    </div>
  </section>
</main>

<?php $this->load->view('layouts/footer'); ?>