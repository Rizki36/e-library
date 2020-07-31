<!-- form -->
<form action="<?= base_url('penerbit/store') ?>" method="POST">
    <div class="row">
        <!-- id -->
        <div class="col-sm-12 col-md-6">
            <div class="form-group">
                <label for="id">ID Penerbit</label>
                <input name="id" type="text" class="form-control" id="id">
            </div>
        </div>

        <!-- nama -->
        <div class="col-sm-12 col-md-6">
            <div class="form-group">
                <label for="nama_penerbit">Nama Penerbit</label>
                <input name="nama_penerbit" type="text" class="form-control" id="nama_penerbit">
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
            <button class="btn btn-primary w-100" type="submit">Tambah Penerbit</button>
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
        <tr><td colspan="5">List Penerbit</td></tr>
        <tr>
            <td style="width: 20px;">ID</td>
            <td>Nama</td>
            <td>Alamat</td>
            <td>No Telp</td>
            <td>Act</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach($penerbits as $penerbit): ?>
        <tr>
            <td><?= $penerbit->id ?></td>
            <td><?= $penerbit->nama_penerbit ?></td>
            <td><?= $penerbit->alamat ?></td>
            <td><?= $penerbit->no_telp ?></td>
            <td>
                <a href="<?= base_url('penerbit/edit/') . $penerbit->id ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                <a href="<?= base_url('penerbit/delete/') . $penerbit->id ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>

