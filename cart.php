<?php
include('functions/userfunctions.php');  // to get the access for database
include('includes/header.php');
include('authenticate.php')
?>

<div class="py-5">
    <div class="container">
        <div class="">
            <div class="row">
                <div class="col-md-12">
                    <div id="mycart">
                        <nav class="py-2" style="--bs-breadcrumb-divider-flipped: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">الرئيسية</a></li>
                                <li class="breadcrumb-item active" aria-current="page">سلة التسوق</li>
                            </ol>
                        </nav>
                        <?php
                        $items = getCartItems();
                        if (mysqli_num_rows($items) > 0) {
                        ?>
                            <div class="row align-items-center">
                                <div class="col-md-5">
                                    <h6>المنتج</h6>
                                </div>
                                <div class="col-md-3">
                                    <h6>السعر</h6>
                                </div>
                                <div class="col-md-2">
                                    <h6>الكمية</h6>
                                </div>
                                <div class="col-md-2">
                                    <h6>حذف</h6>
                                </div>
                            </div>
                            <div id="">
                                <?php
                                foreach ($items as $citem) {
                                ?>
                                    <div class="card product_data shadow-sm mb-3">
                                        <div class="row align-items-center">
                                            <div class="col-md-2">
                                                <img src="uploads/<?= $citem['image']; ?>" alt="product image" width="80px">
                                            </div>
                                            <div class="col-md-3">
                                                <h5><?= $citem['name']; ?></h5>
                                            </div>
                                            <div class="col-md-3">
                                                <h5><?= $citem['selling_price']; ?> جم</h5>
                                            </div>
                                            <div class="col-md-2">
                                                <input type="hidden" class="prodId" value="<?= $citem['prod_id'] ?>">
                                                <div class="input-group mb-3" style="width:140px">
                                                    <button class="input-group-text decrement-btn updateQty">-</button>
                                                    <input type="text" class="form-control bg-white input-qty text-center" value="<?= $citem['prod_qty'] ?>">
                                                    <button class="input-group-text increment-btn updateQty">+</button>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <button class="btn btn-danger btn-sm deleteItem" value="<?= $citem['cid'] ?>">
                                                    <i class="fa fa-trash me-2"></i> حذف</button>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                            <div class="float-start">
                                <a href="checkout.php" class="btn btn-outline-danger mt-4 mb-4">Proceed to checkout</a>
                            </div>
                        <?php
                        } else {
                        ?>
                            <div class="card card-body text-center shadow">
                                <h4 class="py-3">Your Cart is Empty</h4>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>