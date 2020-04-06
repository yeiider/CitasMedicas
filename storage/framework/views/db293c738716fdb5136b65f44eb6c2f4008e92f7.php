<?php $__env->startSection('header'); ?>
<div class="container-fluid">
    <div class="header-body">
      <!-- Card stats -->
      <div class="row">
        <div class="col-xl-3 col-lg-6">
          <div class="card card-stats mb-4 mb-xl-0">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-0">Traffic</h5>
                  <span class="h2 font-weight-bold mb-0">350,897</span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                    <i class="fas fa-chart-bar"></i>
                  </div>
                </div>
              </div>
              <p class="mt-3 mb-0 text-muted text-sm">
                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                <span class="text-nowrap">Since last month</span>
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6">
          <div class="card card-stats mb-4 mb-xl-0">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-0">New users</h5>
                  <span class="h2 font-weight-bold mb-0">2,356</span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                    <i class="fas fa-chart-pie"></i>
                  </div>
                </div>
              </div>
              <p class="mt-3 mb-0 text-muted text-sm">
                <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 3.48%</span>
                <span class="text-nowrap">Since last week</span>
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6">
          <div class="card card-stats mb-4 mb-xl-0">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-0">Sales</h5>
                  <span class="h2 font-weight-bold mb-0">924</span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                    <i class="fas fa-users"></i>
                  </div>
                </div>
              </div>
              <p class="mt-3 mb-0 text-muted text-sm">
                <span class="text-warning mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                <span class="text-nowrap">Since yesterday</span>
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6">
          <div class="card card-stats mb-4 mb-xl-0">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-0">Performance</h5>
                  <span class="h2 font-weight-bold mb-0">49,65%</span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                    <i class="fas fa-percent"></i>
                  </div>
                </div>
              </div>
              <p class="mt-3 mb-0 text-muted text-sm">
                <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 12%</span>
                <span class="text-nowrap">Since last month</span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col">
      <div class="card shadow">
        <div class="card-header border-0">
          <h3 class="mb-0">Card tables</h3>
        </div>
        <div class="table-responsive">
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th scope="col">Project</th>
                <th scope="col">Budget</th>
                <th scope="col">Status</th>
                <th scope="col">Users</th>
                <th scope="col">Completion</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">
                  <div class="media align-items-center">
                    <a href="#" class="avatar rounded-circle mr-3">
                      <img alt="Image placeholder" src="<?php echo e(asset('public/assets/img/theme/bootstrap.jpg')); ?>">
                    </a>
                    <div class="media-body">
                      <span class="mb-0 text-sm">Argon Design System</span>
                    </div>
                  </div>
                </th>
                <td>
                  $2,500 USD
                </td>
                <td>
                  <span class="badge badge-dot mr-4">
                    <i class="bg-warning"></i> pending
                  </span>
                </td>
                <td>
                  <div class="avatar-group">
                    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Ryan Tompson">
                      <img alt="Image placeholder" src="<?php echo e(asset('public/assets/img/theme/team-1-800x800.jpg')); ?>" class="rounded-circle">
                    </a>
                    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Romina Hadid">
                      <img alt="Image placeholder" src="<?php echo e(asset('public/assets/img/theme/team-2-800x800.jpg')); ?>" class="rounded-circle">
                    </a>
                    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Alexander Smith">
                      <img alt="Image placeholder" src="<?php echo e(asset('public/assets/img/theme/team-3-800x800.jpg')); ?>" class="rounded-circle">
                    </a>
                    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Jessica Doe">
                      <img alt="Image placeholder" src="<?php echo e(asset('public/assets/img/theme/team-4-800x800.jpg')); ?>" class="rounded-circle">
                    </a>
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="mr-2">60%</span>
                    <div>
                      <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="text-right">
                  <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="media align-items-center">
                    <a href="#" class="avatar rounded-circle mr-3">
                      <img alt="Image placeholder" src="<?php echo e(asset('public/assets/img/theme/angular.jpg')); ?>">
                    </a>
                    <div class="media-body">
                      <span class="mb-0 text-sm">Angular Now UI Kit PRO</span>
                    </div>
                  </div>
                </th>
                <td>
                  $1,800 USD
                </td>
                <td>
                  <span class="badge badge-dot">
                    <i class="bg-success"></i> completed
                  </span>
                </td>
                <td>
                  <div class="avatar-group">
                    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Ryan Tompson">
                      <img alt="Image placeholder" src="<?php echo e(asset('public/assets/img/theme/team-1-800x800.jpg')); ?>" class="rounded-circle">
                    </a>
                    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Romina Hadid">
                      <img alt="Image placeholder" src="<?php echo e(asset('public/assets/img/theme/team-2-800x800.jpg')); ?>" class="rounded-circle">
                    </a>
                    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Alexander Smith">
                      <img alt="Image placeholder" src="<?php echo e(asset('public/assets/img/theme/team-3-800x800.jpg')); ?>" class="rounded-circle">
                    </a>
                    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Jessica Doe">
                      <img alt="Image placeholder" src="<?php echo e(asset('public/assets/img/theme/team-4-800x800.jpg')); ?>" class="rounded-circle">
                    </a>
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="mr-2">100%</span>
                    <div>
                      <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="text-right">
                  <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="media align-items-center">
                    <a href="#" class="avatar rounded-circle mr-3">
                      <img alt="Image placeholder" src="<?php echo e(asset('public/assets/img/theme/sketch.jpg')); ?>">
                    </a>
                    <div class="media-body">
                      <span class="mb-0 text-sm">Black Dashboard</span>
                    </div>
                  </div>
                </th>
                <td>
                  $3,150 USD
                </td>
                <td>
                  <span class="badge badge-dot mr-4">
                    <i class="bg-danger"></i> delayed
                  </span>
                </td>
                <td>
                  <div class="avatar-group">
                    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Ryan Tompson">
                      <img alt="Image placeholder" src="<?php echo e(asset('public/assets/img/theme/team-1-800x800.jpg')); ?>" class="rounded-circle">
                    </a>
                    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Romina Hadid">
                      <img alt="Image placeholder" src="<?php echo e(asset('public/assets/img/theme/team-2-800x800.jpg')); ?>" class="rounded-circle">
                    </a>
                    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Alexander Smith">
                      <img alt="Image placeholder" src="<?php echo e(asset('public/assets/img/theme/team-3-800x800.jpg')); ?>" class="rounded-circle">
                    </a>
                    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Jessica Doe">
                      <img alt="Image placeholder" src="<?php echo e(asset('public/assets/img/theme/team-4-800x800.jpg')); ?>" class="rounded-circle">
                    </a>
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="mr-2">72%</span>
                    <div>
                      <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%;"></div>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="text-right">
                  <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="media align-items-center">
                    <a href="#" class="avatar rounded-circle mr-3">
                      <img alt="Image placeholder" src="<?php echo e(asset('public/assets/img/theme/react.jpg')); ?>">
                    </a>
                    <div class="media-body">
                      <span class="mb-0 text-sm">React Material Dashboard</span>
                    </div>
                  </div>
                </th>
                <td>
                  $4,400 USD
                </td>
                <td>
                  <span class="badge badge-dot">
                    <i class="bg-info"></i> on schedule
                  </span>
                </td>
                <td>
                  <div class="avatar-group">
                    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Ryan Tompson">
                      <img alt="Image placeholder" src="<?php echo e(asset('public/assets/img/theme/team-1-800x800.jpg')); ?>" class="rounded-circle">">
                    </a>
                    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Romina Hadid">
                      <img alt="Image placeholder" src="<?php echo e(asset('public/assets/img/theme/team-2-800x800.jpg')); ?>" class="rounded-circle">">
                    </a>
                    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Alexander Smith">
                      <img alt="Image placeholder" src="<?php echo e(asset('public/assets/img/theme/team-3-800x800.jpg')); ?>" class="rounded-circle">">
                    </a>
                    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Jessica Doe">
                      <img alt="Image placeholder" src="<?php echo e(asset('public/assets/img/theme/team-4-800x800.jpg')); ?>" class="rounded-circle">">
                    </a>
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="mr-2">90%</span>
                    <div>
                      <div class="progress">
                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="text-right">
                  <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="media align-items-center">
                    <a href="#" class="avatar rounded-circle mr-3">
                      <img alt="Image placeholder" src="<?php echo e(asset('public/assets/img/theme/vue.jpg')); ?>">
                    </a>
                    <div class="media-body">
                      <span class="mb-0 text-sm">Vue Paper UI Kit PRO</span>
                    </div>
                  </div>
                </th>
                <td>
                  $2,200 USD
                </td>
                <td>
                  <span class="badge badge-dot mr-4">
                    <i class="bg-success"></i> completed
                  </span>
                </td>
                <td>
                  <div class="avatar-group">
                    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Ryan Tompson">
                      <img alt="Image placeholder" src="<?php echo e(asset('public/assets/img/theme/team-1-800x800.jpg')); ?>" class="rounded-circle">
                    </a>
                    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Romina Hadid">
                      <img alt="Image placeholder" src="<?php echo e(asset('public/assets/img/theme/team-2-800x800.jpg')); ?>" class="rounded-circle">
                    </a>
                    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Alexander Smith">
                      <img alt="Image placeholder" src="<?php echo e(asset('public/assets/img/theme/team-3-800x800.jpg')); ?>" class="rounded-circle">
                    </a>
                    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Jessica Doe">
                      <img alt="Image placeholder" src="<?php echo e(asset('public/assets/img/theme/team-4-800x800.jpg')); ?>" class="rounded-circle">
                    </a>
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="mr-2">100%</span>
                    <div>
                      <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="text-right">
                  <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="card-footer py-4">
          <nav aria-label="...">
            <ul class="pagination justify-content-end mb-0">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">
                  <i class="fas fa-angle-left"></i>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
              </li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">
                  <i class="fas fa-angle-right"></i>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- Dark table -->
  <div class="row mt-5">
    <div class="col">
      <div class="card bg-default shadow">
        <div class="card-header bg-transparent border-0">
          <h3 class="text-white mb-0">Card tables</h3>
        </div>
        <div class="table-responsive">
          <table class="table align-items-center table-dark table-flush">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Project</th>
                <th scope="col">Budget</th>
                <th scope="col">Status</th>
                <th scope="col">Users</th>
                <th scope="col">Completion</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">
                  <div class="media align-items-center">
                    <a href="#" class="avatar rounded-circle mr-3">
                      <img alt="Image placeholder" src="../assets/img/theme/bootstrap.jpg">
                    </a>
                    <div class="media-body">
                      <span class="mb-0 text-sm">Argon Design System</span>
                    </div>
                  </div>
                </th>
                <td>
                  $2,500 USD
                </td>
                <td>
                  <span class="badge badge-dot mr-4">
                    <i class="bg-warning"></i> pending
                  </span>
                </td>
                <td>
                  <div class="avatar-group">
                    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Ryan Tompson">
                      <img alt="Image placeholder" src="../assets/img/theme/team-1-800x800.jpg" class="rounded-circle">
                    </a>
                    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Romina Hadid">
                      <img alt="Image placeholder" src="../assets/img/theme/team-2-800x800.jpg" class="rounded-circle">
                    </a>
                    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Alexander Smith">
                      <img alt="Image placeholder" src="../assets/img/theme/team-3-800x800.jpg" class="rounded-circle">
                    </a>
                    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Jessica Doe">
                      <img alt="Image placeholder" src="../assets/img/theme/team-4-800x800.jpg" class="rounded-circle">
                    </a>
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="mr-2">60%</span>
                    <div>
                      <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="text-right">
                  <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="media align-items-center">
                    <a href="#" class="avatar rounded-circle mr-3">
                      <img alt="Image placeholder" src="../assets/img/theme/angular.jpg">
                    </a>
                    <div class="media-body">
                      <span class="mb-0 text-sm">Angular Now UI Kit PRO</span>
                    </div>
                  </div>
                </th>
                <td>
                  $1,800 USD
                </td>
                <td>
                  <span class="badge badge-dot">
                    <i class="bg-success"></i> completed
                  </span>
                </td>
                <td>
                  <div class="avatar-group">
                    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Ryan Tompson">
                      <img alt="Image placeholder" src="../assets/img/theme/team-1-800x800.jpg" class="rounded-circle">
                    </a>
                    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Romina Hadid">
                      <img alt="Image placeholder" src="../assets/img/theme/team-2-800x800.jpg" class="rounded-circle">
                    </a>
                    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Alexander Smith">
                      <img alt="Image placeholder" src="../assets/img/theme/team-3-800x800.jpg" class="rounded-circle">
                    </a>
                    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Jessica Doe">
                      <img alt="Image placeholder" src="../assets/img/theme/team-4-800x800.jpg" class="rounded-circle">
                    </a>
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="mr-2">100%</span>
                    <div>
                      <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="text-right">
                  <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="media align-items-center">
                    <a href="#" class="avatar rounded-circle mr-3">
                      <img alt="Image placeholder" src="../assets/img/theme/sketch.jpg">
                    </a>
                    <div class="media-body">
                      <span class="mb-0 text-sm">Black Dashboard</span>
                    </div>
                  </div>
                </th>
                <td>
                  $3,150 USD
                </td>
                <td>
                  <span class="badge badge-dot mr-4">
                    <i class="bg-danger"></i> delayed
                  </span>
                </td>
                <td>
                  <div class="avatar-group">
                    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Ryan Tompson">
                      <img alt="Image placeholder" src="../assets/img/theme/team-1-800x800.jpg" class="rounded-circle">
                    </a>
                    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Romina Hadid">
                      <img alt="Image placeholder" src="../assets/img/theme/team-2-800x800.jpg" class="rounded-circle">
                    </a>
                    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Alexander Smith">
                      <img alt="Image placeholder" src="../assets/img/theme/team-3-800x800.jpg" class="rounded-circle">
                    </a>
                    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Jessica Doe">
                      <img alt="Image placeholder" src="../assets/img/theme/team-4-800x800.jpg" class="rounded-circle">
                    </a>
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="mr-2">72%</span>
                    <div>
                      <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%;"></div>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="text-right">
                  <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="media align-items-center">
                    <a href="#" class="avatar rounded-circle mr-3">
                      <img alt="Image placeholder" src="../assets/img/theme/react.jpg">
                    </a>
                    <div class="media-body">
                      <span class="mb-0 text-sm">React Material Dashboard</span>
                    </div>
                  </div>
                </th>
                <td>
                  $4,400 USD
                </td>
                <td>
                  <span class="badge badge-dot">
                    <i class="bg-info"></i> on schedule
                  </span>
                </td>
                <td>
                  <div class="avatar-group">
                    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Ryan Tompson">
                      <img alt="Image placeholder" src="../assets/img/theme/team-1-800x800.jpg" class="rounded-circle">
                    </a>
                    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Romina Hadid">
                      <img alt="Image placeholder" src="../assets/img/theme/team-2-800x800.jpg" class="rounded-circle">
                    </a>
                    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Alexander Smith">
                      <img alt="Image placeholder" src="../assets/img/theme/team-3-800x800.jpg" class="rounded-circle">
                    </a>
                    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Jessica Doe">
                      <img alt="Image placeholder" src="../assets/img/theme/team-4-800x800.jpg" class="rounded-circle">
                    </a>
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="mr-2">90%</span>
                    <div>
                      <div class="progress">
                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="text-right">
                  <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="media align-items-center">
                    <a href="#" class="avatar rounded-circle mr-3">
                      <img alt="Image placeholder" src="../assets/img/theme/vue.jpg">
                    </a>
                    <div class="media-body">
                      <span class="mb-0 text-sm">Vue Paper UI Kit PRO</span>
                    </div>
                  </div>
                </th>
                <td>
                  $2,200 USD
                </td>
                <td>
                  <span class="badge badge-dot mr-4">
                    <i class="bg-success"></i> completed
                  </span>
                </td>
                <td>
                  <div class="avatar-group">
                    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Ryan Tompson">
                      <img alt="Image placeholder" src="../assets/img/theme/team-1-800x800.jpg" class="rounded-circle">
                    </a>
                    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Romina Hadid">
                      <img alt="Image placeholder" src="../assets/img/theme/team-2-800x800.jpg" class="rounded-circle">
                    </a>
                    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Alexander Smith">
                      <img alt="Image placeholder" src="../assets/img/theme/team-3-800x800.jpg" class="rounded-circle">
                    </a>
                    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Jessica Doe">
                      <img alt="Image placeholder" src="../assets/img/theme/team-4-800x800.jpg" class="rounded-circle">
                    </a>
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="mr-2">100%</span>
                    <div>
                      <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="text-right">
                  <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/CitasMedicas/resources/views/home.blade.php ENDPATH**/ ?>