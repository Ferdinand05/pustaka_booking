<?= $this->extend('template/main'); ?>


<?= $this->section('content-title'); ?>
Halaman Edit Kategori Buku
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<div class="form-group">
    <a href="/kategori" class="btn btn-danger btn-sm">Kembali</a>
</div>
<div class="container">
    <form action="/kategori/saveKategori" method="post">
        <div class="form-group">
            <label for="nama_kategori">Nama Kategori</label>
            <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" value="<?= $kategori['nama_kategori']; ?>" required>
            <input type="hidden" name="id_kategori" value="<?= $kategori['id_kategori']; ?>">
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </form>
</div>

<?= $this->endSection(); ?>