<div class="container">
    <div class="row">
        <div class="col">
            <h3>MENU MANAGEMENT</h3>
        </div>
    </div>
    <div class="row mt-5 mb-3">
        <div class="col">
            <a href="<?= base_url(); ?>" class="btn btn-secondary"><i class="fas fa-fw fa-arrow-circle-left mr-1"></i>BACK</a>
            <a href="<?= base_url('menuManagement/tambahMenu'); ?>" class="btn btn-secondary"><i class="fas fa-fw fa-user-plus mr-1"></i></i>ADD</a>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Link</th>
                        <th scope="col">Icon</th>
                        <th scope="col">Privilage</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($menu as $mnu) :; ?>
                        <tr>
                            <th><?= ++$start; ?></th>
                            <td><?= $mnu['titleMenu']; ?></td>
                            <td><?= $mnu['linkMenu']; ?></td>
                            <td><i class="<?= $mnu['iconMenu']; ?>"></i></td>
                            <td><?= $mnu['accessName']; ?></td>
                            <td>
                                <a href=" <?= base_url('menu/editMenu' . $mnu['idMenu'] . ''); ?>" class="badge badge-success mr-2"><i class="fas fa-fw fa-edit"></i></a>
                                <a href="<?= base_url('menu/tambahSubMenu' . $mnu['idMenu'] . ''); ?>" class="badge badge-primary mr-2"><i class="fas fa-fw fa-caret-square-down"></i></a>
                                <a href="<?= base_url('menu/hapus' . $mnu['idMenu'] . ''); ?>" class="badge badge-danger mr-2" onclick="confirm('Yakin')"><i class="fas fa-fw fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <?= $this->pagination->create_links(); ?>
        </div>
    </div>
</div>
</div>