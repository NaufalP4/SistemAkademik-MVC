      <aside class="app-sidebar bg-primary-subtle" data-bs-theme="light">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          <a href="<?= base_url('dashboard') ?>" class="brand-link">
            <!--begin::Brand Image-->
            <img
              src="<?= base_url('assets/assets/img/AdminLTELogo.png') ?>"
              alt="AdminLTE Logo"
              class="brand-image opacity-75 shadow"
            />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">Sistem Akademik</span>
            <!--end::Brand Text-->
          </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
          <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="menu"
              data-accordion="false"
            >
              <li class="nav-item <?= ($this->uri->segment(1) == 'dashboard') ? 'menu-open' : '' ?>">
                <a href="#" class="nav-link <?= ($this->uri->segment(1) == 'dashboard') ? 'active' : '' ?>">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>Menu <i class="nav-arrow bi bi-chevron-right"></i></p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?= base_url('dashboard') ?>" class="nav-link <?= ($this->uri->segment(1) == 'dashboard') ? 'active' : '' ?>">
                      <i class="nav-icon bi bi-speedometer2"></i>
                      <p>Dashboard</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item <?= in_array($this->uri->segment(1), ['dosen', 'mahasiswa', 'matakuliah', 'kelas']) ? 'menu-open' : '' ?>">
                <a href="#" class="nav-link <?= in_array($this->uri->segment(1), ['dosen', 'mahasiswa', 'matakuliah', 'kelas']) ? 'active' : '' ?>">
                  <i class="nav-icon bi bi-table"></i>
                  <p>Data <i class="nav-arrow bi bi-chevron-right"></i></p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?= base_url('dosen') ?>" class="nav-link <?= ($this->uri->segment(1) == 'dosen') ? 'active' : '' ?>">
                      <svg 
                        class="nav-icon"
                        fill="currentColor"
                        viewBox="0 0 24 24"
                        style="width: 1.25rem;
                        height: 1.25rem;
                        margin-right: 0.5rem;"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path d="M4.5 6.375a4.125 4.125 0 1 1 8.25 0 4.125 4.125 0 0 1-8.25 0ZM14.25 8.625a3.375 3.375 0 1 1 6.75 0 3.375 3.375 0 0 1-6.75 0ZM1.5 19.125a7.125 7.125 0 0 1 14.25 0v.003l-.001.119a.75.75 0 0 1-.363.63 13.067 13.067 0 0 1-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 0 1-.364-.63l-.001-.122ZM17.25 19.128l-.001.144a2.25 2.25 0 0 1-.233.96 10.088 10.088 0 0 0 5.06-1.01.75.75 0 0 0 .42-.643 4.875 4.875 0 0 0-6.957-4.611 8.586 8.586 0 0 1 1.71 5.157v.003Z" />
                      </svg>
                      <p>Data Dosen</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('mahasiswa') ?>" class="nav-link <?= ($this->uri->segment(1) == 'mahasiswa') ? 'active' : '' ?>">
                      <svg 
                        class="nav-icon"
                        fill="currentColor"
                        viewBox="0 0 24 24"
                        style="width: 1.25rem;
                        height: 1.25rem;
                        margin-right: 0.5rem;"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path fill-rule="evenodd" d="M8.25 6.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM15.75 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM2.25 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM6.31 15.117A6.745 6.745 0 0 1 12 12a6.745 6.745 0 0 1 6.709 7.498.75.75 0 0 1-.372.568A12.696 12.696 0 0 1 12 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 0 1-.372-.568 6.787 6.787 0 0 1 1.019-4.38Z" clip-rule="evenodd" />
                        <path d="M5.082 14.254a8.287 8.287 0 0 0-1.308 5.135 9.687 9.687 0 0 1-1.764-.44l-.115-.04a.563.563 0 0 1-.373-.487l-.01-.121a3.75 3.75 0 0 1 3.57-4.047ZM20.226 19.389a8.287 8.287 0 0 0-1.308-5.135 3.75 3.75 0 0 1 3.57 4.047l-.01.121a.563.563 0 0 1-.373.486l-.115.04c-.567.2-1.156.349-1.764.441Z" />
                      </svg>
                      <p>Data Mahasiswa</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('matakuliah') ?>" class="nav-link <?= ($this->uri->segment(1) == 'matakuliah') ? 'active' : '' ?>">
                      <svg 
                        class="nav-icon"
                        fill="currentColor"
                        viewBox="0 0 24 24"
                        style="width: 1.25rem;
                        height: 1.25rem;
                        margin-right: 0.5rem;"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                      </svg>
                      <p>Data Mata Kuliah</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('kelas') ?>" class="nav-link <?= ($this->uri->segment(1) == 'kelas') ? 'active' : '' ?>">
                      <svg 
                        class="nav-icon"
                        fill="currentColor"
                        viewBox="0 0 24 24"
                        style="width: 1.25rem;
                        height: 1.25rem;
                        margin-right: 0.5rem;"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path fill-rule="evenodd" d="M4.5 2.25a.75.75 0 0 0 0 1.5v16.5h-.75a.75.75 0 0 0 0 1.5h16.5a.75.75 0 0 0 0-1.5h-.75V3.75a.75.75 0 0 0 0-1.5h-15ZM9 6a.75.75 0 0 0 0 1.5h1.5a.75.75 0 0 0 0-1.5H9Zm-.75 3.75A.75.75 0 0 1 9 9h1.5a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75ZM9 12a.75.75 0 0 0 0 1.5h1.5a.75.75 0 0 0 0-1.5H9Zm3.75-5.25A.75.75 0 0 1 13.5 6H15a.75.75 0 0 1 0 1.5h-1.5a.75.75 0 0 1-.75-.75ZM13.5 9a.75.75 0 0 0 0 1.5H15A.75.75 0 0 0 15 9h-1.5Zm-.75 3.75a.75.75 0 0 1 .75-.75H15a.75.75 0 0 1 0 1.5h-1.5a.75.75 0 0 1-.75-.75ZM9 19.5v-2.25a.75.75 0 0 1 .75-.75h4.5a.75.75 0 0 1 .75.75v2.25a.75.75 0 0 1-.75.75h-4.5A.75.75 0 0 1 9 19.5Z" clip-rule="evenodd" />
                      </svg>
                      <p>Data Kelas</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
            <!--end::Sidebar Menu-->
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->
      </aside>