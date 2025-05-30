<?php $this->load->view('layouts/header'); ?>
<?php $this->load->view('layouts/sidebar'); ?>

<main class="app-main">
  <div class="app-content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <h3 class="mb-0">Data Mata Kuliah</h3>
          <p class="text-muted">Halaman Edit Data Mata Kuliah</p>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="<?= base_url('matakuliah') ?>">Mata Kuliah</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Data Mata Kuliah</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <section class="content ">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <form method="post" action="<?php echo base_url('matakuliah/update/'.$matakuliah->id); ?>">
            <input type="hidden" name="id" value="<?= $matakuliah->id ?>">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="nama_mata_kuliah" placeholder="Nama Mata Kuliah" name="nama_mata_kuliah" value="<?= $matakuliah->nama_mata_kuliah ?>" required>
              <label for="nama_mata_kuliah">Nama Mata Kuliah</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="kode_matkul" placeholder="Kode Mata Kuliah" name="kode_matkul" value="<?= $matakuliah->kode_matkul ?>" required>
              <label for="kode_matkul">Kode Mata Kuliah</label>
            </div>
            <button type="submit" class="btn btn-warning">Update</button>
            <a href="<?= base_url('matakuliah') ?>" class="btn btn-secondary">Kembali</a>
          </form>
        </div>
      </div>
    </div>
  </section>
</main>

<?php $this->load->view('layouts/footer'); ?>