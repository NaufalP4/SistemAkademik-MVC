<?php $this->load->view('layouts/header'); ?>
<?php $this->load->view('layouts/sidebar'); ?>

<main class="app-main">
  <div class="app-content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <h3 class="mb-0">Data Mahasiswa</h3>
          <p class="text-muted">Halaman Lihat Data Mahasiswa</p>
          <a href="<?= base_url('mahasiswa/tambah') ?>" class="btn btn-primary btn-sm mb-3">Tambah</a>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="<?= base_url('mahasiswa') ?>">Mahasiswa</a></li>
            <li class="breadcrumb-item active" aria-current="page">Lihat Data Mahasiswa</li>
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
                  <th>Nama Mahasiswa</th>
                  <th>NPM</th>
                  <th>Prodi</th>
                  <th>Alamat</th>
                  <th>Email</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no=1; foreach ($mahasiswa as $m): ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $m->nama ?></td>
                    <td><?= $m->npm ?></td>
                    <td><?= $m->prodi ?></td>
                    <td><?= $m->alamat ?></td>
                    <td><?= $m->email ?></td>
                    <td>
                      <a href="<?= base_url('mahasiswa/edit/'.$m->id) ?>" class="btn btn-warning btn-sm">Edit</a>
                      <a href="<?= base_url('mahasiswa/hapus/'.$m->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
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