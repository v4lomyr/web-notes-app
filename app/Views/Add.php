<?= $this->extend('layout/template.php') ?>

<?= $this->section('Content') ?>

<div class="container-fluid pt-3">
    <table class="table">
        <td>
            <h1><a href="/detail" class="btn btn-dark">Back</a></h1>
        </td>
        <td align="right">
            <h1><button type="submit" form="form" formaction="/detail" class="btn btn-primary">Confirm</button></h1>
        </td>
    </table>
</div>

<div class="container-fluid pt-3">
    <form action="POST" id="form">
        <div>
            <input type="text" class="mb-3" style="border:0;font-weight:600;font-size:64px;outline:none" placeholder="Note Title">
        </div>
        <div>
            <textarea name="" id="" cols="100" rows="10" placeholder="Note Content"></textarea>
        </div>
    </form>
</div>

<?= $this->endSection(); ?>