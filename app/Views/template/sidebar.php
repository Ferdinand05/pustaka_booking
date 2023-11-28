<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-store"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Pustaka</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="/">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Master
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('kategori'); ?>">
            <i class="fas fas fa-book-open"></i>
            <span>Kategori</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('buku'); ?>">
            <i class="fas fas fa-book"></i>
            <span>Buku</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('anggota'); ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Anggota</span></a>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('peminjaman'); ?>">
            <i class="fas fa-fw fa-shopping-cart"></i>
            <span>Peminjaman</span></a>
    </li>

    <!-- Nav Item - Charts -->
    <li class=" nav-item">
        <a class="nav-link" href="<?= base_url('pengembalian') ?>">
            <i class="fas fa-fw fa-receipt"></i>
            <span>Pengembalian</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <div class="sidebar-heading">
        Utility
    </div>

    <li class=" nav-item">
        <a class="nav-link" href="">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>