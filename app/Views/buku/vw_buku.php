<?= $this->extend('template/main'); ?>

<?= $this->section('content-title'); ?>
Buku
<?= $this->endSection(); ?>


<?= $this->section('content') ?>
<div class="form-group">
    <a href="" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Buku</a>
</div>
<div class="container-fluid">
    <table class="table">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Kategori</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Tahun</th>
            <th>ISBN</th>
            <th>Stok</th>
            <th>Dipinjam</th>
            <th>Dibooking</th>
            <th>Aksi</th>
        </tr>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($buku as $row) : ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $row['judul_buku']; ?></td>
                    <td><?= $row['nama_kategori']; ?></td>
                    <td><?= $row['pengarang']; ?></td>
                    <td><?= $row['penerbit']; ?></td>
                    <td><?= $row['tahun_terbit']; ?></td>
                    <td><?= $row['isbn']; ?></td>
                    <td><?= $row['stok']; ?></td>
                    <td><?= $row['dipinjam']; ?></td>
                    <td><?= $row['dibooking']; ?></td>
                    <td>
                        <a href="" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                        <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection(); ?>