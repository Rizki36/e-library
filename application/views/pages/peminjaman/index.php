<!-- form -->
<form action="<?= base_url('peminjaman/store') ?>" method="POST">
    <div class="row">
        <!-- anggota -->
        <div class="col-sm-12 col-md-6">
            <div class="form-group">
                <label for="anggota">Anggota</label>
                <select name="anggota_id" class="form-control" id="anggota">
                    <?php foreach ($anggotas as $anggota) : ?>
                        <option value="<?= $anggota->id ?>"><?= $anggota->id .' - '. $anggota->nama ?></option>
                    <?php endforeach ?>
                </select>
            </div>
        </div>

        <!-- Buku -->
        <div class="col-sm-12 col-md-6">
            <div class="form-group">
                <label for="buku">Buku</label>
                <select name="buku_id" class="form-control" id="buku">
                    <?php foreach ($bukus as $buku) : ?>
                        <option value="<?= $buku->id ?>"><?= $buku->id . ' - ' . $buku->judul_buku ?></option>
                    <?php endforeach ?>
                </select>
            </div>
        </div>

        <!-- button submit form -->
        <div class="col-12">
            <button class="btn btn-primary w-100" type="submit">Pinjam</button>
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
        <tr><td colspan="5">List Peminjaman</td></tr>
        <tr>
            <td>Peminjam</td>
            <td>Buku</td>
            <td>Kembali</td>
            <td>Act</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach($peminjamans as $peminjaman): ?>
        <tr>
            <td><?= $peminjaman->anggota_nama ?></td>
            <td><?= $peminjaman->buku_judul_buku ?></td>
            <td><?= $peminjaman->is_kembali == 1 ? 'Sudah' : 'Belum' ?></td>
            <td>
                <a href="<?= base_url('peminjaman/kembalikan/') . $peminjaman->anggota_id . '/' . $peminjaman->buku_id ?>" class="btn btn-sm btn-success">Kembalikan</a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>

