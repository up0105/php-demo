<div class="page-header">
    <div class="d-flex align-items-center justify-content-start gap-2">
        <?php if (isset($backUrl)) : ?>
            <a href="<?php echo isset($backUrl) ? $backUrl : '/dashboard'; ?>" class="btn btn-primary btn-block btn-sm">
                <i class="fas fa-arrow-left"></i>
            </a>
        <?php endif; ?>
        <h5 class="page-title">
            <?php echo $title; ?>
        </h5>
    </div>
</div>