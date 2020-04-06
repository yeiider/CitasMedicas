<div class=" dropdown-header noti-title">
    <h6 class="text-overflow m-0">Bienvenido!</h6>
  </div>
  <a href="./examples/profile.html" class="dropdown-item">
    <i class="ni ni-single-02"></i>
    <span>Perfil</span>
  </a>
  <a href="./examples/profile.html" class="dropdown-item">
    <i class="ni ni-settings-gear-65"></i>
    <span>Configuracion</span>
  </a>
  <a href="./examples/profile.html" class="dropdown-item">
    <i class="ni ni-calendar-grid-58"></i>
    <span>Actividades</span>
  </a>
  <a href="./examples/profile.html" class="dropdown-item">
    <i class="ni ni-support-16"></i>
    <span>Soporte</span>
  </a>
  <div class="dropdown-divider"></div>
   <a class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout').submit()">
    <i class="ni ni-user-run"></i>
    <span>Cerrar Sección</span>
  </a>
  <form action="<?php echo e(route('logout')); ?>" id="logout" method="POST" style="display:none;">
  <?php echo csrf_field(); ?>
 </form>
<?php /**PATH /var/www/html/CitasMedicas/resources/views/layouts/include/panel/navar.blade.php ENDPATH**/ ?>