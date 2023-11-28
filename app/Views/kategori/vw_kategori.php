<?= $this->extend('template/main'); ?>

<?= $this->section('content-title'); ?>
Kategori
<?= $this->endSection(); ?>


<?= $this->section('content') ?>
<div class="form-group">
    <a href="" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Buku</a>
</div>
<div class="container-fluid">
    <table class="table" style="width: 100%;">
        <tr>
            <th>No</th>
            <th>Kategori</th>
            <th>Aksi</th>
        </tr>
        <tbody>
            <?php $i = 1;
            foreach ($kategori as $row) :
            ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $row['nama_kategori']; ?></td>
                    <td>
                        <a href="" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                        <a href="/kategori/deleteKategori/<?= $row['id_kategori']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection(); ?>