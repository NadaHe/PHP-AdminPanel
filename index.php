<?php 
session_start();
include('includes/header.php'); 
include('includes/slider.php');
?>

<!-- <py-5></py-5> -->
<div class="">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <!-- ////////////////////////////////////////////////////////////     -->
                <?php
                if (isset($_SESSION['message'])) {
                ?>

                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Hey!</strong> <?= $_SESSION['message'] ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                <?php
                    unset($_SESSION['message']);
                }
                ?>
                <!-- ////////////////////////////////////////////////////////////     -->
            </div>
        </div>
    </div>
</div>

<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="2000">
      <img src="./images/شطب شقتك في أسرع وقت.png" height="600px" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="./images/ElecTool (1) (1).png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="./images/Untitled design (1).png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<h1>hii<i class="fa fa-user"></i></h1>


<?php include('includes/footer.php'); ?>