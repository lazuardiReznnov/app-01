<div class="container">

    <div class="row mb-5">
        <div class="col">
            <a href="<?= base_url('menuManagement/index'); ?>" class="btn btn-secondary"><i class="fas fa-fw fa-arrow-circle-left mr-1"></i>BACK</a>

        </div>
    </div>
    <div class="row mb-4">
        <div class="col">
            <h3>DETAIL MENU</h3>
            <hr>
        </div>
    </div>
    <div class="row">
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

                    <a href="<?= base_url('menuManagement/editMenu/') . $menuDetail->idMenu; ?>" class="btn btn-success">EDIT MENU <i class="fas fa-fw fa-edit"></i></a>
                    <a href="<?= base_url('menuManagement/HapusMenu/') . $menuDetail->idMenu; ?>" class="btn btn-danger">DELETE <i class="fas fa-fw fa-minus"></i></a>

                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5 mb-3">
        <div class="col">
            <h3>List Sub Menu</h3>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Link</th>
                        <th scope="col">Icon Menu</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
</div>