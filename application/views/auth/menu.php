<div class="container page-menu">

<div class="title">
    <h1> Our Menu </h1>
</div>

<!-- Outer Row -->

    <div class="row justify-content-center kumpulan-menu">
        <div class="card-deck">
            <?php foreach ($menus as $mn) : ?>
                <div class="card">
                    <img src="<?= base_url('assets/img/menu/') . $mn->picture; ?>" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><?= $mn->name ?></h5>
                        <h6 class="price"><?= $mn->price ?></h6>
                        <p class="card-text"><?= $mn->description ?></p>
                        <p class="card-text"><small class="text-muted">Last updated...</small></p>
                        <!-- <p class="card-text"><small class="text-muted">Last updated <?= date('d F Y', $menus['date_created']); ?></small></p> -->
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>

</div>