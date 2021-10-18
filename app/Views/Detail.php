<?= $this->extend('layout/template.php') ?>

<?= $this->section('Content') ?>

<div class="container-fluid pt-3">
    <div class="row">
        <div class="col">
            <h1><a href="/" class="btn btn-dark">Back</a></h1>
        </div>
        <div class="col" align="right">
            <h1>
                <a href="/edit/<?= $note_detail['slug'] ?>" class="btn btn-warning">Edit</a>

                <form action="/<?= $note_detail['id'] ?>" method="POST" class="d-inline">
                    <?php csrf_field(); ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Hapus note ini ?');">Delete</button>
                </form>
            </h1>
        </div>
    </div>
</div>

<div class="container-fluid pt-3">
    <div>
        <p class="mb-3" style="font-weight:600;font-size:64px"><?= $note_detail['note_title'] ?></p>
    </div>
    <p style="font-weight:600;font-size:24px"><?= $note_detail['note_content'] ?></p>
</div>

<?= $this->endSection(); ?>