<?= $this->include('template/header'); ?>
<?= $this->include('home/navbar'); ?>




<div class="container mt-5 mb-5">

    <div class="mb-3">
        <a href="" class="btn btn-primary btn-sm">Edit User</a>
    </div>

    <div class="card mb-3 shadow" style="max-width: 680px;">
        <div class="row no-gutters">
            <div class="col-md-5">
                <img src="/img/<?= $user['0']['image']; ?>" alt="..." class="img-fluid" style="height: 100%;">
            </div>
            <div class="col-md-7">
                <div class="card-body">
                    <h5 class="card-title"><?= $user['0']['nama']; ?></h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><small>Email</small><br><?= $user['0']['email']; ?></li>
                        <?php if ($user['0']['role'] == 'member') : ?>
                            <li class="list-group-item"><small>Role</small><br><span class="badge badge-success"> <?= ucfirst($user['0']['role']); ?></span></li>
                        <?php else : ?>
                            <li class="list-group-item"><small>Role</small><br><span class="badge badge-primary"> <?= ucfirst($user['0']['role']); ?></span></li>
                        <?php endif; ?>

                        <?php if ($user['0']['is_active'] == 1) : ?>
                            <li class="list-group-item"><small>Status</small><br><span class="badge badge-primary"> Active</span></li>
                        <?php else : ?>
                            <li class="list-group-item"><small>Status</small><br><span class="badge badge-danger">Inactive </span></li>
                        <?php endif; ?>
                        <li class="list-group-item"><small>Tanggal</small><br><?= $user['0']['tanggal_input']; ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>