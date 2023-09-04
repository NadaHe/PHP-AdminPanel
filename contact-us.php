<?php
include('functions/userfunctions.php');
include('includes/header.php');
?>


<div class="container mt-5 shadow ">
        <div class="row ">
            <div class="col-md-4 bgblue p-5 text-white order-sm-first order-last">
                <h2>Let's get in touch</h2>
                <p>We're open for any suggestion or just to have a chat</p>
                <div class="d-flex mt-2">
                    <i class="bi bi-geo-alt"></i>
                    <p class="mt-3 ms-3">Address : Road 198 West 21th Street, Suite 721 Singapor WW 10016</p>
                </div>
                <div class="d-flex mt-2">
                    <i class="bi bi-telephone-forward"></i>
                    <p class="mt-4 ms-3">Phone : 8888888888</p>
                </div>
                <div class="d-flex mt-2">
                    <i class="bi bi-envelope"></i>
                    <p class="mt-4 ms-3">Email : contactform@gmail.com</p>
                </div>
                <div class="d-flex mt-2">
                    <i class="bi bi-youtube"></i>
                    <p class="mt-4 ms-3">Channel : www.contactform.com/</p>
                </div>
            </div>
            <div class="col-md-8 p-5">
                <h2>Get in touch</h2>
                <form class="row g-3 contactForm mt-4" method="POST" enctype="multipart/form-data" action="uploadPDF.php">
                    <div class="col-md-6">
                      <label for="inputEmail4" class="form-label">First Name</label>
                      <input type="text" class="form-control" id="inputEmail4" required>
                    </div>
                    <div class="col-md-6">
                      <label for="inputPassword4" class="form-label">Last Name</label>
                      <input type="text" class="form-control" id="inputPassword4" required>
                    </div>
                    <div class="col-12">
                      <label for="inputAddress" class="form-label">Attachment</label>
                      <input type="file" name="file" class="form-control" id="inputAddress" required>
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Email Id</label>
                        <input type="email" class="form-control" id="inputAddress" required>
                      </div>
                    <div class="col-md-6">
                      <label for="inputCity" class="form-label">City</label>
                      <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">Contact Number</label>
                        <input type="text" class="form-control" id="inputCity" required>
                      </div>
                    <div class="col-12 float-start">
                      <button type="submit" class="btn btn-danger mt-3">Sign in</button>
                    </div>
                  </form>
            </div>
        </div>
    </div>

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