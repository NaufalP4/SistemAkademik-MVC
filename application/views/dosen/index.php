<?php $this->load->view('layouts/header'); ?>
<?php $this->load->view('layouts/sidebar'); ?>

<main class="app-main">
  <div class="app-content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <h3 class="mb-0">Data Dosen</h3>
          <p class="text-muted">Halaman Lihat Data Dosen</p>
          <a href="<?= base_url('dosen/tambah') ?>" class="btn btn-primary btn-sm mb-3">Tambah</a>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="<?= base_url('dosen') ?>">Dosen</a></li>
            <li class="breadcrumb-item active" aria-current="page">Lihat Data Dosen</li>
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
            <table id="dosenTable" class="table table-bordered">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Dosen</th>
                  <th>NIDN</th>
                  <th>NIK</th>
                  <th>Email</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no=1; foreach ($dosen as $d): ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $d->nama ?></td>
                    <td><?= $d->nidn ?></td>
                    <td><?= $d->nik ?></td>
                    <td><?= $d->email ?></td>
                    <td>
                      <a href="<?= base_url('dosen/edit/'.$d->id) ?>" class="btn btn-warning btn-sm">Edit</a>
                      <a href="<?= base_url('dosen/hapus/'.$d->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
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