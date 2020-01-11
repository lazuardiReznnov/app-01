<div class="container">
    <div class="row">
        <div class="col">
            <h3>USER MANAGEMENT</h3>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col">
            <a href="<?= base_url(); ?>" class="btn btn-secondary"><i class="fas fa-fw fa-arrow-circle-left mr-1"></i>BACK</a>
            <a href="<?= base_url('AdmUser/tambahUser'); ?>" class="btn btn-secondary"><i class="fas fa-fw fa-user-plus mr-1"></i></i>ADD</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">Privilage</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($user as $usr) :; ?>
                        <tr>
                            <th><?= $no; ?></th>
                            <td><?= $usr['username']; ?></td>
                            <td><?= $usr['email']; ?></td>
                            <td><a href="" class="badge badge-secondary"><i class="fas fa-fw fa-key"></i>CHANGE</a></td>
                            <td><?= $usr['accessName']; ?></td>
                            <td> <?= $usr['photo'] ?> </td>
                            <td>
                                <a href=" <?= base_url('menu/editMenu' . $usr['idUser'] . ''); ?>" class="badge badge-success mr-2"><i class="fas fa-fw fa-edit"></i></a>
                                <a href="<?= base_url('menu/hapus' . $usr['idUser'] . ''); ?>" class="badge badge-danger mr-2" onclick="confirm('Yakin')"><i class="fas fa-fw fa-trash-alt"></i></a>
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