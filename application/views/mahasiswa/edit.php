<?php $this->load->view('layouts/header'); ?>
<?php $this->load->view('layouts/sidebar'); ?>

<main class="app-main">
  <div class="app-content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <h3 class="mb-0">Data Mahasiswa</h3>
          <p class="text-muted">Halaman Edit Data Mahasiswa</p>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="<?= base_url('mahasiswa') ?>">Mahasiswa</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Data Mahasiswa</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <section class="content ">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <form method="post" action="<?php echo base_url('mahasiswa/update/'.$mahasiswa->id); ?>">
            <input type="hidden" name="id" value="<?= $mahasiswa->id ?>">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" value="<?= $mahasiswa->nama ?>" required>
              <label for="nama">Nama</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="npm" placeholder="NPM" name="npm" value="<?= $mahasiswa->npm ?>" required>
              <label for="npm">NPM</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="prodi" placeholder="Prodi" name="prodi" value="<?= $mahasiswa->prodi ?>" required>
              <label for="prodi">Prodi</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat" value="<?= $mahasiswa->alamat ?>" required>
              <label for="alamat">Alamat</label>
            </div>
            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="<?= $mahasiswa->email ?>" required>
              <label for="email">Email</label>
            </div>
            <button type="submit" class="btn btn-warning">Update</button>
            <a href="<?= base_url('mahasiswa') ?>" class="btn btn-secondary">Kembali</a>
          </form>
        </div>
      </div>
    </div>
  </section>
</main>

<?php $this->load->view('layouts/footer'); ?>