<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="mx-auto col-lg-6 col-md-6 mt-2 pt-4 pl-4 pr-4 elevation-1 bg-white">
            <h3 class="text-muted text-center">Numéro porte</h3>
            <div class="line mb-4"><span></span></div>
            <form action="<?php echo e(route('portes.traitement')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo $__env->make('portes.form',['submitButtonText' => 'Ajouter'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.dashboard',['titre' => 'Ajouter numéro porte'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\2022\Février\Laravel\projet\Facture\resources\views/portes/ajouter.blade.php ENDPATH**/ ?>