<!-- Sidebar -->
<ul class="navbar-nav bg-gray-900 sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('home'); ?>">
        <!-- <div class="sidebar-brand-icon">
            <i class="fas fa-space-shuttle"></i>
        </div> -->
        <di class="sidebar-brand-text mx-3">Noir</di>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a href="<?= base_url('admin_cart/dashboard_admin'); ?>" class="nav-link">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <li class="nav-item">
        <a href="<?= base_url('admin_cart/data_barang'); ?>" class="nav-link">
            <l class="fas fa-fw fa-database"></l>
            <span>Data Barang</span>
        </a>
    </li>

    <li class="nav-item">
        <a href="<?= base_url('admin_cart/invoice'); ?>" class="nav-link">
            <l class="fas fa-fw fa-file-invoice"></l>
            <span>Invoice</span>
        </a>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->