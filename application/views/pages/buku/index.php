<!-- Buttons -->
<div class="row">
    <div class="col-12">
        <a href="<?= base_url('pengarang') ?>" class="btn btn-sm bg-cyan">
            <i class="fas fa-plus-circle"></i>&nbsp;&nbsp; Pengarang
        </a>
        <a href="<?= base_url('rak') ?>" class="btn btn-sm bg-purple">
            <i class="fas fa-plus-circle"></i>&nbsp;&nbsp; Rak
        </a>
        <a href="<?= base_url('penerbit') ?>" class="btn btn-sm bg-green">
            <i class="fas fa-plus-circle"></i>&nbsp;&nbsp; Penerbit
        </a>
    </div>
</div>


<form class="mt-3" action="<?= base_url('buku/store') ?>" method="POST">
    <div class="row">
        <!-- id -->
        <div class="col-sm-12 col-md-2">
            <div class="form-group">
                <label for="id">ID Buku</label>
                <input name="id" type="text" class="form-control" id="id">
            </div>
        </div>

        <!-- judul buku -->
        <div class="col-sm-12 col-md-4">
            <div class="form-group">
                <label for="judul_buku">Judul Buku</label>
                <input name="judul_buku" type="text" class="form-control" id="judul_buku">
            </div>
        </div>

        <!-- tahun buku -->
        <div class="col-sm-12 col-md-4">
            <div class="form-group">
                <label for="tahun_buku">Tahun Buku</label>
                <input name="tahun_buku" type="number" class="form-control" id="tahun_buku">
            </div>
        </div>

        <!-- jumlah buku -->
        <div class="col-sm-12 col-md-2">
            <div class="form-group">
                <label for="jumlah_buku">Jumlah Buku</label>
                <input name="jumlah_buku" type="number" class="form-control" id="jumlah_buku">
            </div>
        </div>

        <!-- rak -->
        <div class="col-sm-12 col-md-4">
            <div class="form-group">
                <label for="rak">Lokasi Buku</label>
                <select name="rak_id" class="form-control" id="rak">
                    <?php foreach ($raks as $rak) : ?>
                        <option value="<?= $rak->id ?>"><?= $rak->lokasi ?></option>
                    <?php endforeach ?>
                </select>
            </div>
        </div>


        <!-- penerbit -->
        <div class="col-sm-12 col-md-4">
            <div class="form-group">
                <label for="penerbit">Penerbit</label>
                <select name="penerbit_id" class="form-control" id="penerbit">
                    <?php foreach ($penerbits as $penerbit) : ?>
                        <option value="<?= $penerbit->id ?>"><?= $penerbit->nama_penerbit ?></option>
                    <?php endforeach ?>
                </select>
            </div>
        </div>

        <!-- pengarang -->
        <div class="col-sm-12 col-md-4">
            <div class="form-group">
                <label for="pengarang">Pengarang</label>
                <select name="pengarang_id" class="form-control" id="pengarang">
                    <?php foreach ($pengarangs as $pengarang) : ?>
                        <option value="<?= $pengarang->id ?>"><?= $pengarang->nama_pengarang ?></option>
                    <?php endforeach ?>
                </select>
            </div>
        </div>

        <div class="col-12">
            <button class="btn btn-primary w-100" type="submit">Tambah Buku</button>
        </div>

    </div>
</form>

<!-- alert status -->
<?php
$this->load->view('templates/_alert');
?>

<div class="table-responsive">
    <table class="table table-bordered text-center mt-5">
        <thead>
            <tr>
                <td colspan="8">List Buku</td>
            </tr>
            <tr>
                <td style="width: 20px;">ID</td>
                <td>Judul</td>
                <td>Tahun</td>
                <td>Jumlah</td>
                <td>Lokasi</td>
                <td>Penerbit</td>
                <td>Pengarang</td>
                <td>act</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bukus as $buku) : ?>
                <tr>
                    <td><?= $buku->id ?></td>
                    <td><?= $buku->judul_buku ?></td>
                    <td><?= $buku->tahun_buku ?></td>
                    <td><?= $buku->jumlah_buku ?></td>
                    <td><?= $buku->rak ?></td>
                    <td><?= $buku->penerbit ?></td>
                    <td><?= $buku->pengarang ?></td>
                    <td>
                        <a href="<?= base_url('buku/edit/') . $buku->id ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                        <a href="<?= base_url('buku/delete/') . $buku->id ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>