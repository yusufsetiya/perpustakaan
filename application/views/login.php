<!doctype html>
<html lang="en">

<head>
  <title>Perpustakaan UNMER Malang</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/sweetalert/sweetalert.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/css_login/style.css">

</head>

<body>
  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
          <div class="login-wrap p-4 p-md-5">
            <div class="icon d-flex align-items-center justify-content-center">
              <i class='bx bx-library nav_logo-icon text-white'></i>
            </div>
            <h3 class="text-center mb-4">Perpustakaan UNMER Malang</h3>
            <form action="<?php echo base_url('ControlLogin/login'); ?>" method="POST" class="login-form">
              <div class="form-group">
                <input name="username" type="text" class="form-control rounded-left" placeholder="Username" required>
              </div>
              <div class="form-group d-flex">
                <input type="password" name="password" class="form-control rounded-left form-password" placeholder="Password" required>
              </div>
              <div class="form-group d-md-flex">
                <div class="w-50">
                  <label class="checkbox-wrap checkbox-primary">Show Password
                    <input type="checkbox" class="form-checkbox" name="tampi_pwd">
                    <span class="checkmark"></span>
                  </label>
                </div>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary rounded submit p-3 px-5">Sign In</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="<?php echo base_url() ?>assets/vendor/js_login/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/js_login/popper.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/js_login/bootstrap.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/js_login/main.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/sweetalert/sweetalert.min.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/sweetalert/sweetalert-dev.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function() {
      $('.form-checkbox').click(function() {
        if ($(this).is(':checked')) {
          $('.form-password').attr('type', 'text');
        } else {
          $('.form-password').attr('type', 'password');
        }
      });
    });
    <?php if ($this->session->flashdata('pwdSalah') == 'berhasil') : ?>
      swal({
        title: "Gagal",
        text: 'Username Atau Password Anda Salah',
        type: "warning",
        confirmButtonColor: '#3085d6',
        closeOnConfirm: false,
        closeOnCancel: false
      });
    <?php endif; ?>
  </script>

</body>

</html>