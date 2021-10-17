<?= $this->extend('layout/template.php') ?>

<?= $this->section('Content') ?>

<div class="container-fluid pt-3">
    <table class="table">
        <td>
            <h1><a href="/detail" class="btn btn-dark">Back</a></h1>
        </td>
        <td align="right">
            <h1><a href="/detail" class="btn btn-primary">Confirm</a></h1>
        </td>
    </table>
</div>

<div class="container-fluid pt-3">
    <h1 class="mb-3">Judul Catatan</h1>
    <h3>Content Catatan</h3>
</div>

<?= $this->endSection(); ?>