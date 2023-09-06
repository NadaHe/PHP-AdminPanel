<?php
session_start();

if (isset($_SESSION['auth'])) {
    $_SESSION['message'] = "you are already logged in";
    header('Location: index.php');
    exit();
}

include('includes/header.php');
?>

<div class="py-5">
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

                <div class="card">
                    <div class="card-header bg-light">
                        <h4>تسجيل الدخول</h4>
                    </div>
                    <div class="card-body">
                        <form action="./functions/authcode.php" method="POST">

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">البريد الإلكترونى</label>
                                <input type="email" name="email" class="form-control" placeholder="ادخل البريد الإلكترونى" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">الباسورد</label>
                                <input type="password" name="password" class="form-control" placeholder="ادخل الرقم السري" id="exampleInputPassword1" >
                            </div>
                            <br>

                            <div class="form-group">
                                <div class="g-recaptcha" data-sitekey="6LdaPvsnAAAAAArrmN0xGVzLSZJyck-Q3UxHqtE_"></div>
                            </div>

                            <br>

                            <div>
                                <p>ليس لديك حساب ؟ يمكنك إنشاء حساب جديد  <a href="register.php">من هنا</a> </p>
                            </div>

                            <button type="submit" id="login" name="login_btn" class="btn btn-primary mt-3">دخول</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include('includes/footer.php'); ?>

<script>
  $(document).on('click','#login',function(){
    var response = grecaptcha.getResponse();
    if(response.length==0)
    {
      alertify.error('Please verify captcha');
      return false;
    }
  });
</script>