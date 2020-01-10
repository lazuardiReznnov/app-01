<div class="container">
    <div class="row">
        <div class="col">
            <h3>Daftar User</h3>
        </div>
    </div>
    <div class="row">
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
                            <td><a href="" class="badge badge-secondary">Ganti Password</a></td>
                            <td><?= $usr['accessName']; ?></td>
                            <td> <?= $usr['photo'] ?> </td>
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