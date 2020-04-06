<?php $__env->startSection('content'); ?>
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
                        <h3 class="mb-0">Especialidades</h3>
                      </div>
                  </div>
                  <div class="col">
                    <div>
                    <a  href="<?php echo e(route('specialties-create')); ?>" class="btn btn-primary mt-3 float-right">Registrar una Especialidad</a>
                    </div>
                  </div>
              </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Acción</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=1?>
                    <?php $__currentLoopData = $specialties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $specialty): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                        <?php echo e($i); ?>

                        </td>
                        <td>
                          <span class="badge badge-dot mr-4">
                            <i class="bg-warning"></i> <?php echo e($specialty->name); ?>

                          </span>
                        </td>
                        <td>
                         <?php echo e($specialty->description); ?>

                        </td>
                        <td class="text-right">

                          <div class="dropdown">
                              Accion
                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="ni ni-bold-down mt-1"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <button class="dropdown-item" data-toggle="modal" onclick="update('<?php echo e($specialty->name); ?>','<?php echo e($specialty->description); ?>','<?php echo e($specialty->id); ?>')" data-target="#exampleModal">Editar</button>
                            <button class="dropdown-item" data-toggle="modal" data-target="#alert" onclick="
                            document.getElementById('id-drop').value='<?php echo e($specialty->id); ?>';
                            const form = document.getElementById('delete');
                                  form.setAttribute('action','<?php echo e(url("/specialties/{$specialty->id}")); ?>');
                            ">Eliminar</button>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <?php $i++?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
        </div>
      </div>
<?php $__env->stopSection(); ?>

<!-- Button trigger modal -->
    <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title" id="title" id="title"></h2>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form  method="POST" id="update">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
              <div class="form-group">
                  <label for="">Nombre</label>
                  <input type="text" name="name" id="name" class="form-control" >
              </div>
              <div class="form-group">
                <label for="">Descripcion</label>
                <input type="text" name="description" id="description" class="form-control" required >
            </div>
            <input type="hidden" name="id" value="" id="id">
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary" onclick="event.preventDefault(); document.getElementById('update').submit()" >Guardar cambios</button>
        </div>
      </div>
    </div>
  </div>



  <!--Alert-->
  <div class="modal fade" id="alert" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="row">
              <div class="col-md-5 col-sm-5">
                <img src="<?php echo e(asset('public/assets/img/theme/alert.png')); ?>" alt="" style="width:100%">
              </div>
              <div class="col">
                  <h1 class="text-center mt-5">Esta seguro de querer eliminarlo?</h1>
                  <input type="hidden" id="id-drop">
              </div>

          </div>
        </div>
        <div class="modal-footer">
            <form id="delete"  method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
            </form>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-danger" onclick="
            const id = document.getElementById('id-drop').value;
            const url =`specialties/${id}`;
            const form = document.getElementById('delete');

            form.submit();

          " >Eliminar!</button>
        </div>
      </div>
    </div>
  </div>

  <script>
    function update(...value){
     console.log(value)
     document.getElementById('name').value=value[0]
     document.getElementById('title').innerHTML=value[0]
     document.getElementById('description').value=value[1]
     document.getElementById('id').value=value[2]

     let form= document.getElementById('update');
     let url = '<?php echo e($_SERVER["REQUEST_URI"]); ?>'+'/'+value[2];

     form.setAttribute('action',url)
    }
</script>

<?php echo $__env->make('layouts.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/CitasMedicas/resources/views/specialties/index.blade.php ENDPATH**/ ?>