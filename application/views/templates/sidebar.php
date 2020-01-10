<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url(); ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-fw fa-broadcast-tower"></i>
        </div>
        <div class="sidebar-brand-text mx-3">APP-01 </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <div class="sidebar-heading">
        ADMINISTRATOR
    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <!-- Divider -->

    <?php foreach ($menuPanel as $mp) :; ?>
        <hr class="sidebar-divider my-0">
        <!-- Nav Item - Menu -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url($mp['linkMenu']); ?>">
                <i class="<?= $mp['iconMenu']; ?> "></i>
                <span><?= $mp['titleMenu']; ?></span></a>
        </li>
    <?php endforeach; ?>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        USER
    </div>
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-user "></i>
            <span>PROFILE</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-sign-out-alt "></i>
            <span>LOG-OUT</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>