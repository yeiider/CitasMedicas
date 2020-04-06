<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col">
        <div class="card shadow p-3">
            <div class="card-header border-0">
                <div class="row">
                    <div class="col">
                        <h3 class="mb-0">Nueva Especialidad</h3>
                    </div>
                    <div class="col">
                    <a href="<?php echo e(route('specialties')); ?>" class="btn btn-default float-right">Cancelar y volver</a>
                    </div>
                </div>

              </div>
        <?php if(session('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <span class="alert-icon"><i class="ni ni-like-2"></i></span>
        <span class="alert-text"><strong>Correcto!</strong> <?php echo e(session('success')); ?>!</span>
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

    <form action="<?php echo e(route('specialties-store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="example-text-input" class="form-control-label">Nombre</label>
            <input class="form-control" name="name" required type="text" id="example-text-input">
        </div>
        <div class="form-group">
            <label for="example-text-input" class="form-control-label">Descripcion</label>
            <input class="form-control" name="description" type="text" id="example-text-input">
        </div>
        <div class="form-group">

            <input class="form-control btn btn-primary" type="submit" value="Guardar" id="example-text-input">
        </div>
     </form>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/CitasMedicas/resources/views/specialties/create.blade.php ENDPATH**/ ?>