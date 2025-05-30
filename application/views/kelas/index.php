<?php $this->load->view('layouts/header'); ?>
<?php $this->load->view('layouts/sidebar'); ?>

<main class="app-main">
  <div class="app-content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <h3 class="mb-0">Data Kelas</h3>
          <p class="text-muted">Halaman Lihat Data Kelas</p>
          <a href="<?= base_url('kelas/tambah') ?>" class="btn btn-primary btn-sm mb-3">Tambah</a>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="<?= base_url('kelas') ?>">Kelas</a></li>
            <li class="breadcrumb-item active" aria-current="page">Lihat Data Kelas</li>
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
                  <th>Nama Kelas</th>
                  <th>Kode Kelas</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no=1; foreach($kelas as $k): ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $k->nama_kelas ?></td>
                    <td><?= $k->kode_kelas ?></td>
                    <td>
                      <a href="<?= base_url('kelas/edit/'.$k->id) ?>" class="btn btn-warning btn-sm">Edit</a>
                      <a href="<?= base_url('kelas/hapus/'.$k->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
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