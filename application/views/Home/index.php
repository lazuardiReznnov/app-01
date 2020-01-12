<!-- Begin Page Content -->
<div class="container">
    <h3 class="text-center">LIST MENU</h3>
    <hr>
    <div class="row ml-2 mr-2">

        <?php foreach ($menuPanel as $mph) : ?>
            <div class="col-md-3 mr-2 ml-5">
                <div class="card bg-info text-white" style="width: 18rem;">
                    <div class="card-icon"><i class="<?= $mph['iconMenu']; ?>"></i></div>
                    <div class="card-body">
                        <h5 class="card-title"><?= $mph['titleMenu']; ?>"</h5>
                        <p class="card-text"><?= $mph['ketMenu']; ?>"</p>
                        <a href="<?= base_url($mph['linkMenu']); ?>" class="btn btn-primary"><i class="fas fa-fw fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</div>
<!-- End of Main Content -->