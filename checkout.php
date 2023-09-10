<?php
include('functions/userfunctions.php');  // to get the access for database
include('includes/header.php');
include('authenticate.php');
?>

<div class="py-5">
    <div class="container">
        <nav style="--bs-breadcrumb-divider-flipped: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">الرئيسية</a></li>
                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-body shadow">
                <form action="functions/placeorder.php" method="POST">
                    <div class="row">
                        <div class="col-md-12">
                            <h5>بيانات المشترى</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="fw-bold">الاسم</label>
                                    <input type="text" name="name" value="<?php if (isset($_POST["name"])) {
                                                                                echo $_POST["name"];
                                                                            } ?>" placeholder="ادخل الاسم كاملا " class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="fw-bold">البريد الالكترونى</label>
                                    <input type="email" name="email" placeholder="ادخل البريد الالكترونى الخاص بك" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="fw-bold">رقم الهاتف</label>
                                    <input type="text" name="phone" placeholder="ادخل رقم الهاتف " class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="fw-bold">الرقم البريدى</label>
                                    <input type="text" name="pincode" placeholder="ادخل الرقم البريدي" class="form-control">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="fw-bold">العنوان</label>
                                    <textarea name="address" class="form-control" rows="5"></textarea>
                                </div>
                            </div>

                            <h5>بيانات الاوردر</h5>
                            <hr>
                            <?php $items = getCartItems();
                            $totalPrice = 0;
                            foreach ($items as $citem) {
                            ?>
                                <div class="border mb-1">
                                    <div class="row align-items-center">
                                        <div class="col-md-2">
                                            <img src="uploads/<?= $citem['image']; ?>" alt="product image" width="80px">
                                        </div>
                                        <div class="col-md-5">
                                            <label><?= $citem['name']; ?></label>
                                        </div>
                                        <div class="col-md-3">
                                            <label><?= $citem['selling_price']; ?> جم</label>
                                        </div>
                                        <div class="col-md-2">
                                            <label>x<?= $citem['prod_qty']; ?></label>
                                        </div>
                                    </div>
                                </div>
                            <?php
                                $totalPrice += $citem['selling_price'] * $citem['prod_qty'];
                            }
                            ?>
                            <hr>
                            <h5>الإجمالى: <span class=" fw-bold"><?= $totalPrice ?>جم</span></h5>
                            <input type="hidden" name="payment_mode" value="COD">
                            <button type="submit" name="placeOrderBtn" class="btn btn-danger mt-4 mb-4">Confirm and place order | COD</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>