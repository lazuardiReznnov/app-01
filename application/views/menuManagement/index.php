<div class="container">
    <div class="row">
        <div class="col">
            <h3>MENU MANAGEMENT</h3>
            <hr>
        </div>
    </div>
    <?php if ($this->session->flashdata('success')) : ?>
        <div class="row ">
            <div class="col-lg-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Title Menu
                    <strong>success</strong> <?= $this->session->flashdata('success'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="row mt-2 mb-3">
        <div class="col">
            <div class="btn-group" role="group" aria-label="Basic example">
                <a href="<?= base_url(); ?>" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Back"><i class="fas fa-fw fa-arrow-circle-left mr-1"></i></a>
                <a href="<?= base_url('menuManagement/tambahMenu'); ?>" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Add Menu"><i class="fas fa-folder-plus mr-1"></i></a>
            </div>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-6">
            <ul class="list-group">
                <?php
                foreach ($menu as $mnu) :; ?>
                    <li class="list-group-item ">
                        <?= $mnu['titleMenu']; ?>
                        <a href=" <?= base_url('menuManagement/detailMenu/' . $mnu['idMenu'] . ''); ?>" class="badge badge-success mr-2 float-right" data-toggle="tooltip" data-placement="top" title="Detail Menu"><i class="fas fa-fw fa-arrow-right"></i></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <?= $this->pagination->create_links(); ?>
        </div>
    </div>
</div>
</div>