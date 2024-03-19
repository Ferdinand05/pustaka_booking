<nav class="navbar navbar-expand-lg  navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">Ferdinand</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="/home">Home</a>
                <a class="nav-link" href="#">Booking</a>
                <a class="nav-link" href="/home/detailuser/<?= session('user_id'); ?>">Profile</a>
                <?php if (session('role') == 1) : ?>
                    <a class="nav-link ml-2" href="/dashboard">Dashboard</a>
                <?php endif; ?>
                <a class="nav-link text-dark ml-2" href="/login/logout">Logout</a>
                <a class="nav-link  ml-5">Selamat Datang, <?= session('user'); ?> </a>
            </div>
        </div>
    </div>
</nav>