<?= $this->extend('layout/template.php') ?>

<?= $this->section('Content') ?>

<div class="container-fluid pt-3">
    <table class="table">
        <td>
            <h1>Notes Apps</h1>
        </td>
        <td align="right" valign="middle">
            <a href="/add" type="button" class="btn btn-primary">Add Note</a>
        </td>
    </table>
</div>

<div class="container-fluid pt-3">
    <div class="row">
        <?php foreach ($notes as $n) : ?>
            <div class="col-sm-3 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?= $n['note_title'] ?></h5>
                        <p class="card-text"><?= $n['note_content'] ?></p>
                        <a href="/<?= $n['slug'] ?>" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?= $this->endSection(); ?>