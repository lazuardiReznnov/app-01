<div class="container fluid mb-4">
    <div class="row">
        <div class="col">
            <h3>MENU MANAGEMANT</h3>
            <hr>
        </div>
    </div>
    <div class="row ml-1">
        <div class="col">
            <?= form_open_multipart('userManagement/tambahUser'); ?>
            <div class="form-group col-md-6">
                <label for="username">Title</label>
                <input type="text" class="form-control" id="titleMenu" name="titleMenu" aria-describedby="titleMenu">
                <small id="titleMenu" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group col-md-6">
                <label for="link">Link</label>
                <input type="text" class="form-control" id="link" name="link" aria-describedby="link">
                <small id="link" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group col-md-6">
                <label for="Icon">Icon</label>
                <input type="text" class="form-control" id="link" name="iconMenu" aria-describedby="iconMenu">
                <small id="iconMenu" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group col-md-6">
                <?php
                $i = 1;
                foreach ($access as $acc) : ?>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="idAccess" id="inlineRadio<?= $i; ?>" value="<?= $acc['idAccess']; ?>">
                        <label class="form-check-label" for="inlineRadio1"><?= $acc['accessname']; ?></label>
                    </div>

                <?php $i++;
                endforeach; ?>
            </div>
            <div class="form-group col-md-6">
                <label for="ketMenu">Keterangan</label>
                <textarea class="form-control" id="keterangan" name="ketMenu" rows="3"></textarea>
            </div>
            <div class="form-group col-md-6">
                <input type="submit" class="btn btn-secondary" value="SAVE" class="btn btn-primary">
            </div>
            </Form>
        </div>
    </div>
</div>
</div>