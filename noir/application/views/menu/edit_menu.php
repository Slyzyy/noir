<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6">
            <?php foreach ($menu as $baris) : ?>
                <form method="post" action="<?= base_url() . 'menu/update'; ?>">

                    <div class="form-group">
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="id" value="<?php echo $baris->id; ?>">
                        </div>
                        <div class="form-group">
                            <label for="menu">Menu</label>
                            <input type="text" class="form-control" name="menu" value="<?php echo $baris->nis; ?>">
                        </div>
                    </div>

                </form>

            <?php endforeach; ?>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->