<?= $this->extend('layout/admin/admin_layout') ?>

<?= $this->section('content') ?>

<table class="table table-hover ">
<thead>
<tr>
    <th>#</th>
    <th>Judul</th>
    <th>Penulis</th>
    <th>Penerbit</th>
    <th>Tahun Terbit</th>
    <th>Status</th>
    <th>Action</th>
</tr>
</thead>
<tbody>
<?php foreach($bookses as $books): ?>
<tr>
    <td><?= $books['id'] ?></td>
    <td>
        <strong><?= $books['judul'] ?></strong><br>
    </td>
    <td>
        <strong><?= $books['penulis'] ?></strong><br>
    </td>
    <td>
        <strong><?= $books['penerbit'] ?></strong><br>
    </td>
    <td>
        <strong><?= $books['tahun_terbit'] ?></strong><br>
    </td>
    <td>
        <?php if($books['status'] === 'published'): ?>
        <small class="text-success"><?= $books['status'] ?></small>
        <?php else: ?>
        <small class="text-muted"><?= $books['status'] ?></small>
        <?php endif ?>
    </td>
    <td>
        <a href="<?= base_url('admin/BooksController/'.$books['id'].'/edit') ?>" class="btn btn-sm btn-outline-secondary">Edit</a>
        <a href="#" data-href="<?= base_url('admin/BooksController/'.$books['id'].'/delete') ?>" onclick="confirmToDelete(this)" class="btn btn-sm btn-outline-danger">Delete</a>
    </td>
</tr>
<?php endforeach ?>
</tbody>
</table>

<div id="confirm-dialog" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h2 class="h2">Apakah Kamu Yakin?</h2>
        <p>Data akan terhapus dan akan hilang selamanya</p>
      </div>
      <div class="modal-footer">
        <a href="#" role="button" id="delete-button" class="btn btn-danger">Delete</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>

<script>
function confirmToDelete(el){
    $("#delete-button").attr("href", el.dataset.href);
    $("#confirm-dialog").modal('show');
}
</script>


<?= $this->endSection() ?>