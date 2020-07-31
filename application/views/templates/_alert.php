<!-- check status insert -->
<?php if($this->session->flashdata('success')): ?>
<div class="alert alert-success mt-3" role="alert">
  <?= $this->session->flashdata('success') ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif ?>

<?php if($this->session->flashdata('error')): ?>
<div class="alert alert-error mt-3" role="alert">
  <?= $this->session->flashdata('error') ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif ?>
<!-- /check -->