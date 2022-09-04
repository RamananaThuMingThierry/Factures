<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo e($titre ?? 'J.I.R.A.M.A'); ?></title>
  
  <?php echo $__env->make('admin.layout.dashboard_style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
         <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
        <?php echo $__env->make('admin.layout.dashboard_nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Main Sidebar Container -->
        <?php echo $__env->make('admin.layout.dashboard_aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid">
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
            </section>
        </div>

        
        <?php echo $__env->make('admin.layout.dashboard_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
             <!-- Control sidebar content goes here -->
        </aside>
    </div>
    <?php echo $__env->make('admin.layout.dashboard_script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH E:\2022\Février\Laravel\projet\Facture\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>