<?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
<?= $this->session->flashdata('message'); ?>
<div class="card">
  <div class="card-header">
    <div class="my-2">
      <a href="" class="btn btn-primary" data-toggle="modal" data-target="#newMenuModal">Add New Menu</a>
    </div>
    <div class="card-header-right">
      <ul class="list-unstyled card-option">
        <li><i class="fa fa fa-wrench open-card-option"></i></li>
        <li><i class="fa fa-window-maximize full-card"></i></li>
        <li><i class="fa fa-minus minimize-card"></i></li>
        <li><i class="fa fa-refresh reload-card"></i></li>
        <li><i class="fa fa-trash close-card"></i></li>
      </ul>
    </div>
  </div>
  <div class="card-block table-border-style">
    <div class="table-responsive">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>Menu</th>
            <th>URL</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          foreach ($menu as $m) : ?>
            <tr>
              <th scope="row"><?= $no++  ?></th>
              <td><?= $m['menu']; ?></td>
              <td><?= $m['url']; ?></td>
              <td>
                <a type="button" class="btn btn-sm btn-success" data-toggle="tooltip" title="up" href="">
                  <i class="fa fa-arrow-up"></i>
                </a>
                <a type="button" class="btn btn-sm btn-warning" data-toggle="tooltip" title="down" href="">
                  <i class="fa fa-arrow-down"></i>
                </a>
                <button type="button" class="btn btn-sm btn-info" data-toggle="tooltip" title="Ubah" onClick="ubahMenu('');"><i class="fa fa-edit"></i></button>
                <button type="button" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Hapus" onClick="codel('');"> <i class="fa fa-remove"></i></button>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Modal Add New Menu-->
<div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newMenuModalLabel">Add New Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('menu'); ?>" method="post">
        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control" id="menu" name="menu" placeholder="Menu name">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="url" name="url" placeholder="Modul / URL">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add</button>
        </div>
      </form>
    </div>
  </div>
</div>