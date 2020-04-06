<?php $__env->startSection('content'); ?>
<form action="<?php echo e(route('schedule.store')); ?>" method="POST">
<?php echo csrf_field(); ?>
<div class="row">
    <div class="col">
        <div class="card shadow">
        <?php if(session('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <span class="alert-icon"><i class="ni ni-like-2"></i></span>
        <span class="alert-text"><strong>Correcto!</strong></span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php endif; ?>
     <?php if($errors->any()): ?>
      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <span class="alert-icon"><i class="ni ni-like-2"></i></span>
    <span class="alert-text"><strong><?php echo e($error); ?></strong></span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     <?php endif; ?>
      <div class="card shadow">
          <div class="row">
              <div class="col">
                <div class="card-header border-0">
                    <h3 class="mb-0">Gestion de Horarios</h3>
                  </div>
              </div>
              <div class="col">
                <div>
                <button  type="submit" class="btn btn-primary mt-3 float-right">Guardar Cambios</a>
                </div>
              </div>
          </div>
        <div class="table-responsive">
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th scope="col">Dia</th>
                <th scope="col">Activo</th>
                <th scope="col">Turno Dia</th>
                <th scope="col">Turno Tarde</th>
              </tr>
            </thead>
            <?php $__currentLoopData = $days; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td><?php echo e($day); ?></td>
            <td>
                <label class="custom-toggle">
                <input type="checkbox" name="active[]" value="<?php echo e($key); ?>">
                <span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes"></span>
                </label>
            </td>
            <td>
                <div class="row">

                    <div class="col">
                      <select name="morning_start[]" id="" class="form-control">
                        <?php for($i=5;$i<=11;$i++): ?>
                      <option value="<?php echo e($i); ?>:00"><?php echo e($i); ?>:00 am</option>
                      <option value="<?php echo e($i); ?>:30"><?php echo e($i); ?>:30 am</option>
                        <?php endfor; ?>
                      </select>
                    </div>
                    <div class="col">
                    <select name="morning_end[]" id="" class="form-control">
                        <?php for($i=5;$i<=11;$i++): ?>
                        <option value="<?php echo e($i); ?>:00"><?php echo e($i); ?>:00 am</option>
                        <option value="<?php echo e($i); ?>:30"><?php echo e($i); ?>:30 am</option>
                        <?php endfor; ?>
                        </select>
                    </div>

                </div>
            </td>
            <td>
                <div class="row">
                    <div class="col">
                        <select name="afternoon_start[]" id="" class="form-control">
                          <?php for($i=1;$i<=5;$i++): ?>
                        <option value="<?php echo e($i+12); ?>:00"><?php echo e($i); ?>:00 pm</option>
                        <option value="<?php echo e($i+12); ?>:30"><?php echo e($i); ?>:30 pm</option>
                          <?php endfor; ?>
                        </select>
                      </div>
                      <div class="col">
                      <select name="afternoon_end[]" id="" class="form-control">
                          <?php for($i=1;$i<=5;$i++): ?>
                          <option value="<?php echo e($i+12); ?>:00"><?php echo e($i); ?>:00 pm</option>
                          <option value="<?php echo e($i+12); ?>:30"><?php echo e($i); ?>:30 pm</option>
                          <?php endfor; ?>
                          </select>
                      </div>
                </div>
            </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <tbody>

            </tbody>
          </table>
        </div>
      </div>
    </div>
    </div>
  </div>

</form>

  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/CitasMedicas/resources/views/schedule.blade.php ENDPATH**/ ?>