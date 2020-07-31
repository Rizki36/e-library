<!-- form -->
<form action="<?= base_url('anggota/update/') . $anggota->id ?>" method="POST">
    <div class="row">
        <!-- id -->
        <div class="col-sm-12 col-md-6">
            <div class="form-group">
                <label for="id">ID Anggota</label>
                <input value="<?= $anggota->id ?? '' ?>" name="id" type="text" class="form-control" id="id">
            </div>
        </div>

        <!-- nama -->
        <div class="col-sm-12 col-md-6">
            <div class="form-group">
                <label for="nama">Nama Anggota</label>
                <input value="<?= $anggota->nama ?? '' ?>" name="nama" type="text" class="form-control" id="nama">
            </div>
        </div>

        <!-- alamat -->
        <div class="col-sm-12 col-md-6">
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input value="<?= $anggota->alamat ?? '' ?>" name="alamat" type="text" class="form-control" id="alamat">
            </div>
        </div>

        <!-- no telp -->
        <div class="col-sm-12 col-md-6">
            <div class="form-group">
                <label for="no_telp">No Telp</label>
                <input value="<?= $anggota->no_telp ?? '' ?>" name="no_telp" type="text" class="form-control" id="no_telp">
            </div>
        </div>

        <!-- button submit form -->
        <div class="col-12">
            <a href="<?= base_url('anggota') ?>" class="btn btn-secondary">Kembali</a>
            <button class="btn btn-primary" type="submit">Update Anggota</button>
        </div>
    </div>

</form>
<!-- /form -->