<nav class="col-md-2 d-none d-md-block bg-light sidebar sidebar-sticky" style="min-height: 100vh; border-right: 1px solid #dee2e6;">
    <div class="position-sticky">
        <div class="logo">
            <img src="/public/assets/img/logo.png" alt="Logo" class="img-fluid" width="150">
        </div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link <?php echo routeIs('/dashboard') || routeIs('/') ? 'active' : '' ?>" aria-current="page" href="/dashboard">
                    <i class="fas fa-home"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo routeIs('/users') ? 'active' : '' ?>" href="/users">
                    <i class="fas fa-users"></i>
                    Users
                </a>
            </li>
        </ul>
    </div>
</nav>