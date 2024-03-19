<?= $this->include('template/header'); ?>
<?= $this->include('home/navbar'); ?>

<div class="container mt-5 mb-5">
    <div class="form-group">
        <a href="<?= base_url('home'); ?>" class="btn btn-sm btn-danger">Kembali</a>
    </div>

    <div class="card mb-3 shadow" style="max-width: 600px;">
        <div class="row no-gutters">
            <div class="col-md-5">
                <img src="/img/<?= $buku['0']['image']; ?>" alt="" class="img-fluid" style="height: 100%;">
            </div>
            <div class="col-md-7">
                <div class="card-body">
                    <h5 class="card-title"><?= $buku[0]['judul_buku']; ?></h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><small>ISBN</small><br><?= $buku[0]['isbn']; ?></li>
                        <li class="list-group-item"><small>Pengarang</small><br><?= $buku[0]['pengarang']; ?></li>
                        <li class="list-group-item"><small>Penerbit</small><br><?= $buku[0]['penerbit']; ?></li>
                        <li class="list-group-item"><small>Tahun</small><br><?= $buku[0]['tahun_terbit']; ?></li>
                        <li class="list-group-item"><small>Stok</small><br><?= $buku[0]['stok']; ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>