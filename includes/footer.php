<div class="py-5 bg-dark">
  <div class="container">
    <div class="row mb-3">
      <h4 class="text-white">إلكتريتو</h4>
      <div class="underline mb-2"></div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <a href="index.php" class="text-white mb-2"><i class="fa fa-angle-left"></i> الصفحة الرئيسية</a> <br>
        <a href="#" class="text-white mb-2"><i class="fa fa-angle-left"></i> من نحن</a> <br>
        <a href="cart.php" class="text-white mb-2"><i class="fa fa-angle-left"></i> سلة التسوق</a> <br>
        <a href="categories.php" class="text-white mb-2"><i class="fa fa-angle-left"></i> المنتجات </a>
      </div>
      <div class="col-md-3">
        <h4 class="text-white">العنوان</h4>
        <p class="text-white">
          111 باب اللوق , وسط البلد
        </p>
        <a href="tel:+01155544466" class="text-white"><i class="fa fa-phone"></i> 01155544466</a><br>
        <a href="mailto:xyz@gmail.com" class="text-white"><i class="fa fa-envelope"></i> xyz@gmail.com</a>
      </div>
      <div class="col-md-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13815.337010533325!2d31.249768050791307!3d30.041612648796185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145840c81edf8969%3A0xbf0f5553dbcc20da!2z2KjYp9ioINin2YTZhNmI2YLYjCDYp9mE2LTZitiuINi52KjYryDYp9mE2YTZh9iMINi52KfYqNiv2YrZhtiMINmF2K3Yp9mB2LjYqSDYp9mE2YLYp9mH2LHYqeKArCA0MjgwMDAz!5e0!3m2!1sar!2seg!4v1693753559456!5m2!1sar!2seg" class="w-100" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
</div>
<div class="py-2 bg-danger">
  <div class="text-center">
    <p class="mb-0 text-white">جميع الحقوق محفوظة لشركة @ إلكترينو - <?= date('Y') ?></p>
  </div>
</div>

<!-- =================================================================================================== -->

<script src="./assets/jquery-3.7.0.min.js"></script>
<script src="assets/bootstrap-5.3.1-dist/js/bootstrap.bundle.js"></script>

<!-- Alertify js -->
<script src="assets/Alertify js/alertify.min.js"></script>

<script src="assets/js/custom.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>


<script>
  alertify.set('notifier', 'position', 'top-center');
  <?php
  if (isset($_SESSION['message'])) {
  ?>
    alertify.success('<?= $_SESSION['message'] ?>');

  <?php
    unset($_SESSION['message']);
  }
  ?>
</script>

</body>

</html>