<?php
include('functions/userfunctions.php');
include('includes/header.php');

if (isset($_GET['product'])) {
    $product_slug = $_GET['product'];
    $product_data = getSlugActive("products", $product_slug);
    $product = mysqli_fetch_array($product_data);

    if ($product) {
?>
        <div class="bg-light py-4">
            <div class="container product_data mt-3">
                <div class="row">
                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="categories.php">Categories</a></li>
                            <!-- <li class="breadcrumb-item" aria-current="page"><?= $category['name']; ?></li> -->
                            <li class="breadcrumb-item active" aria-current="page"><?= $product['name']; ?></li>
                        </ol>
                    </nav>
                    <div class="col-md-4">
                        <div class="shadow">
                            <img src="uploads/<?= $product['image']; ?>" alt="product image" class="w-100">
                        </div>
                    </div>
                    <div class="col-md-8 mt-3">
                        <h4 class="fw-bold"><?= $product['name']; ?>
                            <span class="float-end text-danger"><?php if ($product['trending']) {
                                                                    echo "Trending";
                                                                } ?></span>
                        </h4>
                        <hr>
                        <p><?= $product['small_description']; ?></p>
                        <div class="row">
                            <div class="col-md-6">
                                <h4>جم <span class="text-success fw-bold"> <?= $product['selling_price']; ?></span></h4>
                            </div>
                            <div class="col-md-6">
                                <h5>جم <s class="text-danger"><?= $product['original_price']; ?></s></h5>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="input-group mb-3" style="width:170px">
                                    <button class="input-group-text decrement-btn">-</button>
                                    <input type="text" class="form-control bg-white input-qty text-center" value="1">
                                    <button class="input-group-text increment-btn">+</button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mt-3">
                                <button class="btn btn-primary px-4 addToCartBtn" value="<?= $product['id']; ?>"><i class="fa fa-shopping-cart me-2"></i>Add to Cart</button>
                            </div>
                            <div class="col-md-6 mt-3">
                                <button class="btn btn-danger px-4"><i class="fa fa-heart me-2"></i>Add to WishList</button>
                            </div>
                        </div>
                        <hr>

                        <h6>وصف المنتج:</h6>
                        <?= $product['description']; ?>
                    </div>
                </div>
            </div>
        </div>
<?php
    } else {
        echo "Product not found";
    }
} else {
    echo "something went wrong";
}

include('includes/footer.php');
