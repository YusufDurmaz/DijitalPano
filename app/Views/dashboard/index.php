<?php $this->extend("dashboard/layout"); ?>
<?php $this->section("content"); ?>

<div class="btn-toolbar mb-2 mb-md-0">
<div class="btn-group me-2">
    <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
    <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
</div>
<button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
    <span data-feather="calendar"></span>
    This week
</button>

<canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

<?php $this->endSection(); ?>
