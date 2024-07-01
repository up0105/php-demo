<?php
$title = 'User Details';
$backUrl = '/users';
ob_start();
?>

<div class="row">
    <div class="col-12">
        <div class="card shadow">
            <div class="card-header fw-bold">
                User Details
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-condensed cell-border">
                        <tr>
                            <th>ID</th>
                            <td><?php echo $user['id']; ?></td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td><?php echo $user['first_name'] . ' ' . $user['last_name']; ?></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><?php echo $user['email']; ?></td>
                        </tr>
                        <tr>
                            <th>Created At</th>
                            <td><?php echo $user['created_at']; ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

$content = ob_get_clean();

include_once __DIR__ . '/../layouts/app_layout.php';
?>