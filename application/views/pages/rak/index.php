<div class="mb-3 d-flex">
    <div>
        <a href="<?= base_url('buku') ?>" class="btn btn-sm btn-secondary">Kembali</a>
    </div>
    <h5 class="ml-auto">Buku/Rak</h5>
</div>

<!-- form -->
<form action="<?= base_url('rak/store') ?>" method="POST">
    <div class="row">
        <!-- id -->
        <div class="col-sm-12 col-md-6">
            <div class="form-group">
                <label for="id">ID Rak</label>
                <input name="id" type="text" class="form-control" id="id">
            </div>
        </div>

        <!-- lokasi -->
        <div class="col-sm-12 col-md-6">
            <div class="form-group">
                <label for="lokasi">Lokasi Rak</label>
                <input name="lokasi" type="text" class="form-control" id="lokasi">
            </div>
        </div>

        <!-- button submit form -->
        <div class="col-12">
            <button class="btn btn-primary w-100" type="submit">Tambah Rak</button>
        </div>
    </div>

</form>
<!-- /form -->

<!-- alert status -->
<?php 
    $this->load->view('templates/_alert');
 ?>

<table class="table table-bordered text-center mt-5">
    <thead>
        <tr><td colspan="3">List Rak</td></tr>
        <tr>
            <td style="width: 200px;">ID</td>
            <td>Lokasi</td>
            <td>Act</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach($raks as $rak): ?>
        <tr>
            <td><?= $rak->id ?></td>
            <td><?= $rak->lokasi ?></td>
            <td>
                <a href="<?= base_url('rak/edit/') . $rak->id ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                <a href="<?= base_url('rak/delete/') . $rak->id ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>

