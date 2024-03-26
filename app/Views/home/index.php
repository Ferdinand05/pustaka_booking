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
                    <button type="button" id="btnDetailBuku" class="btn btn-sm btn-info"><i class="fas fa-info-circle" onclick="detailBuku(<?= $row['id']; ?>)"></i></button>
                </div>
            </div>
        <?php endforeach; ?>


    </div>

    <div class="modalBuku">

    </div>

</div>
<footer class="pt-3 pb-2 bg-secondary text-white text-center flex ">
    <div>
        <p class="lh-lg">Dibuat oleh Ferdinand. 2024</p>
    </div>
</footer>


<script>
    function detailBuku(id_buku) {
        $.ajax({
            type: "post",
            url: "/home/detailBuku",
            data: {
                id_buku: id_buku
            },
            dataType: "JSON",

            success: function(response) {
                if (response.data) {
                    $('.modalBuku').html(response.data);
                    $('#modalDetailBuku').modal('show');
                }
            }
        });
    }

    $(document).ready(function() {

    });
</script>

<?= $this->include('template/footer'); ?>