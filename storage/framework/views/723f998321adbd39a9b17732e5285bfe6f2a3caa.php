<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Sistema de Reserva de Citas</title>
  <!-- Favicon -->
  <link href="<?php echo e(asset('public/assets/img/brand/favicon.png')); ?>" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="<?php echo e(asset('public/assets/vendor/nucleo/css/nucleo.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('public/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="<?php echo e(asset('public/assets/css/argon.css?v=1.0.0')); ?>" rel="stylesheet">
</head>

<body style="overflow-x: hidden;">
  <!-- Sidenav -->
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="./index.html">
        <img src="<?php echo e(asset('public/assets/img/brand/blue.png')); ?>" class="navbar-brand-img" alt="...">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ni ni-bell-55"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="<?php echo e(asset('public/assets/img/theme/team-1-800x800.jpg')); ?>">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
           <?php echo $__env->make('layouts.include.panel.navar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="./index.html">
                <img src="<?php echo e(asset('public/assets/img/brand/blue.png')); ?>">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->

        <!-- Navigation -->
        <?php echo $__env->make('layouts.include.panel.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
      <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="<?php echo e(route('home')); ?>">Dashboard</a>
        <!-- Form -->

        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="<?php echo e(asset('public/assets/img/theme/team-4-800x800.jpg')); ?>">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                <span class="mb-0 text-sm  font-weight-bold"><?php echo e(auth()->user()->name); ?></span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <?php echo $__env->make('layouts.include.panel.navar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <?php echo $__env->yieldContent('header'); ?>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">

      <?php echo $__env->yieldContent('content'); ?>

      </div>
      <!-- Footer -->
      <footer class="footer">
       <?php echo $__env->make('layouts.include.panel.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </footer>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="<?php echo e(asset('public/assets/vendor/jquery/dist/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('public/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')); ?>"></script>
  <!-- Optional JS -->
  <script src="<?php echo e(asset('public/assets/vendor/chart.js/dist/Chart.min.js')); ?>"></script>
  <script src="<?php echo e(asset('public/assets/vendor/chart.js/dist/Chart.extension.js')); ?>"></script>
  <!-- Argon JS -->
  <script src="<?php echo e(asset('public/assets/js/argon.js?v=1.0.0')); ?>"></script>
</body>

</html>
<?php /**PATH /var/www/html/CitasMedicas/resources/views/layouts/panel.blade.php ENDPATH**/ ?>