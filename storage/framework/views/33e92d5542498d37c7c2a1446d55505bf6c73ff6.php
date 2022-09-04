<hr>
    <div class="form-group">
        <label for="date_index" class="control-label sr-only">Date index</label>
        <input type="date" autocomplete="off"  value="<?php echo e(old('date_index') ?? $today); ?>" name="date_index" id="date_index" class="form-control rounded-0 <?php $__errorArgs = ['date_index'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Date index">
        <?php $__errorArgs = ['date_index'];
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
        <label for="mois" class="mois-label sr-only">Mois</label>
        <?php if($submitButtonText == "Ajouter"): ?>
        <select name="mois" class="form-control rounded-0" id="mois">
            <option value="Janvier">Janvier</option>
            <option value="Février">Février</option>
            <option value="Mars">Mars</option>
            <option value="Avril">Avril</option>
            <option value="Mai">Mai</option>
            <option value="Juin">Juin</option>
            <option value="Juillet">Juillet</option>
            <option value="Août">Août</option>
            <option value="Septembre">Septembre</option>
            <option value="Octobre">Octobre</option>
            <option value="Novembre">Novembre</option>
            <option value="Décembre">Décembre</option>
        </select>
        <?php endif; ?>
    </div>

    <div class="form-group">
        <label for="ancien_index" class="control-label sr-only">Ancien index</label>
        <input type="text" autocomplete="off"  value="<?php echo e(old('ancien_index') ?? ($last_mois ?? $mois->ancien_index)); ?>" name="ancien_index" id="ancien_index" class="form-control rounded-0 <?php $__errorArgs = ['ancien_index'];
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

    <div class="form-group">
        <label for="nouvel_index" class="control-label sr-only">Nouvel index</label>
        <input type="text" autofocus autocomplete="off"  value="<?php echo e(old('nouvel_index') ?? ($new_mois == false ? '' : $mois->nouvel_index)); ?>" name="nouvel_index" id="nouvel_index" class="form-control rounded-0 <?php $__errorArgs = ['nouvel_index'];
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
<hr>

<div class="form-group d-flex justify-content-end">
    <input type="submit" value="<?php echo e($submitButtonText); ?>" class="btn btn-primary rounded-0"  type="button">
    <a type="button" class="btn btn-danger ml-1 rounded-0" data-dismiss="modal" href="<?php echo e(route('mois.index')); ?>" aria-label="Close">Annuler</a>
</div>
<?php /**PATH E:\2022\Février\Laravel\projet\Facture\resources\views/mois/form.blade.php ENDPATH**/ ?>