<?= $this->extend('template/main'); ?>


<?= $this->section('content-title'); ?>
Halaman Tambah Kategori Buku
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<div class="form-group">
    <a href="/kategori" class="btn btn-danger btn-sm">Kembali</a>
</div>
<div class="container">
    <form action="/kategori/addKategori" method="post">
        <div class="form-group">
            <label for="nama_kategori">Nama Kategori</label>
            <input type="text" class="form-control" name="nama_kategori">
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </form>
</div>

<?= $this->endSection(); ?>