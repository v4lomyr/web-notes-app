<?= $this->extend('layout/template.php') ?>

<?= $this->section('Content') ?>

<div class="container-fluid pt-3">
    <div class="row">
        <div class="col">
            <h1><a href="/detail" class="btn btn-dark">Back</a></h1>
        </div>
        <div class="col-6">
            <?php if ($validation->hasError('note_title')) : ?>
                <div class="alert alert-secondary" role="alert" align=center>
                    <?= $validation->getError('note_title') ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="col" align="right">
            <h1><label for="submit_btn" tabindex="0" class="btn btn-primary">Confirm</label></h1>
        </div>
    </div>
</div>

<div class="container-fluid pt-3">
    <form action="/add" method="POST" id="form">
        <?= csrf_field(); ?>
        <div>
            <input type="text" name="note_title" class="mb-3" value="<?= old('note_title') ?>" style="border:0;font-weight:600;font-size:64px;outline:none" placeholder="Note Title">
        </div>
        <div>
            <textarea name="note_content" cols="100" rows="10" placeholder="Note Content"><?= old('note_content') ?></textarea>
        </div>
        <input type="submit" id="submit_btn" hidden>
    </form>
</div>

<?= $this->endSection(); ?>