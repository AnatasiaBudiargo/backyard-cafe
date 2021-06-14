<div class="management-menu" style="margin: 4vh ;">
  <h2 class="title"> Management Menu </h2>

  <!-- Button trigger modal -->
  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#ModalInput" style="margin: 2vh;">
    Input New Menu
  </button>
  <?= $this->session->flashdata('message'); ?>

  <!-- Modal Input -->
  <div class="modal fade" id="ModalInput" tabindex="-1" aria-labelledby="ModalInputLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="ModalInputLabel">Input New Data</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?= base_url('admin/create_processMenu'); ?>" method="POST">
            <div class="form-group">
              <label for="name" class="col-form-label">Name:</label>
              <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
              <label for="picture" class="col-form-label">Description:</label>
              <input type="text" class="form-control" id="picture" name="picture">
            </div>
            <div class="form-group">
              <label for="description" class="col-form-label">Picture:</label>
              <input type="text" class="form-control" id="description" name="description">
            </div>
            <div class="form-group">
              <label for="price" class="col-form-label">Price:</label>
              <input type="text" class="form-control" id="price" name="price">
            </div>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" value="save" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- menu -->
  <?php foreach ($menus as $mn) : ?>
    <div class="card mb-3" style="max-width: 850px; margin: 4vh;">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img style="width: 30vh;" src="<?= base_url('assets/img/menu/') . $mn->picture; ?>">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title"><?= $mn->id ?></h5>
            <h5 class="card-title"><?= $mn->name ?></h5>
            <h6 class="card-title"><?= $mn->price ?></h6>
            <p class="card-text"><?= $mn->description ?></p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            <a href="<?= base_url('admin/deleteMenu/' . $mn->id); ?>" style="padding: 5px; background-color:red; color:white;"> Delete </a>
            <a href="<?= base_url('admin/updateForm/' . $mn->id); ?>">Update </a>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>

<!-- Modal Update -->
<div class="modal fade" id="ModalUpdate" tabindex="-1" aria-labelledby="ModalUpdateLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="ModalUpdateLabel">Update Data</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('admin/update_process'); ?>" method="POST">
          <div class="form-group">
            <input type="text" name="product_id">
          </div>
          <div class="form-group">
            <label for="name" class="col-form-label">Name:</label>
            <input type="text" class="form-control" id="name" name="name" autofocus>
          </div>
          <div class="form-group">
            <label for="picture" class="col-form-label">Picture:</label>
            <input type="text" class="form-control" id="picture" name="picture">
          </div>
          <div class="form-group">
            <label for="description" class="col-form-label">Description:</label>
            <input type="text" class="form-control" id="description" name="description">
          </div>
          <div class="form-group">
            <label for="price" class="col-form-label">Price:</label>
            <input type="text" class="form-control" id="price" name="price">
          </div>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" value="Update" class="btn btn-primary">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>