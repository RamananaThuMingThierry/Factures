<hr>
    <div class="form-group">
        <label for="numero_porte" class="control-label sr-only">Numéro porte</label>
        <input type="number" autofocus autocomplete="off"  value="<?php echo e(old('numero_porte')); ?>" name="numero_porte" id="numero_porte" class="form-control rounded-0 <?php $__errorArgs = ['numero_porte'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Numéro porte">
        <?php $__errorArgs = ['numero_porte'];
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
    <a type="button" class="btn btn-danger ml-1 rounded-0" data-dismiss="modal" href="<?php echo e(route('portes.index')); ?>" aria-label="Close">Annuler</a>
</div>
<?php /**PATH D:\2022\Février\Laravel\projet\Facture\resources\views/portes/form.blade.php ENDPATH**/ ?>