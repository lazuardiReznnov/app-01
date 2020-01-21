<div class="container fluid mb-4">
    <div class="row mb-5">
        <div class="col">

            <a href="<?= base_url('menuManagement/detailMenu/' . $idMenu .  ''); ?>" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="BACK"><i class="fas fa-fw fa-arrow-circle-left mr-1"></i></a>

        </div>
    </div>
    <div class="row">
        <div class="col">
            <h3>MENU MANAGEMANT - ADD SUBMENU</h3>
            <hr>
        </div>
    </div>
    <?php if ($this->session->flashdata('cek')) : ?>
        <div class="row ">
            <div class="col-lg-6">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    ERROR
                    <strong>TITLE SUBMENU HAS BEEN</strong> <?= $this->session->flashdata('cek'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="row ml-1">
        <div class="col">
            <?= form_open_multipart(); ?>
            <input type="hidden" name="idMenu" value="<?= $idMenu; ?>">
            <div class="form-group col-md-6">
                <label for="titleSubmenu">Title</label>
                <input type="text" class="form-control" id="titleSubmenu" name="titleSubmenu" aria-describedby="titlesubMenu" placeholder="Input Title  Sub menu" value="<?= set_value('titleSubMenu'); ?>">
                <small class="form-text text-danger"><?= form_error('titleSubmenu'); ?></small></small>
            </div>
            <div class="form-group col-md-6">
                <label for="linkSubmenu">Link</label>
                <input type="text" class="form-control" id="linkSubmenu" name="link" aria-describedby="link" <?= set_value('linkSubmenu'); ?> placeholder="Input link SubMenu">
                <small class="form-text text-danger"><?= form_error('link'); ?></small></small>
            </div>
            <div class="form-group col-md-6">
                <label for="Icon">Icon Submenu</label>
                <input type="text" class="form-control" id="iconSubmenu" name="iconSubmenu" aria-describedby="iconSubmenu" <?= set_value('iconSubmenu'); ?> placeholder="Input the fontawesome icon">
                <small class="form-text text-danger"><?= form_error('iconSubmenu'); ?></small></small>
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
                <label for="ketsubmenu">Keterangan</label>
                <textarea class="form-control" id="keterangan" name="ketsubmenu" rows="3"></textarea>
                <small class="form-text text-danger"><?= form_error('ketsubmenu'); ?></small></small>
            </div>
            <div class="form-group col-md-6">
                <input type="submit" class="btn btn-secondary" value="SAVE">
            </div>
            </Form>
        </div>
    </div>
</div>
</div>