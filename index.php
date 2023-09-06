<?php
include('functions/userfunctions.php');
include('includes/header.php');
include('includes/slider.php');
?>

<div class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h4>المنتجات الأكثر شهرة</h4>
        <div class="underline mb-4"></div>
        <div class="row">
          <?php
          $trendingProducts = getAllTrending();
          if (mysqli_num_rows($trendingProducts) > 0) {
            foreach ($trendingProducts as $item) {
          ?>
              <div class="col-md-3 mb-2">
                <a href="product-view.php?product=<?= $item['slug']; ?>">
                  <div class="card shadow" style="width: 16rem;">
                    <img src="uploads/<?= $item['image']; ?>" alt="<?= $item['name']; ?>" class="card-img-top" width="100%" height="200px" class="w-100">
                    <div class="card-body  text-center">
                      <h6 class="text-danger text-center card-title "><?= $item['name']; ?></h6>
                      <p class="card-text text-black">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-danger">Go somewhere</a>
                    </div>
                  </div>
                </a>
              </div>
          <?php
            }
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h4>التصنيفات</h4>
        <div class="underline mb-4"></div>
        <div class="row">
          <?php
          $categories = getAllActive('categories');
          if (mysqli_num_rows($categories) > 0) {
            foreach ($categories as $item) {
          ?>
              <div class="col-md-3 mb-2">
                <a href="products.php?category=<?= $item['slug']; ?>">
                  <div class="card shadow" style="width: 16rem;">
                    <img src="uploads/<?= $item['image']; ?>" alt="<?= $item['name']; ?>" class="card-img-top" width="100%" height="200px" class="w-100">
                    <div class="card-body text-center">
                      <h6 class="text-danger text-center card-title "><?= $item['name']; ?></h6>
                      <p class="card-text text-black"><?= $item['description']; ?></p>
                      <a href="#" class="btn btn-danger mt-4">عرض المنتجات</a>
                    </div>
                  </div>
                </a>
              </div>
          <?php
            }
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class=" text-center">
  <img src="images/MyProject (1).png" width="1500px" height="400px" class="img-fluid" alt="..." >
</div>

<!-- <i data-mdb-toggle="animation" data-mdb-animation-reset="true" data-mdb-animation="slide-out-right" class="fas fa-car-side fa-3x"></i> -->

<div class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php
        $categories = getCategoryById('1');
        if (mysqli_num_rows($categories) > 0) {
          foreach ($categories as $item) {
        ?>
            <h4><?= $item['name']; ?></h4>
            <div class="underline mb-4"></div>
        <?php
          }
        }
        ?>

        <div class="row">
          <?php
          $products = getProductByCategory('1');
          if (mysqli_num_rows($products) > 0) {
            foreach ($products as $item) {
          ?>
              <div class="col-md-3 mb-2">
                <a href="product-view.php?product=<?= $item['slug']; ?>">
                  <div class="card shadow" style="width: 16rem;">
                    <img src="uploads/<?= $item['image']; ?>" alt="<?= $item['name']; ?>" class="card-img-top" width="100%" height="200px" class="w-100">
                    <div class="card-body text-center">
                      <h6 class="text-danger text-center card-title "><?= $item['name']; ?></h6>
                      <p class="card-text text-black"><?= $item['description']; ?></p>
                      <a href="#" class="btn btn-danger mt-4">عرض المنتجات</a>
                    </div>
                  </div>
                </a>
              </div>
          <?php
            }
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php
        $categories = getCategoryById('2');
        if (mysqli_num_rows($categories) > 0) {
          foreach ($categories as $item) {
        ?>
            <h4><?= $item['name']; ?></h4>
            <div class="underline mb-4"></div>
        <?php
          }
        }
        ?>

        <div class="row">
          <?php
          $products = getProductByCategory('2');
          if (mysqli_num_rows($products) > 0) {
            foreach ($products as $item) {
          ?>
              <div class="col-md-3 mb-2">
                <a href="product-view.php?product=<?= $item['slug']; ?>">
                  <div class="card shadow" style="width: 16rem;">
                    <img src="uploads/<?= $item['image']; ?>" alt="<?= $item['name']; ?>" class="card-img-top" width="100%" height="200px" class="w-100">
                    <div class="card-body text-center">
                      <h6 class="text-danger text-center card-title "><?= $item['name']; ?></h6>
                      <p class="card-text text-black"><?= $item['description']; ?></p>
                      <a href="#" class="btn btn-danger mt-4">عرض المنتجات</a>
                    </div>
                  </div>
                </a>
              </div>
          <?php
            }
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php
        $categories = getCategoryById('3');
        if (mysqli_num_rows($categories) > 0) {
          foreach ($categories as $item) {
        ?>
            <h4><?= $item['name']; ?></h4>
            <div class="underline mb-4"></div>
        <?php
          }
        }
        ?>

        <div class="row">
          <?php
          $products = getProductByCategory('3');
          if (mysqli_num_rows($products) > 0) {
            foreach ($products as $item) {
          ?>
              <div class="col-md-3 mb-2">
                <a href="product-view.php?product=<?= $item['slug']; ?>">
                  <div class="card shadow" style="width: 16rem;">
                    <img src="uploads/<?= $item['image']; ?>" alt="<?= $item['name']; ?>" class="card-img-top" width="100%" height="200px" class="w-100">
                    <div class="card-body text-center">
                      <h6 class="text-danger text-center card-title "><?= $item['name']; ?></h6>
                      <p class="card-text text-black"><?= $item['description']; ?></p>
                      <a href="#" class="btn btn-danger mt-4">عرض المنتجات</a>
                    </div>
                  </div>
                </a>
              </div>
          <?php
            }
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php
        $categories = getCategoryById('4');
        if (mysqli_num_rows($categories) > 0) {
          foreach ($categories as $item) {
        ?>
            <h4><?= $item['name']; ?></h4>
            <div class="underline mb-4"></div>
        <?php
          }
        }
        ?>

        <div class="row">
          <?php
          $products = getProductByCategory('4');
          if (mysqli_num_rows($products) > 0) {
            foreach ($products as $item) {
          ?>
              <div class="col-md-3 mb-2">
                <a href="product-view.php?product=<?= $item['slug']; ?>">
                  <div class="card shadow" style="width: 16rem;">
                    <img src="uploads/<?= $item['image']; ?>" alt="<?= $item['name']; ?>" class="card-img-top" width="100%" height="200px" class="w-100">
                    <div class="card-body text-center">
                      <h6 class="text-danger text-center card-title "><?= $item['name']; ?></h6>
                      <p class="card-text text-black"><?= $item['description']; ?></p>
                      <a href="#" class="btn btn-danger mt-4">عرض المنتجات</a>
                    </div>
                  </div>
                </a>
              </div>
          <?php
            }
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php
        $categories = getCategoryById('5');
        if (mysqli_num_rows($categories) > 0) {
          foreach ($categories as $item) {
        ?>
            <h4><?= $item['name']; ?></h4>
            <div class="underline mb-4"></div>
        <?php
          }
        }
        ?>

        <div class="row">
          <?php
          $products = getProductByCategory('5');
          if (mysqli_num_rows($products) > 0) {
            foreach ($products as $item) {
          ?>
              <div class="col-md-3 mb-2">
                <a href="product-view.php?product=<?= $item['slug']; ?>">
                  <div class="card shadow" style="width: 16rem;">
                    <img src="uploads/<?= $item['image']; ?>" alt="<?= $item['name']; ?>" class="card-img-top" width="100%" height="200px" class="w-100">
                    <div class="card-body text-center">
                      <h6 class="text-danger text-center card-title "><?= $item['name']; ?></h6>
                      <p class="card-text text-black"><?= $item['description']; ?></p>
                      <a href="#" class="btn btn-danger mt-4">عرض المنتجات</a>
                    </div>
                  </div>
                </a>
              </div>
          <?php
            }
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class=" text-center">
  <img src="images/MyProject (1).png"  class="img-fluid" alt="..." >
</div>

<!-- <div class="splide">
  <div class="splide__track">
    <div class="splide__list">
      <div class="splide__slide">
        <div class="img-box">
          <img src="images/MyProject (1).png" alt="">
        </div>
      </div>
      <div class="splide__slide">
        <div class="img-box">
          <img src="images/MyProject (1).png" alt="">
        </div>
      </div>
      <div class="splide__slide">
        <div class="img-box">
          <img src="images/MyProject (1).png" alt="">
        </div>
      </div>
      <div class="splide__slide">
        <div class="img-box">
          <img src="images/MyProject (1).png" alt="">
        </div>
      </div>
      <div class="splide__slide">
        <div class="img-box">
          <img src="images/second.jpg" alt="">
        </div>
      </div>
    </div>
  </div>
</div> -->

<div class="big-container">
  <div class="slide-container">
    <div class="slide-content shadow">
      <div class="card-wrapper">
        <div class="cardd">
          <div class="image-content">
            <div class="card-image">
              <img src="images/second.jpg" alt="image" class="card-img">
            </div>
          </div>
          <div class="card-content">
            <h2 class="name">nada</h2>
            <p class="description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti dolorum cumque praesentium aspernatur sunt dicta sed fuga molestias commodi sequi, ut voluptatum tempora vero necessitatibus? Dicta hic fugiat id minima.</p>
            <button class="btn btn-danger">view more</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="slide-container">
    <div class="slide-content shadow">
      <div class="card-wrapper">
        <div class="cardd">
          <div class="image-content">
            <div class="card-image">
              <img src="images/second.jpg" alt="image" class="card-img">
            </div>
          </div>
          <div class="card-content">
            <h2 class="name">nada</h2>
            <p class="description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti dolorum cumque praesentium aspernatur sunt dicta sed fuga molestias commodi sequi, ut voluptatum tempora vero necessitatibus? Dicta hic fugiat id minima.</p>
            <button class="btn btn-danger">view more</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="slide-container">
    <div class="slide-content shadow">
      <div class="card-wrapper">
        <div class="cardd">
          <div class="image-content">
            <div class="card-image">
              <img src="images/second.jpg" alt="image" class="card-img">
            </div>
          </div>
          <div class="card-content">
            <h2 class="name">nada</h2>
            <p class="description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti dolorum cumque praesentium aspernatur sunt dicta sed fuga molestias commodi sequi, ut voluptatum tempora vero necessitatibus? Dicta hic fugiat id minima.</p>
            <button class="btn btn-danger">view more</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--  
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="inn carousel-inner">
    <div class="itt carousel-item active">
      <div class="car card">
        <div class="wrap img-wrapper">
          <img class="pho" src="images/MyProject (1).png" alt="...">
        </div>
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="itt carousel-item">
      <div class="car card">
        <div class="img-wrapper">
          <img class="pho" src="images/MyProject (1).png" alt="...">
        </div>
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="itt carousel-item">
      <div class="car card">
        <div class="img-wrapper">
          <img class="pho" src="images/MyProject (1).png" alt="...">
        </div>
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="itt carousel-item">
      <div class="car card">
        <div class="img-wrapper">
          <img src="images/MyProject (1).png" alt="...">
        </div>
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="itt carousel-item">
      <div class="car card">
        <img src="images/MyProject (1).png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
-->
<!--  
<div id="carouselExample" class="carousel slide mb-5 mt-5" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="cards-wrapper">
        <div class="card">
          <img src="images/second.jpg" class="card-img-top" alt="img">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        <div class="card d-none d-md-block">
          <img src="images/MyProject (1).png" class="card-img-top" alt="img">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        <div class="card d-none d-md-block">
          <img src="images/ElecTool (1) (1).png" class="card-img-top" alt="img">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        <div class="card d-none d-md-block">
          <img src="images/ElecTool (1) (1).png" class="card-img-top" alt="img">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
-->


<div class="py-5 bg-f2f2f2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h4> من نحن</h4>
        <div class="underline mb-2"></div>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. At, rem. Laudantium, ex. Nulla quas adipisci aperiam provident excepturi harum. In quo ex laboriosam velit sapiente suscipit pariatur adipisci. Explicabo, pariatur!</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. At, rem. Laudantium, ex. Nulla quas adipisci aperiam provident excepturi harum. In quo ex laboriosam velit sapiente suscipit pariatur adipisci. Explicabo, pariatur!
          <br>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel illum a veniam recusandae, eos officiis quisquam cumque ex assumenda sapiente dolor, nihil dicta reiciendis consequuntur eligendi perspiciatis aperiam architecto reprehenderit.
        </p>

      </div>
    </div>
  </div>
</div>

<?php include('includes/footer.php'); ?>
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>

<!-- <script type="text/javascript">
  $(document).ready(function() {
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 3
        },
        1000: {
          items: 5
        }
      }
    });
  });
</script> -->