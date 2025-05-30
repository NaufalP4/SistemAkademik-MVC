<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" />
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    
    <!-- OverlayScrollbars -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/styles/overlayscrollbars.min.css" />
    
    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/adminlte.css') ?>" />
  </head>
  <body class="register-page bg-body-secondary">
    <div class="register-box">
      <div class="card card-outline card-primary">
        <div class="card-header text-center">
          <h1 class="mb-0">Register</h1>
        </div>
        <div class="card-body login-card-body">
          <p class="login-box-msg">Register a new membership</p>

          <form action="<?= base_url('auth/proses_register') ?>" method="post">
            <div class="input-group mb-3">
                <div class="form-floating flex-grow-1">
                    <input name="username" id="loginUsername" type="text" class="form-control" placeholder="Username" required />
                    <label for="loginUsername">Username</label>
                </div>
                <div class="input-group-text"><i class="bi bi-person"></i></div>
            </div>
            <div class="input-group mb-3">
                <div class="form-floating flex-grow-1">
                    <input name="password" id="loginPassword" type="password" class="form-control" placeholder="Password" required />
                    <label for="loginPassword">Password</label>
                </div>
                <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
            </div>

              <div class="text-center">
                <button type="submit" class="btn btn-primary btn-block w-50">Register</button>
              </div>
          </form>

          <p class="mt-3 mb-0 text-center">
            <a href="<?= base_url('auth') ?>">I already have a membership</a>
          </p>
        </div>
      </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.browser.es6.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/js/adminlte.js') ?>"></script>
  </body>
</html>
