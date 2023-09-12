<?php
include('functions/userfunctions.php');
include('includes/header.php');

if (isset($_GET['category'])) {
    $category_slug = $_GET['category'];
    $category_data = getSlugActive("categories", $category_slug);
    $category = mysqli_fetch_array($category_data);

    if ($category) {
        $cid = $category['id'];

?>

        <!-- <div class="py-3 bg-primary">
            <div class="container">
                <h6 class="text-white">
                    <a class="text-white" href="categories.php">
                        Home /
                    </a>
                    <a class="text-white" href="categories.php">
                        Categories /
                    </a>
                    <?= $category['name']; ?>
                </h6>
            </div>
        </div> -->

        <!-- <py-5></py-5> -->
        <div class="py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item"><a href="categories.php">Categories</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><?= $category['name']; ?></li>
                                </ol>
                            </nav>
                        <h3><?= $category['name']; ?></h3>
                        <hr>
                        <div class="row">
                            <?php
                            $products = getProductByCategory($cid);
                            if (mysqli_num_rows($products) > 0) {
                                foreach ($products as $item) {
                            ?>

                                    <!-- <div class="card me-4 shadow" style="width: 18rem;" data-mdb-toggle="animation" data-mdb-animation="zoom-in">
                                            <img src="uploads/<?= $item['image']; ?>" alt="<?= $item['name']; ?>" class="card-img-top">
                                            <div class="card-body text-center">
                                                <h5 class="card-title text-center"><?= $item['name']; ?></h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <a href="#" class="btn btn-primary">تسوق</a>
                                            </div>
                                        </div> -->
                                    <div class="col-md-3 mb-2">
                                        <a href="product-view.php?product=<?= $item['slug'];?>">
                                            <div class="card shadow">
                                                <div class="card-body">
                                                    <img src="uploads/<?= $item['image']; ?>" alt="<?= $item['name']; ?>" width="100%" height="200px" class="w-100">
                                                    <h4 class="text-center"><?= $item['name']; ?></h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                            <?php
                                }
                            } else {
                                echo "No categories found";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
    } else {
        echo "something went wrong";
    }
} else {
    echo "something went wrong";
}

include('includes/footer.php'); ?>