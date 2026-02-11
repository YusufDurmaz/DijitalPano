<?php $this->extend("dashboard/layout"); ?>
<?php $this->section("content"); ?>
<form action="<?= url_to("settings") ?>" method="post">
    <div class="row g-3">

        <?php foreach ($config as $key => $value) { ?>
            <div class="col-sm-6">
                <label for="firstName" class="form-label"><?= lang(
                    "App.Settings." . $key,
                ) ?></label>
                <input type="text" name="<?= $key ?>" class="form-control" placeholder="" value="<?= $value ?>">
            </div>
        <?php } ?>
    </div>
        <button class="btn btn-dark mt-4" type="submit"><?= lang(
            "App.save",
        ) ?></button>
</form>

<?php $this->endSection(); ?>
