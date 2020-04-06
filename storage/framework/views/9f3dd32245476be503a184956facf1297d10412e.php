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
                        <h3 class="mb-0">Medicos</h3>
                      </div>
                  </div>
                  <div class="col">
                    <div>
                    <a  href="<?php echo e(url('doctors/create')); ?>" class="btn btn-primary mt-3 float-right">Registrar nuevo Medico</a>
                    </div>
                  </div>
              </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombres</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">DNI</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Acción</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=1?>
                    <?php $__currentLoopData = $data['doctors']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                        <?php echo e($i); ?>

                        </td>
                        <td>
                          <span class="badge badge-dot mr-4">
                            <i class="<?php switch($doctor->status): case (0): ?> <?php echo e('bg-danger'); ?> <?php break; ?> <?php case (1): ?> <?php echo e('bg-success'); ?> <?php break; ?> <?php endswitch; ?>"></i> <?php echo e($doctor->user->name); ?>

                          </span>

                        </td>
                        <td>
                            <?php echo e($doctor->user->lastname); ?>

                        </td>
                        <td>
                            <?php echo e($doctor->user->dni); ?>

                     </td>
                        <td>
                         <?php echo e($doctor->user->email); ?>

                        </td>
                        <td>
                            <?php echo e($doctor->user->address); ?>

                        </td>
                        <td>
                            <?php echo e($doctor->user->phone); ?>

                        </td>
                        <td class="text-right">

                          <div class="dropdown">
                              Accion
                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="ni ni-bold-down mt-1"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <a class="dropdown-item" href="<?php echo e(url("doctors/show/{$doctor->id}")); ?>">Ver</a>
                            <button class="dropdown-item" data-toggle="modal" onclick="update('<?php echo e(json_encode($doctor)); ?>','<?php echo e($doctor->user); ?>')" data-target="#exampleModal">Editar</button>
                            <button class="dropdown-item" data-toggle="modal" data-target="#alert" onclick="
                            const form = document.getElementById('delete');
                                  form.setAttribute('action','<?php echo e(url("/doctors/{$doctor->id}")); ?>');
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
  <div class="modal  fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
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
            <div class="row">
                <div class="form-group col">
                    <label for="name">Nombre</label>
                    <input type="text" name="name" id="name" class="form-control" >
                </div>
                <div class="form-group col">
                  <label for="lastname">apellido</label>
                  <input type="text" name="lastname" id="lastname" class="form-control" >
              </div>
            </div>


            <div class="row">
                <div class="form-group col">
                    <label for="dni">DNI</label>
                    <input type="text" name="dni" id="dni" class="form-control" required >
                </div>
                <div class="form-group col">
                    <label for="address">Direccion</label>
                    <input type="text" name="address" id="address" class="form-control" required >
                </div>
            </div>

            <div class="row">
                <div class="form-group col">
                <label for="phone col">Telefono</label>
                <input type="text" name="phone" id="phone" class="form-control" required >
            </div>
            <div class="form-group col">
                <label for="email">Correo</label>
                <input type="text" name="email" id="email" class="form-control" required >
            </div>
            </div>
         <div class="row">
             <div class="form-group col">
                 <h3>Estado</h3>
                <label class="custom-toggle">
                    <input type="checkbox" name="status">
                    <span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes"></span>
                </label>
             </div>
             <div class="form-group col">
                 <label for="">Especialidad</label>
                 <select name="specialty" id="specialty" class="form-control">
                     <?php $__currentLoopData = $data['specialties']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $specialty): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <option value="<?php echo e($specialty->id); ?>"><?php echo e($specialty->name); ?></option>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 </select>
             </div>
         </div>
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
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="exclamation-triangle" class="svg-inline--fa fa-exclamation-triangle fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M569.517 440.013C587.975 472.007 564.806 512 527.94 512H48.054c-36.937 0-59.999-40.055-41.577-71.987L246.423 23.985c18.467-32.009 64.72-31.951 83.154 0l239.94 416.028zM288 354c-25.405 0-46 20.595-46 46s20.595 46 46 46 46-20.595 46-46-20.595-46-46-46zm-43.673-165.346l7.418 136c.347 6.364 5.609 11.346 11.982 11.346h48.546c6.373 0 11.635-4.982 11.982-11.346l7.418-136c.375-6.874-5.098-12.654-11.982-12.654h-63.383c-6.884 0-12.356 5.78-11.981 12.654z"></path></svg>
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
            const url =`doctors/${id}`;
            const form = document.getElementById('delete');

            form.submit();

          " >Eliminar!</button>
        </div>
      </div>
    </div>
  </div>

  <script>
    function update(obj){
     const doctor =JSON.parse(obj)
     const status = doctor.status
     const checkbox = document.querySelector("input[type='checkbox']");
     document.getElementById('name').value=doctor.user.name
     document.getElementById('lastname').value = doctor.user.lastname
     document.getElementById('title').innerHTML=`${doctor.user.name} ${doctor.user.lastname}`
     document.getElementById('dni').value=doctor.user.dni
     document.getElementById('address').value=doctor.user.address
     document.getElementById('phone').value=doctor.user.phone
     document.getElementById('email').value=doctor.user.email
     //querySelector('option[value='+doctor.user.specialty+']').setAttribute('selec')
     document.getElementById('specialty').value=doctor.specialty_id
     if(status){
        checkbox.setAttribute('checked',true)
     }

     let form= document.getElementById('update');
     let url = '<?php echo e($_SERVER["REQUEST_URI"]); ?>'+'/'+doctor.id;

     form.setAttribute('action',url)
    }
</script>

<?php echo $__env->make('layouts.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/CitasMedicas/resources/views/doctors/index.blade.php ENDPATH**/ ?>