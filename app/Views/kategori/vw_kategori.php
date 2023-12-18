<?= $this->extend('template/main'); ?>

<?= $this->section('content-title'); ?>
Kategori
<?= $this->endSection(); ?>


<?= $this->section('content') ?>
<div class="form-group">
    <a href="/kategori/formAddKategori" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Tambah Kategori</a>
</div>
<div class="form-group">
    <?php if (session()->has('success')) : ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong><i class="fas fa-exclamation fa-lg"></i>&nbsp;&nbsp;</strong><?= session('success'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>

</div>
<div class="container-fluid">
    <table class="table table-bordered table-striped" style="width: 100%;">
        <thead>
            <tr>
                <th style="width: 10%;">No</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php $i = 1;
            foreach ($kategori as $row) :
            ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $row['nama_kategori']; ?></td>
                    <td style="width: 15%;">
                        <a href="/kategori/editKategori/<?= $row['id_kategori']; ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                        <a href="/kategori/deleteKategori/<?= $row['id_kategori']; ?>" class="btn btn-danger btn-sm" onclick='return confirm("Apakah anda yakin akan Menghapus ?")'><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection(); ?>