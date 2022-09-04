<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.html" class="brand-link">
      <img src="backend/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">J . I . R . A . M . A</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="backend/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">RAMANANA Thierry</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?php echo e(route('facture.index')); ?>" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Facture</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo e(route('mois.index')); ?>" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Mois</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo e(route('portes.index')); ?>" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Portes</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo e(route('index.index')); ?>" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Index</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
<?php /**PATH D:\2022\Février\Laravel\projet\Facture\resources\views/admin/layout/dashboard_aside.blade.php ENDPATH**/ ?>