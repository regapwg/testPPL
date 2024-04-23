<nav class="navbar navbar-light text-dark">

  <?php foreach($identitas as $id): ?>
  <a class="navbar-brand"><strong><?= $id->judul_website; ?></strong></a>
  <span class="small"><?= $id->alamat; ?> - <?= $id->email; ?> - <?= $id->telp; ?></span>
  <?php endforeach; ?>

  <form class="form-inline">
    <a class="btn btn-primary my-2 my-sm-0 ml-2" type="submit" href="<?= base_url('administrator/auth') ?>">Login</a>
  </form>
</nav>



<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?= base_url('assets/img/slider3.jpeg') ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?= base_url('assets/img/slider3.jpeg') ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?= base_url('assets/img/slider3.jpeg') ?>" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</form>
