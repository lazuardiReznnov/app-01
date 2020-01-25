<div class="container">
    <div class="row">
        <div class="col">
            <h3>CASH MANAGEMENT</h3>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="btn-group" role="group" aria-label="Basic example">
                <a href="<?= base_url(); ?>" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Back"><i class="fas fa-fw fa-arrow-circle-left mr-1"></i></a>
            </div>
        </div>
        <div class="col-md-6 text-right">
            <div class="btn-group" role="group" aria-label="Basic example">
                <a href="<?= base_url('cashManagement/cashacount'); ?>" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="List Acount"><i class="fas fa-fw fa-cash-register mr-1"></i></a>
                <a href="<?= base_url('cashManagement/addCash'); ?>" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Add Cash"><i class="fas fa-fw fa-plus mr-1"></i></a>
                <a href="<?= base_url('cashManagement/billingreport'); ?>" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Billing Report"><i class="fas fa-fw fa-chart-bar mr-1"></i></a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col text-center mt-4 mb-4">
            <h4>DAILY CASH</h4>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">acount</th>
                        <th scope="col">trans</th>
                        <th scope="col">date</th>
                        <th scope="col">desctiption</th>
                        <th scope="col">kredit</th>
                        <th scope="col">debit</th>
                        <th scope="col">Saldo</th>
                        <th scope="col">act</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>0000</td>
                        <td>0000</td>
                        <td>dd/mm/yy</td>
                        <td>its desctiption</td>
                        <td>100000</td>
                        <td>100000</td>
                        <td>100000</td>
                        <td><a href="#" class="badge badge-success">Edit</a>
                            <a href="#" class="badge badge-danger">del</a>
                        </td>
                    </tr>

                </tbody>
            </table>
            <small>Updated dd/mm/yy 11:11:11</small>
        </div>
    </div>
</div>
</div>