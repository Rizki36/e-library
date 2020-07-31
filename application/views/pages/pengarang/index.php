<div class="mb-3 d-flex">
    <div>
        <a href="<?= base_url('buku') ?>" class="btn btn-sm btn-secondary">Kembali</a>
    </div>
    <h5 class="ml-auto">Buku/Pengarang</h5>
</div>
<!-- form -->
<form action="<?= base_url('pengarang/store') ?>" method="POST">
    <div class="row">
        <!-- id -->
        <div class="col-sm-12 col-md-6">
            <div class="form-group">
                <label for="id">ID Pengarang</label>
                <input name="id" type="text" class="form-control" id="id">
            </div>
        </div>

        <!-- nama -->
        <div class="col-sm-12 col-md-6">
            <div class="form-group">
                <label for="nama_pengarang">Nama Pengarang</label>
                <input name="nama_pengarang" type="text" class="form-control" id="nama_pengarang">
            </div>
        </div>

        <!-- alamat -->
        <div class="col-sm-12 col-md-6">
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input name="alamat" type="text" class="form-control" id="alamat">
            </div>
        </div>

        <!-- no telp -->
        <div class="col-sm-12 col-md-6">
            <div class="form-group">
                <label for="no_telp">No Telp</label>
                <input name="no_telp" type="number" class="form-control" id="no_telp">
            </div>
        </div>
        <!-- button submit form -->
        <div class="col-12">
            <button class="btn btn-primary w-100" type="submit">Tambah Pengarang</button>
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
        <tr><td colspan="5">List Pengarang</td></tr>
        <tr>
            <td style="width: 20px;">ID</td>
            <td>Nama</td>
            <td>Alamat</td>
            <td>No Telp</td>
            <td>Act</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach($pengarangs as $pengarang): ?>
        <tr>
            <td><?= $pengarang->id ?></td>
            <td><?= $pengarang->nama_pengarang ?></td>
            <td><?= $pengarang->alamat ?></td>
            <td><?= $pengarang->no_telp ?></td>
            <td>
                <a href="<?= base_url('pengarang/edit/') . $pengarang->id ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                <a href="<?= base_url('pengarang/delete/') . $pengarang->id ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>

