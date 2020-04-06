<h6 class="navbar-heading text-muted"><?php if(auth()->user()->role=="admin"): ?>
    Administracion
    <?php else: ?>
    Menu
<?php endif; ?></h6>
<ul class="navbar-nav">
    <?php if(auth()->user()->role=="admin"): ?>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('home')); ?>">
          <i class="ni ni-tv-2 text-success"></i> Dashboard
        </a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="<?php echo e(route('specialties')); ?>">
          <i class="ni ni-planet text-blue"></i> Especialidades
        </a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="<?php echo e(url('/doctors')); ?>">
          <i class="ni ni-single-02 text-text-info"></i> Medicos
        </a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="<?php echo e(route('patients.index')); ?>">
          <i class="ni ni-satisfied text-yellow"></i> Pacientes
        </a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="">
          <i class="ni ni-bullet-list-67 text-red"></i> Horario
        </a>
      </li>
    <?php endif; ?>
    <?php if(auth()->user()->role=="doctor"): ?>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('quotes.index')); ?>">
            <i class="ni ni-calendar-grid-58 text-default"></i> Mis Citas
          </a>
     </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('specialties')); ?>">
            <i class="ni ni-single-02 text-warning"></i> Mis Pacientes
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('schedule.index')); ?>">
                <i class="ni ni-time-alarm text-success"></i> Gestionar Horario
              </a>
            </li>

    <?php endif; ?>
    <?php if(auth()->user()->role=="patient"): ?>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('specialties')); ?>">
            <i class="ni ni-satisfied text-yellow"></i> Reservar una cita
          </a>
     </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('specialties')); ?>">
            <i class="ni ni-collection text-orange"></i> Mis Citas
          </a>
     </li>
     <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('specialties')); ?>">
            <i class="ni ni-calendar-grid-58 text-blue"></i> Historia Clinica
          </a>
     </li>
    <?php endif; ?>

    <li class="nav-item">
      <a class="nav-link" href=""  onclick="event.preventDefault(); document.getElementById('logout').submit()">
        <i class="ni ni-key-25 "></i> Cerrar Seccion
      </a>
    </li>

  </ul>
  <?php if(auth()->user()->role=="admin"): ?>
 <!-- Divider -->
 <hr class="my-3">
 <!-- Heading -->
 <h6 class="navbar-heading text-muted">Reportes</h6>
 <!-- Navigation -->
 <ul class="navbar-nav mb-md-3">
   <li class="nav-item">
     <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html">
       <i class="ni ni-collection text-default"></i> Frecuencia de Citas
     </a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html">
       <i class="ni ni-spaceship text-warning"></i> Medicos mas Activos
     </a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html">
       <i class="ni ni-ui-04"></i> Components
     </a>
   </li>
 </ul>
  <?php endif; ?>

<?php /**PATH /var/www/html/CitasMedicas/resources/views/layouts/include/panel/menu.blade.php ENDPATH**/ ?>