<?= $this->extend('layout/template.php') ?>

<?= $this->section('Content') ?>

<div class="container-fluid pt-3">
    <div class="row">
        <div class="col">
            <h1><a href="/<?= $note_detail['slug'] ?>" class="btn btn-dark">Back</a></h1>
        </div>
        <div class="col-6">
            <?php if ($validation->hasError('note_title')) : ?>
                <div class="alert alert-secondary" role="alert" align=center>
                    <?= $validation->getError('note_title') ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="col" align="right">
            <h1><label label for="submit_btn" tabindex="0" class="btn btn-primary">Confirm</label></h1>
        </div>
    </div>
</div>

<div class="container-fluid pt-3">
    <form action="/update/<?= $note_detail['id'] ?>" method="POST">
        <?= csrf_field(); ?>
        <input type="hidden" name="slug" value="<?= $note_detail['slug'] ?>">
        <div>
            <input name="note_title" type="text" class="mb-3" style="border:0;font-weight:600;font-size:64px;outline:none" value="<?= (old('note_title')) ? old('note_title') : $note_detail['note_title'] ?>">
        </div>
        <div>
            <textarea name="note_content" cols="100" rows="10"><?= (old('note_content')) ? old('note_content') : $note_detail['note_content'] ?></textarea>
        </div>
        <input type="submit" id="submit_btn" hidden>
    </form>
</div>

<?= $this->endSection(); ?>