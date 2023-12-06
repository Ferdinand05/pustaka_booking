<?= $this->extend('template/main'); ?>


<?= $this->section('content-title'); ?>
User
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<div class="container">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Role</th>
                <th>Tanggal Input</th>
                <th>Active</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $i = 1;
            foreach ($user as $row) : ?>
                <tr>
                    <th><?= $i++; ?></th>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['role']; ?></td>
                    <td><?= $row['tanggal_input']; ?></td>
                    <td><?= $row['is_active']; ?></td>
                    <td>
                        <a href="/user/detailuser/<?= $row['user_id']; ?>" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
                        <a href="/user/deleteuser/<?= $row['user_id']; ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection(); ?>