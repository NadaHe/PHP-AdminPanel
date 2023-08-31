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
                    <nav style="--bs-breadcrumb-divider-flipped: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cart</li>
                        </ol>
                    </nav>
                    <!-- <div class="card shadow-sm pb-1 pt-1 ps-1 mb-3"> -->
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <h6>Product</h6>
                        </div>
                        <div class="col-md-3">
                            <h6>Price</h6>
                        </div>
                        <div class="col-md-2">
                            <h6>Quantity</h6>
                        </div>
                        <div class="col-md-2">
                            <h6>Remove</h6>
                        </div>
                    </div>
                    <!-- </div> -->
                    <div id="mycart">
                        <?php
                        $items = getCartItems();
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
                                        <h5>جم<?= $citem['selling_price']; ?></h5>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="hidden" class="prodId" value="<?= $citem['prod_id'] ?>">
                                        <div class="input-group mb-3" style="width:170px">
                                            <button class="input-group-text decrement-btn updateQty">-</button>
                                            <input type="text" class="form-control bg-white input-qty text-center" value="<?= $citem['prod_qty'] ?>">
                                            <button class="input-group-text increment-btn updateQty">+</button>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <button class="btn btn-danger btn-sm deleteItem" value="<?= $citem['cid'] ?>">
                                            <i class="fa fa-trash me-2"></i> Remove</button>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="float-start">
                        <a href="checkout.php" class="btn btn-outline-primary">Proceed to checkout</a>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

<?php include('includes/footer.php'); ?>