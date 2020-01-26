<div class="container">
    <div class="row">
        <div class="col">
            <h3>FORM ADD CASH ACOUNT</h3>
            <hr>
        </div>
    </div>
    <div class="row mt-2 mb-4">
        <div class="col-md-6">
            <div class="btn-group" role="group" aria-label="Basic example">
                <a href="<?= base_url('cashManagement/cashAcount'); ?>" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Back"><i class="fas fa-fw fa-arrow-circle-left mr-1"></i></a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <form>
                <div class="form-group">
                    <label for="idCC">ID CASH ACOUNT</label>
                    <input type="text" class="form-control" id="idCashAcount" aria-describedby="idCC" name="idCC">
                    <small id="idCC" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="titleCC">TITLE CASH ACOUNT</label>
                    <input type="text" class="form-control" id="titleCC" aria-describedby="titleCC" name="titleCC">
                    <small id="titleCC" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="desAcCC">DESCRIPTION</label>
                    <textarea class="form-control" id="desAcCC" rows="3"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>