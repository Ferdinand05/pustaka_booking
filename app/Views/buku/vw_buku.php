<?= $this->extend('template/main'); ?>

<?= $this->section('content-title'); ?>
Buku
<?= $this->endSection(); ?>


<?= $this->section('content') ?>
<div class="form-group">
    <a href="" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Tambah Buku</a>
</div>
<div class="container-fluid">
    <table class="table table-bordered"">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Kategori</th>
            <th>Pengarang</th>
            <th>Tahun</th>
            <th>Stok</th>
            <th>Dipinjam</th>
            <th>Dibooking</th>
            <th>Aksi</th>
        </tr>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($buku as $row) : ?>
                <tr>
                    <th><?= $i++; ?></th>
                    <td><?= $row['judul_buku']; ?></td>
                    <td><?= $row['nama_kategori']; ?></td>
                    <td><?= $row['pengarang']; ?></td>
                    <td><?= $row['tahun_terbit']; ?></td>
                    <td><?= $row['stok']; ?></td>
                    <td><?= $row['dipinjam']; ?></td>
                    <td><?= $row['dibooking']; ?></td>
                    <td>
                        <a href=" /buku/detailbuku/<?= $row['id']; ?>" class=" btn btn-info btn-sm mb-2" title="detail buku"><i class="fa fa-eye"></i></a>
        <a href="/buku/editbuku/<?= $row['id']; ?>" class="btn btn-primary btn-sm mb-2"><i class="fa fa-edit"></i></a>
        <a href="/buku/deletebuku/<?= $row['id']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
        </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
    </table>
</div>
<?= $this->endSection(); ?>