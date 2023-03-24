<?php 

include "nav.php"; 

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!-- slide -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="images/img_01.avif" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="images/img_02.avif" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="images/img_03.avif" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
    </div>
    <!-- cards -->
    <div class="container">
		<div class="row row-cols-1 row-cols-md-3 g-4">
		<?php foreach($results as $post): ?>
		  <div class="col gy-5">
		    <div class="card">
		      <img src="<?= $post["image"]; ?>" class="card-img-top" alt="...">
		      <div class="card-body">
		        <h5 class="card-title">
                    <?= $post["title"]; ?>
                            </h5>
                                    <p class="card-text">
                    <?= $post["description"]; ?>
                            </p>
                                    <a href="viewPost.php?id=<?= $post["id"]; ?>">
                    <i class="fas fa-eye check-icon"><i class="bi bi-binoculars-fill"></i></i>
                            </a>
		      </div>
		    </div>
		  </div>
		  <?php endforeach; ?>
	</div>

    <?php include('footer.php'); ?>
