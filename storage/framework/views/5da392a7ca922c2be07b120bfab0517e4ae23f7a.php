<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 p-2 d-flex justify-content-between mt-2 mb-2 elevation-1 bg-white">
            <h3>J.I.R.A.M.A  </h3>
            <div class="btn-group" role="group">
                <a type="button" class="btn btn-info" title="Actualiser" href="#"><i class="fa fa-refresh text-white"></i></a>
                <a type="button" class="btn btn-warning" title="Export en PDF" href="#"><i class="fa fa-file-pdf-o"></i></a>
                <a type="button" class="btn btn-primary" title="Import en Excel" href="#"><i class="fa fa-file-excel-o"></i></a>
                <a type="button" class="btn btn-success" title="Créer une direction" href="<?php echo e(route('index.ajouter')); ?>"><i class="fa fa-plus"></i></a>
            </div>
        </div>
    </div>

    <?php $t = 0; ?>
    <?php $__currentLoopData = $mois; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mois_facture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="row">
        <div class="col-lg-12 p-2 mb-2 elevation-1 bg-white">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th colspan="10"><?php echo e($mois_facture->mois); ?></th>
                        </tr>
                        <tr>
                            <th class="text-center">N° Porte</th>
                            <th class="text-center">Ancien</th>
                            <th class="text-center">Recent</th>
                            <th class="text-center">Consommé</th>
                            <th class="text-center">Tranche</th>
                            <th class="text-center">Tarif</th>
                            <th class="text-center">Compteur</th>
                            <th class="text-center">Tarif</th>
                            <th class="text-center">Prix en FMG</th>
                            <th class="text-center">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $__currentLoopData = $index; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($i->mois_factures_id == $mois_facture->id): ?>
                            <tr>
                                <td><?php echo e($i->portes_id); ?></td>
                                <td><?php echo e($i->dernier_consommation); ?></td>
                                <td><?php echo e($i->nouvel_consommation); ?></td>
                                <td><?php echo e(($i->nouvel_consommation - $i->dernier_consommation)); ?></td>
                                <td><?php echo e($tranche[$t]); ?></td>
                                <td><?php echo e(($i->nouvel_consommation - $i->dernier_consommation) * ( $tranche[$t])); ?></td>
                                <td><?php echo e(round($consomme[$t])); ?></td>
                                <td><?php echo e(round( (($i->nouvel_consommation - $i->dernier_consommation) * ( $tranche[$t] ) ) +  $consomme[$t] )); ?></td>
                                <td><?php echo e(round((($i->nouvel_consommation - $i->dernier_consommation) * ( $tranche[$t] ) ) +  $consomme[$t])*5); ?></td>
                                <td>
                                    <?php if($i->status == 1): ?>
                                        <a href="<?php echo e(route('index.payer',['index' => $i->id ])); ?>" class="btn btn-success ml-1 mr-1"><i class="fa fa-toggle-on"></i></a>
                                    <?php else: ?>
                                        <a href="<?php echo e(route('index.payer',['index' => $i->id ])); ?>" class="btn btn-secondary ml-1"><i class="fa fa-toggle-off"></i></a>
                                    <?php endif; ?>
                                    <a href="<?php echo e(route('index.modifier',['index' => $i->id ])); ?>" class="btn btn-primary"><span class="fa fa-edit"></span></a>
                                    <a href="<?php echo e(route('index.supprimer',['index' => $i->id ])); ?>" id="delete" class="btn btn-danger ml-1" ><i class="nav-icon fas fa-trash"></i></a>
                                </td>
                            </span>
                            </tr>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </tbody>
                      <tfoot>
                          <th colspan="3">TOTAL</th>
                          <th class="text-center"><?php echo e($som[$t]); ?></th>
                          <th class="text-center"><?php echo e($tranche[$t]); ?></th>
                          <th class="text-center"><?php echo e($som[$t] * $tranche[$t]); ?></th>
                          <th class="text-center"><?php echo e($consommer[$t]); ?></th>
                          <th class="text-center"><?php echo e(($som[$t] * $tranche[$t]) + $consommer[$t]); ?></th>
                          <th class="text-center"><?php echo e((($som[$t] * $tranche[$t]) + $consommer[$t])*5); ?></th>
                      </tfoot>
                </table>
            </div>
            <hr>
        </div>
    </div>

    <script>
        $(document).on("click", "#delete", function(e){
        e.preventDefault();
        var link = $(this).attr("href");
        bootbox.confirm("Voulez-vous vraiment supprimer cet élément ?", function(confirmed){
          if (confirmed){
              window.location.href = link;
            };
          });
        });
      </script>
      <!-- page script -->
      <script>
        $(function () {
          $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
          });
          $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
          });
        });
      </script>

    <?php $t++ ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.dashboard',['titre' => 'Index du facture J.I.R.A.M.A'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\2022\Février\Laravel\projet\Facture\resources\views/index/index.blade.php ENDPATH**/ ?>