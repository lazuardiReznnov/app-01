<div class="container">
    <div class="row">
        <div class="col">
            <h3>MANAGEMENT MENU</h3>
        </div>
    </div>
    <div class="row mb-5 mt-3">
        <div class="col ">
            <a href="<?= base_url('menu/tambahMenu'); ?>" class="btn btn-primary">TAMBAH MENU</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Link</th>
                        <th scope="col">Icon</th>
                        <th scope="col">Privilage</th>
                        <th colspan="3" scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($menu as $mnu) :; ?>
                        <tr>
                            <th><?= ++$start; ?></th>
                            <td><?= $mnu['titleMenu']; ?></td>
                            <td><?= $mnu['linkMenu']; ?></td>
                            <td><?= $mnu['iconMenu']; ?></td>
                            <td><?= $mnu['accessName']; ?></td>
                            <td><a href="<?= base_url('menu/editMenu' . $mnu['idMenu'] . ''); ?>" class="badge badge-success">EDIT</td>
                            <td><a href="<?= base_url('menu/tambahSubMenu' . $mnu['idMenu'] . ''); ?>" class="badge badge-primary">+SubMenu</td>
                            <td><a href="<?= base_url('menu/hapus' . $mnu['idMenu'] . ''); ?>" class="badge badge-danger" onclick="confirm('Yakin')">HAPUS</td>
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