<hr>

<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="mois" class="control-label sr-only">Mois</label>
            <input type="text" autofocus autocomplete="off"  value="<?php echo e(old('mois')); ?>" name="mois" id="mois" class="form-control rounded-0 <?php $__errorArgs = ['mois'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Mois">
            <?php $__errorArgs = ['mois'];
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
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="ancien_index" class="control-label sr-only">Ancien index</label>
            <input type="text" autofocus autocomplete="off"  value="<?php echo e(old('ancien_index')); ?>" name="ancien_index" id="ancien_index" class="form-control rounded-0 <?php $__errorArgs = ['ancien_index'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Ancien index">
            <?php $__errorArgs = ['ancien_index'];
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
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="nouvel_index" class="control-label sr-only">Nouvel index</label>
            <input type="text" autofocus autocomplete="off"  value="<?php echo e(old('nouvel_index')); ?>" name="nouvel_index" id="nouvel_index" class="form-control rounded-0 <?php $__errorArgs = ['nouvel_index'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Nouvel index">
            <?php $__errorArgs = ['nouvel_index'];
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
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            <label for="numero_port" class="control-label sr-only">Numéro porte</label>
            <input type="text" autofocus autocomplete="off"  value="<?php echo e(old('numero_port')); ?>" name="numero_port" id="numero_port" class="form-control rounded-0 <?php $__errorArgs = ['numero_port'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Numéro port">
            <?php $__errorArgs = ['numero_port'];
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
    </div>
    <div class="col-md-3">
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
    </div>
    <div class="col-md-3">
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
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="tranche" class="control-label sr-only">Tranche</label>
            <input type="text" autofocus autocomplete="off"  value="<?php echo e(old('tranche')); ?>" name="tranche" id="tranche" class="form-control rounded-0 <?php $__errorArgs = ['tranche'];
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
    </div>
</div>

<hr>

<div class="form-group d-flex justify-content-end">
    <input type="submit" value="<?php echo e($submitButtonText); ?>" class="btn btn-primary rounded-0"  type="button">
    <a type="button" class="btn btn-danger ml-1 rounded-0" data-dismiss="modal" href="<?php echo e(route('facture.index')); ?>" aria-label="Close">Annuler</a>
</div>
<?php /**PATH D:\2022\Février\Laravel\projet\Facture\resources\views/factures/form.blade.php ENDPATH**/ ?>