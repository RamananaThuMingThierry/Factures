<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 p-2 d-flex justify-content-between mt-2 mb-2 elevation-1 bg-white">
            <h3>Portes  </h3>
            <div class="btn-group" role="group">
                <a type="button" class="btn btn-info" title="Actualiser" href="#"><i class="fa fa-refresh text-white"></i></a>
                <a type="button" class="btn btn-warning" title="Export en PDF" href="#"><i class="fa fa-file-pdf-o"></i></a>
                <a type="button" class="btn btn-primary" title="Import en Excel" href="#"><i class="fa fa-file-excel-o"></i></a>
                <a type="button" class="btn btn-success" title="Créer une direction" href="<?php echo e(route('portes.ajouter')); ?>"><i class="fa fa-plus"></i></a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 p-2 mb-2 elevation-1 bg-white">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="text-left">Numéro</th>
                            <th class="text-right">Actions</th>
                        </tr>
                      <tbody>
                          <?php $__currentLoopData = $portes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="text-left"><?php echo e($p->numero_porte); ?></td>
                                <td class="text-right">
                                    <a href="#" class="btn btn-primary"><i class="nav-icon fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger"><i class="nav-icon fas fa-trash"></i></a>
                                </td>
                            </tr>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </tbody>
                </table>
            </div>
            <hr>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.dashboard',['titre' => 'Numéro porte'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\2022\Février\Laravel\projet\Facture\resources\views/portes/index.blade.php ENDPATH**/ ?>