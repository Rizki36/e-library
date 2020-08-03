<form class="mt-3" action="<?= base_url('buku/update/') . $buku->id ?>" method="POST">
    <div class="row">
        <!-- id -->
        <div class="col-sm-12 col-md-2">
            <div class="form-group">
                <label for="id">ID Buku</label>
                <input value="<?= $buku->id ?? '' ?>" name="id" type="text" class="form-control" id="id">
            </div>
        </div>

        <!-- judul buku -->
        <div class="col-sm-12 col-md-4">
            <div class="form-group">
                <label for="judul_buku">Judul Buku</label>
                <input value="<?= $buku->judul_buku ?? '' ?>" name="judul_buku" type="text" class="form-control" id="judul_buku">
            </div>
        </div>

        <!-- tahun buku -->
        <div class="col-sm-12 col-md-4">
            <div class="form-group">
                <label for="tahun_buku">Tahun Buku</label>
                <input value="<?= $buku->tahun_buku ?? '' ?>" name="tahun_buku" type="number" class="form-control" id="tahun_buku">
            </div>
        </div>

        <!-- jumlah buku -->
        <div class="col-sm-12 col-md-2">
            <div class="form-group">
                <label for="jumlah_buku">Jumlah Buku</label>
                <input value="<?= $buku->jumlah_buku ?? '' ?>" name="jumlah_buku" type="number" class="form-control" id="jumlah_buku">
            </div>
        </div>

        <!-- rak -->
        <div class="col-sm-12 col-md-3">
            <div class="form-group">
                <label for="rak">Lokasi Buku</label>
                <select name="rak_id" class="form-control" id="rak">
                    <?php foreach ($raks as $rak) : ?>
                        <option value="<?= $rak->id ?>" <?= $rak->id == $buku->rak ? 'selected' : '' ?>>
                            <?= $rak->lokasi ?>
                        </option>
                    <?php endforeach ?>
                </select>
            </div>
        </div>


        <!-- penerbit -->
        <div class="col-sm-12 col-md-3">
            <div class="form-group">
                <label for="penerbit">Penerbit</label>
                <select name="penerbit_id" class="form-control" id="penerbit">
                    <?php foreach ($penerbits as $penerbit) : ?>
                        <option value="<?= $penerbit->id ?>" <?= $penerbit->id == $buku->penerbit ? 'selected' : '' ?>><?= $penerbit->nama_penerbit ?></option>
                    <?php endforeach ?>
                </select>
            </div>
        </div>

        <!-- pengarang -->
        <div class="col-sm-12 col-md-3">
            <div class="form-group">
                <label for="pengarang">Pengarang</label>
                <select name="pengarang_id" class="form-control" id="pengarang">
                    <?php foreach ($pengarangs as $pengarang) : ?>
                        <option value="<?= $pengarang->id ?>" <?= $pengarang->id == $buku->pengarang ? 'selected' : '' ?>><?= $pengarang->nama_pengarang ?></option>
                    <?php endforeach ?>
                </select>
            </div>
        </div>

        <!-- tanggal pengadaan -->
        <div class="col-sm-12 col-md-3">
            <div class="form-group">
                <label for="tanggal-pengadaan">Tanggal Pengadaan</label>
                <div class="input-group date" data-provide="datepicker">
                    <input id="tanggal-pengadaan" value="<?= $buku->tanggal_pengadaan ?? '' ?>" name="tanggal_pengadaan" type="text" class="form-control">
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12">
            <a href="<?= base_url('buku') ?>" class="btn btn-secondary">Kembali</a>
            <button class="btn btn-primary" type="submit">Update Buku</button>
        </div>

    </div>
</form>