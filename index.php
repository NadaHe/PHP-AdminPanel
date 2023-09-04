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
        <div class="underline mb-2"></div>
        <div class="owl-carousel">
          <?php
          $trendingProducts = getAllTrending();
          if (mysqli_num_rows($trendingProducts) > 0) {
            foreach ($trendingProducts as $item) {
          ?>
              <div class="item">
                <a href="product-view.php?product=<?= $item['slug']; ?>">
                  <div class="card shadow">
                    <div class="card-body">
                      <img src="uploads/<?= $item['image']; ?>" alt="<?= $item['name']; ?>" width="100%" height="200px" class="w-100">
                      <h6 class="text-center"><?= $item['name']; ?></h6>
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

<script>
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
    })
  });
</script>