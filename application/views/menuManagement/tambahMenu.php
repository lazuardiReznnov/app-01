<div class="container fluid mb-4">
    <div class="row mb-5">
        <div class="col">

            <a href="<?= base_url('menuManagement/index'); ?>" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="BACK"><i class="fas fa-fw fa-arrow-circle-left mr-1"></i></a>

        </div>
    </div>
    <div class="row">
        <div class="col">
            <h3>MENU MANAGEMANT</h3>
            <hr>
        </div>
    </div>
    <?php if ($this->session->flashdata('cek')) : ?>
        <div class="row ">
            <div class="col-lg-6">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    ERROR
                    <strong>TITLE MENU HAS BEEN</strong> <?= $this->session->flashdata('cek'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="row ml-1">
        <div class="col">
            <?= form_open_multipart('menuManagement/tambahMenu'); ?>
            <div class="form-group col-md-6">
                <label for="username">Title</label>
                <input type="text" class="form-control" id="titleMenu" name="titleMenu" aria-describedby="titleMenu" placeholder="Input The Title Of the Menu" value="<?= set_value('titleMenu'); ?>">
                <small class="form-text text-danger"><?= form_error('titleMenu'); ?></small></small>
            </div>
            <div class="form-group col-md-6">
                <label for="link">Link</label>
                <input type="text" class="form-control" id="link" name="link" aria-describedby="link" <?= set_value('link'); ?> placeholder="Input The Title Of the Menu">
                <small class="form-text text-danger"><?= form_error('link'); ?></small></small>
            </div>
            <div class="form-group col-md-6">
                <label for="Icon">Icon</label>
                <input type="text" class="form-control" id="iconMenu" name="iconMenu" aria-describedby="iconMenu" <?= set_value('iconMenu'); ?> placeholder="Input the fontawesome icon">
                <small class="form-text text-danger"><?= form_error('iconMenu'); ?></small></small>
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
                <small class="form-text text-danger"><?= form_error('idAccess'); ?></small></small>
            </div>
            <div class="form-group col-md-6">
                <label for="ketMenu">Keterangan</label>
                <textarea class="form-control" id="keterangan" name="ketMenu" rows="3"></textarea>
                <small class="form-text text-danger"><?= form_error('ketMenu'); ?></small></small>
            </div>
            <div class="form-group col-md-6">
                <input type="submit" class="btn btn-secondary" value="SAVE" class="btn btn-primary">
            </div>
            </Form>
        </div>
    </div>
</div>
</div>