<div class="mb-3 d-flex">
    <div>
        <a href="<?= base_url('penerbit') ?>" class="btn btn-sm btn-secondary">Kembali</a>
    </div>
    <h5 class="ml-auto">Buku/Penerbit/Edit</h5>
</div>

<!-- form -->
<form action="<?= base_url('penerbit/update/') . $penerbit->id ?>" method="POST">
    <div class="row">
        <!-- id -->
        <div class="col-sm-12 col-md-6">
            <div class="form-group">
                <label for="id">ID Penerbit</label>
                <input value="<?= $penerbit->id ?? '' ?>" name="id" type="text" class="form-control" id="id">
            </div>
        </div>

        <!-- nama -->
        <div class="col-sm-12 col-md-6">
            <div class="form-group">
                <label for="nama_penerbit">Nama Penerbit</label>
                <input value="<?= $penerbit->nama_penerbit ?? '' ?>" name="nama_penerbit" type="text" class="form-control" id="nama_penerbit">
            </div>
        </div>

        <!-- alamat -->
        <div class="col-sm-12 col-md-6">
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input value="<?= $penerbit->alamat ?? '' ?>" name="alamat" type="text" class="form-control" id="alamat">
            </div>
        </div>

        <!-- no telp -->
        <div class="col-sm-12 col-md-6">
            <div class="form-group">
                <label for="no_telp">No Telp</label>
                <input value="<?= $penerbit->no_telp ?? '' ?>" name="no_telp" type="number" class="form-control" id="no_telp">
            </div>
        </div>
        <!-- button submit form -->
        <div class="col-12">
            <button class="btn btn-primary w-100" type="submit">Update Penerbit</button>
        </div>
    </div>

</form>
<!-- /form -->