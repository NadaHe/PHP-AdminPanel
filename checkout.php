<?php
include('functions/userfunctions.php');  // to get the access for database
include('includes/header.php');
include('authenticate.php')
?>

<div class="py-5">
    <div class="container">
        <nav style="--bs-breadcrumb-divider-flipped: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-body shadow">
                <form action="functions/placeorder.php" method="POST">
                    <div class="row">
                        <div class="col-md-7">
                            <h5>Basic Details</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="fw-bold">Name</label>
                                    <input type="text" name="name" placeholder="Enter your full name" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="fw-bold">E-mail</label>
                                    <input type="text" name="email" placeholder="Enter your e-mail" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="fw-bold">Phone</label>
                                    <input type="text" name="phone" placeholder="Enter your phone number" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="fw-bold">Pin code</label>
                                    <input type="text" name="pincode" placeholder="Enter your Pin code" class="form-control">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="fw-bold">Address</label>
                                    <textarea name="address" class="form-control" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <h5>Order Details</h5>
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
                                            <label><?= $citem['selling_price']; ?></label>
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
                            <h5>Total price:<span class="float-end fw-bold"><?= $totalPrice ?></span></h5>
                            <button type="submit" name="placeOrderBtn" class="btn btn-primary">Confirm and place order | COD</button>
                        </div>
                    </div>
                </form>

            </div>

        </div>

    </div>
</div>

<?php include('includes/footer.php'); ?>