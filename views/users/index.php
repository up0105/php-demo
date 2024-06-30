<?php
$title = 'Users List';
ob_start();
?>

<div class="table-responsive">
    <table id="users-table" class="table table-condensed cell-border" style="width: 100%" cellspacing="0">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= htmlspecialchars($user['first_name'] . ' ' . $user['last_name']) ?></td>
                    <td>
                        <?= $user['email'] ?>
                    </td>
                    <td>
                        <div class="d-flex gap-2">
                            <a href="/user/<?= $user['id'] ?>/show" class="btn btn-sm btn-primary">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="/user/<?= $user['id'] ?>/edit" class="btn btn-sm btn-warning">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="/user/<?= $user['id'] ?>/delete" class="btn btn-sm btn-danger">
                                <i class="fas fa-trash"></i>
                            </a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function() {
        $('#users-table').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            "columnDefs": [{
                "orderable": false,
                "targets": 2
            }]
        });
    });
</script>

<?php
$content = ob_get_clean();
// Include layout
include_once __DIR__ . '/../layouts/app_layout.php';
?>