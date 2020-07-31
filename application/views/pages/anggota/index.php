<!-- form -->
<form action="<?= base_url('anggota/store') ?>" method="POST">
    <div class="row">
        <!-- id -->
        <div class="col-sm-12 col-md-6">
            <div class="form-group">
                <label for="id">ID Anggota</label>
                <input name="id" type="text" class="form-control" id="id">
            </div>
        </div>

        <!-- nama -->
        <div class="col-sm-12 col-md-6">
            <div class="form-group">
                <label for="nama">Nama Anggota</label>
                <input name="nama" type="text" class="form-control" id="nama">
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
                <input name="no_telp" type="text" class="form-control" id="no_telp">
            </div>
        </div>

        <!-- button submit form -->
        <div class="col-12">
            <button class="btn btn-primary w-100" type="submit">Tambah Anggota</button>
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
        <tr><td colspan="5">List Anggota</td></tr>
        <tr>
            <td style="width: 300px;">ID</td>
            <td>Nama</td>
            <td>Alamat</td>
            <td>No Telp</td>
            <td>Act</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach($anggotas as $anggota): ?>
        <tr>
            <td><?= $anggota->id ?></td>
            <td><?= $anggota->nama ?></td>
            <td><?= $anggota->alamat ?></td>
            <td><?= $anggota->no_telp ?></td>
            <td>
                <a href="<?= base_url('anggota/edit/') . $anggota->id ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                <a href="<?= base_url('anggota/delete/') . $anggota->id ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>

