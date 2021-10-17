<?= $this->extend('layout/template.php') ?>

<?= $this->section('Content') ?>

<div class="container-fluid pt-3">
    <table class="table">
        <td>
            <h1><a href="/" class="btn btn-dark">Back</a></h1>
        </td>
        <td align="right">
            <h1><a href="/edit" class="btn btn-warning">Edit</a></h1>
        </td>
    </table>
</div>

<div class="container-fluid pt-3">
    <h1 class="mb-3"><?= $note_detail['note_title'] ?></h1>
    <h3><?= $note_detail['note_content'] ?></h3>
</div>

<?= $this->endSection(); ?>