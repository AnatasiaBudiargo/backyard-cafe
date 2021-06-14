<form action="<?= base_url('admin/update_process'); ?>" method="POST">
    <div class="form-group">
        <input type="text" name="product_id" value=<?= $product_id ?> readOnly>
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