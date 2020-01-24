<div class="container">
    <div class="row mb-4">
        <div class="col">
            <h3>DETAIL MENU</h3>
            <hr>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-md-5">
            <div class="btn-group" role="group" aria-label="Basic example">
                <a href="<?= base_url('menuManagement/index'); ?>" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Back"><i class="fas fa-fw fa-arrow-circle-left mr-1"></i></a>
                <a href="<?= base_url('menuManagement/addSubmenu/') . $menuDetail->idMenu; ?>" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Add Submenu"><i class="fas fa-folder-plus"></i> </a>
                <a href="<?= base_url('menuManagement/editMenu/') . $menuDetail->idMenu; ?>" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Edit Menu"><i class="fas fa-fw fa-edit"></i></a>
                <a href="<?= base_url('menuManagement/deleteMenu/') . $menuDetail->idMenu; ?>" onclick='confirm("are You Sure want to delete.?")' class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete Menu"><i class="fas fa-fw fa-minus"></i></a>
            </div>
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
    <div class="row mb-5">
        <div class="col-md-6">
            <div class="card" style="">
                <div class="card-body">
                    <h3 class="card-title "> </h3>
                    <h5 class="card-subtitle mb-2"><?= $menuDetail->titleMenu; ?></h5>
                    <table class="table">
                        <tr>
                            <th>Icon Menu</th>
                            <td>: <i class="<?= $menuDetail->iconMenu; ?>"></i></td>
                        </tr>
                        <tr>
                            <th>Link</th>
                            <td>: <?= $menuDetail->linkMenu; ?></td>
                        </tr>
                        <tr>
                            <th>Privilage</th>
                            <td>: <?= $menuDetail->accessName; ?></td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
</div>