<?= $this->include('template/header'); ?>
<?= $this->include('home/navbar'); ?>

<div class="container mt-5 mb-5">
    <div class="d-flex flex-wrap justify-content-center" style="gap: 40px;">

        <?php foreach ($buku as $row) : ?>
            <div class="card" style="width: 14rem;">
                <img src="/img/<?= $row['image']; ?>" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                    <p><?= $row['pengarang']; ?></p>
                    <p><?= $row['penerbit']; ?> <br> <?= $row['tahun_terbit']; ?></p>
                    <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-cart-plus"></i> Booking</a>
                    <a href="home/detailbuku/<?= $row['id']; ?>" class="btn btn-info btn-sm"><i class="fas fa-info-circle"></i> Detail</a>
                </div>
            </div>
        <?php endforeach; ?>


    </div>



</div>
<footer class="pt-3 pb-2 bg-secondary text-white text-center flex ">
    <div>
        <p class="lh-lg">Dibuat oleh Ferdinand. 2024</p>
    </div>
</footer>

<?= $this->include('template/footer'); ?>