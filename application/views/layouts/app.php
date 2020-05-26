<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= isset($title) ? $title : 'CIShop' ?> - Codeigniter E-Commerce</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="/assets/libs/bootstrap/css/bootstrap.css">
  <!-- Fontawesome CSS -->
  <link rel="stylesheet" href="/assets/libs/fontawesome/css/all.css">
  <!-- Style CSS -->
  <link rel="stylesheet" href="/assets/css/app.css">
</head>
<body>

  <!-- Navbar -->
  <?php $this->load->view('layouts/_navbar'); ?>
  <!-- Akhir Nav -->

  <!-- Contene -->
  <?php $this->load->view($page); ?>
  <!-- End Content -->

  <script src="/assets/libs/jquery/jquery-3.5.1.slim.min.js" ></script>
  <script src="/assets/libs/popperjs/popper.min.js"></script>
  <script src="/assets/libs/bootstrap/js/bootstrap.min.js" ></script>
  <script src="/assets/libs/app.js"></script>
</body>
</html>