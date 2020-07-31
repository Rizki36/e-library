<div class="mb-3 d-flex">
    <div>
        <a href="<?= base_url('rak') ?>" class="btn btn-sm btn-secondary">Kembali</a>
    </div>
    <h5 class="ml-auto">Buku/Rak/Edit</h5>
</div>

<!-- form -->
<form action="<?= base_url('rak/update/') . $rak->id ?>" method="POST">
    <div class="row">
        <!-- id -->
        <div class="col-sm-12 col-md-6">
            <div class="form-group">
                <label for="id">ID Rak</label>
                <input name="id" value="<?= $rak->id ?? '' ?>" type="text" class="form-control" id="id">
            </div>
        </div>

        <!-- nama -->
        <div class="col-sm-12 col-md-6">
            <div class="form-group">
                <label for="lokasi">Lokasi Rak</label>
                <input name="lokasi" value="<?= $rak->lokasi ?? '' ?>" type="text" class="form-control" id="lokasi">
            </div>
        </div>

        <!-- button submit form -->
        <div class="col-12">
            <a href="<?= base_url('rak') ?>" class="btn btn-secondary">Kembali</a>
            <button class="btn btn-primary" type="submit">Update Rak</button>
        </div>
    </div>

</form>
<!-- /form -->