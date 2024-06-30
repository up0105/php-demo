<?php
$title = 'Users List';
ob_start();
?>

<div class="row">
    <div class="col-xl-3 mb-50">
        <div class="bg-white box-shadow border-radius-10 height-100-p widget-style1">
            <div class="d-flex flex-wrap align-items-center">
                <div class="circle-icon">
                    <div class="icon border-radius-100 font-24 text-primary"><i class="fa fa-users" aria-hidden="true"></i></div>
                </div>
                <div class="widget-data">
                    <div class="weight-800 font-18">2020</div>
                    <div class="weight-500">Users</div>
                </div>
                <div class="progress-data">
                    <div id="chart"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 mb-50">
        <div class="bg-white widget-style1 border-radius-10 height-100-p box-shadow">
            <div class="d-flex flex-wrap align-items-center">
                <div class="circle-icon">
                    <div class="icon border-radius-100 font-24 text-success"><i class="fa fa-user-check" aria-hidden="true"></i></div>
                </div>
                <div class="widget-data">
                    <div class="weight-800 font-18">400</div>
                    <div class="weight-500">Active Users</div>
                </div>
                <div class="progress-data">
                    <div id="chart2"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 mb-50">
        <div class="bg-white box-shadow border-radius-10 height-100-p widget-style1">
            <div class="d-flex flex-wrap align-items-center">
                <div class="circle-icon">
                    <div class="icon border-radius-100 font-24 text-danger"><i class="fa fa-user-times" aria-hidden="true"></i></div>
                </div>
                <div class="widget-data">
                    <div class="weight-800 font-18">350</div>
                    <div class="weight-500">Inactive Users</div>
                </div>
                <div class="progress-data">
                    <div id="chart3"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 mb-50">
        <div class="bg-white box-shadow border-radius-10 height-100-p widget-style1">
            <div class="d-flex flex-wrap align-items-center">
                <div class="circle-icon">
                    <div class="icon border-radius-100 font-24 text-info"><i class="fa fa-dollar" aria-hidden="true"></i></div>
                </div>
                <div class="widget-data">
                    <div class="weight-800 font-18">$6060</div>
                    <div class="weight-500">Worth</div>
                </div>
                <div class="progress-data">
                    <div id="chart4"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

</script>

<?php
$content = ob_get_clean();
include_once __DIR__ . '/../layouts/app_layout.php';
?>