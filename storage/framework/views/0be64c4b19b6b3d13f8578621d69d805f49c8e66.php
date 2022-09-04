    <hr>
    <div class="form-group">
        <label for="numero_porte" class="control-label sr-only">Numéro Porte</label>
        <select name="numero_porte" class="form-control dernier_index_consommer rounded-0" id="numero_porte">
            <?php $__currentLoopData = $portes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($p->id); ?>"><?php echo e($p->numero_porte); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>

    <div class="form-group">
        <label for="moisID" class="control-label sr-only">Mois</label>
        <select name="moisID" class="form-control rounded-0" id="moisID">
            <option value="" disabled></option>
            <?php $__currentLoopData = $moisall; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($m->id); ?>"><?php echo e($m->mois); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>

    <div class="form-group">
        <label for="dernier_consommation" class="control-label sr-only">Dernière consommation</label>
        <input type="text" autofocus autocomplete="off"  value="<?php echo e(old('dernier_consommation')); ?>" name="dernier_consommation" id="dernier_consommation" class="form-control rounded-0 <?php $__errorArgs = ['dernier_consommation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Dernière consommation">
        <?php $__errorArgs = ['dernier_consommation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="invalid-feedback">
                <?php echo e($message); ?>

            </div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <div class="form-group">
        <label for="nouvel_consommation" class="control-label sr-only">Nouveau consommation</label>
        <input type="text" autofocus autocomplete="off"  value="<?php echo e(old('nouvel_consommation')); ?>" name="nouvel_consommation" id="nouvel_consommation" class="form-control rounded-0 <?php $__errorArgs = ['nouvel_consommation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Nouveau consommation">
        <?php $__errorArgs = ['nouvel_consommation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="invalid-feedback">
                <?php echo e($message); ?>

            </div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <div class="form-group">
        <label for="tranche" class="control-label sr-only">Tranche</label>
        <input type="text" autofocus autocomplete="off"  value="<?php echo e(old('tranche') ?? $tranche); ?>" name="tranche" id="tranche" class="form-control rounded-0 <?php $__errorArgs = ['tranche'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Tranche">
        <?php $__errorArgs = ['tranche'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="invalid-feedback">
                <?php echo e($message); ?>

            </div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
<hr>

<div class="form-group d-flex justify-content-end">
    <input type="submit" value="<?php echo e($submitButtonText); ?>" class="btn btn-primary rounded-0"  type="button">
    <a type="button" class="btn btn-danger ml-1 rounded-0" data-dismiss="modal" href="<?php echo e(route('index.index')); ?>" aria-label="Close">Annuler</a>
</div>
<?php /**PATH D:\2022\Février\Laravel\projet\Facture\resources\views/index/form.blade.php ENDPATH**/ ?>