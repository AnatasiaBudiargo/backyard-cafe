<div class="testimonials">

  <h2 class="title" style="margin: 4vh;"> Testimonials </h2>

  <ul class="list-group" style="width: 90%; margin: auto;">
  <?= $this->session->flashdata('message'); ?>
    <li class="list-group-item active" aria-current="true">Tanggal Masuk</li>
      <?php foreach ($testis as $testimonials): ?>
        <li class="list-group-item">
          <b> <?php echo $testimonials->email; ?> </b>
          <br>
          <?php echo $testimonials->testi; ?>
          <a style="background-color: red; color: white; padding: 7px; border-radius: 3px; float: right;" href="<?= base_url('admin/delete/' . $testimonials->id); ?>"> Delete </a>
        </li>
      <?php endforeach; ?>
  </ul>

</div>