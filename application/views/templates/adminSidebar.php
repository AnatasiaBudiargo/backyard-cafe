        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-coffee"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Backyard Cafe Admin </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/index'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                ADMIN MANAGEMENT
            </div>
            <!-- Nav Item - User List -->
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Admin List</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                ADMIN PROFILE
            </div>

           <!-- Nav Item - Charts -->
           <li class="nav-item">
                <a class="nav-link" href="charts.html">
                <i class="fas fa-fw fa-user-lock"></i>
                    <span>My Profile</span></a>
            </li>

           <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-users-cog"></i>
                    <span>Edit Profile</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
           
            <!-- Heading -->
            <div class="sidebar-heading">
                ADMIN MANAGEMENT
            </div>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/menu'); ?>">
                    <i class="fas fa-fw fa-utensils"></i>
                    <span>Menu</span></a>
            </li>
          
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/testimonials'); ?>">
                    <i class="fas fa-fw fa-comments"></i>
                    <span>Testimonials</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/booking'); ?>">
                    <i class="fas fa-fw fa-bookmark"></i>
                    <span>Booking</span></a>
            </li>
           
            <!-- Divider -->
            <hr class="sidebar-divider">
           
            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#logoutModal" href="<?= base_url('auth/logout'); ?>">
                <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
          

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->


