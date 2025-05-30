<?php $this->load->view('layouts/header'); ?>
<?php $this->load->view('layouts/sidebar'); ?>

<main class="app-main">
  <div class="app-content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <h3 class="mb-0">Data Dosen</h3>
          <p class="text-muted">Halaman Edit Data Dosen</p>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="<?= base_url('dosen') ?>">Dosen</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Data Dosen</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <section class="content ">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <form method="post" action="<?php echo base_url('dosen/update/'.$dosen->id); ?>">
            <input type="hidden" name="id" value="<?= $dosen->id ?>">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" value="<?= $dosen->nama ?>" required>
              <label for="nama">Nama</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="nidn" placeholder="NIDN" name="nidn" value="<?= $dosen->nidn ?>" required>
              <label for="nidn">NIDN</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="nik" placeholder="NIK" name="nik" value="<?= $dosen->nik ?>" required>
              <label for="nik">NIK</label>
            </div>
            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="<?= $dosen->email ?>" required>
              <label for="email">Email</label>
            </div>
            <button type="submit" class="btn btn-warning">Update</button>
            <a href="<?= base_url('dosen') ?>" class="btn btn-secondary">Kembali</a>
          </form>
        </div>
      </div>
    </div>
  </section>
</main>

<?php $this->load->view('layouts/footer'); ?>