<?php
$title = 'Users List';
ob_start();
// check is error session is set
if (isset($_SESSION['error'])) {
    $error = $_SESSION['error'];
    unset($_SESSION['error']);
} else {
    $error = null;
}
?>
<div class="container">
    <div class="row justify-content-center align-items-center min-vh-100">
        <div class="col-lg-4 col-md-6 col-sm-8">
            <?php if (isset($error)) : ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $error; ?>
                </div>
            <?php endif; ?>

            <!-- Logo -->
            <div class="text-center mb-4">
                <img src="/public/assets/img/logo.png" alt="Logo" class="img-fluid" width="150" height="150" />
            </div>

            <div class="card">
                <div class="card-body">
                    <form action="/make-login" method="post">
                        <div class="form-group mb-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" name="email" class="form-control" id="email" />
                        </div>
                        <div class="form-group mb-4">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password" />
                        </div>
                        <div class="form-group form-check mb-4">
                            <input type="checkbox" class="form-check-input" id="remember" />
                            <label for="remember" class="form-check-label">Remember Me</label>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-sm btn-block btn-primary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$content = ob_get_clean();
include_once __DIR__ . '/../layouts/guest_layout.php';
?>