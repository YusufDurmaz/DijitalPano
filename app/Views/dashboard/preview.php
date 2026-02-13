<?php $this->extend("dashboard/layout"); ?>
<?php $this->section("content"); ?>
<iframe src="<?php echo url_to("board"); ?>"
        width="100%"
        height="350%">
</iframe>
<?php $this->endSection(); ?>
