<div class="container-fluid">
    <h4>Messages From Customer</h4>
    <a href="<?= base_url('report_contact/contact/') ?>" class="btn btn-secondary mt-3 mb-3">Print to PDF</a>


    <table id="table-invoice" class="table table_invoice table-bordered table-hover table-striped">
        <tr>
            <th>ID_Contact</th>
            <th>User Name</th>
            <th>User Email</th>
            <th>Message</th>
        </tr>

        <?php foreach ($contact as $cont) : ?>
            <tr>
                <td><?= $cont->id_contact; ?></td>
                <td><?= $cont->nama; ?></td>
                <td><?= $cont->email; ?></td>
                <td><?= $cont->pesan; ?></td>

            </tr>
        <?php endforeach; ?>
    </table>
</div>