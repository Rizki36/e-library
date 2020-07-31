<!-- form -->
<form action="<?= base_url('pengarang/update/').$pengarang->id ?>" method="POST">
    <div class="row">
        <!-- id -->
        <div class="col-sm-12 col-md-6">
            <div class="form-group">
                <label for="id">ID Pengarang</label>
                <input value="<?= $pengarang->id ?? ''?>" name="id" type="text" class="form-control" id="id">
            </div>
        </div>

        <!-- nama -->
        <div class="col-sm-12 col-md-6">
            <div class="form-group">
                <label for="nama_pengarang">Nama Pengarang</label>
                <input value="<?= $pengarang->nama_pengarang ?? '' ?>" name="nama_pengarang" type="text" class="form-control" id="nama_pengarang">
            </div>
        </div>

        <!-- alamat -->
        <div class="col-sm-12 col-md-6">
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input value="<?= $pengarang->alamat ?? '' ?>" name="alamat" type="text" class="form-control" id="alamat">
            </div>
        </div>

        <!-- no telp -->
        <div class="col-sm-12 col-md-6">
            <div class="form-group">
                <label for="no_telp">No Telp</label>
                <input value="<?= $pengarang->no_telp ?? '' ?>" name="no_telp" type="number" class="form-control" id="no_telp">
            </div>
        </div>

        <!-- buttons -->
        <div class="col-12">
            <a href="<?= base_url('pengarang') ?>" class="btn btn-secondary">Kembali</a>
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </div>
</form>
<!-- /form -->