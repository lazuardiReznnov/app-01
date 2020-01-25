<div class="container">
    <div class="col">
        <h4><i class="fas fa-fw fa-cash-register mr-1"></i>LIST CASH ACOUNT</h4>
        <hr>
    </div>

    <div class="row mt-5">
        <div class="col-md-6">
            <div class="btn-group" role="group" aria-label="Basic example">
                <a href="<?= base_url('cashManagement/index'); ?>" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Back"><i class="fas fa-fw fa-arrow-circle-left mr-1"></i></a>
            </div>
        </div>
        <div class="col-md-6 text-right">
            <div class="btn-group" role="group" aria-label="Basic example">
                <a href="<?= base_url('cashManagement/addCash'); ?>" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Add Cash Acount"><i class="fas fa-fw fa-plus mr-1"></i></a>
                <a href="<?= base_url('cashManagement/importAcount'); ?>" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Import Cash Cash Acount"><i class="fas fa-fw fa-file-import mr-1"></i></a>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Kode Acount</th>
                        <th scope="col">Title Acount</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>1001</td>
                        <td>Cash Bank</td>
                        <td>CAsh In From Bank Acount</td>
                        <td>
                            <a href="<?= base_url('cashManagement/editCashacount'); ?>" class="badge badge-success" data-toggle="tooltip" data-placement="top" title="Edit Cash Acount"><i class="fas fa-fw fa-edit mr-1"></i></a>
                            <a href="<?= base_url('cashManagement/delCashacount'); ?>" onclick="confirm('Are You sure want to delete it.?')" class="badge badge-danger" data-toggle="tooltip" data-placement="top" title="delete Cash Acount"><i class="fas fa-fw fa-edit mr-1"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>